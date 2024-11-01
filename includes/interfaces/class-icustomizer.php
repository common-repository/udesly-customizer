<?php

namespace UdeslyCustomizer\Interfaces;

use UdeslyCustomizer\Ui\Tabs;

interface iCustomizer{

	public function __construct($saved_settings);

	public function get_customizer(Tabs $tab);

	public function can_be_activated();

}