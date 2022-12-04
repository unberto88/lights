<?php get_header(); ?>
    <main id="main" class="archive-news">
        <?php $hero_bg = (get_theme_mod('lights_bg')) ? get_theme_mod('lights_bg') : get_theme_file_uri('images/bg.png');  ?>
        <section id="default-hero" style="background-image: url(<?php echo $hero_bg; ?>); background-repeat: no-repeat; background-position: 100% 50%;" >
            <div class="default-hero-inner">
                <div class="container">
                    <?php if(is_archive()): ?>
                        <h1 class="news-page-title">News<?php //echo post_type_archive_title(); ?></h1>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="archive-news-col-wrp">
                <div class="archive-news-col-main">
                    <div class="breadcrumbs-wrp">
                        <a href="<?php echo home_url(); ?>">Home</a>&nbsp;—&nbsp;<span class="breadcrumbs-item-title">News  
                    </div>
                    <?php 
                    if( have_posts() ) { 
                        while( have_posts() )
                        {
                            the_post(); ?>
                            <article class="archive-news-item">
                                <div class="archive-news-item-image">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <?php if(has_post_thumbnail()): ?>
                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'blog-thumbnails'); ?>" alt="<?php the_title(); ?>" loading="lazy">
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                                    <h3 class="item-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <div class="item-excerpt">
                                        <?php echo get_the_excerpt(); ?>
                                    </div>
                                    <a class="read-more-link" href="<?php echo get_permalink(); ?>">Read More</a>
                                </div>
                            </article>
                            <?php
                        }  
                    }
                    ?>
                    <div class="posts-pagination">
                        <?php 
                        the_posts_pagination(array(
                            'prev_next'    => true,
                            'prev_text'    => '',
                            'next_text'    => '',
                            'screen_reader_text' => false,
                            'end_size' => 1,
                            'mid_size' => 1, 
                            )
                        ); ?>
                    </div>
                </div>
                
                <?php if ( function_exists('dynamic_sidebar') ): ?>
                    <div class="archive-news-col-sidebar">
                        <?php dynamic_sidebar('sidebar_news'); ?>
                    </div>
                <?php endif; ?>
                
            </div>
        </div>
    </main>
<?php get_footer(); ?>