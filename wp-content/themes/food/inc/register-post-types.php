<?php

add_action('init', function() {
    $post_types = [
        [
            'post_type' => 'slider',
            'labels' => [
                'name' => 'Slider',
                'menu_name' => 'Gallery',
                'all_items' => 'All images',
                'add_new' => 'Add product image',
                'add_new_item' => 'Add image',
                'edit_item' => 'Edit image',
                'new_item' => 'New image',
                'view_item' => 'View image',
                'search_items' => 'Search image',
                'not_found' => 'Not found',
                'not_found_in_trash' => 'Not found in trash'
            ],
            'menu_position' => 4,
            'supports' => ['title'],
            'public' => false,
            'show_ui' => true
        ],
        [
            'post_type' => 'service',
            'labels' => [
                'name' => 'Services',
                'menu_name' => 'Services',
                'all_items' => 'All services',
                'add_new' => 'Add new',
                'add_new_item' => 'Add new',
                'edit_item' => 'Edit item',
                'new_item' => 'New item',
                'view_item' => 'View item',
                'search_items' => 'Search items',
                'not_found' => 'Not found',
                'not_found_in_trash' => 'Not found in trash'
            ],
            'menu_position' => 5,
            'supports' => ['title'],
            'public' => false,
            'show_ui' => true
        ],
        [
            'post_type' => 'partners',
            'labels' => [
                'name' => 'Partners',
                'menu_name' => 'Partners',
                'all_items' => 'All partners',
                'add_new' => 'Add new',
                'add_new_item' => 'Add new',
                'edit_item' => 'Edit item',
                'new_item' => 'New item',
                'view_item' => 'View item',
                'search_items' => 'Search items',
                'not_found' => 'Not found',
                'not_found_in_trash' => 'Not found in trash'
            ],
            'menu_position' => 6,
            'supports' => ['title'],
            'public' => false,
            'show_ui' => true
        ]
    ];

    foreach ($post_types as $post_type) {
        register_post_type($post_type['post_type'], $post_type);
    }
});