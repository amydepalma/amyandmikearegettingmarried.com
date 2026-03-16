<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head prefix="og: http://ogp.me/ns#">
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-2G7NEN3TK6"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() { dataLayer.push(arguments); }
			gtag('js', new Date());

			gtag('config', 'G-2G7NEN3TK6');
		</script>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
		<?php wp_head() ?>
	</head>

	<body <?php body_class(); ?>>
		<a class="screen-reader-text-focusable mc-button" id="skip-to-content" href="#main-page-content" tabindex="0">Skip to main content</a>

		<?php wp_body_open() ?>

		<div id="site-wrapper" class="has-white-background-color pt-xxl px-md has-box-shadow-sm" style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/flower-bkg.webp);">
			<header id="site-header" class="top">
				<div id="site-masthead">
					<div class="d-flex flex-column align-items-center justify-content-center">
						<div id="branding" class="flex-shrink-0">
							<a href="<?= get_site_url(); ?>" aria-label="Return to home" class="d-inline-flex">
								<img src="<?= get_template_directory_uri(); ?>/assets/images/amy-and-mike-logo.svg" width="160" alt="Amy & Mike">
							</a>
						</div>
						<div id="navigation">
							<?php
							$header_menu_locations = get_nav_menu_locations();
							$header_main = has_nav_menu( 'header-primary' ) ? $header_menu_locations['header-primary'] : null;
							if ( $header_main ) {
								wp_nav_menu( [
									'theme_location' => 'header-primary',
									'depth' => 2,
									'container' => 'nav',
									'container_id' => 'primary-nav',
									'container_class' => '',
									'menu_class' => 'primary-menu list-unstyled p-0',
								] );
							}
							?>
						</div>
					</div>
				</div>

			</header>

			<main id="main-page-content" tabindex="-1" role="main">