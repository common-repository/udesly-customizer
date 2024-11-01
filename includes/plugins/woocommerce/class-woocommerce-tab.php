<?php
/**
 * Created by PhpStorm.
 * User: umberto
 * Date: 26/07/2018
 * Time: 17:30
 */

namespace UdeslyCustomizer\Plugins\Woocommerce;

use UdeslyCustomizer\i18n\i18n;
use UdeslyCustomizer\Interfaces\iCustomizer;
use UdeslyCustomizer\Ui\Accordions;
use UdeslyCustomizer\Ui\Form;
use UdeslyCustomizer\Ui\Icon;
use UdeslyCustomizer\Ui\Icon_Type;
use UdeslyCustomizer\Ui\Tabs;
use UdeslyCustomizer\Utils\Utils;

class Woocommerce_Tab implements iCustomizer {

	private $saved_settings;
	private $plugin_name;

	public function __construct( $saved_settings ) {
		$this->plugin_name = basename(__DIR__);
		$this->saved_settings = isset($saved_settings[$this->plugin_name]) ? $saved_settings[$this->plugin_name] : [];
	}

	public function get_customizer( Tabs $tab ) {

		// Buttons style
		$btn_style = new Form();
		$btn_style->add_number( 'woo_btn_font_size', 'udesly_customizer[' . $this->plugin_name . '][woo_btn_font_size]', __( 'Buttons Font Size (em)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_btn_font_size'] ) ? $this->saved_settings['woo_btn_font_size'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_btn_font_size'], 0, 1000, '', '', '', 0.1 );
		$btn_style->add_break_line();
		$btn_style->add_color_picker( 'woo_btn_font_color', 'udesly_customizer[' . $this->plugin_name . '][woo_btn_font_color]', __( 'Buttons Font Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_btn_font_color'] ) ? $this->saved_settings['woo_btn_font_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_btn_font_color'], '', '', '' );
		$btn_style->add_color_picker( 'woo_btn_font_color_hover', 'udesly_customizer[' . $this->plugin_name . '][woo_btn_font_color_hover]', __( 'Buttons Font Color Hover', i18n::$textdomain ), '', isset( $this->saved_settings['woo_btn_font_color_hover'] ) ? $this->saved_settings['woo_btn_font_color_hover'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_btn_font_color_hover'], '', '', '' );
		$btn_style->add_break_line();
		$btn_style->add_color_picker( 'woo_btn_background_color', 'udesly_customizer[' . $this->plugin_name . '][woo_btn_background_color]', __( 'Buttons Background Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_btn_background_color'] ) ? $this->saved_settings['woo_btn_background_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_btn_background_color'], '', '', '' );
		$btn_style->add_color_picker( 'woo_btn_background_color_hover', 'udesly_customizer[' . $this->plugin_name . '][woo_btn_background_color_hover]', __( 'Buttons Background Color Hover', i18n::$textdomain ), '', isset( $this->saved_settings['woo_btn_background_color_hover'] ) ? $this->saved_settings['woo_btn_background_color_hover'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_btn_background_color_hover'], '', '', '' );
		$btn_style->add_break_line();
		$btn_style->add_number( 'woo_btn_border_size', 'udesly_customizer[' . $this->plugin_name . '][woo_btn_border_size]', __( 'Buttons Border Size (px)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_btn_border_size'] ) ? $this->saved_settings['woo_btn_border_size'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_btn_border_size'], 0, 1000, '', '', '', 1 );
		$btn_style->add_break_line();
		$btn_style->add_color_picker( 'woo_btn_border_color', 'udesly_customizer[' . $this->plugin_name . '][woo_btn_border_color]', __( 'Buttons Border Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_btn_border_color'] ) ? $this->saved_settings['woo_btn_border_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_btn_border_color'], '', '', '' );
		$btn_style->add_break_line();
		$btn_style->add_number( 'woo_btn_border_radius', 'udesly_customizer[' . $this->plugin_name . '][woo_btn_border_radius]', __( 'Buttons Border Radius', i18n::$textdomain ), '', isset( $this->saved_settings['woo_btn_border_radius'] ) ? $this->saved_settings['woo_btn_border_radius'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_btn_border_radius'], 0, 1000, '', '', '', 1 );
		$btn_style->add_wp_nonce( 'save_udesly_customizer', 'save_udesly_customizer_nonce' );
		$btn_style->add_hidden( 'udesly_save_customizer', 'action', 'udesly_save_customizer' );

		// Table
		$table = new Form();
		$table->add_number( 'woo_table_padding', 'udesly_customizer[' . $this->plugin_name . '][woo_table_padding]', __( 'Table Padding (em)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_table_padding'] ) ? $this->saved_settings['woo_table_padding'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_table_padding'], 0, 1000, '', '', '', 0.01 );
		$table->add_break_line();
		$table->add_color_picker( 'woo_header_background_color', 'udesly_customizer[' . $this->plugin_name . '][woo_header_background_color]', __( 'Header Background Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_header_background_color'] ) ? $this->saved_settings['woo_header_background_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_header_background_color'], '', '', '' );
		$table->add_color_picker( 'woo_product_background_color', 'udesly_customizer[' . $this->plugin_name . '][woo_product_background_color]', __( 'Product Background Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_background_color'] ) ? $this->saved_settings['woo_product_background_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_background_color'], '', '', '' );
		$table->add_break_line();
		$table->add_number( 'woo_product_table_border_size', 'udesly_customizer[' . $this->plugin_name . '][woo_product_table_border_size]', __( 'Products Table Border Size (px)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_table_border_size'] ) ? $this->saved_settings['woo_product_table_border_size'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_table_border_size'], 0, 1000, '', '', '', 1 );
		$table->add_color_picker( 'woo_table_border_color', 'udesly_customizer[' . $this->plugin_name . '][woo_table_border_color]', __( 'Products Table Border Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_table_border_color'] ) ? $this->saved_settings['woo_table_border_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_table_border_color'], '', '', '' );
		$table->add_break_line();
		$table->add_number( 'woo_product_table_corners', 'udesly_customizer[' . $this->plugin_name . '][woo_product_table_corners]', __( 'Products Table Rounded Corners', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_table_corners'] ) ? $this->saved_settings['woo_product_table_corners'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_table_corners'], 0, 1000, '', '', '', 1 );
		$table->add_break_line_border();
		$table->add_title('Labels Settings:','xsmall','');
		$table->add_break_line();
		$table->add_number( 'woo_products_table_labels_font_size', 'udesly_customizer[' . $this->plugin_name . '][woo_products_table_labels_font_size]', __( 'Products Table Labels Font Size (em)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_products_table_labels_font_size'] ) ? $this->saved_settings['woo_products_table_labels_font_size'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_products_table_labels_font_size'], 0, 1000, '', '', '', 1 );
		$table->add_color_picker( 'woo_products_table_labels_font_color', 'udesly_customizer[' . $this->plugin_name . '][woo_products_table_labels_font_color]', __( 'Products Table Labels Font Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_products_table_labels_font_color'] ) ? $this->saved_settings['woo_products_table_labels_font_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_products_table_labels_font_color'], '', '', '' );
		$table->add_break_line_border();
		$table->add_title('Texts Settings:','xsmall','');
		$table->add_number( 'woo_products_table_texts_font_size', 'udesly_customizer[' . $this->plugin_name . '][woo_products_table_texts_font_size]', __( 'Products Table Texts Font Size (em)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_products_table_texts_font_size'] ) ? $this->saved_settings['woo_products_table_texts_font_size'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_products_table_texts_font_size'], 0, 1000, '', '', '', 1 );
		$table->add_color_picker( 'woo_products_table_texts_font_color', 'udesly_customizer[' . $this->plugin_name . '][woo_products_table_texts_font_color]', __( 'Products Table Texts Font Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_products_table_texts_font_color'] ) ? $this->saved_settings['woo_products_table_texts_font_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_products_table_texts_font_color'], '', '', '' );

		// Form
		$form = new Form();
		$form->add_color_picker( 'woo_form_input_background_color', 'udesly_customizer[' . $this->plugin_name . '][woo_form_input_background_color]', __( 'Form Input Background Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_form_input_background_color'] ) ? $this->saved_settings['woo_form_input_background_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_input_background_color'], '', '', '' );
		$form->add_color_picker( 'woo_form_input_color', 'udesly_customizer[' . $this->plugin_name . '][woo_form_input_color]', __( 'Form Input Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_form_input_color'] ) ? $this->saved_settings['woo_form_input_color'] : '#333333', '', '', '' );
		$form->add_color_picker( 'woo_form_input_placeholder_color', 'udesly_customizer[' . $this->plugin_name . '][woo_form_input_placeholder_color]', __( 'Form Input Placeholder Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_form_input_placeholder_color'] ) ? $this->saved_settings['woo_form_input_placeholder_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_input_placeholder_color'], '', '', '' );
		$form->add_break_line();
		$form->add_color_picker( 'woo_form_input_border_color', 'udesly_customizer[' . $this->plugin_name . '][woo_form_input_border_color]', __( 'Form Input Border Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_form_input_border_color'] ) ? $this->saved_settings['woo_form_input_border_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_input_border_color'], '', '', '' );
		$form->add_number( 'woo_form_input_border_size', 'udesly_customizer[' . $this->plugin_name . '][woo_form_input_border_size]', __( 'Form Input Border Size', i18n::$textdomain ), '', isset( $this->saved_settings['woo_form_input_border_size'] ) ? $this->saved_settings['woo_form_input_border_size'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_input_border_size'], 0, 1000, '', '', '', 1 );
		$form->add_break_line();
		$form->add_number( 'woo_form_input_padding', 'udesly_customizer[' . $this->plugin_name . '][woo_form_input_padding]', __( 'Form Input Padding (em)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_form_input_padding'] ) ? $this->saved_settings['woo_form_input_padding'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_input_padding'], 0, 1000, '', '', '', 0.01 );
		$form->add_number( 'woo_form_input_border_radius', 'udesly_customizer[' . $this->plugin_name . '][woo_form_input_border_radius]', __( 'Form Input Border Radius', i18n::$textdomain ), '', isset( $this->saved_settings['woo_form_input_border_radius'] ) ? $this->saved_settings['woo_form_input_border_radius'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_input_border_radius'], 0, 1000, '', '', '', 1 );
		$form->add_break_line_border();
		$form->add_title('Labels Settings:','xsmall','');
		$form->add_break_line();
		$form->add_number( 'woo_form_labels_font_size', 'udesly_customizer[' . $this->plugin_name . '][woo_form_labels_font_size]', __( 'Form Labels Font Size (px)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_form_labels_font_size'] ) ? $this->saved_settings['woo_form_labels_font_size'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_labels_font_size'], 0, 1000, '', '', '', 1 );
		$form->add_number( 'woo_form_title_font_size', 'udesly_customizer[' . $this->plugin_name . '][woo_form_title_font_size]', __( 'Form Title Font Size (px)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_form_title_font_size'] ) ? $this->saved_settings['woo_form_title_font_size'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_title_font_size'], 0, 1000, '', '', '', 1 );
		$form->add_break_line();
		$form->add_color_picker( 'woo_form_labels_font_color', 'udesly_customizer[' . $this->plugin_name . '][woo_form_labels_font_color]', __( 'Form Labels Font Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_form_labels_font_color'] ) ? $this->saved_settings['woo_form_labels_font_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_labels_font_color'], '', '', '' );
		$form->add_color_picker( 'woo_form_title_color', 'udesly_customizer[' . $this->plugin_name . '][woo_form_title_color]', __( 'Form Title Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_form_title_color'] ) ? $this->saved_settings['woo_form_title_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_title_color'], '', '', '' );
		$form->add_break_line_border();
		$form->add_title('Select 2:','xsmall','');
		$form->add_number( 'woo_form_select2_height', 'udesly_customizer[' . $this->plugin_name . '][woo_form_select2_height]', __( 'Select2 height (px)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_form_select2_height'] ) ? $this->saved_settings['woo_form_select2_height'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_select2_height'], 0, 1000, '', '', '', 1 );
		$form->add_number( 'woo_form_select2_padding', 'udesly_customizer[' . $this->plugin_name . '][woo_form_select2_padding]', __( 'Select2 padding (px)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_form_select2_padding'] ) ? $this->saved_settings['woo_form_select2_padding'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_form_select2_padding'], 0, 1000, '', '', '', 1 );
		$form->add_break_line_border();
		$form->add_title('Checkout Payment:','xsmall','');
		$form->add_color_picker( 'woo_checkout_payment_background_color', 'udesly_customizer[' . $this->plugin_name . '][woo_checkout_payment_background_color]', __( 'Checkout Payment Background Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_checkout_payment_background_color'] ) ? $this->saved_settings['woo_checkout_payment_background_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_checkout_payment_background_color'], '', '', '' );
		$form->add_color_picker( 'woo_checkout_payment_text_color', 'udesly_customizer[' . $this->plugin_name . '][woo_checkout_payment_text_color]', __( 'Checkout Payment Text Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_checkout_payment_text_color'] ) ? $this->saved_settings['woo_checkout_payment_text_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_checkout_payment_text_color'], '', '', '' );
		$form->add_break_line_border();
		$form->add_title('Coupon code:','xsmall','');
		$form->add_number( 'woo_coupon_code_width', 'udesly_customizer[' . $this->plugin_name . '][woo_coupon_code_width]', __( 'Coupon Code Input Width (px)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_coupon_code_width'] ) ? $this->saved_settings['woo_coupon_code_width'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_coupon_code_width'], 0, 1000, '', '', '', 1 );

		// Product
		$product = new Form();
		$product->add_color_picker( 'woo_product_button_font_color', 'udesly_customizer[' . $this->plugin_name . '][woo_product_button_font_color]', __( 'Product Button Font Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_button_font_color'] ) ? $this->saved_settings['woo_product_button_font_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_button_font_color'], '', '', '' );
		$product->add_color_picker( 'woo_product_button_color', 'udesly_customizer[' . $this->plugin_name . '][woo_product_button_color]', __( 'Product Button Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_button_color'] ) ? $this->saved_settings['woo_product_button_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_button_color'], '', '', '' );
		$product->add_break_line();
		$product->add_color_picker( 'woo_product_button_color_hover', 'udesly_customizer[' . $this->plugin_name . '][woo_product_button_color_hover]', __( 'Product Button Color Hover', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_button_color_hover'] ) ? $this->saved_settings['woo_product_button_color_hover'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_button_color_hover'], '', '', '' );
		$product->add_color_picker( 'woo_product_input_background_color', 'udesly_customizer[' . $this->plugin_name . '][woo_product_input_background_color]', __( 'Product Input Background Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_input_background_color'] ) ? $this->saved_settings['woo_product_input_background_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_input_background_color'], '', '', '' );
		$product->add_break_line();
		$product->add_color_picker( 'woo_product_input_color', 'udesly_customizer[' . $this->plugin_name . '][woo_product_input_color]', __( 'Product Input Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_input_color'] ) ? $this->saved_settings['woo_product_input_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_input_color'], '', '', '' );
		$product->add_color_picker( 'woo_product_input_label_color', 'udesly_customizer[' . $this->plugin_name . '][woo_product_input_label_color]', __( 'Product Label Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_input_label_color'] ) ? $this->saved_settings['woo_product_input_label_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_input_label_color'], '', '', '' );
		$product->add_break_line();
		$product->add_number( 'woo_product_input_padding', 'udesly_customizer[' . $this->plugin_name . '][woo_product_input_padding]', __( 'Product Input Padding (px)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_input_padding'] ) ? $this->saved_settings['woo_product_input_padding'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_input_padding'], 0, 1000, '', '', '', 1 );
		$product->add_number( 'woo_product_input_label_font_size', 'udesly_customizer[' . $this->plugin_name . '][woo_product_input_label_font_size]', __( 'Product Label Input Font Size (px)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_input_label_font_size'] ) ? $this->saved_settings['woo_product_input_label_font_size'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_input_label_font_size'], 0, 1000, '', '', '', 1 );
		$product->add_break_line();
		$product->add_number( 'woo_product_button_padding', 'udesly_customizer[' . $this->plugin_name . '][woo_product_button_padding]', __( 'Product Button Padding (px)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_button_padding'] ) ? $this->saved_settings['woo_product_button_padding'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_button_padding'], 0, 1000, '', '', '', 1 );
		$product->add_number( 'woo_product_button_margin', 'udesly_customizer[' . $this->plugin_name . '][woo_product_button_margin]', __( 'Product Button Margin (px)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_button_margin'] ) ? $this->saved_settings['woo_product_button_margin'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_button_margin'], 0, 1000, '', '', '', 1 );
		$product->add_break_line();
		$product->add_number( 'woo_product_variations_select_height', 'udesly_customizer[' . $this->plugin_name . '][woo_product_variations_select_height]', __( 'Product Button Margin (px)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_variations_select_height'] ) ? $this->saved_settings['woo_product_variations_select_height'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_variations_select_height'], 0, 1000, '', '', '', 1 );
		$product->add_number( 'woo_product_variations_reset_margin', 'udesly_customizer[' . $this->plugin_name . '][woo_product_variations_reset_margin]', __( 'Product Button Padding (px)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_variations_reset_margin'] ) ? $this->saved_settings['woo_product_variations_reset_margin'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_variations_reset_margin'], 0, 1000, '', '', '', 1 );
		$product->add_number( 'woo_product_variations_label_margin', 'udesly_customizer[' . $this->plugin_name . '][woo_product_variations_label_margin]', __( 'Product Button Padding (px)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_variations_label_margin'] ) ? $this->saved_settings['woo_product_variations_label_margin'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_variations_label_margin'], 0, 1000, '', '', '', 1 );
		$product->add_number( 'woo_product_variations_add_to_cart_btn_margin_top', 'udesly_customizer[' . $this->plugin_name . '][woo_product_variations_add_to_cart_btn_margin_top]', __( 'Product Button Padding (px)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_variations_add_to_cart_btn_margin_top'] ) ? $this->saved_settings['woo_product_variations_add_to_cart_btn_margin_top'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_variations_add_to_cart_btn_margin_top'], 0, 1000, '', '', '', 1 );
		$product->add_number( 'woo_product_variations_add_to_cart_btn_margin_left', 'udesly_customizer[' . $this->plugin_name . '][woo_product_variations_add_to_cart_btn_margin_left]', __( 'Product Button Padding (px)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_variations_add_to_cart_btn_margin_left'] ) ? $this->saved_settings['woo_product_variations_add_to_cart_btn_margin_left'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_variations_add_to_cart_btn_margin_left'], 0, 1000, '', '', '', 1 );
		$product->add_break_line();
		$product->add_number( 'woo_product_button_border_radius', 'udesly_customizer[' . $this->plugin_name . '][woo_product_button_border_radius]', __( 'Product Button Border Radius', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_button_border_radius'] ) ? $this->saved_settings['woo_product_button_border_radius'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_button_border_radius'], 0, 1000, '', '', '', 1 );
		$product->add_number( 'woo_product_input_border_radius', 'udesly_customizer[' . $this->plugin_name . '][woo_product_input_border_radius]', __( 'Product Input Border Radius', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_input_border_radius'] ) ? $this->saved_settings['woo_product_input_border_radius'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_input_border_radius'], 0, 1000, '', '', '', 1 );
		$product->add_break_line_border();
		$product->add_title('Reviews:','xsmall','');
		$product->add_break_line();
		$product->add_number( 'woo_product_tab_table_border_size', 'udesly_customizer[' . $this->plugin_name . '][woo_product_tab_table_border_size]', __( 'Products Tab Table Border Size (px)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_tab_table_border_size'] ) ? $this->saved_settings['woo_product_tab_table_border_size'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_tab_table_border_size'], 0, 1000, '', '', '', 1 );
		$product->add_number( 'woo_product_tab_table_border_padding', 'udesly_customizer[' . $this->plugin_name . '][woo_product_tab_table_border_padding]', __( 'Products Tab Table Padding (px)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_tab_table_border_padding'] ) ? $this->saved_settings['woo_product_tab_table_border_padding'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_tab_table_border_padding'], 0, 1000, '', '', '', 1 );
		$product->add_break_line();
		$product->add_color_picker( 'woo_product_table_border_color', 'udesly_customizer[' . $this->plugin_name . '][woo_product_table_border_color]', __( 'Product Tab Table Border Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_table_border_color'] ) ? $this->saved_settings['woo_product_table_border_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_table_border_color'], '', '', '' );
		$product->add_color_picker( 'woo_product_review_stars_color', 'udesly_customizer[' . $this->plugin_name . '][woo_product_review_stars_color]', __( 'Product Stars Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_product_review_stars_color'] ) ? $this->saved_settings['woo_product_review_stars_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_product_review_stars_color'], '', '', '' );

		// Sidebar
		$sidebar = new Form();
		$sidebar->add_color_picker( 'woo_sidebar_slider_background_color', 'udesly_customizer[' . $this->plugin_name . '][woo_sidebar_slider_background_color]', __( 'Price Filter Slider Background Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_sidebar_slider_background_color'] ) ? $this->saved_settings['woo_sidebar_slider_background_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_sidebar_slider_background_color'], '', '', '' );
		$sidebar->add_color_picker( 'woo_sidebar_slider_range_background_color', 'udesly_customizer[' . $this->plugin_name . '][woo_sidebar_slider_range_background_color]', __( 'Price Filter Range Slider Background Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_sidebar_slider_range_background_color'] ) ? $this->saved_settings['woo_sidebar_slider_range_background_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_sidebar_slider_range_background_color'], '', '', '' );
		$sidebar->add_color_picker( 'woo_sidebar_slider_handler_background_color', 'udesly_customizer[' . $this->plugin_name . '][woo_sidebar_slider_handler_background_color]', __( 'Price Filter Slider Handle Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_sidebar_slider_handler_background_color'] ) ? $this->saved_settings['woo_sidebar_slider_handler_background_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_sidebar_slider_handler_background_color'], '', '', '' );
		$sidebar->add_color_picker( 'woo_sidebar_price_range_color', 'udesly_customizer[' . $this->plugin_name . '][woo_sidebar_price_range_color]', __( 'Price Range Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_sidebar_price_range_color'] ) ? $this->saved_settings['woo_sidebar_price_range_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_sidebar_price_range_color'], '', '', '' );

		// Sidebar
		$font = new Form();
		$font->add_text('woo_general_font','udesly_customizer[' . $this->plugin_name . '][woo_general_font]',__( 'General Font', i18n::$textdomain ),'',isset( $this->saved_settings['woo_general_font'] ) ? $this->saved_settings['woo_general_font'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_general_font'], __('Font used in the webflow missing elements like table, etc.', i18n::$textdomain),'','');

		// Notifications info
		$notification = new Form();
		$notification->add_title('Information Notification','xsmall','');
		$notification->add_color_picker( 'woo_notification_info_background_color', 'udesly_customizer[' . $this->plugin_name . '][woo_notification_info_background_color]', __( 'Info Background Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_notification_info_background_color'] ) ? $this->saved_settings['woo_notification_info_background_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_info_background_color'], '', '', '' );
		$notification->add_color_picker( 'woo_notification_info_text_color', 'udesly_customizer[' . $this->plugin_name . '][woo_notification_info_text_color]', __( 'Info Text Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_notification_info_text_color'] ) ? $this->saved_settings['woo_notification_info_text_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_info_text_color'], '', '', '' );
		$notification->add_break_line();
		$notification->add_color_picker( 'woo_notification_info_border_color', 'udesly_customizer[' . $this->plugin_name . '][woo_notification_info_border_color]', __( 'Info Border Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_notification_info_border_color'] ) ? $this->saved_settings['woo_notification_info_border_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_info_border_color'], '', '', '' );
		$notification->add_number( 'woo_notification_info_border_size', 'udesly_customizer[' . $this->plugin_name . '][woo_notification_info_border_size]', __( 'Info Border Size (px)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_notification_info_border_size'] ) ? $this->saved_settings['woo_notification_info_border_size'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_info_border_size'], 0, 1000, '', '', '', 1 );
		$notification->add_break_line();

		// Notifications error
		$notification->add_title('Error Notification','xsmall','');
		$notification->add_color_picker( 'woo_notification_error_background_color', 'udesly_customizer[' . $this->plugin_name . '][woo_notification_error_background_color]', __( 'Error Background Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_notification_error_background_color'] ) ? $this->saved_settings['woo_notification_error_background_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_error_background_color'], '', '', '' );
		$notification->add_color_picker( 'woo_notification_error_text_color', 'udesly_customizer[' . $this->plugin_name . '][woo_notification_error_text_color]', __( 'Error Text Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_notification_error_text_color'] ) ? $this->saved_settings['woo_notification_error_text_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_error_text_color'], '', '', '' );
		$notification->add_break_line();
		$notification->add_color_picker( 'woo_notification_error_border_color', 'udesly_customizer[' . $this->plugin_name . '][woo_notification_error_border_color]', __( 'Error Border Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_notification_error_border_color'] ) ? $this->saved_settings['woo_notification_error_border_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_error_border_color'], '', '', '' );
		$notification->add_number( 'woo_notification_error_border_size', 'udesly_customizer[' . $this->plugin_name . '][woo_notification_error_border_size]', __( 'Error Border Size (px)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_notification_error_border_size'] ) ? $this->saved_settings['woo_notification_error_border_size'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_error_border_size'], 0, 1000, '', '', '', 1 );
		$notification->add_break_line();

		// Notifications success
		$notification->add_title('Message Notification','xsmall','');
		$notification->add_color_picker( 'woo_notification_message_background_color', 'udesly_customizer[' . $this->plugin_name . '][woo_notification_message_background_color]', __( 'Message Background Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_notification_message_background_color'] ) ? $this->saved_settings['woo_notification_message_background_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_message_background_color'], '', '', '' );
		$notification->add_color_picker( 'woo_notification_message_text_color', 'udesly_customizer[' . $this->plugin_name . '][woo_notification_message_text_color]', __( 'Message Text Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_notification_message_text_color'] ) ? $this->saved_settings['woo_notification_message_text_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_message_text_color'], '', '', '' );
		$notification->add_break_line();
		$notification->add_color_picker( 'woo_notification_message_border_color', 'udesly_customizer[' . $this->plugin_name . '][woo_notification_message_border_color]', __( 'Message Border Color', i18n::$textdomain ), '', isset( $this->saved_settings['woo_notification_message_border_color'] ) ? $this->saved_settings['woo_notification_message_border_color'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_message_border_color'], '', '', '' );
		$notification->add_number( 'woo_notification_message_border_size', 'udesly_customizer[' . $this->plugin_name . '][woo_notification_message_border_size]', __( 'Message Border Size (px)', i18n::$textdomain ), '', isset( $this->saved_settings['woo_notification_message_border_size'] ) ? $this->saved_settings['woo_notification_message_border_size'] : Woocommerce_Init_Settings::$settings['woocommerce']['woo_notification_message_border_size'], 0, 1000, '', '', '', 1 );

		$accordion = new Accordions();
		$accordion->add_accordion( Icon::faIcon('hand-pointer', true, Icon_Type::SOLID()) . 'Buttons style', 'woo-btn-style', $btn_style->get_form(), '', 1 );
		$accordion->add_accordion( Icon::faIcon('table', true, Icon_Type::SOLID()) . 'Table', 'woo-table', $table->get_form(), '', 2 );
		$accordion->add_accordion( Icon::faIcon('edit', true, Icon_Type::SOLID()) . 'Form', 'woo-form', $form->get_form(), '', 3 );
		$accordion->add_accordion( Icon::faIcon('archive', true, Icon_Type::SOLID()) . 'Product', 'woo-product', $product->get_form(), '', 4 );
		$accordion->add_accordion( Icon::faIcon('square', true, Icon_Type::SOLID()) . 'Sidebar', 'woo-sidebar', $sidebar->get_form(), '', 5 );
		$accordion->add_accordion( Icon::faIcon('font', true, Icon_Type::SOLID()) . 'Font', 'woo-font', $font->get_form(), '', 6 );
		$accordion->add_accordion( Icon::faIcon('comment-alt', true, Icon_Type::SOLID()) . 'Notifications', 'woo-notifications', $notification->get_form(), '', 7 );

		$tab->add_tab( __( 'WooCommerce', i18n::$textdomain ), 'woocommerce', $accordion->show_accordions(), Icon::faIcon( 'shopping-cart', true, Icon_Type::SOLID() ), 0 );

		return $tab;
	}

	public function can_be_activated() {
		if(is_plugin_active('woocommerce/woocommerce.php')){
			return true;
		}
		return false;
	}
}