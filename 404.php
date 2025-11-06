<?php
/**
 * The template for displaying 404 pages
 * *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header();
?>
<div class="grid-page">
	<div class="pt-giant pb-jumbo mh-50vh">
		<h1>Page not found</h1>
		<p class="has-md-font-size">Sorry, we can't find the page you are looking for. Possible reasons could be:</p>
		<ul class="has-md-font-size mb-lg">
			<li>There is an error in the URL entered into your browser. Check the URL and try again.</li>
			<li>The page you are looking for has been moved or deleted.</li>
		</ul>
		<p><a href="/" class="hover-text-underline">Return to homepage</a></p>
	</div>
</div>
<?php
get_footer();