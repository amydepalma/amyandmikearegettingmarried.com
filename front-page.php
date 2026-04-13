<?php
/**
 * Template Name:  New Frontpage
 **/
get_header(); ?>


<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) :
		the_post(); ?>
		<div id="block-editor-content" class="page grid-page">
			<div class="my-xxl">
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>