<?php

/*-----------------------------------------------------------------------------------*/
/*	Includes
/*-----------------------------------------------------------------------------------*/

include("admin/custom-post-types.php");

/*-----------------------------------------------------------------------------------*/
/*	Remove auto paragraph
/*-----------------------------------------------------------------------------------*/

// remove_filter( 'the_content', 'wpautop' );
// remove_filter( 'the_excerpt', 'wpautop' );


/*-----------------------------------------------------------------------------------*/
/*	Support thumbnails
/*-----------------------------------------------------------------------------------*/

add_theme_support( 'post-thumbnails' );

/*-----------------------------------------------------------------------------------*/
/*	Register WordPress Menus
/*-----------------------------------------------------------------------------------*/

function register_my_menus() {
  register_nav_menus(
    array(
      'main-nav' => __( 'Main Navigation' ),
      'tertiary-nav' => __( 'Tertiary Navigation' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


/*-----------------------------------------------------------------------------------*/
/*	Theme Scripts
/*-----------------------------------------------------------------------------------*/

/* Register the Scripts */

if ( !function_exists('bh_register_js') ) {

function bh_register_js() {
	if (!is_admin()) {

		/* Register Scripts */
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' );
		wp_register_script('production', get_template_directory_uri() . '/js/build/production.min.js', 'jquery');

	}
}
add_action('init', 'bh_register_js');

}


/* Enqueue the Scripts */

if ( !function_exists('bh_enqueue_js') ) {

function bh_enqueue_js() {
	if (!is_admin()) {

		/* Enqueue Scripts On Every Page */
		wp_enqueue_script( 'jquery');
		wp_enqueue_script( 'production');

		}
	}
	add_action('wp_print_scripts', 'bh_enqueue_js');
}


/*-----------------------------------------------------------------------------------*/
/*	Register and Enqueue Admin CSS
/*-----------------------------------------------------------------------------------*/


function bh_add_admin_css(){

	// styles
	wp_register_style('bh_custom_admin_styles', get_template_directory_uri(). '/admin/admin_styles.css');
	wp_enqueue_style('bh_custom_admin_styles');

}
add_action( 'admin_init', 'bh_add_admin_css' );


/*-----------------------------------------------------------------------------------*/
/*	Add Browser Detection Body Class
/*-----------------------------------------------------------------------------------*/

function bh_browser_body_class($classes) {
        global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
        if($is_lynx) $classes[] = 'lynx';
        elseif($is_gecko) $classes[] = 'gecko';
        elseif($is_opera) $classes[] = 'opera';
        elseif($is_NS4) $classes[] = 'ns4';
        elseif($is_safari) $classes[] = 'safari';
        elseif($is_chrome) $classes[] = 'chrome';
        elseif($is_IE) {
                $classes[] = 'ie';
                if(preg_match('/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $_SERVER['HTTP_USER_AGENT'], $browser_version))
                $classes[] = 'ie'.$browser_version[1];
        } else $classes[] = 'unknown';
        if($is_iphone) $classes[] = 'iphone';
        if ( stristr( $_SERVER['HTTP_USER_AGENT'],"mac") ) {
                 $classes[] = 'osx';
           } elseif ( stristr( $_SERVER['HTTP_USER_AGENT'],"linux") ) {
                 $classes[] = 'linux';
           } elseif ( stristr( $_SERVER['HTTP_USER_AGENT'],"windows") ) {
                 $classes[] = 'windows';
           }
        return $classes;
}
add_filter('body_class','bh_browser_body_class');



/*-----------------------------------------------------------------------------------*/
// Change Names of Default WP Menu Items in Dashboard
/*-----------------------------------------------------------------------------------*/

function remove_submenus() {
  global $submenu;
  unset($submenu['themes.php'][10]); // Removes Menu
}
add_action('admin_menu', 'remove_submenus');



function new_nav_menu () {
    global $menu;

    add_menu_page('Menus', 'Menus', 'level_0', 'nav-menus.php', '',   '', 6);

}
add_action('admin_menu', 'new_nav_menu');



/*------------------------------------------------------------------------------*/
/*	Add CSS Options
/*------------------------------------------------------------------------------*/

add_filter('query_vars', 'add_new_var_to_wp');
function add_new_var_to_wp($public_query_vars) {
    $public_query_vars[] = 'ag_custom_var';
    return $public_query_vars;
}

add_action('template_redirect', 'my_theme_css_display');
function my_theme_css_display(){
    $css = get_query_var('ag_custom_var');
    if ($css == 'css'){
        include_once (TEMPLATEPATH . '/style.php');
        exit;  //This stops WP from loading any further
    }
}


?>
