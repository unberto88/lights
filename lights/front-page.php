<?php 
/**
* Template Name: Front Page
*/
?>
<?php get_header(); ?>
<main id="main">
    <?php get_template_part('blocks/home-page-hero/block'); ?>
    <?php get_template_part('blocks/home-hot-news/block'); ?>
    <?php get_template_part('blocks/home-merch/block'); ?>
    <?php get_template_part('blocks/home-clients/block'); ?>
    <?php get_template_part('blocks/home-about/block'); ?>

    <?php 
        if( have_posts() ) { 
            while( have_posts() )
            {
                the_post(); ?>
                <article class="home-page-content">
                    <?php the_content(); ?>
                </article>
                <?php
            }  
        }
    ?>

</main>
<?php get_footer(); ?>