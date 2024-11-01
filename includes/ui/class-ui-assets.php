<?php
/**
 * Created by PhpStorm.
 * User: umberto
 * Date: 29/03/2018
 * Time: 17:19
 */

namespace UdeslyCustomizer\Ui;

use UdeslyCustomizer\Utils\Utils;

class Ui_Assets{

	public static $assets_folder_url = UDESLY_CUSTOMIZER_PLUGIN_DIRECTORY_URL . 'assets/';

	public static function add_ui_styles(){
		wp_enqueue_style( 'udesly-select2', self::$assets_folder_url . 'css/select2.min.css', array(), Utils::getPluginVersion(), 'all' );
		wp_enqueue_style( 'fa-5', self::$assets_folder_url . 'css/fontawesome-all.min.css', array(), Utils::getPluginVersion(), 'all' );
		wp_enqueue_style( 'jquery-ui', self::$assets_folder_url . 'css/jquery-ui-1.10.4.custom.min.css', array(), Utils::getPluginVersion(), 'all' );
		wp_enqueue_style( 'udesly-ui-timepicker', self::$assets_folder_url . 'css/jquery-ui-timepicker-addon.css', array('jquery-ui'), Utils::getPluginVersion(), 'all' );
		wp_enqueue_style( 'udesly-ui', self::$assets_folder_url . 'css/udesly-ui.css', array('udesly-ui-timepicker'), Utils::getPluginVersion(), 'all' );
		wp_enqueue_style( 'udesly-ui-accordion', self::$assets_folder_url . 'css/udesly-ui-accordion.css', array('udesly-ui'), Utils::getPluginVersion(), 'all' );
		wp_enqueue_style( 'wp-color-picker' );
	}

	public static function add_ui_scripts(){
		wp_enqueue_script('udesly-select2-js',self::$assets_folder_url . 'js/select2.full.min.js', array('jquery'),Utils::getPluginVersion());
		wp_enqueue_script('udesly-ui-timepicker-js',self::$assets_folder_url . 'js/jquery-ui-timepicker-addon.js', array('jquery','jquery-ui-datepicker'),Utils::getPluginVersion());
		wp_enqueue_script('udesly-ui-js',self::$assets_folder_url . 'js/udesly-ui.js', array('udesly-ui-timepicker-js'),Utils::getPluginVersion());
		wp_enqueue_script('udesly-ui-accordion-js',self::$assets_folder_url . 'js/udesly-ui-accordion.js', array('udesly-ui-js'),Utils::getPluginVersion());

		wp_enqueue_script(
			'iris',
			admin_url( 'js/iris.min.js' ),
			array( 'jquery-ui-draggable', 'jquery-ui-slider', 'jquery-touch-punch' ),
			false,
			1
		);

		wp_enqueue_script(
			'wp-color-picker',
			admin_url( 'js/color-picker.min.js' ),
			array( 'iris' ),
			false,
			1
		);

		wp_enqueue_script( 'udesly-color-picker', self::$assets_folder_url . 'js/udesly-color-picker.js', array( 'wp-color-picker' ), Utils::getPluginVersion(), true );
	}
}