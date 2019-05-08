<?php 

/**
 * Plugin Name: Subhasish Nath's custom posttypes and taxonomies
 * Description: A plugin to add custom posttypes and Taxonomies
 * Version: 0.1
 * Author: Subhasish
 * License: GPL2
 */
/*
{Subhasish Nath's custom posttypes and taxonomies} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {License URI}.
 * 
 */
function my_custom_posttypes() {

 $labels = array(
        'name'               => 'Allkitchenposts',
        'singular_name'      => 'Kitchenposts',
        'menu_name'          => 'Kitchenposts',
        'name_admin_bar'     => 'Kitchenposts',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Post',
        'new_item'           => 'New Post Kitchenpost',
        'edit_item'          => 'Edit Post Kitchenpost',
        'view_item'          => 'View Post Kitchenpost',
        'all_items'          => 'All Posts Kitchenpost',
        'search_items'       => 'Search Posts Kitchenpost',
        'parent_item_colon'  => 'Parent Posts Kitchenpost:',
        'not_found'          => 'No Post of Kitchenpost found.',
        'not_found_in_trash' => 'No Post of Kitchenpost found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-welcome-widgets-menus',
        // 'menu_position' =>  7,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Allkitchenposts' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'show_in_rest'       => true,
        'rest_base'          => 'Allkitchenposts-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'         => array('category')
        // ,'custom-fields','excerpt'
    );
    register_post_type('Allkitchenposts',$args);  
    
    $labels = array(
        'name' => _x('home-carousels', 'home-carousels'),
        'singular_name' => _x('home-carousel', 'home-carousel'),
        'add_new' => _x('Add New', 'home-carousel'),
        'add_new_item' => __('Add New home-carousel Item'),
        'edit_item' => __('Edit Item'),
        'new_item' => __('New Item'),
        'view_item' => __('View Item'),
        'search_items' => __('Search Items'),
        'not_found' =>  __('No items found'),
        'not_found_in_trash' => __('No home-carousel found in Trash'), 
        'parent_item_colon' => ''
      );
      $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, 
        'query_var' => true,
        'rewrite' => array( 'slug' => 'homecarousels' ),
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_icon'          => 'dashicons-images-alt2',
        'menu_position' => 4,
        'has_archive' => true,
        'show_in_rest'       => true,
        'rest_base'          => 'homeCarousel-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports' => array('title','editor','thumbnail','custom-fields'),
        'taxonomies' => array('category')
      ); 
      register_post_type('homecarousels',$args);

    $labels = array(
        'name' => _x('home-catcarousels', 'home-catcarousels'),
        'singular_name' => _x('home-catcarousel', 'home-catcarousel'),
        'add_new' => _x('Add New', 'home-catcarousel'),
        'add_new_item' => __('Add New home-catcarousel Item'),
        'edit_item' => __('Edit Item'),
        'new_item' => __('New Item'),
        'view_item' => __('View Item'),
        'search_items' => __('Search Items'),
        'not_found' =>  __('No items found'),
        'not_found_in_trash' => __('No home-catcarousel found in Trash'), 
        'parent_item_colon' => ''
      );
      $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, 
        'query_var' => true,
        'rewrite' => array( 'slug' => 'homeCatcarousels' ),
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'menu_icon'          => 'dashicons-images-alt2',
        'menu_position' => 4,
        'has_archive' => true,
        'show_in_rest'       => true,
        'rest_base'          => 'homeCatcarousel-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports' => array('title','editor','thumbnail','custom-fields'),
        'taxonomies' => array('category')
      ); 
      register_post_type('homeCatcarousels',$args);


 $labels = array(
        'name'               => 'AllLifestyleposts',
        'singular_name'      => 'Lifestyleposts',
        'menu_name'          => 'Lifestyleposts',
        'name_admin_bar'     => 'Lifestyleposts',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Post',
        'new_item'           => 'New Post Lifestyleposts',
        'edit_item'          => 'Edit Post Lifestyleposts',
        'view_item'          => 'View Post Lifestyleposts',
        'all_items'          => 'All Posts Lifestyleposts',
        'search_items'       => 'Search Posts Lifestyleposts',
        'parent_item_colon'  => 'Parent Posts Lifestyleposts:',
        'not_found'          => 'No Post of Lifestylepost found.',
        'not_found_in_trash' => 'No Post of Lifestylepost found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-welcome-widgets-menus',
        // 'menu_position' =>  7,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'AllHealthposts' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'show_in_rest'       => true,
        'rest_base'          => 'AllHealthposts-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'         => array('category')
        // ,'custom-fields','excerpt'
    );
    register_post_type('AllHealthposts',$args);
    
 $labels = array(
        'name'               => 'AllbabsabanijyoPosts',
        'singular_name'      => 'Babsabanijyo',
        'menu_name'          => 'BabsabanijyoNews',
        'name_admin_bar'     => 'BabsabanijyoNews',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Post',
        'new_item'           => 'New Post Babsabanijyo',
        'edit_item'          => 'Edit Post Babsabanijyo',
        'view_item'          => 'View Post Babsabanijyo',
        'all_items'          => 'All Posts Babsabanijyo',
        'search_items'       => 'Search Posts Babsabanijyo',
        'parent_item_colon'  => 'Parent Posts Babsabanijyo:',
        'not_found'          => 'No Post of Babsabanijyo found.',
        'not_found_in_trash' => 'No Post of Babsabanijyo found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-welcome-widgets-menus',
        // 'menu_position' =>  7,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'AllbabsabanijyoPosts' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'show_in_rest'       => true,
        'rest_base'          => 'AllbabsabanijyoPosts-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'         => array('category')
        // ,'custom-fields','excerpt'
    );
    register_post_type('AllbabsabanijyoPosts',$args);  


 $labels = array(
        'name'               => 'AllOffbeatPosts',
        'singular_name'      => 'Offbeat',
        'menu_name'          => 'OffbeatNews',
        'name_admin_bar'     => 'OffbeatNews',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Post',
        'new_item'           => 'New Post Offbeat',
        'edit_item'          => 'Edit Post Offbeat',
        'view_item'          => 'View Post Offbeat',
        'all_items'          => 'All Posts Offbeat',
        'search_items'       => 'Search Posts Offbeat',
        'parent_item_colon'  => 'Parent Posts Offbeat:',
        'not_found'          => 'No Post of Offbeat found.',
        'not_found_in_trash' => 'No Post of Offbeat found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-welcome-widgets-menus',
        // 'menu_position' =>  7,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'AllOffbeatPosts' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'show_in_rest'       => true,
        'rest_base'          => 'AllOffbeatPosts-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'         => array('category')
        // ,'custom-fields','excerpt'
    );
    register_post_type('AllOffbeatPosts',$args);  


 $labels = array(
        'name'               => 'AllTechPosts',
        'singular_name'      => 'Tech',
        'menu_name'          => 'TechNews',
        'name_admin_bar'     => 'TechNews',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Post',
        'new_item'           => 'New Post Tech',
        'edit_item'          => 'Edit Post Tech',
        'view_item'          => 'View Post Tech',
        'all_items'          => 'All Posts Tech',
        'search_items'       => 'Search Posts Tech',
        'parent_item_colon'  => 'Parent Posts Tech:',
        'not_found'          => 'No Post of Tech found.',
        'not_found_in_trash' => 'No Post of Tech found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-welcome-widgets-menus',
        // 'menu_position' =>  7,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'AllTechPosts' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'show_in_rest'       => true,
        'rest_base'          => 'AllTechPosts-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'         => array('category')
        // ,'custom-fields','excerpt'
    );
    register_post_type('AllTechPosts',$args);  


 $labels = array(
        'name'               => 'AllCrimePosts',
        'singular_name'      => 'Crime',
        'menu_name'          => 'CrimeNews',
        'name_admin_bar'     => 'CrimeNews',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Post',
        'new_item'           => 'New Post Crime',
        'edit_item'          => 'Edit Post Crime',
        'view_item'          => 'View Post Crime',
        'all_items'          => 'All Posts Crime',
        'search_items'       => 'Search Posts Crime',
        'parent_item_colon'  => 'Parent Posts Crime:',
        'not_found'          => 'No Post of Crime found.',
        'not_found_in_trash' => 'No Post of Crime found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-welcome-widgets-menus',
        // 'menu_position' =>  7,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'AllCrimePosts' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 8,
        'show_in_rest'       => true,
        'rest_base'          => 'AllCrimePosts-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'         => array('category')
        // ,'custom-fields','excerpt'
    );
    register_post_type('AllCrimePosts',$args);  


 $labels = array(
        'name'               => 'AllantorjatikPosts',
        'singular_name'      => 'Antorjatik',
        'menu_name'          => 'AntorjatikNews',
        'name_admin_bar'     => 'AntorjatikNews',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Post',
        'new_item'           => 'New Post Antorjatik',
        'edit_item'          => 'Edit Post Antorjatik',
        'view_item'          => 'View Post Antorjatik',
        'all_items'          => 'All Posts Antorjatik',
        'search_items'       => 'Search Posts Antorjatik',
        'parent_item_colon'  => 'Parent Posts Antorjatik:',
        'not_found'          => 'No Post of Antorjatik found.',
        'not_found_in_trash' => 'No Post of Antorjatik found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-welcome-widgets-menus',
        // 'menu_position' =>  7,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'AllantorjatikPosts' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'show_in_rest'       => true,
        'rest_base'          => 'AllantorjatikPosts-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'         => array('category')
        // ,'custom-fields','excerpt'
    );
    register_post_type('AllantorjatikPosts',$args);  


 $labels = array(
        'name'               => 'AllBreakingNews',
        'singular_name'      => 'BreakingNews',
        'menu_name'          => 'BreakingNews',
        'name_admin_bar'     => 'BreakingNews',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Post',
        'new_item'           => 'New Post BreakingNews',
        'edit_item'          => 'Edit Post BreakingNews',
        'view_item'          => 'View Post BreakingNews',
        'all_items'          => 'All Posts BreakingNews',
        'search_items'       => 'Search Posts BreakingNews',
        'parent_item_colon'  => 'Parent Posts BreakingNews:',
        'not_found'          => 'No Post of BreakingNews found.',
        'not_found_in_trash' => 'No Post of BreakingNews found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-megaphone',
        // 'menu_position' =>  7,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'AllBreakingNews' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'show_in_rest'       => true,
        'rest_base'          => 'AllBreakingNews-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'         => array('category')
        // ,'custom-fields','excerpt'
    );
    register_post_type('AllBreakingNews',$args);   

