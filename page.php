<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) :
		the_post(); ?>
		<div id="block-editor-content" class="page grid-page">
			<div class="mt-lg mb-xxl" style=" text-wrap: balance; margin: 0 auto;">
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>