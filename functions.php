<?php
/**
 * Ricardo Leal Portfolio functions and definitions
 */

add_action( 'wp_enqueue_scripts', 'ricardo_leal_enqueue_styles', 10 );
function ricardo_leal_enqueue_styles() {
    // Carga el estilo del tema padre (GeneratePress)
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
    // Carga el estilo de este tema hijo
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ), '1.0.0' );
}