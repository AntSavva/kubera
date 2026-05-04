<?php

if (!defined('ABSPATH')) {
    exit;
}

if (!defined('DISALLOW_FILE_EDIT')) {
    define('DISALLOW_FILE_EDIT', true);
}

function kubera_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    add_post_type_support('page', 'excerpt');
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

function kubera_protect_admin_deletions(array $allcaps, array $caps, array $args, WP_User $user): array
{
    if (!is_admin()) {
        return $allcaps;
    }

    $blocked_caps = [
        'delete_themes',
        'delete_plugins',
        'edit_themes',
        'edit_plugins',
    ];

    foreach ($blocked_caps as $cap) {
        if (isset($allcaps[$cap])) {
            $allcaps[$cap] = false;
        }
    }

    return $allcaps;
}
add_filter('user_has_cap', 'kubera_protect_admin_deletions', 10, 4);

function kubera_is_protected_post(int $post_id): bool
{
    $protected_ids = array_filter([
        (int) get_option('page_on_front'),
        (int) get_option('page_for_posts'),
    ]);

    return in_array($post_id, $protected_ids, true);
}

function kubera_block_protected_post_delete($delete, WP_Post $post, bool $force_delete)
{
    if (kubera_is_protected_post((int) $post->ID)) {
        return false;
    }

    return $delete;
}
add_filter('pre_delete_post', 'kubera_block_protected_post_delete', 10, 3);

function kubera_block_protected_post_trash($trash, WP_Post $post)
{
    if (kubera_is_protected_post((int) $post->ID)) {
        return false;
    }

    return $trash;
}
add_filter('pre_trash_post', 'kubera_block_protected_post_trash', 10, 2);

function kubera_document_title(array $title): array
{
    if (is_front_page()) {
        $title['title'] = 'Кубэра - столярные изделия из массива';
    }

    return $title;
}
add_filter('document_title_parts', 'kubera_document_title');
