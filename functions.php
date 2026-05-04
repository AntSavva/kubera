<?php

if (!defined('ABSPATH')) {
    exit;
}

function kubera_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
}
add_action('after_setup_theme', 'kubera_setup');

function kubera_asset(string $path): string
{
    return esc_url(get_template_directory_uri() . '/' . ltrim($path, '/'));
}

function kubera_enqueue_assets(): void
{
    wp_enqueue_style(
        'kubera-fonts',
        'https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&family=Russo+One&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'kubera-styles',
        get_template_directory_uri() . '/styles.css',
        ['kubera-fonts'],
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'kubera_enqueue_assets');

function kubera_document_title(array $title): array
{
    if (is_front_page()) {
        $title['title'] = 'Кубэра - столярные изделия из массива';
    }

    return $title;
}
add_filter('document_title_parts', 'kubera_document_title');
