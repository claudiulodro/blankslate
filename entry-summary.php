<section class="entry-summary">
	<?php the_excerpt(); ?>
	<div class="comments-title"><?php comments_number(); ?></div>

	<?php if( is_search() ) { ?><div class="entry-links"><?php wp_link_pages(); ?></div><?php } ?>
</section>