<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon-16x16.png">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon.ico">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="header">
    <div class="container">
        <div class="header-logo">
            <?php echo get_custom_logo(); ?>
        </div>
        <nav class="header-nav">
            <div class="header-menu">
                <?php wp_nav_menu( [
                    'theme_location'  => 'header_menu',
                    ] ); ?>
            </div>
            <div id="search-wrp">
                <button id="search-toggle" class="icons-search"></button>
                <div class="search-form">
                    <?php get_search_form() ?>
                </div>
            </div>
        </nav>
    </div>
    <button id="menu-toggle" class="menu-toggle-button"><span></span><span></span><span></span></button>
</header>