<?php 
if(is_singular('clients')){
	wp_redirect(home_url());
    exit;
}
?>
<?php get_header(); ?>
    <main id="main" class="default-page">
        <?php 
        if( have_posts() )
        {
            while( have_posts() )
            {
                the_post();
                ?>
                    <?php $hero_bg = (get_theme_mod('lights_bg')) ? get_theme_mod('lights_bg') : get_theme_file_uri('images/bg.png');  ?>
                    <section id="default-hero" style="background-image: url(<?php echo $hero_bg; ?>); background-repeat: no-repeat; background-position: 100% 50%;" >
                        <div class="default-hero-inner">
                            <div class="container">
                                <?php if(is_singular()): ?>
                                    <h1 class="main-page-hero-title"><?php the_title(); ?></h1>
                                <?php endif; ?>
                            </div>
                        </div>
                    </section>
                    <section <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                        <div class="container">
                            <?php if(!is_singular()): ?>
                                <h2 class="post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <?php endif; ?>
                            <?php the_content(); ?>
                        </div>
                    </section>
        		<?php
            }
        }
        ?>
    </main>
<?php get_footer(); ?>