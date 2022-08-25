<?php

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'    => 'Site Settings',
        'menu_title'    => 'Site Settings',
        'menu_slug'     => 'site-settings',
        'capability'    => 'edit_posts',
        'show_in_graphql' => true,
        'capability' => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Archives',
        'menu_title'    => 'Archives',
        'parent_slug'   => 'site-settings',
        'capability' => 'edit_posts',
        'show_in_graphql' => true,
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Scripts',
        'menu_title'    => 'Scripts',
        'parent_slug'   => 'site-settings',
        'show_in_graphql' => true,
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Header',
        'menu_title'    => 'Header',
        'parent_slug'   => 'site-settings',
        'capability' => 'edit_posts',
        'show_in_graphql' => true,
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Footer',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'site-settings',
        'capability' => 'edit_posts',
        'show_in_graphql' => true,
    ));
}
