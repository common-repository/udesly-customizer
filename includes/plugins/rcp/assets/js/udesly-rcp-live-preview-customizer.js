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
    wp.customize( 'rcp_btn_font_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.rcp_form input[type="submit"]' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'rcp_btn_font_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.rcp_form input[type="submit"]' ).css( {
                "font-size": newval + "em"
            } );
        } );
    } );

    wp.customize( 'rcp_btn_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.rcp_form input[type="submit"]' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'rcp_btn_border_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.rcp_form input[type="submit"]' ).css( {
                "border": newval + "px solid"
            } );
        } );
    } );

    wp.customize( 'rcp_btn_border_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.rcp_form input[type="submit"]' ).css( {
                "border-color": newval
            } );
        } );
    } );

    wp.customize( 'rcp_btn_border_radius', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.rcp_form input[type="submit"]' ).css( {
                "border-radius": newval + "px"
            } );
        } );
    } );

    wp.customize( 'rcp_btn_font_color_hover', function( value ) {
        value.bind( function( newval ) {
            $('#rcp_btn_font_color_hover').remove();
            $( 'body[udesly-page-name] form.rcp_form' ).prepend("<div id='rcp_btn_font_color_hover'><style>body[udesly-page-name] form.rcp_form input[type='submit']:hover{ color: " + newval + " }</style></div>");
        } );
    } );

    wp.customize( 'rcp_btn_background_color_hover', function( value ) {
        value.bind( function( newval ) {
            $('#rcp_btn_background_color_hover').remove();
            $( 'body[udesly-page-name] form.rcp_form' ).prepend("<div id='rcp_btn_background_color_hover'><style>body[udesly-page-name] form.rcp_form input[type='submit']:hover{ background-color: " + newval + " }</style></div>");
        } );
    } );

    /**
     * TABLE
     */
    wp.customize( 'rcp_products_table_labels_font_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .rcp-table th' ).css( {
                "font-size": newval + "px"
            } );
        } );
    } );

    wp.customize( 'rcp_products_table_texts_font_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .rcp-table td' ).css( {
                "font-size": newval + "px"
            } );
        } );
    } );

    wp.customize( 'rcp_table_padding', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .rcp-table td, body[udesly-page-name] .rcp-table th' ).css( {
                "padding": newval + "em"
            } );
        } );
    } );

    wp.customize( 'rcp_product_table_border_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .rcp-table td, body[udesly-page-name] .rcp-table th' ).css( {
                "border-width": newval + "px"
            } );
        } );
    } );

    wp.customize( 'rcp_products_table_labels_font_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .rcp-table th' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'rcp_products_table_texts_font_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .rcp-table td' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'rcp_header_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .rcp-table th' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'rcp_product_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .rcp-table td' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'rcp_table_border_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .rcp-table td, body[udesly-page-name] .rcp-table th' ).css( {
                "border-color": newval
            } );
        } );
    } );

    /**
     * FORM
     */
    wp.customize( 'rcp_form_title_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.rcp_form label, body[udesly-page-name] form.rcp_form legend' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'rcp_form_title_font_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.rcp_form label, body[udesly-page-name] form.rcp_form legend' ).css( {
                "font-size": newval + "px"
            } );
        } );
    } );

    wp.customize( 'rcp_form_input_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.rcp_form input:not([type="submit"]), body[udesly-page-name] form.rcp_form textarea' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'rcp_form_input_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.rcp_form input:not([type="submit"]), body[udesly-page-name] form.rcp_form textarea' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'rcp_form_input_border_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.rcp_form input:not([type="submit"]), body[udesly-page-name] form.rcp_form textarea' ).css( {
                "border-color": newval
            } );
        } );
    } );

    wp.customize( 'rcp_form_input_padding', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.rcp_form input:not([type="submit"]), body[udesly-page-name] form.rcp_form textarea' ).css( {
                "padding": newval + "em"
            } );
        } );
    } );

    wp.customize( 'rcp_form_input_border_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.rcp_form input:not([type="submit"]), body[udesly-page-name] form.rcp_form textarea' ).css( {
                "border-width": newval + "px"
            } );
        } );
    } );

    wp.customize( 'rcp_form_input_border_radius', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] form.rcp_form input:not([type="submit"]), body[udesly-page-name] form.rcp_form textarea' ).css( {
                "border-radius": newval + "px"
            } );
        } );
    } );

    wp.customize( 'rcp_form_input_placeholder_color', function( value ) {
        value.bind( function( newval ) {
            $('#rcp_form_input_placeholder_color').remove();
            $( 'body[udesly-page-name] form.rcp_form' ).prepend("" +
                "<div id='rcp_form_input_placeholder_color'>" +
                "<style>" +
                "body[udesly-page-name] form.rcp_form input::-webkit-input-placeholder, " +
                "body[udesly-page-name] form.rcp_form input::placeholder," +
                "body[udesly-page-name] form.rcp_form textarea::-webkit-input-placeholder," +
                "body[udesly-page-name] form.rcp_form textarea::placeholder" +
                "{ color: " + newval + " }" +
                "</style>" +
                "</div>");
        } );
    } );

    /**
     * NOTIFICATIONS
     */
    wp.customize( 'rcp_notification_error_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .rcp_error' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'rcp_notification_error_text_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .rcp_error' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'rcp_notification_error_border_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .rcp_error' ).css( {
                "border-color": newval
            } );
        } );
    } );

    wp.customize( 'rcp_notification_success_background_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .rcp_success' ).css( {
                "background-color": newval
            } );
        } );
    } );

    wp.customize( 'rcp_notification_success_text_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .rcp_success' ).css( {
                "color": newval
            } );
        } );
    } );

    wp.customize( 'rcp_notification_success_border_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .rcp_success' ).css( {
                "border-color": newval
            } );
        } );
    } );

    wp.customize( 'rcp_notification_border_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body[udesly-page-name] .rcp_error, body[udesly-page-name] .rcp_success' ).css( {
                "border-width": newval + 'px'
            } );
        } );
    } );

} )( jQuery );
