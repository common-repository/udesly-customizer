<?php

namespace UdeslyCustomizer\Core;

use UdeslyCustomizer\Utils\Utils;

/**
 * Fired during plugin deactivation
 *
 * @link       https://www.udesly.com
 * @since      1.0.0
 *
 * @package    Udesly_Customizer
 * @subpackage Udesly_Customizer/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Udesly_Customizer
 * @subpackage Udesly_Customizer/includes
 * @author     Udesly <info@udesly.com>
 */
class Udesly_Customizer_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		foreach ( Utils::getIPluginsClasses() as $class ) {
			$class::deactivate();
		}
	}

}
