<?php

// remove SVG filters
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );


// disable comments
if( 'remove comments' ){
	function fb_remove_comments_meta_boxes() {
		remove_meta_box( 'commentsdiv', 'page', 'normal' );
		remove_meta_box( 'trackbacksdiv', 'page', 'normal' );
	}
	add_action( 'admin_init', 'fb_remove_comments_meta_boxes' );
	add_filter('comments_open', '__return_false', 20, 2);
	remove_post_type_support('page', 'comments');
	remove_post_type_support('post', 'comments');
}

// Emojis disabling
if( 'Emojis disabling' ){

	function disable_emojis() {
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' );    
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );  
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
		add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
		add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
	}
	add_action( 'init', 'disable_emojis' );

	function disable_emojis_tinymce( $plugins ) {
		if ( is_array( $plugins ) ) {
			return array_diff( $plugins, array( 'wpemoji' ) );
		}

		return array();
	}

	function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
		if ( 'dns-prefetch' == $relation_type ) {

			// Strip out any URLs referencing the WordPress.org emoji location
			$emoji_svg_url_bit = 'https://s.w.org/images/core/emoji/';
			foreach ( $urls as $key => $url ) {
				if ( strpos( $url, $emoji_svg_url_bit ) !== false ) {
					unset( $urls[$key] );
				}
			}
		}
		return $urls;
	}

}
