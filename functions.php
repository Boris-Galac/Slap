<?php

//// loading sources files
function theme_source_files(){
    wp_enqueue_style('main-css', get_theme_file_uri('assets/css/style.css'));
    wp_enqueue_script('main-js', get_theme_file_uri('assets/js/script.js'), array(), false, true);
}

add_action('wp_enqueue_scripts', 'theme_source_files');

//// for title browser tab on which site we are
// function theme_features(){
//     add_theme_support('title-tag');
//     add_theme_support('post-thumbnails');
// }

// add_action('after_setup_theme', 'theme_features');

add_action( 'after_setup_theme', 'wpdocs_setup' );
function wpdocs_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
    add_theme_support( 'menus' );
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'starter-content' );
    add_theme_support( 'wp-pagenavi' ); // Add this line to enable wp-pagenavi plugin.
}
