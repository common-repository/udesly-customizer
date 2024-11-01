<?php
/**
 * Created by PhpStorm.
 * User: umberto
 * Date: 30/07/2018
 * Time: 22:36
 */

namespace UdeslyCustomizer\Plugins\Woocommerce;

use UdeslyCustomizer\i18n\i18n;
use UdeslyCustomizer\Utils\Utils;
use \WP_Customize_Manager;
use \WP_Customize_Color_Control;
use \WP_Customize_Control;

class Woocommerce_Wp_Customizer{

	public static function woocommerce_customize_buttons(WP_Customize_Manager $wp_customize){

		if(is_plugin_active('woocommerce/woocommerce.php')) {
			$wp_customize->add_panel( 'udesly_woocommerce_panel', array(
				'priority'   => 200,
				'capability' => 'edit_theme_options',
				'title'      => __( 'Udesly WooCommerce', i18n::$textdomain ),
			) );
		}

		$wp_customize->add_section('udesly_woocommerce_btn', array(
			'title'    => __('Udesly Woocommerce Buttons', i18n::$textdomain),
			'description' => '',
			'priority' => 10,
			'panel' => 'udesly_woocommerce_panel'
		));

		$wp_customize->add_setting('woo_btn_font_size', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_btn_font_size'],
			'type'       => 'option',
			'transport' => 'postMessage',
			'sanitize_callback' => array(self::class, 'sanitize_number_float')
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_btn_font_size',
				array(
					'label'          => __( 'Button Font Size (em)', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_btn',
					'settings'       => 'woo_btn_font_size',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '0.1'
					)
				)
			)
		);

		$wp_customize->add_setting('woo_btn_font_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_btn_font_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_btn_font_color',
				array(
					'label'      => __( 'Button Font Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_btn',
					'settings'   => 'woo_btn_font_color',
				) )
		);

		$wp_customize->add_setting('woo_btn_font_color_hover', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_btn_font_color_hover'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_btn_font_color_hover',
				array(
					'label'      => __( 'Button Font Color Hover', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_btn',
					'settings'   => 'woo_btn_font_color_hover',
				) )
		);

		$wp_customize->add_setting('woo_btn_background_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_btn_background_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_btn_background_color',
				array(
					'label'      => __( 'Button Background Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_btn',
					'settings'   => 'woo_btn_background_color',
				) )
		);

		$wp_customize->add_setting('woo_btn_background_color_hover', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_btn_background_color_hover'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_btn_background_color_hover',
				array(
					'label'      => __( 'Button Background Color Hover', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_btn',
					'settings'   => 'woo_btn_background_color_hover',
				) )
		);

