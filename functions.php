<?php
// Load CSS properly
function learnconnect_enqueue_assets() {
    wp_enqueue_style('learnconnect-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'learnconnect_enqueue_assets');

// Enable featured images
add_theme_support('post-thumbnails');

// Register navigation menu
function learnconnect_register_menu() {
    register_nav_menu('primary-menu', 'Primary Menu');
}
add_action('after_setup_theme', 'learnconnect_register_menu');



function handle_contact_form() {

    if ( isset($_POST['contact_form_submitted']) ) {

        $name    = sanitize_text_field($_POST['cf_name']);
        $email   = sanitize_email($_POST['cf_email']);
        $message = sanitize_textarea_field($_POST['cf_message']);

        $admin_email = get_option('admin_email');
        $subject = "New Contact Form Message";
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

        $headers = array(
            'Content-Type: text/plain; charset=UTF-8',
            'From: '.$name.' <'.$email.'>'
        );

        wp_mail($admin_email, $subject, $body, $headers);
    }
}
add_action('init', 'handle_contact_form');

add_action('template_redirect', function () {

    if ( ! is_user_logged_in() ) {

        // Feed page
        if ( is_page() && get_the_ID() == 2 ) {
            wp_redirect( wp_login_url( get_permalink() ) );
            exit;
        }

        
    }

});
