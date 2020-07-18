<?php 
/*
Template Name: About Us
*/
?>

<?php get_header(); ?>

<section class="breadcrumbs">
    <h3><?php the_title();?></h3>
    <?php
    if ( function_exists('yoast_breadcrumb') ) {
    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
    }
    ?>
</section>
<section class="page-wrap">
    <div class="container">
        <?php get_template_part('includes/section','content'); ?>
        <?php get_template_part('includes/section','about'); ?>
    </div>
</section>

<?php get_footer(); ?>