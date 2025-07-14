<?php
function mt_scripts()
{
	wp_enqueue_style('mt-style', get_template_directory_uri() . '/assets/styles/main.css', array(), filemtime(get_template_directory() . '/assets/styles/main.css'));
}
add_action('wp_enqueue_scripts', 'mt_scripts');
