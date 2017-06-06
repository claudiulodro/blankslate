<?php

function ml_sanitize_comment_output( $text ) {
	return wp_strip_all_tags( $text );
}
add_filter( 'comment_text', 'ml_sanitize_comment_output' );

function ml_sanitize_comment_input( $data ) {
	$data['comment_content'] = wp_strip_all_tags( $data['comment_content'] );
	return $data;
}
add_filter( 'preprocess_comment', 'ml_sanitize_comment_input');