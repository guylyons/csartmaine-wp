<?php
/*=====================================
 *  Enqueue Styles
 *====================================*/

function csart_enqueue_styles()
{
    wp_register_style(
        'main',
        get_template_directory_uri() . '/assets/css/main.css',
        false,
        '2.0'
    );

    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'csart_enqueue_styles');

function csart_enqueue_scripts()
{
    wp_register_script('oldscripts', get_template_directory_uri() . '/assets/js/oldscripts.js', array( 'jquery' ), '1.0', true);
    wp_enqueue_script('oldscripts');
}

add_action('wp_enqueue_scripts', 'csart_enqueue_scripts');
