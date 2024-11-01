<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.udesly.com
 * @since             1.0.0
 * @package           Udesly_Customizer
 *
 * @wordpress-plugin
 * Plugin Name:       Udesly Customizer
 * Plugin URI:        https://www.udesly.com/udesly-adapter/
 * Description:       This is a customization plugin that allows you to customize components in your Udesly Webflow theme.
 * Version:           1.1.0
 * Author:            Udesly
 * Author URI:        https://www.udesly.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       udesly-customizer
 * Domain Path:       /languages
 */


include_once(ABSPATH.'wp-admin/includes/plugin.php');

// If this file is called directly, abort.
use UdeslyCustomizer\Core\Udesly_Customizer;
use UdeslyCustomizer\Core\Udesly_Customizer_Activator;
use UdeslyCustomizer\Core\Udesly_Customizer_Deactivator;

if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'UDESLY_CUSTOMIZER_VERSION', '1.0.0' );
defined( 'UDESLY_CUSTOMIZER_PLUGIN_DIRECTORY_PATH' ) ? : define( 'UDESLY_CUSTOMIZER_PLUGIN_DIRECTORY_PATH', plugin_dir_path( __FILE__ ) );
defined( 'UDESLY_CUSTOMIZER_PLUGIN_DIRECTORY_URL' ) ? : define( 'UDESLY_CUSTOMIZER_PLUGIN_DIRECTORY_URL', plugin_dir_url( __FILE__ ) );

//Registers autoload function of classes
spl_autoload_register( '\udesly_customizer_autoload' );

function udesly_customizer_autoload( $class_name ) {
	/* Only autoload classes from this namespace */
	if ( false === strpos( $class_name, 'UdeslyCustomizer\\' ) ) {
		return;
	}

	/* Remove namespace from class name */
	$class_file = str_replace( 'UdeslyCustomizer' . '\\', '', $class_name );
	/* Convert class name format to file name format */
	$class_file = strtolower( $class_file );
	$class_file = str_replace( '_', '-', $class_file );
	/* Convert sub-namespaces into directories */
	$class_path = explode( '\\', $class_file );
	$class_file = array_pop( $class_path );
	$class_path = implode( '/', $class_path );
	/* Load the class */
	require_once __DIR__ . '/includes/' . $class_path . '/class-' . $class_file . '.php';

}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-udesly-customizer-activator.php
 */
function activate_udesly_customizer() {
	Udesly_Customizer_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-udesly-customizer-deactivator.php
 */
function deactivate_udesly_customizer() {
	Udesly_Customizer_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_udesly_customizer' );
register_deactivation_hook( __FILE__, 'deactivate_udesly_customizer' );


/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_udesly_customizer() {

	$plugin = new Udesly_Customizer();
	$plugin->run();

}
run_udesly_customizer();
