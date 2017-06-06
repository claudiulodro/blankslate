<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>

		<?php if ( is_singular() ): ?>
			<h1 class="entry-title">
				<?php the_title() ?>
			</h1>
		<?php else: ?>
			<h1 class="entry-title">
				<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
			</h1>
		<?php endif ?>

	</header>
	<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>

	<?php 
	if ( is_singular() ):
		get_template_part( 'entry', 'content' );
	else:
		get_template_part( 'entry', 'summary' );
	endif;
	?>

	<?php if ( is_singular() ): get_template_part( 'entry-footer' ); endif; ?>
</article>