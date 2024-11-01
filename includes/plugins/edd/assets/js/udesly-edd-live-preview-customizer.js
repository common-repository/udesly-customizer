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
    wp.customize( 'edd_btn_font_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.edd_form input[type="submit"]' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'edd_btn_font_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.edd_form input[type="submit"]' ).css( {
                "font-size": newval + "em"
            } );
        } );
    } );

    wp.customize( 'edd_btn_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.edd_form input[type="submit"]' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'edd_btn_border_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.edd_form input[type="submit"]' ).css( {
                "border": newval + "px solid"
            } );
        } );
    } );

    wp.customize( 'edd_btn_border_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.edd_form input[type="submit"]' ).css( {
                "border-color": newval
            } );
        } );
    } );

    wp.customize( 'edd_btn_border_radius', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.edd_form input[type="submit"]' ).css( {
                "border-radius": newval + "px"
            } );
        } );
    } );

    wp.customize( 'edd_btn_font_color_hover', function( value ) {
        value.bind( function( newval ) {
            $('#edd_btn_font_color_hover').remove();
            $( 'body[udesly-page-name] form.edd_form' ).prepend("<div id='edd_btn_font_color_hover'><style>body[udesly-page-name] form.edd_form input[type='submit']:hover{ color: " + newval + " }</style></div>");
        } );
    } );

    wp.customize( 'edd_btn_background_color_hover', function( value ) {
        value.bind( function( newval ) {
            $('#edd_btn_background_color_hover').remove();
            $( 'body[udesly-page-name] form.edd_form' ).prepend("<div id='edd_btn_background_color_hover'><style>body[udesly-page-name] form.edd_form input[type='submit']:hover{ background-color: " + newval + " }</style></div>");
        } );
    } );

    /**
     * TABLE
     */
    wp.customize( 'edd_products_table_labels_font_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] #edd_checkout_wrap #edd_checkout_cart .edd_cart_header_row th, body[udesly-page-name] #edd_checkout_wrap #edd_final_total_wrap' ).css( {
                "font-size": newval + "px"
            } );
        } );
    } );

    wp.customize( 'edd_products_table_texts_font_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] #edd_checkout_wrap #edd_checkout_cart td, body[udesly-page-name] #edd_checkout_wrap #edd_checkout_cart td .edd_cart_remove_item_btn, body[udesly-page-name] #edd_checkout_wrap table .edd_cart_total' ).css( {
                "font-size": newval + "px"
            } );
        } );
    } );

    wp.customize( 'edd_table_padding', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] #edd_checkout_cart td, body[udesly-page-name] #edd_checkout_cart th' ).css( {
                "padding": newval + "em"
            } );
        } );
    } );

    wp.customize( 'edd_product_table_border_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] #edd_checkout_cart td, body[udesly-page-name] #edd_checkout_cart th' ).css( {
                "border-width": newval + "px"
            } );
        } );
    } );

    wp.customize( 'edd_products_table_labels_font_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] #edd_checkout_wrap #edd_checkout_cart .edd_cart_header_row th, body[udesly-page-name] #edd_checkout_wrap #edd_final_total_wrap' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'edd_products_table_texts_font_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] #edd_checkout_wrap #edd_checkout_cart td, body[udesly-page-name] #edd_checkout_wrap #edd_checkout_cart td .edd_cart_remove_item_btn, body[udesly-page-name] #edd_checkout_wrap table .edd_cart_total' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'edd_header_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] #edd_checkout_wrap #edd_checkout_cart .edd_cart_header_row th, body[udesly-page-name] #edd_checkout_wrap #edd_final_total_wrap' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'edd_product_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] #edd_checkout_wrap #edd_checkout_cart td, body[udesly-page-name] #edd_checkout_wrap #edd_checkout_cart td .edd_cart_remove_item_btn, body[udesly-page-name] #edd_checkout_wrap table .edd_cart_total' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'edd_form_title_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.edd_form label, body[udesly-page-name] form.edd_form legend' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'edd_form_title_font_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.edd_form label, body[udesly-page-name] form.edd_form legend' ).css( {
                "font-size": newval + "px"
            } );
        } );
    } );

    wp.customize( 'edd_form_input_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.edd_form input, body[udesly-page-name] form.edd_form textarea' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'edd_form_labels_font_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.edd_form .edd-description' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'edd_form_labels_font_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.edd_form .edd-description' ).css( {
                "font-size": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'edd_form_input_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.edd_form input, body[udesly-page-name] form.edd_form textarea' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'edd_form_input_border_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.edd_form input, body[udesly-page-name] form.edd_form textarea' ).css( {
                "border-color": newval
            } );
        } );
    } );

    wp.customize( 'edd_table_border_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] #edd_checkout_wrap #edd_checkout_cart td, body[udesly-page-name] #edd_checkout_wrap #edd_checkout_cart th, #edd_final_total_wrap' ).css( {
                "border-color": newval
            } );
        } );
    } );

    wp.customize( 'edd_form_input_padding', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.edd_form input, body[udesly-page-name] form.edd_form textarea' ).css( {
                "padding": newval + "em"
            } );
        } );
    } );

    wp.customize( 'edd_form_input_border_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.edd_form input, body[udesly-page-name] form.edd_form textarea' ).css( {
                "border-width": newval + "px"
            } );
        } );
    } );

    wp.customize( 'edd_form_input_border_radius', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.edd_form input, body[udesly-page-name] form.edd_form textarea' ).css( {
                "border-radius": newval + "px"
            } );
        } );
    } );

    wp.customize( 'edd_notification_error_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .edd-alert-error' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'edd_notification_error_text_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .edd-alert-error' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'edd_notification_error_border_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .edd-alert-error' ).css( {
                "border-color": newval
            } );
        } );
    } );

    wp.customize( 'edd_notification_success_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .edd-alert-success' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'edd_notification_success_text_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .edd-alert-success' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'edd_notification_success_border_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .edd-alert-success' ).css( {
                "border-color": newval
            } );
        } );
    } );

    wp.customize( 'edd_notification_info_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .edd-alert-info' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'edd_notification_info_text_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .edd-alert-info' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'edd_notification_info_border_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .edd-alert-info' ).css( {
                "border-color": newval
            } );
        } );
    } );

    wp.customize( 'edd_notification_warn_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .edd-alert-warn' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'edd_notification_warn_text_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .edd-alert-warn' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'edd_notification_warn_border_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .edd-alert-warn' ).css( {
                "border-color": newval
            } );
        } );
    } );

    wp.customize( 'edd_notification_border_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .edd-alert-error, body[udesly-page-name] .edd-alert-success, body[udesly-page-name] .edd-alert-info, body[udesly-page-name] .edd-alert-warn' ).css( {
                "border-width": newval + 'px'
            } );
        } );
    } );

    wp.customize( 'edd_form_input_placeholder_color', function( value ) {
        value.bind( function( newval ) {
            $('#edd_form_input_placeholder_color').remove();
            $( 'body[udesly-page-name] #edd_checkout_wrap' ).prepend("" +
                "<div id='edd_form_input_placeholder_color'>" +
                "<style>" +
                "body[udesly-page-name] #edd_checkout_wrap form input::-webkit-input-placeholder, " +
                "body[udesly-page-name] #edd_checkout_wrap form input::placeholder," +
                "body[udesly-page-name] #edd_checkout_wrap form textarea::-webkit-input-placeholder," +
                "body[udesly-page-name] #edd_checkout_wrap form textarea::placeholder" +
                "{ color: " + newval + " }" +
                "</style>" +
                "</div>");
        } );
    } );


} )( jQuery );
