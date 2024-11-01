<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://www.udesly.com
 * @since      1.0.0
 *
 * @package    Udesly_Customizer
 * @subpackage Udesly_Customizer/includes
 */

namespace UdeslyCustomizer\Core;

use UdeslyCustomizer\i18n\i18n;
use UdeslyCustomizer\Plugins\Plugins_Manager;
use UdeslyCustomizer\Plugins\Woocommerce\Woocommerce_Settings;
use UdeslyCustomizer\Ui\Tabs;
use UdeslyCustomizer\Ui\Ui_Assets;
use UdeslyCustomizer\Utils\Utils;
use UdeslyCustomizer\Core\Udesly_Customizer_i18n;

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Udesly_Customizer
 * @subpackage Udesly_Customizer/includes
 * @author     Udesly <info@udesly.com>
 */
class Udesly_Customizer {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Udesly_Customizer_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */

	public static $menu_slug = 'udesly_main_menu';

	public function __construct() {
		if ( defined( 'UDESLY_CUSTOMIZER_VERSION' ) ) {
			$this->version = UDESLY_CUSTOMIZER_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'udesly-customizer';

		$this->load_dependencies();
		$this->set_locale();
		$this->create_plugin_menu();
		$this->define_admin_hooks();
		$this->define_public_hooks();

		Utils::checkPluginDependencies();
	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Udesly_Customizer_Loader. Orchestrates the hooks of the plugin.
	 * - Udesly_Customizer_i18n. Defines internationalization functionality.
	 * - Udesly_Customizer_Admin. Defines all hooks for the admin area.
	 * - Udesly_Customizer_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		//require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-udy-wf-to-wp-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . '../vendor/autoload.php';

		$this->loader = new Udesly_Customizer_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Udesly_Customizer_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		foreach ( Utils::getIPluginsClasses() as $class ) {
			$class::define_admin_hooks( $this->loader );
		}

		$this->loader->add_action('admin_enqueue_scripts', Ui_Assets::class, 'add_ui_styles', 20);
		$this->loader->add_action('admin_enqueue_scripts', Ui_Assets::class, 'add_ui_scripts', 20);
	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		foreach ( Utils::getIPluginsClasses() as $class ) {
			$class::define_public_hooks( $this->loader );
		}

		$this->loader->add_action('wp_head', Plugins_Manager::class, 'serve_plugins_css', 99);

	}

	private function create_plugin_menu(){

		$this->loader->add_action('admin_menu', $this, 'add_plugin_menu', 15);

	}

	public function add_plugin_menu(){
		if(current_user_can('manage_options') && Utils::isUdeslyPluginActive()) {
			add_submenu_page( self::$menu_slug, __('Customizer', i18n::$textdomain), __('Customizer', i18n::$textdomain), 'manage_options', 'udesly_customizer', array(
				$this,
				'render_customizer_view'
			));
		}
	}


	private function getICustomizerClasses() {

		$return = array();
		$dirs   = array_filter( glob( UDESLY_CUSTOMIZER_PLUGIN_DIRECTORY_PATH . 'includes/plugins/*' ), 'is_dir' );
		foreach ( $dirs as $dir ) {
			$basename  = ucfirst( basename( $dir ) );
			$classname = "\UdeslyCustomizer\Plugins\\$basename\\$basename" . "_Tab";
			if ( in_array( "UdeslyCustomizer\\Interfaces\\iCustomizer", class_implements( $classname ) ) ) {
				$return[] = $classname;
			}
		}

		return $return;

	}

	public function render_customizer_view(){

		$tabs     = new Tabs();
		foreach ( $this->getICustomizerClasses() as $class ) {
			$current_tab = new $class( self::get_saved_settings() );
			if($current_tab->can_be_activated()){
				$current_tab->get_customizer( $tabs );
			}
		}

		include_once( UDESLY_CUSTOMIZER_PLUGIN_DIRECTORY_PATH . 'includes/view/customizer-settings.php' );
	}

	public static function get_saved_settings() {
		return get_option( 'udesly_customizer_settings' );
	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Udesly_Customizer_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
