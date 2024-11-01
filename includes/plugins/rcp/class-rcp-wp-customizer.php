<?php
/**
 * Created by PhpStorm.
 * User: umberto
 * Date: 30/07/2018
 * Time: 22:36
 */

namespace UdeslyCustomizer\Plugins\Rcp;

use UdeslyCustomizer\i18n\i18n;
use UdeslyCustomizer\Utils\Utils;
use \WP_Customize_Manager;
use \WP_Customize_Color_Control;
use \WP_Customize_Control;

class Rcp_Wp_Customizer{

	public static function rcp_customize_buttons(WP_Customize_Manager $wp_customize){

		if(is_plugin_active('restrict-content-pro/restrict-content-pro.php')) {
			$wp_customize->add_panel( 'udesly_rcp_panel', array(
				'priority'   => 200,
				'capability' => 'edit_theme_options',
				'title'      => __( 'Udesly Restrict Content Pro', i18n::$textdomain ),
			) );
		}

		$wp_customize->add_section( 'udesly_rcp_btn', array(
			'title'       => __( 'Udesly EDD Buttons', i18n::$textdomain ),
			'description' => '',
			'priority'    => 10,
			'panel'       => 'udesly_rcp_panel'
		) );

		$wp_customize->add_setting( 'rcp_btn_font_size', array(
			'default'           => Rcp_Init_Settings::$settings['rcp']['rcp_btn_font_size'],
			'type'              => 'option',
			'transport'         => 'postMessage',
			'sanitize_callback' => array( self::class, 'sanitize_number_float' )
		) );
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'rcp_btn_font_size',
				array(
					'label'       => __( 'Button Font Size (em)', i18n::$textdomain ),
					'section'     => 'udesly_rcp_btn',
					'settings'    => 'rcp_btn_font_size',
					'type'        => 'number',
					'input_attrs' => array(
						'step' => '0.1'
					)
				)
			)
		);

		$wp_customize->add_setting('rcp_btn_font_color', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_btn_font_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'rcp_btn_font_color',
				array(
					'label'      => __( 'Button Font Color', i18n::$textdomain ),
					'section'    => 'udesly_rcp_btn',
					'settings'   => 'rcp_btn_font_color',
				) )
		);

		$wp_customize->add_setting('rcp_btn_font_color_hover', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_btn_font_color_hover'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'rcp_btn_font_color_hover',
				array(
					'label'      => __( 'Button Font Color Hover', i18n::$textdomain ),
					'section'    => 'udesly_rcp_btn',
					'settings'   => 'rcp_btn_font_color_hover',
				) )
		);

		$wp_customize->add_setting('rcp_btn_background_color', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_btn_background_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'rcp_btn_background_color',
				array(
					'label'      => __( 'Button Background Color', i18n::$textdomain ),
					'section'    => 'udesly_rcp_btn',
					'settings'   => 'rcp_btn_background_color',
				) )
		);

		$wp_customize->add_setting('rcp_btn_background_color_hover', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_btn_background_color_hover'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'rcp_btn_background_color_hover',
				array(
					'label'      => __( 'Button Background Color Hover', i18n::$textdomain ),
					'section'    => 'udesly_rcp_btn',
					'settings'   => 'rcp_btn_background_color_hover',
				) )
		);

		$wp_customize->add_setting('rcp_btn_border_size', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_btn_border_size'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'rcp_btn_border_size',
				array(
					'label'          => __( 'Button Border Size', i18n::$textdomain ),
					'section'        => 'udesly_rcp_btn',
					'settings'       => 'rcp_btn_border_size',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('rcp_btn_border_color', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_btn_border_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'rcp_btn_border_color',
				array(
					'label'      => __( 'Button Border Color', i18n::$textdomain ),
					'section'    => 'udesly_rcp_btn',
					'settings'   => 'rcp_btn_border_color',
				) )
		);

		$wp_customize->add_setting('rcp_btn_border_radius', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_btn_border_radius'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'rcp_btn_border_radius',
				array(
					'label'          => __( 'Button Border Radius', i18n::$textdomain ),
					'section'        => 'udesly_rcp_btn',
					'settings'       => 'rcp_btn_border_radius',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);
	}

	public static function rcp_customize_table(WP_Customize_Manager $wp_customize){

		$wp_customize->add_section('udesly_rcp_table', array(
			'title'    => __('Udesly EDD Table', i18n::$textdomain),
			'description' => '',
			'priority' => 10,
			'panel' => 'udesly_rcp_panel'
		));

		$wp_customize->add_setting('rcp_products_table_labels_font_size', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_products_table_labels_font_size'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'rcp_products_table_labels_font_size',
				array(
					'label'          => __( 'Labels Font Size', i18n::$textdomain ),
					'section'        => 'udesly_rcp_table',
					'settings'       => 'rcp_products_table_labels_font_size',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('rcp_products_table_texts_font_size', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_products_table_texts_font_size'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'rcp_products_table_texts_font_size',
				array(
					'label'          => __( 'Texts Font Size', i18n::$textdomain ),
					'section'        => 'udesly_rcp_table',
					'settings'       => 'rcp_products_table_texts_font_size',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('rcp_table_padding', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_table_padding'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'rcp_table_padding',
				array(
					'label'          => __( 'Table Padding (em)', i18n::$textdomain ),
					'section'        => 'udesly_rcp_table',
					'settings'       => 'rcp_table_padding',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '0.01'
					)
				)
			)
		);

		$wp_customize->add_setting('rcp_product_table_border_size', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_product_table_border_size'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'rcp_product_table_border_size',
				array(
					'label'          => __( 'Table Border Size (px)', i18n::$textdomain ),
					'section'        => 'udesly_rcp_table',
					'settings'       => 'rcp_product_table_border_size',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('rcp_products_table_labels_font_color', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_products_table_labels_font_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'rcp_products_table_labels_font_color',
				array(
					'label'      => __( 'Labels Font Color', i18n::$textdomain ),
					'section'    => 'udesly_rcp_table',
					'settings'   => 'rcp_products_table_labels_font_color',
				) )
		);

		$wp_customize->add_setting('rcp_products_table_texts_font_color', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_products_table_texts_font_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'rcp_products_table_texts_font_color',
				array(
					'label'      => __( 'Texts Font Color', i18n::$textdomain ),
					'section'    => 'udesly_rcp_table',
					'settings'   => 'rcp_products_table_texts_font_color',
				) )
		);

		$wp_customize->add_setting('rcp_header_background_color', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_header_background_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'rcp_header_background_color',
				array(
					'label'      => __( 'Header Background Color', i18n::$textdomain ),
					'section'    => 'udesly_rcp_table',
					'settings'   => 'rcp_header_background_color',
				) )
		);

		$wp_customize->add_setting('rcp_product_background_color', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_product_background_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'rcp_product_background_color',
				array(
					'label'      => __( 'Product Background Color', i18n::$textdomain ),
					'section'    => 'udesly_rcp_table',
					'settings'   => 'rcp_product_background_color',
				) )
		);

		$wp_customize->add_setting('rcp_table_border_color', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_table_border_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'rcp_table_border_color',
				array(
					'label'      => __( 'Table Border Color', i18n::$textdomain ),
					'section'    => 'udesly_rcp_table',
					'settings'   => 'rcp_table_border_color',
				) )
		);

	}

	public static function rcp_customize_form(WP_Customize_Manager $wp_customize){

		$wp_customize->add_section('udesly_rcp_form', array(
			'title'    => __('Udesly EDD Form', i18n::$textdomain),
			'description' => '',
			'priority' => 10,
			'panel' => 'udesly_rcp_panel'
		));

		$wp_customize->add_setting('rcp_form_title_color', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_form_title_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'rcp_form_title_color',
				array(
					'label'      => __( 'Form Title Color', i18n::$textdomain ),
					'section'    => 'udesly_rcp_form',
					'settings'   => 'rcp_form_title_color',
				) )
		);

		$wp_customize->add_setting('rcp_form_input_color', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_form_input_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'rcp_form_input_color',
				array(
					'label'      => __( 'Form Input Color', i18n::$textdomain ),
					'section'    => 'udesly_rcp_form',
					'settings'   => 'rcp_form_input_color',
				) )
		);

		$wp_customize->add_setting('rcp_form_input_placeholder_color', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_form_input_placeholder_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'rcp_form_input_placeholder_color',
				array(
					'label'      => __( 'Form Input Placeholder Color', i18n::$textdomain ),
					'section'    => 'udesly_rcp_form',
					'settings'   => 'rcp_form_input_placeholder_color',
				) )
		);

		$wp_customize->add_setting('rcp_form_input_background_color', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_form_input_background_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'rcp_form_input_background_color',
				array(
					'label'      => __( 'Form Input Background Color', i18n::$textdomain ),
					'section'    => 'udesly_rcp_form',
					'settings'   => 'rcp_form_input_background_color',
				) )
		);

		$wp_customize->add_setting('rcp_form_input_border_color', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_form_input_border_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'rcp_form_input_border_color',
				array(
					'label'      => __( 'Form Input Border Color', i18n::$textdomain ),
					'section'    => 'udesly_rcp_form',
					'settings'   => 'rcp_form_input_border_color',
				) )
		);

		$wp_customize->add_setting('rcp_form_input_padding', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_form_input_padding'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'rcp_form_input_padding',
				array(
					'label'          => __( 'Form Input Padding (em)', i18n::$textdomain ),
					'section'        => 'udesly_rcp_form',
					'settings'       => 'rcp_form_input_padding',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '0.01'
					)
				)
			)
		);

		$wp_customize->add_setting('rcp_form_input_border_size', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_form_input_border_size'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'rcp_form_input_border_size',
				array(
					'label'          => __( 'Form Input Border Size', i18n::$textdomain ),
					'section'        => 'udesly_rcp_form',
					'settings'       => 'rcp_form_input_border_size',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('rcp_form_input_border_radius', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_form_input_border_radius'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'rcp_form_input_border_radius',
				array(
					'label'          => __( 'Form Input Border Radius', i18n::$textdomain ),
					'section'        => 'udesly_rcp_form',
					'settings'       => 'rcp_form_input_border_radius',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('rcp_form_title_font_size', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_form_title_font_size'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'rcp_form_title_font_size',
				array(
					'label'          => __( 'Labels Title Size', i18n::$textdomain ),
					'section'        => 'udesly_rcp_form',
					'settings'       => 'rcp_form_title_font_size',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);
	}

	public static function rcp_customize_notifications(WP_Customize_Manager $wp_customize) {

		$wp_customize->add_section( 'udesly_rcp_notifications', array(
			'title'       => __( 'Udesly EDD Notifications', i18n::$textdomain ),
			'description' => '',
			'priority'    => 10,
			'panel'       => 'udesly_rcp_panel'
		) );

		$wp_customize->add_setting('rcp_notification_border_size', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_notification_border_size'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'rcp_notification_error_border_size',
				array(
					'label'          => __( 'Error Border Size', i18n::$textdomain ),
					'section'        => 'udesly_rcp_notifications',
					'settings'       => 'rcp_notification_border_size',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('rcp_notification_error_background_color', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_notification_error_background_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'rcp_notification_error_background_color',
				array(
					'label'      => __( 'Error Background Color', i18n::$textdomain ),
					'section'    => 'udesly_rcp_notifications',
					'settings'   => 'rcp_notification_error_background_color',
				) )
		);

		$wp_customize->add_setting('rcp_notification_error_text_color', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_notification_error_text_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'rcp_notification_error_text_color',
				array(
					'label'      => __( 'Error Text Color', i18n::$textdomain ),
					'section'    => 'udesly_rcp_notifications',
					'settings'   => 'rcp_notification_error_text_color',
				) )
		);

		$wp_customize->add_setting('rcp_notification_error_border_color', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_notification_error_border_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'rcp_notification_error_border_color',
				array(
					'label'      => __( 'Error Border Color', i18n::$textdomain ),
					'section'    => 'udesly_rcp_notifications',
					'settings'   => 'rcp_notification_error_border_color',
				) )
		);

		$wp_customize->add_setting('rcp_notification_success_background_color', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_notification_success_background_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'rcp_notification_success_background_color',
				array(
					'label'      => __( 'Success Background Color', i18n::$textdomain ),
					'section'    => 'udesly_rcp_notifications',
					'settings'   => 'rcp_notification_success_background_color',
				) )
		);

		$wp_customize->add_setting('rcp_notification_success_text_color', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_notification_success_text_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'rcp_notification_success_text_color',
				array(
					'label'      => __( 'Success Text Color', i18n::$textdomain ),
					'section'    => 'udesly_rcp_notifications',
					'settings'   => 'rcp_notification_success_text_color',
				) )
		);

		$wp_customize->add_setting('rcp_notification_success_border_color', array(
			'default'        => Rcp_Init_Settings::$settings['rcp']['rcp_notification_success_border_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'rcp_notification_success_border_color',
				array(
					'label'      => __( 'Success Border Color', i18n::$textdomain ),
					'section'    => 'udesly_rcp_notifications',
					'settings'   => 'rcp_notification_success_border_color',
				) )
		);

	}

	public static function sanitize_number_float($number){
		return str_replace(',','.', $number);
	}

	public static function customizer_live_preview(){
		wp_enqueue_script(
			'udesly-customizer-live-preview-rcp',			//Give the script an ID
			UDESLY_CUSTOMIZER_PLUGIN_DIRECTORY_URL . 'includes/plugins/rcp/assets/js/udesly-rcp-live-preview-customizer.js',//Point to file
			array( 'jquery','customize-preview' ),	//Define dependencies
			Utils::getPluginVersion(),			    //Define a version (optional)
			true						    //Put script in footer?
		);
	}

}