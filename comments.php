<?php if ( 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) ) return; ?>
<section id="comments">
	<h1>Comments</h1>

	<?php 
	if ( comments_open() ):
		comment_form();
	endif;
	
	if ( have_comments() ) : 
		global $comments_by_type;
		$comments_by_type = separate_comments( $comments );
		if ( ! empty( $comments_by_type['comment'] ) ) : 
		?>
			<section id="comments-list" class="comments">
				<h3 class="comments-title"><?php comments_number(); ?></h3>
				<?php if ( get_comment_pages_count() > 1 ) : ?>
					<nav id="comments-nav-above" class="comments-navigation" role="navigation">
						<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
					</nav>
				<?php endif; ?>
				<ul>
					<?php wp_list_comments( 'type=comment' ); ?>
				</ul>
				<?php if ( get_comment_pages_count() > 1 ) : ?>
					<nav id="comments-nav-below" class="comments-navigation" role="navigation">
						<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
					</nav>
				<?php endif; ?>
			</section>
		<?php 
		endif; 
	endif;
?>
</section>