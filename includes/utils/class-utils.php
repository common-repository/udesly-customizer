<?php
/**
 * Created by PhpStorm.
 * User: Pietro Falco
 * Date: 08/01/2018
 * Time: 15:03
 */

namespace UdeslyCustomizer\Utils;

use UdeslyCustomizer\i18n\i18n;
use UdeslyCustomizer\Ui\Icon;
use UdeslyCustomizer\Ui\Icon_Type;

class Utils {

	/**
	 * @return array of iPlugins
	 */
	public static function getIPluginsClasses() {

		$return = array();
		$dirs   = array_filter( glob( UDESLY_CUSTOMIZER_PLUGIN_DIRECTORY_PATH . 'includes/plugins/*' ), 'is_dir' );
		foreach ( $dirs as $dir ) {
			$basename  = ucfirst( basename( $dir ) );
			$classname = "\UdeslyCustomizer\Plugins\\$basename\\$basename";
			if ( in_array( "UdeslyCustomizer\\Interfaces\\iPlugin", class_implements( $classname ) ) ) {
				$return[] = $classname;
			}
		}

		return $return;

	}

	public static function canShowCss($plugin){
		$basename  = ucfirst( $plugin );
		$class = "\UdeslyCustomizer\Plugins\\$basename\\$basename";
		if ( in_array( "UdeslyCustomizer\\Interfaces\\iPlugin", class_implements( $class ) ) ) {
		    return $class::can_be_activated();
        }
	    return false;
    }

	public static function getPluginsList() {
		$results = array();
		$dirs   = array_filter( glob( UDESLY_CUSTOMIZER_PLUGIN_DIRECTORY_PATH . 'includes/plugins/*' ), 'is_dir' );
		foreach ($dirs as $dir){
		    $results[] = basename($dir);
        }
		return $results;
	}

	public static function getDateTimePickerFormat() {
		return get_option( 'date_format' ) . ' H:i';
	}

	/**
	 * Get the plugin current version, force the use of get_plugin_data() in front-end as well.
	 * @return mixed
	 */
	public static function getPluginVersion() {
		if ( ! function_exists( 'get_plugin_data' ) ) {
			require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
			$plugin_data = get_plugin_data( UDESLY_CUSTOMIZER_PLUGIN_DIRECTORY_PATH . 'udesly-customizer.php', false, false );

			return $plugin_data['Version'];
		}
	}

	public static function isUdeslyPluginActive() {
		if(is_plugin_active('udy-wf-to-wp/udy-wf-to-wp.php')){
			return true;
		}
		return false;
	}

	public static function checkPluginDependencies() {
		if(!is_plugin_active('udy-wf-to-wp/udy-wf-to-wp.php')){
			add_action( 'admin_notices', array(self::class,'udesly_dependencies_error'));
		}
	}

	public static function udesly_dependencies_error(){
		?>
		<div class="notice notice-error is-dismissible">
			<p><?php echo Icon::faIcon( 'exclamation-triangle', true, Icon_Type::SOLID() ) . __( 'Udesly Customizer needs the <a href="https://wordpress.org/plugins/udy-wf-to-wp/" target="_blank">Udesly plugin</a> to work, please install and activate it.', i18n::$textdomain ); ?></p>
		</div>
		<?php
	}
}
