<section id="hot-news">
    <div class="container">
        <h3 class="section-title"><?php the_field('hot_news_title'); ?></h3>
        <p class="section-description"><?php the_field('hot_news_description'); ?></p>
        <div class="hot-news-wrp">
        <?php 
        $query = new WP_Query( ['post_type' => 'post', 'posts_per_page' => 3] );
            if( $query->have_posts() ) { 
                while( $query->have_posts() )
                {
                    $query->the_post(); ?>
                    <article class="hot-news-item">
                        <div class="hot-news-item-image">
                            <a href="<?php echo get_permalink(); ?>">
                                <?php if(has_post_thumbnail()): ?>
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'blog-thumbnails-med'); ?>" alt="<?php the_title(); ?>" loading="lazy">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="hot-news-item-text">
                            <div class="bar"></div>
                            <h4 class="hot-news-item-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <div class="item-excerpt">
                                <?php echo get_the_excerpt(); ?>
                            </div>
                        </div>
                    </article>
                    <?php
                } 
                wp_reset_postdata(); 
            }
            ?>
        </div>
    </div>
</section>