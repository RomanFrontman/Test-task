<?php 
/*-------------------------------------------------*/
/*	Load stylesheet and scripts dynamically
/*-------------------------------------------------*/ 
function simple_scripts() {
	wp_enqueue_style( 'simple-main', get_stylesheet_uri() );
	wp_enqueue_style( 'simple-common', get_template_directory_uri() . '/scss/style.css?v=2', '1.3' );
	
	// wp_deregister_script( 'jquery' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js?v=1.1', array('jquery'), '1.0.0', true );
}


add_action( 'wp_enqueue_scripts', 'simple_scripts' );

/*-------------------------------------------------*/
/*	Navigation
/*-------------------------------------------------*/
	register_nav_menus(
		array(
			'header-menu'  => __( 'Header Menu', 'simple' ),
			'footer-menu'  => __( 'Footer Menu', 'simple' )
		)
	);

/*-------------------------------------------------*/
/*  Enable featured image
/*-------------------------------------------------*/
add_theme_support( 'post-thumbnails' );

/*-------------------------------------------------*/
/*	Remove spans in headlines
/*-------------------------------------------------*/
function the_contentdel($content) {
	$content = preg_replace_callback('/<(h[1-6])(.*?)>(.*?)<\/\1>/si', function($matches) {
		return '<' . $matches[1] . $matches[2] . '>' . strip_tags($matches[3]) . '</' . $matches[1] . '>';
	}, $content);
	return $content;
}
add_filter('the_content', 'the_contentdel');
add_filter('acf/format_value/type=wysiwyg', 'the_contentdel');



// Disable all WordPress feed links
function disable_all_feeds() {
    wp_die(__('No feed available, please visit the <a href="' . esc_url(home_url('/')) . '">homepage</a>!'));
}
add_action('do_feed', 'disable_all_feeds', 1);
add_action('do_feed_rdf', 'disable_all_feeds', 1);
add_action('do_feed_rss', 'disable_all_feeds', 1);
add_action('do_feed_rss2', 'disable_all_feeds', 1);
add_action('do_feed_atom', 'disable_all_feeds', 1);
add_action('do_feed_rss2_comments', 'disable_all_feeds', 1);
add_action('do_feed_atom_comments', 'disable_all_feeds', 1);
// Remove feed links from wp_head
function remove_feed_links() {
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
}
add_action('wp_head', 'remove_feed_links', 1);


@ini_set( 'upload_max_size' , '150M' );
@ini_set( 'post_max_size', '150M');
@ini_set( 'max_execution_time', '300' );
?>