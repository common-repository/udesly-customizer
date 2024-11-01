/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {

    /**
     * BUTTON
     */
    wp.customize( 'woo_btn_font_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce .button' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'woo_btn_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce .button' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'woo_btn_background_color_hover', function( value ) {
        value.bind( function( newval ) {
            $('#woo_btn_background_color_hover').remove();
            $( 'body[udesly-page-name] .woocommerce' ).prepend("<div id='woo_btn_background_color_hover'><style>.woocommerce .button:hover{ background-color: " + newval + " }</style></div>");
        } );
    } );

    wp.customize( 'woo_btn_font_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce .button' ).css( {
                "font-size": newval + "em"
            } );
        } );
    } );

    wp.customize( 'woo_btn_font_color_hover', function( value ) {
        value.bind( function( newval ) {
            $('#woo_btn_font_color_hover').remove();
            $( 'body[udesly-page-name] .woocommerce' ).prepend("<div id='woo_btn_font_color_hover'><style>body[udesly-page-name] .woocommerce .button:hover{ color: " + newval + " }</style></div>");
        } );
    } );

    wp.customize( 'woo_btn_border_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce .button' ).css( {
                "border": newval + "px solid"
            } );
        } );
    } );

    wp.customize( 'woo_btn_border_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce .button' ).css( {
                "border-color": newval
            } );
        } );
    } );

    wp.customize( 'woo_btn_border_radius', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce .button' ).css( {
                "border-radius": newval + "px"
            } );
        } );
    } );

    /**
     * TABLE
     */
    wp.customize( 'woo_table_padding', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce table th, body[udesly-page-name] .woocommerce table td' ).css( {
                "padding": newval + "em"
            } );
        } );
    } );

    wp.customize( 'woo_header_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce table th' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'woo_header_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce table th' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'woo_product_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce table td' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'woo_product_table_border_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce table th, body[udesly-page-name] .woocommerce table td' ).css( {
                "border-width": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_table_border_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce table th, body[udesly-page-name] .woocommerce table td, body[udesly-page-name] .woocommerce table' ).css( {
                "border-color": newval
            } );
        } );
    } );

    wp.customize( 'woo_product_table_corners', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce table' ).css( {
                "border-radius": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_products_table_labels_font_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce table th' ).css( {
                "font-size": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_products_table_labels_font_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce table th' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'woo_products_table_texts_font_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce table td' ).css( {
                "font-size": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_products_table_texts_font_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce table td' ).css( {
                "color": newval
            } );
        } );
    } );

    /**
     * FORM
     */
    wp.customize( 'woo_form_input_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce form input, body[udesly-page-name] .woocommerce form textarea, body[udesly-page-name] .woocommerce form .select2-selection, body[udesly-page-name] .woocommerce form select' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'woo_form_input_padding', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce form input, body[udesly-page-name] .woocommerce form textarea' ).css( {
                "padding": newval + 'em'
            } );
        } );
    } );

    wp.customize( 'woo_form_input_border_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce form input, body[udesly-page-name] .woocommerce form textarea, body[udesly-page-name] .woocommerce form .select2-selection' ).css( {
                "border-width": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_form_input_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce form input, body[udesly-page-name] .woocommerce form textarea, body[udesly-page-name] .woocommerce form .select2-selection span' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'woo_form_title_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce form h3' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'woo_form_input_placeholder_color', function( value ) {
        value.bind( function( newval ) {
            $('#woo_form_input_placeholder_color').remove();
            $( 'body[udesly-page-name] .woocommerce' ).prepend("" +
                "<div id='woo_form_input_placeholder_color'>" +
                    "<style>" +
                        "body[udesly-page-name] .woocommerce form input::-webkit-input-placeholder, " +
                        "body[udesly-page-name] .woocommerce form input::placeholder," +
                        "body[udesly-page-name] .woocommerce form textarea::-webkit-input-placeholder," +
                        "body[udesly-page-name] .woocommerce form textarea::placeholder" +
                        "{ color: " + newval + " }" +
                    "</style>" +
                "</div>");
        } );
    } );

    wp.customize( 'woo_form_input_border_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce form input, body[udesly-page-name] .woocommerce form textarea, body[udesly-page-name] .woocommerce form .select2-selection' ).css( {
                "border-color": newval
            } );
        } );
    } );

    wp.customize( 'woo_form_input_border_radius', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce form input, body[udesly-page-name] .woocommerce form textarea, body[udesly-page-name] .woocommerce form .select2-selection' ).css( {
                "border-radius": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_form_labels_font_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce form label' ).css( {
                "font-size": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_form_title_font_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce form h3' ).css( {
                "font-size": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_form_select2_height', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce form .select2-container .select2-selection--single' ).css( {
                "height": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_form_select2_padding', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce form .select2-container .select2-selection--single' ).css( {
                "padding": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_coupon_code_width', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce .coupon #coupon_code' ).css( {
                "width": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_form_labels_font_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce form label' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'woo_checkout_payment_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce .payment_box' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'woo_checkout_payment_text_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce .payment_box' ).css( {
                "color": newval
            } );
        } );
    } );

    /**
     * PRODUCT
     */
    wp.customize( 'woo_product_button_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name].single-product .udesly-product form button[type="submit"].button, body[udesly-page-name].single-product .udesly-product form input[type="submit"].submit' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'woo_product_input_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name].single-product .udesly-product form input, body[udesly-page-name].single-product .udesly-product form select' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'woo_product_input_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name].single-product .udesly-product form input, body[udesly-page-name].single-product .udesly-product form select' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'woo_product_input_label_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name].single-product .udesly-product form label' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'woo_product_input_padding', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name].single-product .udesly-product form input, body[udesly-page-name].single-product .udesly-product form select' ).css( {
                "padding": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_product_input_label_font_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name].single-product .udesly-product form label' ).css( {
                "font-size": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_product_button_padding', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name].single-product .udesly-product button[type="submit"].button' ).css( {
                "padding": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_product_button_margin', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name].single-product .udesly-product button[type="submit"].button' ).css( {
                "margin": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_product_input_border_radius', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name].single-product .udesly-product form input, body[udesly-page-name].single-product .udesly-product form select' ).css( {
                "border-radius": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_product_button_border_radius', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name].single-product .udesly-product form button[type="submit"].button' ).css( {
                "border-radius": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_product_tab_table_border_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name].single-product .udesly-product .shop_attributes, body[udesly-page-name].single-product .udesly-product .shop_attributes th, body[udesly-page-name].single-product .udesly-product .shop_attributes td' ).css( {
                "border-width": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_product_tab_table_border_padding', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name].single-product .udesly-product .shop_attributes, body[udesly-page-name].single-product .udesly-product .shop_attributes th, body[udesly-page-name].single-product .udesly-product .shop_attributes td' ).css( {
                "padding": newval
            } );
        } );
    } );

    wp.customize( 'woo_product_table_border_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name].single-product .udesly-product .shop_attributes, body[udesly-page-name].single-product .udesly-product .shop_attributes th, body[udesly-page-name].single-product .udesly-product .shop_attributes td' ).css( {
                "border-color": newval
            } );
        } );
    } );

    wp.customize( 'woo_product_button_font_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name].single-product .udesly-product form button[type="submit"].button, body[udesly-page-name].single-product .udesly-product #respond input#submit' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'woo_product_review_stars_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name].single-product .udesly-product form .stars span a' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'woo_product_button_color_hover', function( value ) {
        value.bind( function( newval ) {
            $('#woo_product_button_color_hover').remove();
            $( 'body[udesly-page-name].single-product .udesly-product form button[type="submit"].button, body[udesly-page-name].single-product .udesly-product form input[type="submit"].submit' ).prepend("<div id='woo_product_button_color_hover'><style>body[udesly-page-name].single-product .udesly-product form button[type='submit'].button:hover, body[udesly-page-name].single-product .udesly-product form input[type='submit'].submit{ background-color: " + newval + " }</style></div>");
        } );
    } );

    wp.customize( 'woo_product_variations_select_height', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name].single-product .udesly-product table.variations tr' ).css( {
                "height": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_product_variations_reset_margin', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name].single-product .udesly-product table .reset_variations' ).css( {
                "margin-left": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_product_variations_label_margin', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name].single-product .udesly-product label' ).css( {
                "margin-right": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_product_variations_add_to_cart_btn_margin_top', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name].single-product .udesly-product .single_variation_wrap' ).css( {
                "margin-top": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_product_variations_add_to_cart_btn_margin_left', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name].single-product .udesly-product .single_variation_wrap' ).css( {
                "margin-left": newval + 'px'
            } );
        } );
    } );

    /**
     * SIDEBAR
     */
    wp.customize( 'woo_sidebar_slider_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .udesly-sidebar .widget_price_filter .price_slider_wrapper .ui-widget-content' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'woo_sidebar_slider_range_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .udesly-sidebar .widget_price_filter .ui-slider .ui-slider-range' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'woo_sidebar_slider_handler_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .udesly-sidebar .widget_price_filter .ui-slider .ui-slider-handle' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'woo_sidebar_price_range_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .udesly-sidebar .widget_price_filter .price_label, body[udesly-page-name] .udesly-sidebar .widget_price_filter .price_label span' ).css( {
                "color": newval
            } );
        } );
    } );

    /**
     * FONT
     */
    wp.customize( 'woo_general_font', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] table th, body[udesly-page-name] table td,  body[udesly-page-name] button, body[udesly-page-name] .woocommerce-info, body[udesly-page-name] .woocommerce-error, body[udesly-page-name] .woocommerce-message' ).css( {
                "font-family": newval
            } );
        } );
    } );

    /**
     * NOTIFICATIONS
     */
    wp.customize( 'woo_notification_info_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce .woocommerce-info' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'woo_notification_info_text_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce .woocommerce-info' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'woo_notification_info_border_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce .woocommerce-info' ).css( {
                "border-color": newval
            } );
        } );
    } );

    wp.customize( 'woo_notification_info_border_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce .woocommerce-info' ).css( {
                "border-top-width": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_notification_error_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce .woocommerce-error' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'woo_notification_error_text_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce .woocommerce-error' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'woo_notification_error_border_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce .woocommerce-error' ).css( {
                "border-color": newval
            } );
        } );
    } );

    wp.customize( 'woo_notification_error_border_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce .woocommerce-error' ).css( {
                "border-top-width": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'woo_notification_message_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce .woocommerce-message' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'woo_notification_message_text_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce .woocommerce-message' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'woo_notification_message_border_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce .woocommerce-message' ).css( {
                "border-color": newval
            } );
        } );
    } );

    wp.customize( 'woo_notification_message_border_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .woocommerce .woocommerce-message' ).css( {
                "border-top-width": newval + 'px'
            } );
        } );
    } );

} )( jQuery );
