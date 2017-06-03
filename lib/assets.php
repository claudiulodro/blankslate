<?php

function multithreaded_style() {
	wp_enqueue_style( 'multithreaded', get_template_directory_uri() . '/assets/multithreaded.css', array(), rand() );
}
add_action( 'wp_enqueue_scripts', 'multithreaded_style' );