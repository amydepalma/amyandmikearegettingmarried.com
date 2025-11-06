<?php
/**
 * General theme setup

 */
if ( ! function_exists( 'mc_base_theme_setup' ) ) {
	add_action( 'after_setup_theme', 'mc_base_theme_setup' );
	function mc_base_theme_setup() {
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'link-color' );
		add_post_type_support( 'page', 'excerpt' );
		add_theme_support( 'customize-selective-refresh-widgets' );

		register_nav_menus(
			[
				'header-primary' => esc_html__( 'Primary Navigation', 'mc-base' ),
				'footer-one' => esc_html__( 'Footer Column One', 'mc-base' ),
				'footer-two' => esc_html__( 'Footer Column Two', 'mc-base' ),
				'footer-three' => esc_html__( 'Footer Column Three', 'mc-base' ),
				'footer-four' => esc_html__( 'Footer Column Four', 'mc-base' ),
			]
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			]
		);

		/**
		 * Block Editor
		 * https: //dlxplugins.com/tutorials/remove-core-and-third-party-block-patterns/
		 * TODO: https: //fullsiteediting.com/lessons/introduction-to-block-patterns/
		 */

		// Prevent loading patterns from the WordPress.org pattern directory
		add_filter( 'should_load_remote_block_patterns', '__return_false' );

		// Remove core patterns
		remove_theme_support( 'core-block-patterns' );

		// Remove Openverse from Media Tab
		add_filter(
			'block_editor_settings_all',
			function ( $settings ) {
				$settings['enableOpenverseMediaCategory'] = false;
				return $settings;
			},
			10
		);

	}
}
