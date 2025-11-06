<?php

/**
 * Asset path helper
 */
if ( ! function_exists( 'mc_get_asset_path' ) ) {
	function mc_get_asset_path( $path ) {
		if ( is_dir( get_template_directory() . '/dist/blocks' ) ) {
			$asset_path = get_stylesheet_directory_uri() . '/dist/assets';
		} else {
			$asset_path = get_stylesheet_directory_uri() . '/dist';
		}
		return "$asset_path/$path";
	}
}