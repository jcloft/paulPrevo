<?php
/**
 * Migration functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 */


/**
 * Sets up theme defaults and registers the various WordPress features that
 * the Migration theme supports.
 *
 * @uses add_editor_style() To add a Visual Editor stylesheet.
 * @uses add_theme_support() To add support for post thumbnails
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 */
function migration_setup() {

	// This theme styles the visual editor with editor-style.css to give it some niceties.
	add_editor_style();

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'migration' ) );

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 500, 9999 ); // Unlimited height, soft crop
}
add_action( 'after_setup_theme', 'migration_setup' );


/**
 * Enqueues scripts and styles for front-end.
 */
function migration_scripts_styles() {
	global $wp_styles;

	/*
	 * Loads our main stylesheet.
	 */
       // Load main stylesheet.
       
       // Load Angular
       wp_enqueue_script( 'ae-angular', '//ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js', array( ), '', true );
      wp_enqueue_script( 'ae-angular-route', '//ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js', array( ), '', true ); 
  wp_enqueue_script( 'ae-angular-sanitize', '//ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-sanitize.js', array( ), '', true );
      wp_enqueue_script( 'ae-angular-animate', '//ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.js', array( ), '', true );
  
      wp_enqueue_script( 'ae-angular-mailchimp', get_template_directory_uri() . '/angular-mailchimp.js', array( ), '', true );
       // Load custom app script
       wp_enqueue_script( 'ae-js', get_template_directory_uri() . '/main.js', array(), '', true );
       // Variables for app script
       wp_localize_script( 'ae-js', 'aeJS',
       array(
         'partials' => trailingslashit(get_template_directory_uri() ) . 'partials/')
       );


	/*
	 * Optional: Loads the Internet Explorer specific stylesheet.
	 */
	//wp_enqueue_style( 'migration-ie', get_template_directory_uri() . '/css/ie.css', array( 'migration-style' ), '20121010' );
	//$wp_styles->add_data( 'migration-ie', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'migration_scripts_styles' );

function arphabet_widgets_init() {
  register_sidebar( array(
    'name' => 'Issue1',
    'id' =>'issue1',
    'before_widget' =>'<div>',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="rounded">',
    'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'arphabet_widgets_init');


