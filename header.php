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
		<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
		<?php wp_head() ?>
	</head>

	<body <?php body_class(); ?>>
		<a class="screen-reader-text-focusable mc-button" id="skip-to-content" href="#main-page-content" tabindex="0">Skip to main content</a>

		<?php wp_body_open() ?>

		<header id="site-header" class="d-none header-dropdown top">
			<div id="site-masthead">
				<div class="wrapper-header d-flex flex-row align-items-center justify-content-between">
					<div id="branding" class="flex-shrink-0">
						<a href="<?= get_site_url(); ?>" aria-label="Return to home" class="d-inline-flex">
							<img src="" width="160" alt="Logo">
						</a>
					</div>
					<div id="mobile-navbar">

						<a href="/rsvp/" id="contact-button">
							<span class="contact-button-text">RSVP</span>
						</a>


						<button id="navigation-toggle" aria-controls="navigation" aria-expanded="false" aria-label="Open menu">
							<svg width="24" height="24" class="navigation-toggle-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="color: var(--nav-mobile-menu-toggle-icon-color)">
								<title>Toggle mobile navigation and utility content</title>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.97461 5.97461C2.97461 5.42232 3.42232 4.97461 3.97461 4.97461H19.9746C20.5269 4.97461 20.9746 5.42232 20.9746 5.97461C20.9746 6.52689 20.5269 6.97461 19.9746 6.97461H3.97461C3.42232 6.97461 2.97461 6.52689 2.97461 5.97461Z" fill="currentColor" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.97461 11.9746C2.97461 11.4223 3.42232 10.9746 3.97461 10.9746H19.9746C20.5269 10.9746 20.9746 11.4223 20.9746 11.9746C20.9746 12.5269 20.5269 12.9746 19.9746 12.9746H3.97461C3.42232 12.9746 2.97461 12.5269 2.97461 11.9746Z" fill="currentColor" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2.97461 17.9746C2.97461 17.4223 3.42232 16.9746 3.97461 16.9746H19.9746C20.5269 16.9746 20.9746 17.4223 20.9746 17.9746C20.9746 18.5269 20.5269 18.9746 19.9746 18.9746H3.97461C3.42232 18.9746 2.97461 18.5269 2.97461 17.9746Z" fill="currentColor" />
							</svg>
						</button>
					</div>
					<div id="navigation">
						<?php
						$header_menu_locations = get_nav_menu_locations();
						$header_main = has_nav_menu( 'header-primary' ) ? $header_menu_locations['header-main'] : null;
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


						<div id="mobile-utility">

							<p>Mobile utility</p>

						</div>
					</div>
				</div>
			</div>

		</header>

		<main id="main-page-content" tabindex="-1" role="main">