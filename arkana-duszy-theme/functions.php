<?php

function arkana_duszy_enqueue_assets(): void {
    wp_enqueue_style(
        'arkana-duszy-fonts',
        'https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'arkana-duszy-style',
        get_stylesheet_uri(),
        ['arkana-duszy-fonts'],
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'arkana_duszy_enqueue_assets');

function arkana_duszy_theme_setup(): void {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'arkana_duszy_theme_setup');
