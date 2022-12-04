<footer id="footer">
    <div class="container">
        <div class="footer-logo">
            <?php echo get_custom_logo(); ?>
        </div>
        <div class="footer-sidebar">
            <?php if ( is_active_sidebar( 'sidebar_footer' ) ) : ?>
            <div class="sidebar-footer-wrp">
                <?php if ( function_exists('dynamic_sidebar') ){
                    dynamic_sidebar('sidebar_footer');
                } ?>
            </div>
            <?php endif; ?>
            <nav class="footer-nav">
                <div class="footer-menu">
                    <?php wp_nav_menu( [
                        'theme_location'  => 'footer_menu',
                        ] ); ?>
                </div>
            </nav>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>