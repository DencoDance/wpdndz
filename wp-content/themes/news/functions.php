<?php
/* ----------------------------------------------------------------------------------- */
/*  REGISTER THEME MENU
/* ----------------------------------------------------------------------------------- */
	if(function_exists('register_nav_menus')){
		register_nav_menus(array('main_menu' => 'Main Menu'));
	}
	

/* ----------------------------------------------------------------------------------- */
/*  ENQUEUE STYLES AND SCRIPTS
/* ----------------------------------------------------------------------------------- */
	function mypassion_scripts() {
		global $admin_data; 
		
		/* ---------------------------------------------------------------------------------- */
		/* Register Scripts
		/* ---------------------------------------------------------------------------------- */
		
		wp_register_script('easing', get_template_directory_uri() . '/framework/js/easing.min.js', 'jquery', '1.0', TRUE);
		wp_register_script('mobilemenu', get_template_directory_uri() . '/framework/js/mobilemenu.js', 'jquery', '1.0', TRUE);
		wp_register_script('modernizr', get_template_directory_uri() . '/framework/js/customM.js', 'jquery', '1.0');
		wp_register_script('carouFredSel', get_template_directory_uri() . '/framework/js/carouFredSel.js', 'jquery', '1.0', TRUE);
		
		wp_register_script('sticky', get_template_directory_uri() . '/framework/js/sticky.js', 'jquery', '1.0', TRUE);
		wp_register_script('superfish', get_template_directory_uri() . '/framework/js/superfish.js', 'jquery', '1.0', TRUE);
		wp_register_script('jquery-ui', get_template_directory_uri() . '/framework/js/ui.js', 'jquery', '1.0', TRUE);
		wp_register_script('html5', get_template_directory_uri() . '/framework/js/html5.js', 'jquery', '1.0', TRUE);
		wp_register_script('flexslider', get_template_directory_uri() . '/framework/js/flexslider-min.js', 'jquery', '1.0', TRUE);
		wp_register_script('scripts', get_template_directory_uri() . '/framework/js/scripts.js', 'jquery', '1.0', TRUE);
		wp_register_script('mypassion', get_template_directory_uri() . '/framework/js/mypassion.js', 'jquery', '1.0', TRUE);
		
		
		/* ---------------------------------------------------------------------------------- */
		/* Enqueue Scripts 
		/* ---------------------------------------------------------------------------------- */
		wp_enqueue_script('jquery');
		
		wp_enqueue_script('easing');
		wp_enqueue_script('modernizr');
		wp_enqueue_script('superfish');
		wp_enqueue_script('carouFredSel');
		wp_enqueue_script('mobilemenu');
		wp_enqueue_script('jquery-ui');
		wp_enqueue_script('html5');
		wp_enqueue_script('flexslider');
		wp_enqueue_script('sticky');
		wp_enqueue_script('scripts');
		wp_enqueue_script('mypassion');
		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
		
		
	}
	
	add_action( 'wp_enqueue_scripts', 'mypassion_scripts' );  
	
	function mypassion_styles(){
		global $admin_data; 
		
		/* ---------------------------------------------------------------------------------- */
		/* Register Stylesheets 
		/* ---------------------------------------------------------------------------------- */
		wp_register_style('flexslider', get_template_directory_uri().'/framework/css/flexslider.css', array(), '1.0', 'all');
		wp_register_style('fontello', get_template_directory_uri().'/framework/css/fontello/fontello.css', array(), '1.0', 'all');
		wp_register_style('superfish', get_template_directory_uri().'/framework/css/superfish.css', array(), '1.0', 'all');
		wp_register_style('ui', get_template_directory_uri().'/framework/css/ui.css', array(), '1.0', 'all');
		wp_register_style('base', get_template_directory_uri().'/framework/css/base.css', array(), '1.0', 'all');
		wp_register_style('960', get_template_directory_uri().'/framework/css/960.css', array(), '1.0', 'all');
		wp_register_style('959', get_template_directory_uri().'/framework/css/devices/1000.css', array(), '1.0', 'only screen and (min-width: 768px) and (max-width: 1000px)');
		wp_register_style('767', get_template_directory_uri().'/framework/css/devices/767.css', array(), '1.0', 'only screen and (min-width: 480px) and (max-width: 767px)');
		wp_register_style('479', get_template_directory_uri().'/framework/css/devices/479.css', array(), '1.0', 'only screen and (min-width: 200px) and (max-width: 479px)');
		
	
		/* ---------------------------------------------------------------------------------- */
		/* Enqueue Stylesheets 
		/* ---------------------------------------------------------------------------------- */
		wp_enqueue_style('flexslider');
		wp_enqueue_style('fontello');
		wp_enqueue_style('superfish');
		wp_enqueue_style('ui');
		wp_enqueue_style('base');
		wp_enqueue_style('stylesheet', get_stylesheet_uri(), array(), '1', 'all' ); // Main Stylesheet
		wp_enqueue_style('960');
		wp_enqueue_style('959');
		wp_enqueue_style('767');
		wp_enqueue_style('479');
		
	}  
	add_action( 'wp_enqueue_scripts', 'mypassion_styles', 1 ); 



	//	ADMIN PANEL STYLES & SCRIPTS
	add_action('init', 'style_and_script');
		
	function style_and_script(){ 
		wp_register_script('metasortable', get_template_directory_uri().'/framework/meta-box/meta-sortable.js', 'jquery', '1.0');
		wp_register_script('review', get_template_directory_uri().'/framework/meta-box/review.js', 'jquery', '1.0');
		add_action('add_meta_boxes', 'register_meta_script');
	}	
	function register_meta_script(){
		
		wp_enqueue_script('review');	
		wp_enqueue_script('metasortable');
	} 
	
	   
