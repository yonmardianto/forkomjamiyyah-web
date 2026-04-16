<?php
/**
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 */

if ( !defined('ABSPATH') ) {
    die();
}

function productive_global_validate_input_hex_color( $color ) {
    if ( rest_parse_hex_color($color) ) {
        return true;
    } else {
        return false;
    }
}


function productive_global_get_sanitized_input_value( $value ) {
    return sanitize_text_field( $value );
}


function productive_global_strip_tags_stripslashes_value( $value ) {
    return wp_strip_all_tags( stripslashes($value) );
}


function productive_global_get_is_validate_email_addresses( $emails_string ) {
    $is_email_address_error = false;
    $email_addresses = explode(',', $emails_string );
    foreach ( $email_addresses as $email_address ) {
        if ( !is_email(trim($email_address) ) ) {
            $is_email_address_error = true;
            break;
        }
    }
    return $is_email_address_error;
}


function productive_global_get_is_valid_phone_number( $phone, $is_required = false ) {
    if ( $is_required ) {
        return ( !empty( $phone ) && is_numeric( $phone ) );
    } else {
        return ( empty( $phone ) || is_numeric( $phone ) );
    }
}


function productive_global_get_date( $value ) {
    $date_string = sanitize_text_field( $value );
    $the_date_raw = strtotime($date_string);
    $the_date = gmdate( get_option( 'date_format' ), $the_date_raw );
    return $the_date;
}
