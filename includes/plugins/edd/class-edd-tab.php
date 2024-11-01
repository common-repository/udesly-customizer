<?php
/**
 * Created by PhpStorm.
 * User: umberto
 * Date: 26/07/2018
 * Time: 17:30
 */

namespace UdeslyCustomizer\Plugins\Edd;

use UdeslyCustomizer\i18n\i18n;
use UdeslyCustomizer\Interfaces\iCustomizer;
use UdeslyCustomizer\Ui\Accordions;
use UdeslyCustomizer\Ui\Form;
use UdeslyCustomizer\Ui\Icon;
use UdeslyCustomizer\Ui\Icon_Type;
use UdeslyCustomizer\Ui\Tabs;

class Edd_Tab implements iCustomizer {

	private $saved_settings;
	private $plugin_name;

	public function __construct( $saved_settings ) {
		$this->plugin_name = basename(__DIR__);
		$this->saved_settings = isset($saved_settings[$this->plugin_name]) ? $saved_settings[$this->plugin_name] : [];
	}

	public function get_customizer( Tabs $tab ) {

		// Buttons style
		$btn_style = new Form();
		$btn_style->add_number( 'edd_btn_font_size', 'udesly_customizer[' . $this->plugin_name . '][edd_btn_font_size]', __( 'Buttons Font Size (em)', i18n::$textdomain ), '', isset( $this->saved_settings['edd_btn_font_size'] ) ? $this->saved_settings['edd_btn_font_size'] : Edd_Init_Settings::$settings['edd']['edd_btn_font_size'], 0, 1000, '', '', '', 0.1 );
		$btn_style->add_break_line();
		$btn_style->add_color_picker( 'edd_btn_font_color', 'udesly_customizer[' . $this->plugin_name . '][edd_btn_font_color]', __( 'Buttons Font Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_btn_font_color'] ) ? $this->saved_settings['edd_btn_font_color'] : Edd_Init_Settings::$settings['edd']['edd_btn_font_color'], '', '', '' );
		$btn_style->add_color_picker( 'edd_btn_font_color_hover', 'udesly_customizer[' . $this->plugin_name . '][edd_btn_font_color_hover]', __( 'Buttons Font Color Hover', i18n::$textdomain ), '', isset( $this->saved_settings['edd_btn_font_color_hover'] ) ? $this->saved_settings['edd_btn_font_color_hover'] : Edd_Init_Settings::$settings['edd']['edd_btn_font_color_hover'], '', '', '' );
		$btn_style->add_break_line();
		$btn_style->add_color_picker( 'edd_btn_background_color', 'udesly_customizer[' . $this->plugin_name . '][edd_btn_background_color]', __( 'Buttons Background Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_btn_background_color'] ) ? $this->saved_settings['edd_btn_background_color'] : Edd_Init_Settings::$settings['edd']['edd_btn_background_color'], '', '', '' );
		$btn_style->add_color_picker( 'edd_btn_background_color_hover', 'udesly_customizer[' . $this->plugin_name . '][edd_btn_background_color_hover]', __( 'Buttons Background Color Hover', i18n::$textdomain ), '', isset( $this->saved_settings['edd_btn_background_color_hover'] ) ? $this->saved_settings['edd_btn_background_color_hover'] : Edd_Init_Settings::$settings['edd']['edd_btn_background_color_hover'], '', '', '' );
		$btn_style->add_break_line();
		$btn_style->add_number( 'edd_btn_border_size', 'udesly_customizer[' . $this->plugin_name . '][edd_btn_border_size]', __( 'Buttons Border Size (px)', i18n::$textdomain ), '', isset( $this->saved_settings['edd_btn_border_size'] ) ? $this->saved_settings['edd_btn_border_size'] : Edd_Init_Settings::$settings['edd']['edd_btn_border_size'], 0, 1000, '', '', '', 1 );
		$btn_style->add_break_line();
		$btn_style->add_color_picker( 'edd_btn_border_color', 'udesly_customizer[' . $this->plugin_name . '][edd_btn_border_color]', __( 'Buttons Border Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_btn_border_color'] ) ? $this->saved_settings['edd_btn_border_color'] : Edd_Init_Settings::$settings['edd']['edd_btn_border_color'], '', '', '' );
		$btn_style->add_break_line();
		$btn_style->add_number( 'edd_btn_border_radius', 'udesly_customizer[' . $this->plugin_name . '][edd_btn_border_radius]', __( 'Buttons Border Radius', i18n::$textdomain ), '', isset( $this->saved_settings['edd_btn_border_radius'] ) ? $this->saved_settings['edd_btn_border_radius'] : Edd_Init_Settings::$settings['edd']['edd_btn_border_radius'], 0, 1000, '', '', '', 1 );
		$btn_style->add_wp_nonce( 'save_udesly_customizer', 'save_udesly_customizer_nonce' );
		$btn_style->add_hidden( 'udesly_save_customizer', 'action', 'udesly_save_customizer' );

		// Table
		$table = new Form();
		$table->add_number( 'edd_table_padding', 'udesly_customizer[' . $this->plugin_name . '][edd_table_padding]', __( 'Table Padding (em)', i18n::$textdomain ), '', isset( $this->saved_settings['edd_table_padding'] ) ? $this->saved_settings['edd_table_padding'] : Edd_Init_Settings::$settings['edd']['edd_table_padding'], 0, 1000, '', '', '', 0.01 );
		$table->add_break_line();
		$table->add_color_picker( 'edd_header_background_color', 'udesly_customizer[' . $this->plugin_name . '][edd_header_background_color]', __( 'Header Background Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_header_background_color'] ) ? $this->saved_settings['edd_header_background_color'] : Edd_Init_Settings::$settings['edd']['edd_header_background_color'], '', '', '' );
		$table->add_color_picker( 'edd_product_background_color', 'udesly_customizer[' . $this->plugin_name . '][edd_product_background_color]', __( 'Product Background Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_product_background_color'] ) ? $this->saved_settings['edd_product_background_color'] : Edd_Init_Settings::$settings['edd']['edd_product_background_color'], '', '', '' );
		$table->add_break_line();
		$table->add_number( 'edd_product_table_border_size', 'udesly_customizer[' . $this->plugin_name . '][edd_product_table_border_size]', __( 'Products Table Border Size (px)', i18n::$textdomain ), '', isset( $this->saved_settings['edd_product_table_border_size'] ) ? $this->saved_settings['edd_product_table_border_size'] : Edd_Init_Settings::$settings['edd']['edd_product_table_border_size'], 0, 1000, '', '', '', 1 );
		$table->add_color_picker( 'edd_table_border_color', 'udesly_customizer[' . $this->plugin_name . '][edd_table_border_color]', __( 'Products Table Border Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_table_border_color'] ) ? $this->saved_settings['edd_table_border_color'] : Edd_Init_Settings::$settings['edd']['edd_table_border_color'], '', '', '' );
		$table->add_break_line_border();
		$table->add_title('Labels Settings:','xsmall','');
		$table->add_break_line();
		$table->add_number( 'edd_products_table_labels_font_size', 'udesly_customizer[' . $this->plugin_name . '][edd_products_table_labels_font_size]', __( 'Products Table Labels Font Size (em)', i18n::$textdomain ), '', isset( $this->saved_settings['edd_products_table_labels_font_size'] ) ? $this->saved_settings['edd_products_table_labels_font_size'] : Edd_Init_Settings::$settings['edd']['edd_products_table_labels_font_size'], 0, 1000, '', '', '', 1 );
		$table->add_color_picker( 'edd_products_table_labels_font_color', 'udesly_customizer[' . $this->plugin_name . '][edd_products_table_labels_font_color]', __( 'Products Table Labels Font Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_products_table_labels_font_color'] ) ? $this->saved_settings['edd_products_table_labels_font_color'] : Edd_Init_Settings::$settings['edd']['edd_products_table_labels_font_color'], '', '', '' );
		$table->add_break_line_border();
		$table->add_title('Texts Settings:','xsmall','');
		$table->add_number( 'edd_products_table_texts_font_size', 'udesly_customizer[' . $this->plugin_name . '][edd_products_table_texts_font_size]', __( 'Products Table Texts Font Size (em)', i18n::$textdomain ), '', isset( $this->saved_settings['edd_products_table_texts_font_size'] ) ? $this->saved_settings['edd_products_table_texts_font_size'] : Edd_Init_Settings::$settings['edd']['edd_products_table_texts_font_size'], 0, 1000, '', '', '', 1 );
		$table->add_color_picker( 'edd_products_table_texts_font_color', 'udesly_customizer[' . $this->plugin_name . '][edd_products_table_texts_font_color]', __( 'Products Table Texts Font Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_products_table_texts_font_color'] ) ? $this->saved_settings['edd_products_table_texts_font_color'] : Edd_Init_Settings::$settings['edd']['edd_products_table_texts_font_color'], '', '', '' );

		// Form
		$form = new Form();
		$form->add_color_picker( 'edd_form_input_background_color', 'udesly_customizer[' . $this->plugin_name . '][edd_form_input_background_color]', __( 'Form Input Background Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_form_input_background_color'] ) ? $this->saved_settings['edd_form_input_background_color'] : Edd_Init_Settings::$settings['edd']['edd_form_input_background_color'], '', '', '' );
		$form->add_color_picker( 'edd_form_input_color', 'udesly_customizer[' . $this->plugin_name . '][edd_form_input_color]', __( 'Form Input Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_form_input_color'] ) ? $this->saved_settings['edd_form_input_color'] : '#333333', '', '', '' );
		$form->add_color_picker( 'edd_form_input_placeholder_color', 'udesly_customizer[' . $this->plugin_name . '][edd_form_input_placeholder_color]', __( 'Form Input Placeholder Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_form_input_placeholder_color'] ) ? $this->saved_settings['edd_form_input_placeholder_color'] : Edd_Init_Settings::$settings['edd']['edd_form_input_placeholder_color'], '', '', '' );
		$form->add_break_line();
		$form->add_color_picker( 'edd_form_input_border_color', 'udesly_customizer[' . $this->plugin_name . '][edd_form_input_border_color]', __( 'Form Input Border Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_form_input_border_color'] ) ? $this->saved_settings['edd_form_input_border_color'] : Edd_Init_Settings::$settings['edd']['edd_form_input_border_color'], '', '', '' );
		$form->add_number( 'edd_form_input_border_size', 'udesly_customizer[' . $this->plugin_name . '][edd_form_input_border_size]', __( 'Form Input Border Size', i18n::$textdomain ), '', isset( $this->saved_settings['edd_form_input_border_size'] ) ? $this->saved_settings['edd_form_input_border_size'] : Edd_Init_Settings::$settings['edd']['edd_form_input_border_size'], 0, 1000, '', '', '', 1 );
		$form->add_break_line();
		$form->add_number( 'edd_form_input_padding', 'udesly_customizer[' . $this->plugin_name . '][edd_form_input_padding]', __( 'Form Input Padding (em)', i18n::$textdomain ), '', isset( $this->saved_settings['edd_form_input_padding'] ) ? $this->saved_settings['edd_form_input_padding'] : Edd_Init_Settings::$settings['edd']['edd_form_input_padding'], 0, 1000, '', '', '', 0.01 );
		$form->add_number( 'edd_form_input_border_radius', 'udesly_customizer[' . $this->plugin_name . '][edd_form_input_border_radius]', __( 'Form Input Border Radius', i18n::$textdomain ), '', isset( $this->saved_settings['edd_form_input_border_radius'] ) ? $this->saved_settings['edd_form_input_border_radius'] : Edd_Init_Settings::$settings['edd']['edd_form_input_border_radius'], 0, 1000, '', '', '', 1 );
		$form->add_break_line_border();
		$form->add_title('Labels Settings:','xsmall','');
		$form->add_break_line();
		$form->add_number( 'edd_form_labels_font_size', 'udesly_customizer[' . $this->plugin_name . '][edd_form_labels_font_size]', __( 'Form Labels Font Size (px)', i18n::$textdomain ), '', isset( $this->saved_settings['edd_form_labels_font_size'] ) ? $this->saved_settings['edd_form_labels_font_size'] : Edd_Init_Settings::$settings['edd']['edd_form_labels_font_size'], 0, 1000, '', '', '', 1 );
		$form->add_number( 'edd_form_title_font_size', 'udesly_customizer[' . $this->plugin_name . '][edd_form_title_font_size]', __( 'Form Title Font Size (px)', i18n::$textdomain ), '', isset( $this->saved_settings['edd_form_title_font_size'] ) ? $this->saved_settings['edd_form_title_font_size'] : Edd_Init_Settings::$settings['edd']['edd_form_title_font_size'], 0, 1000, '', '', '', 1 );
		$form->add_break_line();
		$form->add_color_picker( 'edd_form_labels_font_color', 'udesly_customizer[' . $this->plugin_name . '][edd_form_labels_font_color]', __( 'Form Labels Font Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_form_labels_font_color'] ) ? $this->saved_settings['edd_form_labels_font_color'] : Edd_Init_Settings::$settings['edd']['edd_form_labels_font_color'], '', '', '' );
		$form->add_color_picker( 'edd_form_title_color', 'udesly_customizer[' . $this->plugin_name . '][edd_form_title_color]', __( 'Form Title Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_form_title_color'] ) ? $this->saved_settings['edd_form_title_color'] : Edd_Init_Settings::$settings['edd']['edd_form_title_color'], '', '', '' );

		// Notifications error
		$notification = new Form();
		$notification->add_title('Error Notification','xsmall','');
		$notification->add_color_picker( 'edd_notification_error_background_color', 'udesly_customizer[' . $this->plugin_name . '][edd_notification_error_background_color]', __( 'Error Background Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_notification_error_background_color'] ) ? $this->saved_settings['edd_notification_error_background_color'] : Edd_Init_Settings::$settings['edd']['edd_notification_error_background_color'], '', '', '' );
		$notification->add_color_picker( 'edd_notification_error_text_color', 'udesly_customizer[' . $this->plugin_name . '][edd_notification_error_text_color]', __( 'Error Text Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_notification_error_text_color'] ) ? $this->saved_settings['edd_notification_error_text_color'] : Edd_Init_Settings::$settings['edd']['edd_notification_error_text_color'], '', '', '' );
		$notification->add_color_picker( 'edd_notification_error_border_color', 'udesly_customizer[' . $this->plugin_name . '][edd_notification_error_border_color]', __( 'Error Border Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_notification_error_border_color'] ) ? $this->saved_settings['edd_notification_error_border_color'] : Edd_Init_Settings::$settings['edd']['edd_notification_error_border_color'], '', '', '' );
		$notification->add_break_line_border();
		$notification->add_title('Success Notification','xsmall','');
		$notification->add_color_picker( 'edd_notification_success_background_color', 'udesly_customizer[' . $this->plugin_name . '][edd_notification_success_background_color]', __( 'Success Background Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_notification_success_background_color'] ) ? $this->saved_settings['edd_notification_success_background_color'] : Edd_Init_Settings::$settings['edd']['edd_notification_success_background_color'], '', '', '' );
		$notification->add_color_picker( 'edd_notification_success_text_color', 'udesly_customizer[' . $this->plugin_name . '][edd_notification_success_text_color]', __( 'Success Text Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_notification_success_text_color'] ) ? $this->saved_settings['edd_notification_success_text_color'] : Edd_Init_Settings::$settings['edd']['edd_notification_success_text_color'], '', '', '' );
		$notification->add_color_picker( 'edd_notification_success_border_color', 'udesly_customizer[' . $this->plugin_name . '][edd_notification_success_border_color]', __( 'Success Border Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_notification_success_border_color'] ) ? $this->saved_settings['edd_notification_success_border_color'] : Edd_Init_Settings::$settings['edd']['edd_notification_success_border_color'], '', '', '' );
		$notification->add_break_line_border();
		$notification->add_title('Info Notification','xsmall','');
		$notification->add_color_picker( 'edd_notification_info_background_color', 'udesly_customizer[' . $this->plugin_name . '][edd_notification_info_background_color]', __( 'Info Background Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_notification_info_background_color'] ) ? $this->saved_settings['edd_notification_info_background_color'] : Edd_Init_Settings::$settings['edd']['edd_notification_info_background_color'], '', '', '' );
		$notification->add_color_picker( 'edd_notification_info_text_color', 'udesly_customizer[' . $this->plugin_name . '][edd_notification_info_text_color]', __( 'Info Text Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_notification_info_text_color'] ) ? $this->saved_settings['edd_notification_info_text_color'] : Edd_Init_Settings::$settings['edd']['edd_notification_info_text_color'], '', '', '' );
		$notification->add_color_picker( 'edd_notification_info_border_color', 'udesly_customizer[' . $this->plugin_name . '][edd_notification_info_border_color]', __( 'Info Border Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_notification_info_border_color'] ) ? $this->saved_settings['edd_notification_info_border_color'] : Edd_Init_Settings::$settings['edd']['edd_notification_info_border_color'], '', '', '' );
		$notification->add_break_line_border();
		$notification->add_title('Warning Notification','xsmall','');
		$notification->add_color_picker( 'edd_notification_warn_background_color', 'udesly_customizer[' . $this->plugin_name . '][edd_notification_warn_background_color]', __( 'Warning Background Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_notification_warn_background_color'] ) ? $this->saved_settings['edd_notification_warn_background_color'] : Edd_Init_Settings::$settings['edd']['edd_notification_warn_background_color'], '', '', '' );
		$notification->add_color_picker( 'edd_notification_warn_text_color', 'udesly_customizer[' . $this->plugin_name . '][edd_notification_warn_text_color]', __( 'Warning Text Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_notification_warn_text_color'] ) ? $this->saved_settings['edd_notification_warn_text_color'] : Edd_Init_Settings::$settings['edd']['edd_notification_warn_text_color'], '', '', '' );
		$notification->add_color_picker( 'edd_notification_warn_border_color', 'udesly_customizer[' . $this->plugin_name . '][edd_notification_warn_border_color]', __( 'Warning Border Color', i18n::$textdomain ), '', isset( $this->saved_settings['edd_notification_warn_border_color'] ) ? $this->saved_settings['edd_notification_warn_border_color'] : Edd_Init_Settings::$settings['edd']['edd_notification_warn_border_color'], '', '', '' );
		$notification->add_number( 'edd_notification_border_size', 'udesly_customizer[' . $this->plugin_name . '][edd_notification_border_size]', __( 'Border Size (px)', i18n::$textdomain ), '', isset( $this->saved_settings['edd_notification_border_size'] ) ? $this->saved_settings['edd_notification_border_size'] : Edd_Init_Settings::$settings['edd']['edd_notification_border_size'], 0, 1000, '', '', '', 1 );
		$notification->add_break_line();

		$accordion = new Accordions();
		$accordion->add_accordion( Icon::faIcon('hand-pointer', true, Icon_Type::SOLID()) . 'Buttons style', 'edd-btn-style', $btn_style->get_form(), '', 1 );
		$accordion->add_accordion( Icon::faIcon('table', true, Icon_Type::SOLID()) . 'Table', 'edd-table', $table->get_form(), '', 2 );
		$accordion->add_accordion( Icon::faIcon('edit', true, Icon_Type::SOLID()) . 'Form', 'edd-form', $form->get_form(), '', 3 );
		$accordion->add_accordion( Icon::faIcon('comment-alt', true, Icon_Type::SOLID()) . 'Notifications', 'edd-notifications', $notification->get_form(), '', 4 );

		$tab->add_tab( __( 'Easy Digital Downloads', i18n::$textdomain ), 'edd', $accordion->show_accordions(), Icon::faIcon( 'download', true, Icon_Type::SOLID() ), 5 );

		return $tab;
	}

	public function can_be_activated() {
		if(is_plugin_active('easy-digital-downloads/easy-digital-downloads.php')){
			return true;
		}
		return false;
	}
}