// creating post type for logo scroller in the home page.......

 $labels = array(
        'name'               => 'AllKolkataPosts',
        'singular_name'      => 'Kolkata',
        'menu_name'          => 'KolkataNews',
        'name_admin_bar'     => 'KolkataNews',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Post',
        'new_item'           => 'New Post Kolkata',
        'edit_item'          => 'Edit Post Kolkata',
        'view_item'          => 'View Post Kolkata',
        'all_items'          => 'All Posts Kolkata',
        'search_items'       => 'Search Posts Kolkata',
        'parent_item_colon'  => 'Parent Posts Kolkata:',
        'not_found'          => 'No Post of Kolkata found.',
        'not_found_in_trash' => 'No Post of Kolkata found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-smiley',
        // 'menu_position' =>  7,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'AllKolkataPosts' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'show_in_rest'       => true,
        'rest_base'          => 'AllKolkataPosts-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'         => array('category')
        // ,'custom-fields','excerpt'
    );
    register_post_type('AllKolkataPosts',$args);   

 $labels = array(
        'name'               => 'AllRajyaPosts',
        'singular_name'      => 'Rajya',
        'menu_name'          => 'RajyaNews',
        'name_admin_bar'     => 'RajyaNews',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Post',
        'new_item'           => 'New Post Rajya',
        'edit_item'          => 'Edit Post Rajya',
        'view_item'          => 'View Post Rajya',
        'all_items'          => 'All Posts Rajya',
        'search_items'       => 'Search Posts Rajya',
        'parent_item_colon'  => 'Parent Posts Rajya:',
        'not_found'          => 'No Post of Rajya found.',
        'not_found_in_trash' => 'No Post of Rajya found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-welcome-widgets-menus',
        // 'menu_position' =>  7,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'AllRajyaPosts' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'show_in_rest'       => true,
        'rest_base'          => 'AllRajyaPosts-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'         => array('category')
        // ,'custom-fields','excerpt'
    );
    register_post_type('AllRajyaPosts',$args);  


 $labels = array(
        'name'               => 'AllDeshPosts',
        'singular_name'      => 'Desh',
        'menu_name'          => 'DeshNews',
        'name_admin_bar'     => 'DeshNews',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Post',
        'new_item'           => 'New Post Desh',
        'edit_item'          => 'Edit Post Desh',
        'view_item'          => 'View Post Desh',
        'all_items'          => 'All Posts Desh',
        'search_items'       => 'Search Posts Desh',
        'parent_item_colon'  => 'Parent Posts Desh:',
        'not_found'          => 'No Post of Desh found.',
        'not_found_in_trash' => 'No Post of Desh found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-welcome-widgets-menus',
        // 'menu_position' =>  7,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'AllDeshPosts' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'         => array('category')
        // ,'custom-fields','excerpt'
    );
    register_post_type('AllDeshPosts',$args);


 $labels = array(
        'name'               => 'AllFashionPosts',
        'singular_name'      => 'Fashion',
        'menu_name'          => 'FashionNews',
        'name_admin_bar'     => 'FashionNews',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Post',
        'new_item'           => 'New Post Fashion',
        'edit_item'          => 'Edit Post Fashion',
        'view_item'          => 'View Post Fashion',
        'all_items'          => 'All Posts Fashion',
        'search_items'       => 'Search Posts Fashion',
        'parent_item_colon'  => 'Parent Posts Fashion:',
        'not_found'          => 'No Post of Fashion found.',
        'not_found_in_trash' => 'No Post of Fashion found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-welcome-widgets-menus',
        // 'menu_position' =>  7,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'AllFashionPosts' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'         => array('category')
        // ,'custom-fields','excerpt'
    );
    register_post_type('AllFashionPosts',$args);


 $labels = array(
        'name'               => 'AllSampadokioPosts',
        'singular_name'      => 'Sampadokio',
        'menu_name'          => 'SampadokioNews',
        'name_admin_bar'     => 'SampadokioNews',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Post',
        'new_item'           => 'New Post Sampadokio',
        'edit_item'          => 'Edit Post Sampadokio',
        'view_item'          => 'View Post Sampadokio',
        'all_items'          => 'All Posts Sampadokio',
        'search_items'       => 'Search Posts Sampadokio',
        'parent_item_colon'  => 'Parent Posts Sampadokio:',
        'not_found'          => 'No Post of Sampadokio found.',
        'not_found_in_trash' => 'No Post of Sampadokio found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-welcome-widgets-menus',
        // 'menu_position' =>  7,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'AllSampadokioPosts' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'         => array('category')
        // ,'custom-fields','excerpt'
    );
    register_post_type('AllSampadokioPosts',$args);


 $labels = array(
        'name'               => 'AllBinodonPosts',
        'singular_name'      => 'Binodon',
        'menu_name'          => 'BinodonNews',
        'name_admin_bar'     => 'BinodonNews',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Post',
        'new_item'           => 'New Post Binodon',
        'edit_item'          => 'Edit Post Binodon',
        'view_item'          => 'View Post Binodon',
        'all_items'          => 'All Posts Binodon',
        'search_items'       => 'Search Posts Binodon',
        'parent_item_colon'  => 'Parent Posts Binodon:',
        'not_found'          => 'No Post of Binodon found.',
        'not_found_in_trash' => 'No Post of Binodon found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-welcome-widgets-menus',
        // 'menu_position' =>  7,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'AllBinodonPosts' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'         => array('category')
        // ,'custom-fields','excerpt'
    );
    register_post_type('AllBinodonPosts',$args);


 $labels = array(
        'name'               => 'AllNorthBengalPosts',
        'singular_name'      => 'NorthBengal',
        'menu_name'          => 'NorthBengalNews',
        'name_admin_bar'     => 'NorthBengalNews',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Post',
        'new_item'           => 'New Post NorthBengal',
        'edit_item'          => 'Edit Post NorthBengal',
        'view_item'          => 'View Post NorthBengal',
        'all_items'          => 'All Posts NorthBengal',
        'search_items'       => 'Search Posts NorthBengal',
        'parent_item_colon'  => 'Parent Posts NorthBengal:',
        'not_found'          => 'No Post of NorthBengal found.',
        'not_found_in_trash' => 'No Post of NorthBengal found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-welcome-widgets-menus',
        // 'menu_position' =>  7,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'AllNorthBengalPosts' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'         => array('category')
        // ,'custom-fields','excerpt'
    );
    register_post_type('AllNorthBengalPosts',$args);

 $labels = array(
        'name'               => 'AllSouthBengalPosts',
        'singular_name'      => 'SouthBengal',
        'menu_name'          => 'SouthBengalNews',
        'name_admin_bar'     => 'SouthBengalNews',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Post',
        'new_item'           => 'New Post SouthBengal',
        'edit_item'          => 'Edit Post SouthBengal',
        'view_item'          => 'View Post SouthBengal',
        'all_items'          => 'All Posts SouthBengal',
        'search_items'       => 'Search Posts SouthBengal',
        'parent_item_colon'  => 'Parent Posts SouthBengal:',
        'not_found'          => 'No Post of SouthBengal found.',
        'not_found_in_trash' => 'No Post of SouthBengal found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-welcome-widgets-menus',
        // 'menu_position' =>  7,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'AllSouthBengalPosts' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'         => array('category')
        // ,'custom-fields','excerpt'
    );
    register_post_type('AllSouthBengalPosts',$args);

 $labels = array(
        'name'               => 'AllBardhamanPosts',
        'singular_name'      => 'Bardhaman',
        'menu_name'          => 'BardhamanNews',
        'name_admin_bar'     => 'BardhamanNews',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Post',
        'new_item'           => 'New Post Bardhaman',
        'edit_item'          => 'Edit Post Bardhaman',
        'view_item'          => 'View Post Bardhaman',
        'all_items'          => 'All Posts Bardhaman',
        'search_items'       => 'Search Posts Bardhaman',
        'parent_item_colon'  => 'Parent Posts Bardhaman:',
        'not_found'          => 'No Post of Bardhaman found.',
        'not_found_in_trash' => 'No Post of Bardhaman found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-welcome-widgets-menus',
        // 'menu_position' =>  7,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'AllBardhamanPosts' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'         => array('category')
        // ,'custom-fields','excerpt'
    );
    register_post_type('AllBardhamanPosts',$args);

 $labels = array(
        'name'               => 'AllKhalaPosts',
        'singular_name'      => 'Khala',
        'menu_name'          => 'KhalaNews',
        'name_admin_bar'     => 'KhalaNews',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Post',
        'new_item'           => 'New Post Khala',
        'edit_item'          => 'Edit Post Khala',
        'view_item'          => 'View Post Khala',
        'all_items'          => 'All Posts Khala',
        'search_items'       => 'Search Posts Khala',
        'parent_item_colon'  => 'Parent Posts Khala:',
        'not_found'          => 'No Post of Khala found.',
        'not_found_in_trash' => 'No Post of Khala found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-welcome-widgets-menus',
        // 'menu_position' =>  7,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'AllKhalaPosts' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'         => array('category')
        // ,'custom-fields','excerpt'
    );
    register_post_type('AllKhalaPosts',$args);

 $labels = array(
        'name'               => 'AllOnnannoPosts',
        'singular_name'      => 'Onnanno',
        'menu_name'          => 'OnnannoNews',
        'name_admin_bar'     => 'OnnannoNews',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Post',
        'new_item'           => 'New Post Onnanno',
        'edit_item'          => 'Edit Post Onnanno',
        'view_item'          => 'View Post Onnanno',
        'all_items'          => 'All Posts Onnanno',
        'search_items'       => 'Search Posts Onnanno',
        'parent_item_colon'  => 'Parent Posts Onnanno:',
        'not_found'          => 'No Post of Onnanno found.',
        'not_found_in_trash' => 'No Post of Onnanno found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-welcome-widgets-menus',
        // 'menu_position' =>  7,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'AllOnnannoPosts' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'         => array('category')
        // ,'custom-fields','excerpt'
    );
    register_post_type('AllOnnannoPosts',$args);    
}
add_action('init','my_custom_posttypes');

