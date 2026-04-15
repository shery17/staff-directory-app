<?php

    // 1. Enable Featured Images
    add_theme_support( 'post-thumbnails' );

    // 2. Load Assets
    function site_assets() {
        wp_enqueue_style('site-style', get_stylesheet_uri());
        wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');

        wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', [], null, true);
        wp_enqueue_script('coffee-main', get_template_directory_uri() . '/main.js', [], null, true);
    }

    add_action('wp_enqueue_scripts', 'site_assets');

?>