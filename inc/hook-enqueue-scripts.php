<?php
/**
* Enqueue scripts and styles.
*/
add_action('wp_enqueue_scripts', function(){
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style('roboto-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,700', [], null);

	// Theme stylesheet.
	wp_enqueue_style('theme-style', get_theme_file_uri('assets/public/style.css'), [], null);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script('theme-scripts', get_theme_file_uri('assets/public/scripts.js'), array('jquery'), null, true);
});