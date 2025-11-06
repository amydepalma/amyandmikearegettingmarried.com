<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

define( 'WEDDING_THEME_VERSION', '1.0' );
define( 'WEDDING_THEME_PATH', trailingslashit( get_template_directory() ) );


/**
 * Add the theme's unique functionality
 */
foreach ( glob( get_template_directory() . "/functions/*.php" ) as $file ) {
	require $file;
}

foreach ( glob( get_template_directory() . "/includes/*.php" ) as $file ) {
	require $file;
}

// require get_template_directory() . '/blocks/mc-blocks.php';
