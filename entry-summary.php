<section class="entry-summary">
	<?php the_excerpt(); ?>
	<a href="<?php comments_link() ?>">
		<div class="comments-title"><?php comments_number(); ?></div>
	</a>
	<?php if( is_search() ) { ?><div class="entry-links"><?php wp_link_pages(); ?></div><?php } ?>
</section>