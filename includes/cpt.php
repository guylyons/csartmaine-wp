<?php
/**
 * Custom Post Types
 *
 */

function cpt_register_artists()
{

    /**
     * Post Type: Artists.
     */

    $labels = array(
        "name" => __('Artists', ''),
        "singular_name" => __('Artist', ''),
    );

    $args = array(
        "label" => __('Artists', ''),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "has_archive" => true,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => true,
        "rewrite" => array( "slug" => "artists", "with_front" => true ),
        "query_var" => true,
        "supports" => array( "title", "editor", "thumbnail", "excerpt", "revisions", "post-formats" ),
        "taxonomies" => array( "post_tag" ),
    );

    register_post_type("artists", $args);
}

add_action('init', 'cpt_register_artists');

function cpt_register_artists_taxonomies()
{

    /**
     * Taxonomy: Seasons.
     */

    $labels = array(
        "name" => __('Seasons', ''),
        "singular_name" => __('Season', ''),
    );

    $args = array(
        "label" => __('Seasons', ''),
        "labels" => $labels,
        "public" => true,
        "hierarchical" => false,
        "label" => "Seasons",
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => array( 'slug' => 'season', 'with_front' => true, ),
        "show_admin_column" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "show_in_quick_edit" => false,
    );
    register_taxonomy("season", array( "artists" ), $args);

    /**
     * Taxonomy: Mediums.
     */

    $labels = array(
        "name" => __('Mediums', ''),
        "singular_name" => __('Medium', ''),
    );

    $args = array(
        "label" => __('Mediums', ''),
        "labels" => $labels,
        "public" => true,
        "hierarchical" => false,
        "label" => "Mediums",
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => array( 'slug' => 'medium', 'with_front' => true, ),
        "show_admin_column" => false,
        "show_in_rest" => false,
        "rest_base" => "",
        "show_in_quick_edit" => true,
    );
    register_taxonomy("medium", array( "artists" ), $args);
}

add_action('init', 'cpt_register_artists_taxonomies');
