<?php

require_once(get_template_directory() . '/inc/register-post-types.php');

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.min.css', ['swiper']);

    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', [], false, true);
    wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.min.js', ['swiper'], false, true);
});

add_action('after_setup_theme', function() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');

    register_nav_menus([
        'left_menu' => 'Header menu left',
        'right_menu' => 'Header menu right'
    ]);
});

add_filter('nav_menu_link_attributes', function($attr) {
    $attr['class'] = 'header-bottom-menu__link';
    if (strpos($attr['href'], '#') !== false) {
        $hash = strtolower(substr($attr['href'], 1));
        $data_goto = [
            'about' => '.about',
            'menus' => '.menus',
            'service' => '.service',
            'gallery' => '.gallery',
            'friends' => '.friends',
            'contacts' => '.contacts',
        ];
        if (array_key_exists($hash, $data_goto)) {
            $attr['data-goto'] = $data_goto[$hash];
        }
    }
    return $attr;
});
