<?php
function my_theme_scripts()
{
	// Google Fonts
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap', array(), null);

	// メインのCSS
	wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/styles/main.min.css', array(), '1.0.0');

	// jQuery (WordPressに同梱されているものを利用)
	wp_enqueue_script('jquery');

	// メインのJS
	wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/scripts/app.js', array('jquery'), '1.0.0', true);
}
// wp_enqueue_scripts アクションフックに関数を登録
add_action('wp_enqueue_scripts', 'my_theme_scripts');


// <title>タグをWordPressで管理する
function my_theme_setup()
{
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'my_theme_setup');
