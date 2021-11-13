<?php

function scripts()
{
    // wp_enqueue_script("main-js", get_theme_file_uri("/script.js", NULL, '1.0', true));

    wp_register_style('style', get_template_directory_uri() . '/dist/app.css', [], 1, 'all');
    wp_enqueue_style('style');

    // wp_enqueue_script('jquery');

    wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true);
    wp_enqueue_script('app');

};
add_action('wp_enqueue_scripts', 'scripts');