		$wp_customize->add_setting('woo_btn_border_size', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_btn_border_size'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_btn_border_size',
				array(
					'label'          => __( 'Button Border Size', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_btn',
					'settings'       => 'woo_btn_border_size',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('woo_btn_border_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_btn_border_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_btn_border_color',
				array(
					'label'      => __( 'Button Border Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_btn',
					'settings'   => 'woo_btn_border_color',
				) )
		);

		$wp_customize->add_setting('woo_btn_border_radius', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_btn_border_radius'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_btn_border_radius',
				array(
					'label'          => __( 'Button Border Radius', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_btn',
					'settings'       => 'woo_btn_border_radius',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);
	}

	public static function woocommerce_customize_table(WP_Customize_Manager $wp_customize){

		$wp_customize->add_section('udesly_woocommerce_table', array(
			'title'    => __('Udesly Woocommerce Table', i18n::$textdomain),
			'description' => '',
			'priority' => 10,
			'panel' => 'udesly_woocommerce_panel'
		));

		$wp_customize->add_setting('woo_products_table_labels_font_size', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_products_table_labels_font_size'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_products_table_labels_font_size',
				array(
					'label'          => __( 'Labels Font Size', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_table',
					'settings'       => 'woo_products_table_labels_font_size',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('woo_products_table_texts_font_size', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_products_table_texts_font_size'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_products_table_texts_font_size',
				array(
					'label'          => __( 'Texts Font Size', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_table',
					'settings'       => 'woo_products_table_texts_font_size',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('woo_table_padding', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_table_padding'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_table_padding',
				array(
					'label'          => __( 'Table Padding (em)', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_table',
					'settings'       => 'woo_table_padding',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '0.01'
					)
				)
			)
		);

		$wp_customize->add_setting('woo_product_table_border_size', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_table_border_size'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_product_table_border_size',
				array(
					'label'          => __( 'Table Border Size (px)', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_table',
					'settings'       => 'woo_product_table_border_size',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('woo_product_table_corners', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_table_corners'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_product_table_corners',
				array(
					'label'          => __( 'Table Border Radius', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_table',
					'settings'       => 'woo_product_table_corners',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('woo_products_table_labels_font_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_products_table_labels_font_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_products_table_labels_font_color',
				array(
					'label'      => __( 'Labels Font Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_table',
					'settings'   => 'woo_products_table_labels_font_color',
				) )
		);

		$wp_customize->add_setting('woo_products_table_texts_font_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_products_table_texts_font_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_products_table_texts_font_color',
				array(
					'label'      => __( 'Texts Font Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_table',
					'settings'   => 'woo_products_table_texts_font_color',
				) )
		);

		$wp_customize->add_setting('woo_header_background_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_header_background_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_header_background_color',
				array(
					'label'      => __( 'Header Background Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_table',
					'settings'   => 'woo_header_background_color',
				) )
		);

		$wp_customize->add_setting('woo_product_background_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_background_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_product_background_color',
				array(
					'label'      => __( 'Product Background Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_table',
					'settings'   => 'woo_product_background_color',
				) )
		);

		$wp_customize->add_setting('woo_table_border_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_table_border_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_table_border_color',
				array(
					'label'      => __( 'Table Border Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_table',
					'settings'   => 'woo_table_border_color',
				) )
		);

	}

	public static function woocommerce_customize_form(WP_Customize_Manager $wp_customize){

		$wp_customize->add_section('udesly_woocommerce_form', array(
			'title'    => __('Udesly Woocommerce Form', i18n::$textdomain),
			'description' => '',
			'priority' => 10,
			'panel' => 'udesly_woocommerce_panel'
		));

		$wp_customize->add_setting('woo_form_title_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_title_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_form_title_color',
				array(
					'label'      => __( 'Form Title Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_form',
					'settings'   => 'woo_form_title_color',
				) )
		);

		$wp_customize->add_setting('woo_form_input_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_input_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_form_input_color',
				array(
					'label'      => __( 'Form Input Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_form',
					'settings'   => 'woo_form_input_color',
				) )
		);

		$wp_customize->add_setting('woo_form_input_placeholder_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_input_placeholder_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_form_input_placeholder_color',
				array(
					'label'      => __( 'Form Input Placeholder Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_form',
					'settings'   => 'woo_form_input_placeholder_color',
				) )
		);

		$wp_customize->add_setting('woo_form_input_background_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_input_background_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_form_input_background_color',
				array(
					'label'      => __( 'Form Input Background Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_form',
					'settings'   => 'woo_form_input_background_color',
				) )
		);

		$wp_customize->add_setting('woo_form_input_border_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_input_border_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_form_input_border_color',
				array(
					'label'      => __( 'Form Input Border Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_form',
					'settings'   => 'woo_form_input_border_color',
				) )
		);

		$wp_customize->add_setting('woo_form_input_padding', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_input_padding'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_form_input_padding',
				array(
					'label'          => __( 'Form Input Padding (em)', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_form',
					'settings'       => 'woo_form_input_padding',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '0.01'
					)
				)
			)
		);

		$wp_customize->add_setting('woo_form_input_border_size', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_input_border_size'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_form_input_border_size',
				array(
					'label'          => __( 'Form Input Border Size', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_form',
					'settings'       => 'woo_form_input_border_size',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('woo_form_input_border_radius', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_input_border_radius'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_form_input_border_radius',
				array(
					'label'          => __( 'Form Input Border Radius', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_form',
					'settings'       => 'woo_form_input_border_radius',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('woo_form_labels_font_size', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_labels_font_size'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_form_labels_font_size',
				array(
					'label'          => __( 'Labels Font Size', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_form',
					'settings'       => 'woo_form_labels_font_size',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('woo_form_title_font_size', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_title_font_size'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_form_title_font_size',
				array(
					'label'          => __( 'Labels Title Size', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_form',
					'settings'       => 'woo_form_title_font_size',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('woo_form_labels_font_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_labels_font_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_form_labels_font_color',
				array(
					'label'      => __( 'Labels Font Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_form',
					'settings'   => 'woo_form_labels_font_color',
				) )
		);

		$wp_customize->add_setting('woo_form_select2_height', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_select2_height'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_form_select2_height',
				array(
					'label'          => __( 'Select2 height (px)', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_form',
					'settings'       => 'woo_form_select2_height',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => 1
					)
				)
			)
		);

		$wp_customize->add_setting('woo_form_select2_padding', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_select2_padding'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_form_select2_padding',
				array(
					'label'          => __( 'Select2 padding (px)', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_form',
					'settings'       => 'woo_form_select2_padding',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => 1
					)
				)
			)
		);

		$wp_customize->add_setting('woo_checkout_payment_background_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_checkout_payment_background_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_checkout_payment_background_color',
				array(
					'label'      => __( 'Checkout Payment Background Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_form',
					'settings'   => 'woo_checkout_payment_background_color',
				) )
		);

		$wp_customize->add_setting('woo_checkout_payment_text_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_checkout_payment_text_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_checkout_payment_text_color',
				array(
					'label'      => __( 'Checkout Payment Text Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_form',
					'settings'   => 'woo_checkout_payment_text_color',
				) )
		);

		$wp_customize->add_setting('woo_coupon_code_width', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_coupon_code_width'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_coupon_code_width',
				array(
					'label'          => __( 'Coupon Code Width (px)', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_form',
					'settings'       => 'woo_coupon_code_width',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => 1
					)
				)
			)
		);
	}

	public static function woocommerce_customize_product(WP_Customize_Manager $wp_customize){

		$wp_customize->add_section('udesly_woocommerce_product', array(
			'title'    => __('Udesly Woocommerce Product', i18n::$textdomain),
			'description' => '',
			'priority' => 10,
			'panel' => 'udesly_woocommerce_panel'
		));

		$wp_customize->add_setting('woo_product_input_padding', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_input_padding'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_product_input_padding',
				array(
					'label'          => __( 'Product Input Padding (px)', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_product',
					'settings'       => 'woo_product_input_padding',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('woo_product_input_label_font_size', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_input_label_font_size'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_product_input_label_font_size',
				array(
					'label'          => __( 'Product Label Input Font Size (px)', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_product',
					'settings'       => 'woo_product_input_label_font_size',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('woo_product_input_border_radius', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_input_border_radius'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_product_input_border_radius',
				array(
					'label'          => __( 'Product Input Border Radius', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_product',
					'settings'       => 'woo_product_input_border_radius',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('woo_product_button_border_radius', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_button_border_radius'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_product_button_border_radius',
				array(
					'label'          => __( 'Product Button Border Radius', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_product',
					'settings'       => 'woo_product_button_border_radius',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('woo_product_button_padding', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_button_padding'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_product_button_padding',
				array(
					'label'          => __( 'Product Button Padding', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_product',
					'settings'       => 'woo_product_button_padding',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => 1
					)
				)
			)
		);

		$wp_customize->add_setting('woo_product_button_margin', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_button_margin'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_product_button_margin',
				array(
					'label'          => __( 'Product Button Margin', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_product',
					'settings'       => 'woo_product_button_margin',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => 1
					)
				)
			)
		);

		$wp_customize->add_setting('woo_product_tab_table_border_size', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_tab_table_border_size'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_product_tab_table_border_size',
				array(
					'label'          => __( 'Products Tab Table Border Size (px)', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_product',
					'settings'       => 'woo_product_tab_table_border_size',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('woo_product_tab_table_border_padding', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_tab_table_border_padding'],
			'type'       => 'option',
			'transport' => 'postMessage'
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_product_tab_table_border_padding',
				array(
					'label'          => __( 'Products Tab Table Padding (px)', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_product',
					'settings'       => 'woo_product_tab_table_border_padding',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('woo_product_table_border_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_table_border_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_product_table_border_color',
				array(
					'label'      => __( 'Product Tab Table Border Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_product',
					'settings'   => 'woo_product_table_border_color',
				) )
		);

		$wp_customize->add_setting('woo_product_button_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_button_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_product_button_color',
				array(
					'label'      => __( 'Product Button Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_product',
					'settings'   => 'woo_product_button_color',
				) )
		);

		$wp_customize->add_setting('woo_product_button_font_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_button_font_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_product_button_font_color',
				array(
					'label'      => __( 'Product Button Font Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_product',
					'settings'   => 'woo_product_button_font_color',
				) )
		);

		$wp_customize->add_setting('woo_product_button_color_hover', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_button_color_hover'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_product_button_color_hover',
				array(
					'label'      => __( 'Product Button Color Hover', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_product',
					'settings'   => 'woo_product_button_color_hover',
				) )
		);

		$wp_customize->add_setting('woo_product_input_label_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_input_label_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_product_input_label_color',
				array(
					'label'      => __( 'Product Label Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_product',
					'settings'   => 'woo_product_input_label_color',
				) )
		);

		$wp_customize->add_setting('woo_product_input_background_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_input_background_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_product_input_background_color',
				array(
					'label'      => __( 'Product Input Background Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_product',
					'settings'   => 'woo_product_input_background_color',
				) )
		);

		$wp_customize->add_setting('woo_product_input_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_input_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_product_input_color',
				array(
					'label'      => __( 'Product Input Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_product',
					'settings'   => 'woo_product_input_color',
				) )
		);

		$wp_customize->add_setting('woo_product_review_stars_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_review_stars_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_product_review_stars_color',
				array(
					'label'      => __( 'Product Reviews Stars Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_product',
					'settings'   => 'woo_product_review_stars_color',
				) )
		);

        $wp_customize->add_setting('woo_product_variations_select_height', array(
            'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_variations_select_height'],
            'type'       => 'option',
            'transport' => 'postMessage'
        ));
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'woo_product_variations_select_height',
                array(
                    'label'          => __( 'Products Variations Select Field Height (px)', i18n::$textdomain ),
                    'section'        => 'udesly_woocommerce_product',
                    'settings'       => 'woo_product_variations_select_height',
                    'type'           => 'number',
                    'input_attrs'    => array(
                        'step' => '1'
                    )
                )
            )
        );

        $wp_customize->add_setting('woo_product_variations_reset_margin', array(
            'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_variations_reset_margin'],
            'type'       => 'option',
            'transport' => 'postMessage'
        ));
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'woo_product_variations_reset_margin',
                array(
                    'label'          => __( 'Products Variations Reset Button Left Margin (px)', i18n::$textdomain ),
                    'section'        => 'udesly_woocommerce_product',
                    'settings'       => 'woo_product_variations_reset_margin',
                    'type'           => 'number',
                    'input_attrs'    => array(
                        'step' => '1'
                    )
                )
            )
        );

        $wp_customize->add_setting('woo_product_variations_label_margin', array(
            'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_variations_label_margin'],
            'type'       => 'option',
            'transport' => 'postMessage'
        ));
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'woo_product_variations_label_margin',
                array(
                    'label'          => __( 'Products Variations Labels Right Margin (px)', i18n::$textdomain ),
                    'section'        => 'udesly_woocommerce_product',
                    'settings'       => 'woo_product_variations_label_margin',
                    'type'           => 'number',
                    'input_attrs'    => array(
                        'step' => '1'
                    )
                )
            )
        );

        $wp_customize->add_setting('woo_product_variations_add_to_cart_btn_margin_top', array(
            'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_variations_add_to_cart_btn_margin_top'],
            'type'       => 'option',
            'transport' => 'postMessage'
        ));
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'woo_product_variations_add_to_cart_btn_margin_top',
                array(
                    'label'          => __( 'Products Variations Add To Cart Button Margin Top (px)', i18n::$textdomain ),
                    'section'        => 'udesly_woocommerce_product',
                    'settings'       => 'woo_product_variations_add_to_cart_btn_margin_top',
                    'type'           => 'number',
                    'input_attrs'    => array(
                        'step' => '1'
                    )
                )
            )
        );

        $wp_customize->add_setting('woo_product_variations_add_to_cart_btn_margin_left', array(
            'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_variations_add_to_cart_btn_margin_left'],
            'type'       => 'option',
            'transport' => 'postMessage'
        ));
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'woo_product_variations_add_to_cart_btn_margin_left',
                array(
                    'label'          => __( 'Products Variations Add To Cart Button Margin Left (px)', i18n::$textdomain ),
                    'section'        => 'udesly_woocommerce_product',
                    'settings'       => 'woo_product_variations_add_to_cart_btn_margin_left',
                    'type'           => 'number',
                    'input_attrs'    => array(
                        'step' => '1'
                    )
                )
            )
        );
	}

	public static function woocommerce_customize_sidebar(WP_Customize_Manager $wp_customize) {

		$wp_customize->add_section( 'udesly_woocommerce_sidebar', array(
			'title'       => __( 'Udesly Woocommerce Sidebar', i18n::$textdomain ),
			'description' => '',
			'priority'    => 10,
			'panel'       => 'udesly_woocommerce_panel'
		) );

		$wp_customize->add_setting('woo_sidebar_slider_background_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_sidebar_slider_background_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_sidebar_slider_background_color',
				array(
					'label'      => __( 'Price Filter Slider Background Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_sidebar',
					'settings'   => 'woo_sidebar_slider_background_color',
				) )
		);

		$wp_customize->add_setting('woo_sidebar_slider_range_background_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_sidebar_slider_range_background_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_sidebar_slider_range_background_color',
				array(
					'label'      => __( 'Price Filter Range Slider Background Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_sidebar',
					'settings'   => 'woo_sidebar_slider_range_background_color',
				) )
		);

		$wp_customize->add_setting('woo_sidebar_slider_handler_background_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_sidebar_slider_handler_background_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_sidebar_slider_handler_background_color',
				array(
					'label'      => __( 'Price Filter Slider Handle Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_sidebar',
					'settings'   => 'woo_sidebar_slider_handler_background_color',
				) )
		);

		$wp_customize->add_setting('woo_sidebar_price_range_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_sidebar_price_range_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_sidebar_price_range_color',
				array(
					'label'      => __( 'Price Filter Range Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_sidebar',
					'settings'   => 'woo_sidebar_price_range_color',
				) )
		);

	}

	public static function woocommerce_customize_font(WP_Customize_Manager $wp_customize) {

		$wp_customize->add_section( 'udesly_woocommerce_font', array(
			'title'       => __( 'Udesly Woocommerce Font', i18n::$textdomain ),
			'description' => '',
			'priority'    => 10,
			'panel'       => 'udesly_woocommerce_panel'
		) );

		$wp_customize->add_setting('woo_general_font', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_general_font'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));

		$wp_customize->add_control( 'woo_general_font', array(
			'type' => 'text',
			'section' => 'udesly_woocommerce_font', // Add a default or your own section
			'label' => __( 'General Font', i18n::$textdomain ),
			'description' => __( 'Font used in the webflow missing elements like table, etc.' ),
		) );

	}

	public static function woocommerce_customize_notifications(WP_Customize_Manager $wp_customize) {

		$wp_customize->add_section( 'udesly_woocommerce_notifications', array(
			'title'       => __( 'Udesly Woocommerce Notifications', i18n::$textdomain ),
			'description' => '',
			'priority'    => 10,
			'panel'       => 'udesly_woocommerce_panel'
		) );

		$wp_customize->add_setting('woo_notification_info_background_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_info_background_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_notification_info_background_color',
				array(
					'label'      => __( 'Info Background Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_notifications',
					'settings'   => 'woo_notification_info_background_color',
				) )
		);

		$wp_customize->add_setting('woo_notification_info_text_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_info_text_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_notification_info_text_color',
				array(
					'label'      => __( 'Info Text Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_notifications',
					'settings'   => 'woo_notification_info_text_color',
				) )
		);

		$wp_customize->add_setting('woo_notification_info_border_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_info_border_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_notification_info_border_color',
				array(
					'label'      => __( 'Info Border Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_notifications',
					'settings'   => 'woo_notification_info_border_color',
				) )
		);

		$wp_customize->add_setting('woo_notification_info_border_size', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_info_border_size'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_notification_info_border_size',
				array(
					'label'          => __( 'Info Border Size', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_notifications',
					'settings'       => 'woo_notification_info_border_size',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('woo_notification_error_background_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_error_background_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_notification_error_background_color',
				array(
					'label'      => __( 'Error Background Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_notifications',
					'settings'   => 'woo_notification_error_background_color',
				) )
		);

		$wp_customize->add_setting('woo_notification_error_text_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_error_text_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_notification_error_text_color',
				array(
					'label'      => __( 'Error Text Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_notifications',
					'settings'   => 'woo_notification_error_text_color',
				) )
		);

		$wp_customize->add_setting('woo_notification_error_border_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_error_border_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_notification_error_border_color',
				array(
					'label'      => __( 'Error Border Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_notifications',
					'settings'   => 'woo_notification_error_border_color',
				) )
		);

		$wp_customize->add_setting('woo_notification_error_border_size', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_error_border_size'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_notification_error_border_size',
				array(
					'label'          => __( 'Error Border Size', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_notifications',
					'settings'       => 'woo_notification_error_border_size',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

		$wp_customize->add_setting('woo_notification_message_background_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_message_background_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_notification_message_background_color',
				array(
					'label'      => __( 'Message Background Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_notifications',
					'settings'   => 'woo_notification_message_background_color',
				) )
		);

		$wp_customize->add_setting('woo_notification_message_text_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_message_text_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_notification_message_text_color',
				array(
					'label'      => __( 'Message Text Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_notifications',
					'settings'   => 'woo_notification_message_text_color',
				) )
		);

		$wp_customize->add_setting('woo_notification_message_border_color', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_message_border_color'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'woo_notification_message_border_color',
				array(
					'label'      => __( 'Message Border Color', i18n::$textdomain ),
					'section'    => 'udesly_woocommerce_notifications',
					'settings'   => 'woo_notification_message_border_color',
				) )
		);

		$wp_customize->add_setting('woo_notification_message_border_size', array(
			'default'        => Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_message_border_size'],
			'type'       => 'option',
			'transport' => 'postMessage',
		));
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woo_notification_message_border_size',
				array(
					'label'          => __( 'Message Border Size', i18n::$textdomain ),
					'section'        => 'udesly_woocommerce_notifications',
					'settings'       => 'woo_notification_message_border_size',
					'type'           => 'number',
					'input_attrs'    => array(
						'step' => '1'
					)
				)
			)
		);

	}

	public static function sanitize_number_float($number){
		return str_replace(',','.', $number);
	}

	public static function customizer_live_preview(){
		wp_enqueue_script(
			'udesly-customizer-live-preview-woo',			//Give the script an ID
			UDESLY_CUSTOMIZER_PLUGIN_DIRECTORY_URL . 'includes/plugins/woocommerce/assets/js/udesly-live-preview-customizer.js',//Point to file
			array( 'jquery','customize-preview' ),	//Define dependencies
			Utils::getPluginVersion(),						//Define a version (optional)
			true						//Put script in footer?
		);
	}

}