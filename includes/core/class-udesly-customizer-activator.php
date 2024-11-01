<?php

namespace UdeslyCustomizer\Core;

/**
 * Fired during plugin activation
 *
 * @link       https://www.udesly.com
 * @since      1.0.0
 *
 * @package    Udesly_Customizer
 * @subpackage Udesly_Customizer/includes
 */

use UdeslyCustomizer\Utils\Utils;

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Udesly_Customizer
 * @subpackage Udesly_Customizer/includes
 * @author     Udesly <info@udesly.com>
 */
class Udesly_Customizer_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		foreach ( Utils::getIPluginsClasses() as $class ) {
			$class::activate();
		}

	}

}
