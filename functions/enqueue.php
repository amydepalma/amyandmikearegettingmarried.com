<?php
/**
 * Enqueue editor scripts & styles
 */

if ( ! function_exists( 'wedding_theme_styles' ) ) {
	add_action( 'wp_enqueue_scripts', 'wedding_theme_styles' );
	function wedding_theme_styles() {
		wp_enqueue_style( 'main', mc_get_asset_path( 'scss/main-styles.css' ), array(), WEDDING_THEME_VERSION, 'all' );
		// wp_enqueue_script( 'main', mc_get_asset_path( 'js/main-scripts.js' ), null, WEDDING_THEME_VERSION );

	}
}

/**
 * Enqueue editor scripts & styles
 */
if ( ! function_exists( 'wedding_theme_editor_styles' ) ) {
	add_action( 'enqueue_block_editor_assets', 'wedding_theme_editor_styles' );
	function wedding_theme_editor_styles( $hook ) {
		wp_enqueue_style( 'editor-styles', mc_get_asset_path( 'scss/editor-styles.css' ), array(), WEDDING_THEME_VERSION, 'all' );
		wp_enqueue_script( 'block-variations', mc_get_asset_path( 'js/block-variations.js' ), array( 'wp-blocks', 'wp-dom', 'wp-i18n' ), WEDDING_THEME_VERSION, true );
		wp_enqueue_script( 'block-styles', mc_get_asset_path( 'js/block-styles.js' ), array( 'wp-blocks', 'wp-dom', 'wp-i18n' ), WEDDING_THEME_VERSION, true );
	}
}
