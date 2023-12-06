<?php if (!defined('ABSPATH')) die();

/* Imagen destacada */
add_action('after_setup_theme', function() {
    add_theme_support('post-thumbnails');
}); 

/* CSS y JS */
add_action('wp_enqueue_scripts', function() {
    //CSS
    wp_enqueue_style('normalize-min', get_template_directory_uri() . '/assets/css/normalize.min.css', [], '8.0.1', 'all');
    wp_enqueue_style('style', get_stylesheet_uri(), ['normalize-min'], '1.0.0');
    
    //JS
    wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', [], '1.0.0', true);
});

/* habilitar los menus */
add_action('init', function() {
    register_nav_menus([
        'menu-principal' => __('Menú principal', 'adrianThemes')
    ]);
});
