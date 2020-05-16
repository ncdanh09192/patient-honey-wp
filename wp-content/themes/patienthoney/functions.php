<?php
/**
 * Theme setup.
 */
function theme_setup() {
	
	/*
	 * Make Twenty Fourteen available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Fourteen, use a find and
	 * replace to change 'twentyfourteen' to the name of your theme in all
	 * template files.
	 */
	// load_theme_textdomain( 'twentyfourteen', get_template_directory() . '/languages' );
	
	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );
	
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	
	//add more size for pages
	//add_image_size( 'news-thumb', 266, 266, true );
	
	// This theme uses its own gallery styles.
	// add_filter( 'use_default_gallery_style', '__return_false' );
	
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	// add_editor_style( array( 'assets/css/editor-style.css', get_template_directory() ) );
	
}
add_action( 'after_setup_theme', 'theme_setup' );

/** MORE **/
show_admin_bar(false);

/* navigation position */
add_theme_support ('menus');

//Create Nav Menu
if (function_exists ('register_nav_menus')) {
	register_nav_menus (array(
		'primary' 	=> 'Desktop Menu',
		// 'mobile' 	=> 'Mobile Menu',
		// 'footer' 	=> 'Footer Menu',
	));
}

function ph_get_template_directory_uri(){
	return get_template_directory_uri();
}

function ph_get_template_directory_assets( $file = '' ){
	return get_template_directory_uri().'/assets/'.$file ;
}

function main_wp_head(){
	global $post;
	
	if( empty($post) ) return ;
	
	if( $post->post_type == 'attachment' ) {
		$attachment_id = $post->ID;
	} else {
		$attachment_id = get_post_thumbnail_id( $post->ID );
	}
	$url = wp_get_attachment_url($attachment_id);
	
	$meta = array();
	// $desc = wp_trim_words( $post->post_content, 100000 );

	$meta[] = '<meta name="author" content="">';
    $meta[] = '<meta name="description" content="">';
    $meta[] = '<meta name="keywords" content="">';
    
	// $meta[] = '<meta name="description" content="'. $desc .'" />';
	$meta[] = '<meta property="og:type"   content="article" />';
	$meta[] = '<meta property="og:url"    content="'.get_permalink().'" />';
	$meta[] = '<meta property="og:title"  content="'.get_the_title().' | Patient Honey" />';
	$meta[] = '<meta property="og:description" content="" />';
	$meta[] = '<meta property="og:image:secure_url"  content="' . ph_get_template_directory_assets('images/ogp.jpg') . '" />';
	$meta[] = '<meta property="og:image"  content="' . ph_get_template_directory_assets('images/ogp.jpg') . '" />';
	
	echo implode("\n", $meta ) ."\n";
}
add_action('wp_head', 'main_wp_head');

function ph_scripts() {
	$assets = ph_get_template_directory_assets();
	$time = current_time( 'Y-m-d' );
	
	// wp_enqueue_script( 'main-script', $assets . 'js/script.js',  array('jquery'), $time, true  );
	// wp_enqueue_script( 'wow-js', 	$assets . 'libs/wow.min.js',  array('jquery'), $time, true  );
	// wp_enqueue_style( 'fontawesome-style', $assets . 'libs/fontawesome.css', '', $time );
	// wp_enqueue_style( 'main-style', $assets . 'css/style.css', '', $time );
	// wp_enqueue_style( 'bootstrap-style', $assets . 'css/bootstrap.css', '', $time );
	// wp_enqueue_style( 'wow-style', $assets . 'css/animate.css', '', $time );
	
	if(is_front_page()){
		// wp_enqueue_style( 'slick-style', $assets . 'libs/slick.css', '', $time );
		// wp_enqueue_script( 'slick-script', $assets . 'libs/slick.js',  array('jquery'), $time, true  );
		// wp_enqueue_script( 'slider-script', $assets . 'js/slider.js',  array('jquery'), $time, true  );
	}
}
add_action( 'wp_enqueue_scripts', 'ph_scripts' );

require get_theme_file_path( '/inc/init.php' );
