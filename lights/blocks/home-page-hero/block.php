<?php 
// $page_bg = (get_theme_mod('lights_bg')) ? get_theme_mod('lights_bg') : get_theme_file_uri('images/bg.png'); 
$page_bg = (get_field('page_hero_background')) ? get_field('page_hero_background') : get_theme_file_uri('images/bg.png'); 
?>
<section id="home-page-hero" style="background-image: url(<?php echo $page_bg; ?>); background-repeat: no-repeat; background-position: 100% 50%;" >
    <div class="home-page-hero-inner">
        <div class="container">
            <h1 class="main-page-hero-title"><?php the_field('page_hero_title'); ?></h1>
            <p class="main-page-hero-description"><?php the_field('page_hero_description'); ?></p>
            <div class="button-group">
                <?php if(!empty(get_field('page_hero_cta_link')['url'])): ?>
                <a href="<?php echo get_field('page_hero_cta_link')['url']; ?>" class="button button-white icon-apple" target="<?php echo get_field('page_hero_cta_link')['target']; ?>"><?php echo get_field('page_hero_cta_text'); ?></a>
                <?php endif; ?>
                <p><?php the_field('page_hero_cta_aftertext'); ?></p>
            </div>
            <div class="scroll-to-wrp">
                <a href="#hot-news" class="scroll-to"></a>
            </div>
        </div>
    </div>
</section>