/* ------------------------------------------------------------------------ */
/*  Inlcudes
/* ------------------------------------------------------------------------ */
	include_once('framework/inc/js.php'); // Enqueue Custom JavaScript
	include_once('framework/inc/css.php'); // Enqueue Custom Stylesheet
	include_once('framework/inc/shortcodes.php'); // Load Shortcodes
	include_once('framework/inc/custom_functions.php'); // Custom functions
	include_once('framework/inc/mypassion-views.php'); // Custom Views
	include_once('framework/inc/sidebars.php'); // Sidebar Generator
	include_once('framework/inc/googlefonts.php'); // Google Fonts
	include_once('framework/inc/breadcrumbs.php'); // Load Breadcrumbs
	include_once('framework/inc/mypassion_pagination.php'); // Custom Pagination
	include_once('framework/inc/rating.php'); // Custom Pagination
	
	
	include_once('framework/inc/widgets/widget-flickr.php'); // Load Widgets
	include_once('framework/inc/widgets/widget-bestreviews.php'); // Load Widgets
	include_once('framework/inc/widgets/widget-facebook.php'); // Load Widgets
	include_once('framework/inc/widgets/widget-tabs.php'); // Load Widgets
	include_once('framework/inc/widgets/widget-counter.php'); // Load Widgets
	include_once('framework/inc/widgets/widget-video.php'); // Load Widgets
	include_once('framework/inc/widgets/widget-ads.php'); // Load Widgets
	include_once('framework/inc/widgets/widget-login.php'); // Load Widgets
	

	include_once('admin/index.php'); // Slightly Modified Options Framework
	
	define( 'RWMB_URL', trailingslashit( get_template_directory_uri() . '/framework/meta-box' ) );
    define( 'RWMB_DIR', trailingslashit( get_template_directory() . '/framework/meta-box' ) );
    include_once( RWMB_DIR . 'meta-box.php');
    include_once('framework/inc/meta-boxes.php');

/* ----------------------------------------------------------------------------------- */
/*  Add filter to hook when user press "insert into post" to include the attachment id
/* ----------------------------------------------------------------------------------- */

	add_filter('media_send_to_editor', 'add_para_media_to_editor', 20, 2);
	function add_para_media_to_editor($html, $id){
	
		$pos = strpos('<a', $html) + 2;
		$html = substr($html, 0, $pos) . ' attid="' . $id . '" ' . substr($html, $pos);
		
		return $html ;
		
	}

	
	/*function quickchic_widgets_init() {
		register_sidebar(array(
		'name' => __( 'Sidebar 1', 'quickchic' ),
		'id' => 'sidebar-1',
		'before_widget' => '<div class="sidebar widget">',
		'after_widget' => '</div>',
		'before_title'  => '<h5 class="line"><span>',
		'after_title'   => '</span></h5><span class="liner"></span>'
		));
	}
	add_action( 'init', 'quickchic_widgets_init' );*/
	
	
	function the_slug() {
		$post_data = get_post($post->ID, ARRAY_A);
		$slug = $post_data['post_name'];
		return $slug; 
	}
	
	if ( ! isset( $content_width ) ) $content_width = 960;
	
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'wp_list_comments' );
	

/*-----------------------------------------------------------------------------------*/
/*	Register Post Thumbnails
/*-----------------------------------------------------------------------------------*/	
	if( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 50, 50, true ); // Normal post thumbnails
		add_image_size( 'singlepage-thumb', 620, 9999, true); // for the portfolio template
		add_image_size( 'slider-thumb', 540, 372, true); // for the portfolio template
		add_image_size( 'slider-thumb-2', 380, 217, true); // for the single blog template
		add_image_size( 'slider-thumb-3', 180, 135, true); // for the single portfolio template
		add_image_size( 'main-small-thumb', 140, 86, true); // for the blog template
		add_image_size( 'main-medium-thumb', 300, 162, true); // for the portfolio template
	}
	
/*-----------------------------------------------------------------------------------*/
/*	Load Translation Text Domain
/*-----------------------------------------------------------------------------------*/

	load_theme_textdomain( 'framework', get_template_directory() . '/framework/languages' );
	
	$locale = get_locale();
	$locale_file = get_template_directory() . "/framework/languages/$locale.php";
	if ( is_readable($locale_file) )
	    require_once($locale_file);
	
/* ----------------------------------------------------------------------------------- */
/*  Add Post Formats
/* ----------------------------------------------------------------------------------- */
	//add_theme_support( 'post-formats', array('gallery', 'video'));
	
	
	function signOffText() {  
		return 'Thank you so much for reading! And remember to subscribe to our RSS feed.';  
	}
	
	add_shortcode('signoff', 'signOffText');  

/* ----------------------------------------------------------------------------------- */
/*  Get rid of the font-size on the tagcloud widget
/* ----------------------------------------------------------------------------------- */
	
	function my_tag_cloud_args($in)
	{
		return "smallest=12&largest=12&number=40&orderby=name&unit=px";
	}
	add_filter("widget_tag_cloud_args", 'my_tag_cloud_args');
	
	
	add_filter( 'avatar_defaults', 'newgravatar' ); 
	function newgravatar ($avatar_defaults) { 
		$myavatar = get_template_directory() . '/framework/img/avatar.png'; 
		$avatar_defaults[$myavatar] = "WPBeginner"; 
		 
		return $avatar_defaults; 
	} 
	
?>