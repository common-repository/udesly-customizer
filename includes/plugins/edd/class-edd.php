<?php
/**
 * Created by PhpStorm.
 * User: umberto
 * Date: 28/03/2018
 * Time: 17:39
 */

namespace UdeslyCustomizer\Plugins\Edd;

use UdeslyCustomizer\Core\Udesly_Customizer_Loader;
use UdeslyCustomizer\Interfaces\iPlugin;
use UdeslyCustomizer\Plugins\Plugins_Manager;


class Edd implements iPlugin {
	public static function define_admin_hooks( Udesly_Customizer_Loader $loader ) {
		$loader->add_action('admin_init',Plugins_Manager::class,'save_customizer_settings_backend');
		$loader->add_action('customize_register', Edd_Wp_Customizer::class,  'edd_customize_buttons');
		$loader->add_action('customize_register', Edd_Wp_Customizer::class,  'edd_customize_table');
		$loader->add_action('customize_register', Edd_Wp_Customizer::class,  'edd_customize_form');
		$loader->add_action('customize_register', Edd_Wp_Customizer::class,  'edd_customize_notifications');
		$loader->add_action('customize_save_after', Plugins_Manager::class,  'save_customizer_settings_frontend');
		$loader->add_action('customize_preview_init', Edd_Wp_Customizer::class,  'customizer_live_preview');
	}

	public static function define_public_hooks( Udesly_Customizer_Loader $loader ) {

	}

	public static function activate() {
		$settings = get_option( 'udesly_customizer_settings');
		if($settings == false) {
			update_option( 'udesly_customizer_settings', Edd_Init_Settings::$settings );
		}else{
			update_option( 'udesly_customizer_settings', array_merge($settings,Edd_Init_Settings::$settings) );
		}
	}

	public static function deactivate() {

	}

	public static function can_be_activated() {
		if(is_plugin_active('easy-digital-downloads/easy-digital-downloads.php')){
			return true;
		}
		return false;
	}

}