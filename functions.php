<?php
/**
 * Theme Functions.
 * 
 * @package Aquila
 */

function aquila_enqueue_scripts() 
{
    wp_enqueue_style( 'styleshet', get_stylesheet_uri() . '/main.css', [], filemtime( get_template_directory() . '/style.css' ), 'all' );
}

add_action( 'wp_enqueue_scripts', 'aquila_enqueue_scripts' );
