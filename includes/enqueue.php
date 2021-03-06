<?php
/*=====================================
 *  Enqueue Styles
 *====================================*/

function csart_enqueue_styles() {
  wp_register_style( 'evil-icons', 'https://cdn.jsdelivr.net/evil-icons/1.8.0/evil-icons.min.css', false, '1.7.8' );
  wp_register_style( 'material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', false, '2.2.0' );
  wp_register_style( 'csart-custom', get_template_directory_uri() . '/assets/css/main.css', false, '1.0' );

  wp_enqueue_style( 'evil-icons' );
  wp_enqueue_style( 'material-icons' );
  wp_enqueue_style( 'csart-custom' );
}

add_action( 'wp_enqueue_scripts', 'csart_enqueue_styles' );

function csart_enqueue_scripts() {
  wp_register_script( 'slick-slider', get_template_directory_uri() . '/assets/js/vendor/slick.min.js', array( 'jquery' ), '1.6.0', false );
  wp_register_script( 'oldscripts', get_template_directory_uri() . '/assets/js/oldscripts.js', array( 'jquery' ), '1.0', true );
  wp_register_script( 'evil-icons', 'https://cdn.jsdelivr.net/evil-icons/1.8.0/evil-icons.min.js', true, '1.7.8' );
  // wp_register_script( 'semantic-ui', get_template_directory_uri() . '/semantic/dist/semantic.min.js', true );

  wp_enqueue_script( 'slick-slider' );
  wp_enqueue_script( 'oldscripts' );
  wp_enqueue_script( 'evil-icons' );
}

add_action( 'wp_enqueue_scripts', 'csart_enqueue_scripts' );
