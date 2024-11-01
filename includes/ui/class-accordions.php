<?php
/**
 * Created by PhpStorm.
 * User: umberto
 * Date: 09/01/2018
 * Time: 14:51
 */

namespace UdeslyCustomizer\Ui;

class Accordions{

	private $accordions;


	public function __construct($accordions = array()) {
		$this->accordions = $accordions;
	}

	public function add_accordion($title, $id, $panel, $icon = '', $order = 0){
		$this->accordions[] = array(
			'title' => $title,
			'id' => $id,
			'panel' => $panel,
			'icon' => $icon,
			'order' => $order
		);
	}

	public function show_accordions($echo = false){

		usort($this->accordions, function($a, $b) {
			return $a['order'] - $b['order'];
		});

		$output = '<div class="cdg-woo-kit-accordions-component-wrapper">';
			foreach ($this->accordions as $accordion) {
				$output .= '<div class="cdg-woo-kit-accordion-component" id="' . $accordion['id'] . '">';
				$output .= '<button class="cdg-woo-kit-accordion-btn">' . $accordion['icon'] . $accordion['title'] . '</button>';
				$output .= '<div class="cdg-woo-kit-accordion-panel">' . $accordion['panel'] . '</div>';
				$output .= '</div>';
			}
		$output .= '</div>';

		if($echo){
			echo $output;
		}else{
			return $output;
		}

	}

}