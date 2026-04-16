<?php

    // 1. Enable Featured Images
    add_theme_support( 'post-thumbnails' );

    // 2. Load Assets
    function site_assets() {
        // Enqueue Styles
        // Note: Load Bootstrap BEFORE your main stylesheet so you can override Bootstrap classes if needed
        wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
        wp_enqueue_style('site-style', get_stylesheet_uri());

        // Enqueue Scripts
        // Load GSAP
        wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', [], null, true);

        // FIX: Load Bootstrap JS Bundle (Necessary for the Navbar Toggle)
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', [], '5.3.0', true);

        // Load your main.js
        // Added 'gsap' and 'bootstrap-js' as dependencies so this script loads last
        wp_enqueue_script('coffee-main', get_template_directory_uri() . '/main.js', ['gsap', 'bootstrap-js'], null, true);
    }

    add_action('wp_enqueue_scripts', 'site_assets');

?>