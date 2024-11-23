<?php

add_action( 'wp_ajax_submit_form', 'submit_popup_form_callback' );
add_action( 'wp_ajax_nopriv_submit_form', 'submit_popup_form_callback' );

function submit_popup_form_callback() {
    if ( ! wp_verify_nonce( $_POST['nonce'], 'submit_form_nonce' ) ) {
        wp_send_json_error( __( 'Data sent from an incorrect address.', THEME_NAME ) );
    }

    $name = isset( $_POST['name'] ) ? sanitize_text_field( $_POST['name'] ) : '';
    $phone = isset( $_POST['phone'] ) ? sanitize_text_field( $_POST['phone'] ) : '';

    if ( ! preg_match( '/^\+?[0-9\s\-]{7,15}$/', $phone ) ) {
        wp_send_json_error( __( 'Please provide a valid phone number.', THEME_NAME ) );
    }

    if ( empty( $name ) || empty( $phone ) ) {
        wp_send_json_error( __( 'All fields are required.', THEME_NAME ) );
    }

    $to      = 'mamikonars@gmail.com';
    $subject = __( 'New message', THEME_NAME );
    $message = '<html><body><h2>New request</h2><table>';
    $message .= '<tr><td><strong>Name:</strong></td><td>' . esc_html( $name ) . '</td></tr>';
    $message .= '<tr><td><strong>Phone:</strong></td><td>' . esc_html( $phone ) . '</td></tr>';
    $message .= '</table></body></html>';
    $headers = array( 'Content-Type: text/html; charset=UTF-8' );

    if ( wp_mail( $to, $subject, $message, $headers ) ) {
        wp_send_json_success( __( 'Form submitted successfully!', THEME_NAME ) );
    } else {
        wp_send_json_error( __( 'Failed to send email. Please try again later.', THEME_NAME ) );
    }

    wp_die();
}
