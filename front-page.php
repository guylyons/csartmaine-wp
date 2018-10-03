<?php
/**
 * Front Page Template
 *
 * @package WordPress
 *
 * @author  Guy Lyons <guylyons2@gmail.com>
 * @license MIT <github.com/guylyons/csartmaine-wp/license>
 *
 **/

get_header();
$logo = get_field('logo', 8);
$logo = $logo['sizes']['large'];
?>

<main role="main" class="main">

    <section>
        <?php get_template_part('template-parts/grid-repeater'); ?>
    </section>

</main>

<?php get_footer(); ?>
