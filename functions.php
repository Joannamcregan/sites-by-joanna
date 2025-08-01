<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

function Joanna_theme_files(){
    wp_enqueue_script('sites-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('general-styles', get_stylesheet_directory_uri() . '/css/general-styles.css', false, '', 'all');
    wp_enqueue_style('responsive-styles', get_stylesheet_directory_uri() . '/css/responsive-styles.css', false, '', 'all');
    wp_enqueue_style('mode-styles', get_stylesheet_directory_uri() . '/css/mode-styles.css', false, '', 'all');
    wp_enqueue_style('animation-styles', get_stylesheet_directory_uri() . '/css/animation-styles.css', false, '', 'all');
}

wp_localize_script('sites-js', 'sitesData', array(
    'root_url' => get_site_url(),        
    'nonce' => wp_create_nonce('wp_rest')
));

add_action('wp_enqueue_scripts','Joanna_theme_files');

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );
?>