<?php
/*=====================================
    Register Menus
=====================================*/
function csart_register_menus() {
    register_nav_menus(array(
        'primary'   =>    __( 'Primary Navigation', 'csartmaine' ),
        'mobile'    =>    __( 'Mobile Navigation', 'csartmaine' ),
        'footer'    =>    __( 'Footer Navigation', 'csartmaine' ),
    ));
}

add_action( 'init', 'csart_register_menus' );

function csart_primary_nav() {
    wp_nav_menu(array(
        'container'       => false,                        // remove nav container
        'menu'            => 'Primary Nav',                // nav name
        'menu_id'         => 'nav-main',                   // custom id
        'menu_class'      => 'nav-main nav group',         // custom class
        'theme_location'  => 'primary',                    // where it's located in the theme
        'before'          => '',                           // before the menu
        'after'           => '',                           // after the menu
        'link_before'     => '',                           // before each link
        'link_after'      => '',                           // after each link
        'depth'           => 0,                            // set to 1 to disable dropdowns
    ));
}

function csart_mobile_nav() {
    wp_nav_menu(array(
        'container'       => false,                        // remove nav container
        'menu'            => 'Mobile Nav',                 // nav name
        'menu_id'         => 'nav-mobile',                 // custom id
        'menu_class'      => 'nav-mobile nav group',       // custom class
        'theme_location'  => 'mobile',                     // where it's located in the theme
        'before'          => '',                           // before the menu
        'after'           => '',                           // after the menu
        'link_before'     => '',                           // before each link
        'link_after'      => '',                           // after each link
        'depth'           => 1,                            // set to 1 to disable dropdowns
    ));
}

function csart_footer_nav() {
    wp_nav_menu(array(
        'container'       => false,                        // remove nav container
        'menu'            => 'Footer Nav',                 // nav name
        'menu_id'         => 'nav-footer',                 // custom id
        'menu_class'      => 'nav-footer nav group',       // custom class
        'theme_location'  => 'footer',                     // where it's located in the theme
        'before'          => '',                           // before the menu
        'after'           => '',                           // after the menu
        'link_before'     => '',                           // before each link
        'link_after'      => '',                           // after each link
        'depth'           => 1,                            // set to 1 to disable dropdowns
    ));
}
