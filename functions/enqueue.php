<?php
/**
 * Enqueue editor scripts & styles
 */
if ( ! function_exists( 'mc_base_editor_styles' ) ) {
	add_action( 'enqueue_block_editor_assets', 'mc_base_editor_styles' );
	function mc_base_editor_styles( $hook ) {
		wp_enqueue_style( 'mc-base-editor', plugins_url( 'mc-base/dist/scss/editor-styles.css' ), array(), WEDDING_THEME_VERSION, 'all' );
		wp_enqueue_script( 'mc-base-block-variations', plugins_url( 'mc-base/dist/js/block-variations.js' ), array( 'wp-blocks', 'wp-dom', 'wp-i18n' ), WEDDING_THEME_VERSION, true );
		wp_enqueue_script( 'mc-base-block-styles', plugins_url( 'mc-base/dist/js/block-styles.js' ), array( 'wp-blocks', 'wp-dom', 'wp-i18n' ), WEDDING_THEME_VERSION, true );
	}
}
/**
 * Enqueue frontend scripts & styles
 */
if ( ! function_exists( 'mc_base_enqueue_assets' ) ) {
	add_action( 'wp_enqueue_scripts', 'mc_base_enqueue_assets', 10 );
	function mc_base_enqueue_assets() {
		wp_enqueue_style( 'mc-base', plugins_url( 'mc-base/dist/scss/main-styles.css' ), array(), WEDDING_THEME_VERSION, 'all' );
		// wp_enqueue_script( 'mc-base', plugins_url( 'mc-base/dist/js/main-scripts.js' ), null, WEDDING_THEME_VERSION );

	}
}
