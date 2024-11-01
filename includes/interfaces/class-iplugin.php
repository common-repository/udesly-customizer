<?php

namespace UdeslyCustomizer\Interfaces;

use UdeslyCustomizer\Core\Udesly_Customizer_Loader;

interface iPlugin{

	public static function define_admin_hooks( Udesly_Customizer_Loader $loader );

	public static function define_public_hooks( Udesly_Customizer_Loader $loader );

	public static function activate();

	public static function deactivate();

	public static function can_be_activated();

}