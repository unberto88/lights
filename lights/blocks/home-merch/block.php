<?php 
$section_bg = get_theme_file_uri('images/buy-now.svg'); 
?>
<section id="home-merch" style="background-image: url(<?php echo $section_bg; ?>); background-repeat: no-repeat; background-position: 50% 50%;" >
    <div class="container">
        <div class="merch-wrp">
            <h3 class="section-title"><?php the_field('merch_title'); ?></h3>
            <p class="section-description"><?php the_field('merch_description'); ?></p>
        <?php 
        $query = new WP_Query( ['post_type' => 'merch', 'posts_per_page' => 3] );
            if( $query->have_posts() ) { ?>
            <div class="swiper home-slider">
                <div class="swiper-wrapper">
                    <?php while( $query->have_posts() )
                    {
                        $query->the_post(); ?>
                        <div class="swiper-slide home-slider-item">
                            <article class="merch-item">
                                <div class="merch-item-text">
                                    <h4 class="merch-item-title"><?php the_title(); ?></h4>
                                    <div class="item-content">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                                <div class="merch-item-image">
                                    <?php if(has_post_thumbnail()): ?>
                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>" loading="lazy">
                                    <?php endif; ?>
                                </div>
                            </article>
                        </div>
                        <?php
                    } 
                    wp_reset_postdata(); ?>
                </div>
                <div class="home-slider-nav-wrp">
                    <div class="home-slider-pagination"></div>
                    <div class="home-slider-nav-buttons">
                        <button class="home-slider--button-prev"></button>
                        <button class="home-slider--button-next"></button>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>