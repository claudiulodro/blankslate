<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>

		<?php if ( is_singular() ): ?>
			<h1 class="entry-title">
				<?php the_title() ?>
			</h1>
		<?php else: ?>
			<h2 class="entry-title">
				<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
			</h2>
		<?php endif ?>

	</header>
	<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
	<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
	<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>
</article>