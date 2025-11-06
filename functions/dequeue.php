<?php
/**
 * Deregister WP Default Scripts that aren't frequently used
 */
if ( ! function_exists( 'mc_base_deregister_scripts' ) ) {
	add_action( 'wp_footer', 'mc_base_deregister_scripts' );
	function mc_base_deregister_scripts() {
		wp_dequeue_script( 'wp-embed' );
	}
}

/**
 * Remove WordPress references in head
 */
if ( ! function_exists( 'mc_base_disable_wordpress_refs' ) ) {
	add_action( 'init', 'mc_base_disable_wordpress_refs' );
	function mc_base_disable_wordpress_refs() {
		remove_action( 'wp_head', 'rel_canonical' );
		remove_action( 'wp_head', 'rest_output_link_wp_head' );
		remove_action( 'wp_head', 'wp_generator' );
		remove_action( 'wp_head', 'wp_resource_hints', 2 );
		remove_action( 'wp_head', 'rsd_link' );
		remove_action( 'wp_head', 'wlwmanifest_link' );
		// remove_action( 'wp_head', 'feed_links', 2 );
		global $wp_widget_factory;
		remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
	}
}


/**
 * Dequeue jQuery migrate
 */
if ( ! function_exists( 'mc_base_dequeue_jquery_migrate' ) ) {
	add_action( 'wp_default_scripts', 'mc_base_dequeue_jquery_migrate' );
	function mc_base_dequeue_jquery_migrate( $scripts ) {
		if ( ! is_admin() && ! empty( $scripts->registered['jquery'] ) ) {
			$scripts->registered['jquery']->deps = array_diff(
				$scripts->registered['jquery']->deps,
				[ 'jquery-migrate' ]
			);
		}
	}
}


/**
 * Disable Comments
 */
add_action( 'admin_init', function () {
	// Redirect any user trying to access comments page
	global $pagenow;

	if ( $pagenow === 'edit-comments.php' ) {
		wp_safe_redirect( admin_url() );
		exit;
	}

	// Remove comments metabox from dashboard
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );

	// Disable support for comments and trackbacks in post types
	foreach ( get_post_types() as $post_type ) {
		if ( post_type_supports( $post_type, 'comments' ) ) {
			remove_post_type_support( $post_type, 'comments' );
			remove_post_type_support( $post_type, 'trackbacks' );
		}
	}
} );

if ( ! function_exists( 'mc_base_remove_comments_admin_bar_link' ) ) {
	add_action( 'wp_before_admin_bar_render', 'mc_base_remove_comments_admin_bar_link' );
	function mc_base_remove_comments_admin_bar_link() {
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu( 'comments' );
	}
}
// Close comments on the front-end
add_filter( 'comments_open', '__return_false', 20, 2 );
add_filter( 'pings_open', '__return_false', 20, 2 );

// Hide existing comments
add_filter( 'comments_array', '__return_empty_array', 10, 2 );

// Remove comments page in menu
add_action( 'admin_menu', function () {
	remove_menu_page( 'edit-comments.php' );
} );

// Remove comments links from admin bar
add_action( 'init', function () {
	if ( is_admin_bar_showing() ) {
		remove_action( 'admin_bar_menu', 'wp_admin_bar_comments_menu', 60 );
	}
} );


/**
 * Disable Emojis
 */

// Disable the emoji's
if ( ! function_exists( 'mc_base_disable_emojis' ) ) {
	function mc_base_disable_emojis() {
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
		add_filter( 'tiny_mce_plugins', 'mc_base_disable_emojis_tinymce' );
		add_filter( 'wp_resource_hints', 'mc_base_disable_emojis_remove_dns_prefetch', 10, 2 );
	}
	add_action( 'init', 'mc_base_disable_emojis' );
}

// Filter function used to remove the tinymce emoji plugin.
if ( ! function_exists( 'mc_base_disable_emojis_tinymce' ) ) {
	function mc_base_disable_emojis_tinymce( $plugins ) {
		if ( is_array( $plugins ) ) {
			return array_diff( $plugins, array( 'wpemoji' ) );
		} else {
			return array();
		}
	}
}

// Remove emoji CDN hostname from DNS prefetching hints.
if ( ! function_exists( 'mc_base_disable_emojis_remove_dns_prefetch' ) ) {
	function mc_base_disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
		if ( 'dns-prefetch' == $relation_type ) {
			/** This filter is documented in wp-includes/formatting.php */
			$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
			$urls = array_diff( $urls, array( $emoji_svg_url ) );
		}
		return $urls;
	}
}