<?php

add_theme_support( 'custom-logo' );

function the_url($url) {
    return get_bloginfo( 'url' );
}
add_filter('login_headerurl', 'the_url');

function wpdev_filter_login_head() {
    if ( has_custom_logo() ) :
        $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
        ?>
        <style type="text/css">
            .login h1 a {
                background-image: url(<?php echo esc_url( $image[0] ); ?>);
                background-size: contain !important;
                height: 150px;
                width: 100% !important;
            }
        </style>
        <?php
    endif;
}
add_action( 'login_head', 'wpdev_filter_login_head', 100 );

function enqueue_scripts() {
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri().'/css/main.css' );
    wp_enqueue_script( 'main-js', get_stylesheet_directory_uri().'/js/main.js', ['jquery'] );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function register_homebannerspt() {
    $labels = array(
        'name'                  => _x( 'Home Banners', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Home Banner', 'Post type singular name', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'banners' ),
        'capability_type'    => 'homebannerspt',
        'capabilities'       => [
            'edit_post'          => 'edit_banner', 
            'read_post'          => 'read_banner', 
            'delete_post'        => 'delete_banner', 
            'edit_posts'         => 'edit_banners', 
            'edit_others_posts'  => 'edit_others_banners', 
            'publish_posts'      => 'publish_banners',       
            'read_private_posts' => 'read_private_banners', 
            'create_posts'       => 'edit_banners', 
            'edit_published_posts'  => 'edit_published_banners',
            'delete_published_posts'    => 'delete_published_banners',
        ],
        'map_meta_cap'       => true,
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 3,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
    );
 
    register_post_type( 'homebannerspt', $args );
}
add_action('init', 'register_homebannerspt');

function register_specialspt() {
    $labels = array(
        'name'                  => _x( 'Specials', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Special', 'Post type singular name', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'specials' ),
        'capability_type'    => 'post',
        'map_meta_cap'       => true,
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 3,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
    );
 
    register_post_type( 'specialspt', $args );
}
add_action('init', 'register_specialspt');

function register_programmespt() {
    $labels = array(
        'name'                  => _x( 'Programmes', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Programme', 'Post type singular name', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'programmes' ),
        'capability_type'    => 'post',
        'map_meta_cap'       => true,
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
    );
 
    register_post_type( 'programmespt', $args );
}
add_action('init', 'register_programmespt');

function register_coachespt() {
    $labels = array(
        'name'                  => _x( 'Coaches', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Coach', 'Post type singular name', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'coaches' ),
        'capability_type'    => 'post',
        'map_meta_cap'       => true,
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
    );
 
    register_post_type( 'coachespt', $args );
}
add_action('init', 'register_coachespt');

function register_testimonialspt() {
    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonials' ),
        'capability_type'    => 'post',
        'map_meta_cap'       => true,
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
    );
 
    register_post_type( 'testimonialspt', $args );
}
add_action('init', 'register_testimonialspt');

function add_custom_roles() {
    add_role('coach', _('Coach'), [
        'upload_files' => true,
        'publish_posts' => true,
        'edit_published_posts' => true,
        'delete_published_posts' => true,
        'edit_posts' => true,
        'delete_posts' => true,
        'read' => true,
        'publish_pages' => true,
        'edit_pages' => true,
        'edit_published_pages' => true,
        'delete_pages' => true,
        'unfiltered_html' => true,
    ]);
}
add_action('init', 'add_custom_roles');

function add_banner_caps() {
    $role = get_role('administrator');
    $role->add_cap('edit_banner');
    $role->add_cap('read_banner');
    $role->add_cap('delete_banner');
    $role->add_cap('edit_banners');
    $role->add_cap('edit_others_banners');
    $role->add_cap('publish_banners');
    $role->add_cap('read_private_banners');
    $role->add_cap('edit_banners');
    $role->add_cap('edit_published_banners');
    $role->add_cap('delete_published_banners');

    $role->add_cap('manage_tag');
    $role->add_cap('edit_tag');
    $role->add_cap('delete_tag');
    $role->add_cap('assign_tag');
}

add_action('admin_init', 'add_banner_caps');