function my_rewrite_flush() {
    // First, we "add" the custom post type via the above written function.
    // Note: "add" is written with quotes, as CPTs don't get added to the DB,
    // They are only referenced in the post_type column with a post entry, 
    // when you add a post of this CPT.
    my_custom_posttypes();

    // ATTENTION: This is *only* done during plugin activation hook in this example!
    // You should *NEVER EVER* do this on every page load!!
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );

/*-- Custom Taxonomies --*/

function my_custom_taxonomies(){


    $labels = array(
        'name' => 'Destination-places',
        'singular_name' => 'Destination-place',
        'search_items' => 'Search Destination-place',
        'all_items' => 'All Destination-places',
        'parent_item' => 'Parent Type All Destination-places',
        'parent_item_colon' => 'Parent Type All Destination-places:',
        'edit_item' => 'Edit Type of Destination-place',
        'update_item' => 'Update Type of Destination-place',
        'add_new_item' => 'Add New Type of Destination-place',
        'new_item_name' => 'New Type of Destination-place',
        'menu_name' => 'Type of Destination-place', 
        );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'Destination-places-types' ),
    );
    register_taxonomy( 'Destination-places', array( 'destinaton' ), $args );


    register_taxonomy( "portfolio-categories", 
    array(  "portfolio" ), 
    array(  "hierarchical" => true,
            "labels" => array('name'=>"Creative Fields",'add_new_item'=>"Add New Field"), 
            "singular_label" => __( "Field" ), 
            "rewrite" => array( 'slug' => 'genre', // This controls the base slug that will display before each term 
                                'with_front' => false)
         ) 
);
    
    /*-- Type of Product or Service --*/
    
    $labels = array(
        'name'              => 'Type of Products/Services',
        'singular_name'     => 'Type of Product/Service',
        'search_items'      => 'Search Types of Products/Services',
        'all_items'         => 'All Types of Products/Services',
        'parent_item'       => 'Parent Type of Product/Service',
        'parent_item_colon' => 'Parent Type of Product/Service:',
        'edit_item'         => 'Edit Type of Product/Service',
        'update_item'       => 'Update Type of Product/Service',
        'add_new_item'      => 'Add New Type of Product/Service',
        'new_item_name'     => 'New Type of Product/Service Name',
        'menu_name'         => 'Type of Product/Service',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'product-types' ),
    );
    register_taxonomy( 'product-type', array( 'reviews' ), $args );
    
    
    /*-- Price Range Taxonomy definition starts --*/
    
    $labels = array(
        'name'              => 'Price Ranges',
        'singular_name'     => 'Price Range',
        'search_items'      => 'Search Price Ranges',
        'all_items'         => 'All Price Ranges',
        'parent_item'       => 'Parent of Price Ranges',
        'parent_item_colon' => 'Parent of Price Ranges:',
        'edit_item'         => 'Edit Price Ranges',
        'update_item'       => 'Update Price Ranges',
        'add_new_item'      => 'Add New Price Ranges',
        'new_item_name'     => 'New Price Ranges',
        'menu_name'         => 'Price Ranges',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'price-ranges' ),
    );
    register_taxonomy( 'price-range', array( 'reviews' ), $args );
    
    
    register_taxonomy(
            
            'mood',
            'reviews',
            array(
                'label' => 'Moods',
                'rewrite' => array('slug' => 'moods'),
                'hierarchical' => false,
                
            )
            
            );
    
}
add_action('init', 'my_custom_taxonomies');

?>