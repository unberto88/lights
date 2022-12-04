<section id="home-clients">
    <div class="container">
        <h3 class="section-title"><?php the_field('clients_title'); ?></h3>
        <?php $query = new WP_Query( ['post_type' => 'clients', 'posts_per_page' => 12] );
            if( $query->have_posts() ) { ?>
                <div class="clients-wrp">
                    <?php while( $query->have_posts() )
                    {
                        $query->the_post(); ?>
                        <div class="client-item-image">
                            <?php if(has_post_thumbnail()): ?>
                                <a href="<?php echo get_permalink(); ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>" loading="lazy">
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php 
                    } ?>
                </div>
            <?php 
            } ?>
        <?php wp_reset_postdata(); ?>
    </div>
</section>