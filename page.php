<?php get_header(); ?>

<main>

	<?php
	if (have_posts()) : // WordPress Loop
		while (have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<?php the_content(); ?>
			</div>
		<?php
		endwhile;
	else: ?>
	?>
			<div class="post page">
				<h2>Page Not Found!</h2>
				<p>お探しのページは見つかりませんでした。</p>
			</div>
	<?php
	endif;
	?>

	<?php get_sidebar(); ?>

</main>

<?php get_footer(); ?>
