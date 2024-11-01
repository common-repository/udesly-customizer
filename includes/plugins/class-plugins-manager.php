<?php
/**
 * Created by PhpStorm.
 * User: umberto
 * Date: 30/07/2018
 * Time: 10:33
 */

namespace UdeslyCustomizer\Plugins;

use UdeslyCustomizer\i18n\i18n;
use Leafo\ScssPhp\Compiler;
use UdeslyCustomizer\Utils\Utils;
use \WP_Customize_Manager;

class Plugins_Manager {

	public static function save_customizer_settings_backend() {
		if ( isset( $_POST['action'] ) && $_POST['action'] == 'udesly_save_customizer' ) {

			if ( ! empty( $_POST ) && check_admin_referer( 'save_udesly_customizer', 'save_udesly_customizer_nonce' ) ) {

				//sanitize POST
				$udesly_customizer = $_POST['udesly_customizer'];

				foreach ($udesly_customizer as $plugin => $val) {
					if ( is_array( $udesly_customizer[ $plugin ] ) ) {
						foreach ( $udesly_customizer[ $plugin ] as $key => $value ) {
							if ( ! is_array( $value ) ) {
								is_int( $value ) ? $udesly_customizer[ $plugin ][ $key ] = (int) sanitize_text_field( $value ) : $udesly_customizer[ $plugin ][ $key ] = sanitize_text_field( $value );
							} else {
								foreach ( $value as $sub_key => $sub_value ) {
									is_int( $sub_value ) ? $udesly_customizer[ $plugin ][ $key ][ $sub_key ] = (int) sanitize_text_field( $sub_value ) : $udesly_customizer[ $plugin ][ $key ][ $sub_key ] = sanitize_text_field( $sub_value );
								}
							}
						}
					}
				}

				update_option( 'udesly_customizer_settings', $udesly_customizer );

				self::sync_customizer('frontend', $udesly_customizer);

				self::make_css( $udesly_customizer );

				add_action( 'admin_notices', array( self::class, 'settings_admin_notice__success' ) );
			}
		}
	}

	public static function save_customizer_settings_frontend(WP_Customize_Manager $wp_customize){

		$udesly_customizer = self::sync_customizer('backend', $wp_customize->changeset_data());

		self::make_css( $udesly_customizer );

	}

	private static function sync_customizer($side, $data){
	    if($side == 'frontend'){

	        foreach ($data as $plugin => $options){
	            foreach ($options as $option => $value)
	                update_option($option, $value);
            }

        }elseif ($side == 'backend'){

		    $udesly_customizer = get_option('udesly_customizer_settings');
		    foreach ($udesly_customizer as $plugin => $value) {
			    foreach ($data as $item_key => $item_data){
				    //if(array_key_exists($item_key, $udesly_customizer[$plugin])){
					    $udesly_customizer[$plugin][$item_key] = $item_data['value'];
				    //}
			    }
		    }
		    update_option( 'udesly_customizer_settings', $udesly_customizer );

		    return $udesly_customizer;
        }
    }

	public static function settings_admin_notice__success() {
		?>
        <div class="notice notice-success is-dismissible">
            <p><?php _e( 'Customizer settings saved!', i18n::$textdomain ); ?></p>
        </div>
		<?php
	}

	public static function serve_plugins_css(){
        $plugins = Utils::getPluginsList();
        foreach ($plugins as $plugin){
	        $css = get_option('udesly_customizer_' . $plugin . '_css');
            if($css !== false && Utils::canShowCss($plugin)) {
	            echo "<style> \n /* UDESLY CUSTOMIZER $plugin */ \n $css</style>\n";
            }
        }
	}

	private static function compile_scss( $plugin, $variables = null ) {
		$scss_compiler = new Compiler();
		$scss = file_get_contents(UDESLY_CUSTOMIZER_PLUGIN_DIRECTORY_PATH . 'includes/plugins/' . $plugin . '/assets/css/' . $plugin . '.scss');
		$scss = $variables . $scss;
		$compiled = $scss_compiler->compile( $scss );
		return $compiled;
	}

	private static function make_css( $variables ) {

	    foreach ($variables as $plugin => $settings){
            $scss = '';
            foreach ( $settings as $name => $value ) {
                $scss .= '$' . $name . ': ' . $value . ';' . PHP_EOL;
            }
            update_option('udesly_customizer_' . $plugin . '_css', self::compile_scss($plugin, $scss));
        }

	}
}