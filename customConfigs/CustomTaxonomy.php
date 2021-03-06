<?php

return [
    [
        'taxonomy' => 'blog',
        'object_type' => [ 'blog' ],
        'args' => [
            'label'                 => '',
            'labels'                => [
                'name'              => __( 'Темы', THEME_FN_TEXT_DOMAIN ),
                'singular_name'     => __( 'Тема', THEME_FN_TEXT_DOMAIN ),
                'search_items'      => __( 'Поиск темы', THEME_FN_TEXT_DOMAIN ),
                'all_items'         => __( 'Все темы', THEME_FN_TEXT_DOMAIN ),
                'view_item '        => __( 'Показать тему', THEME_FN_TEXT_DOMAIN ),
                'edit_item'         => __( 'Обновить тему', THEME_FN_TEXT_DOMAIN ),
                'update_item'       => __( 'Применить изменения', THEME_FN_TEXT_DOMAIN ),
                'add_new_item'      => __( 'Добавить тему', THEME_FN_TEXT_DOMAIN ),
                'new_item_name'     => __( 'Новое имя темы', THEME_FN_TEXT_DOMAIN ),
                'back_to_items'     => __( '← Нахад к темам', THEME_FN_TEXT_DOMAIN ),
            ],
            'description'           => '',
            'public'                => true,
            'hierarchical'          => true,
            'rewrite'               => true,
            'capabilities'          => array(),
            'meta_box_cb'           => 'post_categories_meta_box',
            'show_admin_column'     => true,
            'show_in_rest'          => true,
            'rest_base'             => null,
        ]
    ],
    [
        'taxonomy' => 'categories_movies',
        'object_type' => [ 'movie' ],
        'args' => [
            'label'                 => '',
            'labels'                => [
                'name'              => __( 'Категории', THEME_FN_TEXT_DOMAIN ),
                'singular_name'     => __( 'Категория', THEME_FN_TEXT_DOMAIN ),
                'search_items'      => __( 'Поиск категория', THEME_FN_TEXT_DOMAIN ),
                'all_items'         => __( 'Все категории', THEME_FN_TEXT_DOMAIN ),
                'view_item '        => __( 'Показать категорию', THEME_FN_TEXT_DOMAIN ),
                'edit_item'         => __( 'Обновить категорию', THEME_FN_TEXT_DOMAIN ),
                'update_item'       => __( 'Применить изменения', THEME_FN_TEXT_DOMAIN ),
                'add_new_item'      => __( 'Добавить категорию', THEME_FN_TEXT_DOMAIN ),
                'new_item_name'     => __( 'Новое имя категории', THEME_FN_TEXT_DOMAIN ),
                'back_to_items'     => __( '← Нахад к категориям', THEME_FN_TEXT_DOMAIN ),
            ],
            'description'           => '',
            'public'                => true,
            'hierarchical'          => true,
            'rewrite'               => true,
            'capabilities'          => array(),
            'meta_box_cb'           => 'post_categories_meta_box',
            'show_admin_column'     => true,
            'show_in_rest'          => true,
            'rest_base'             => null,
        ]
    ]
];