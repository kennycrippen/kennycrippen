<?php


/*-----------------------------------------------------------------------------------*/
/*	Projects Post Type
/*-----------------------------------------------------------------------------------*/


function BH_create_post_type_projects() {

		$labels = array(
		'name' => __( 'Projects'),
		'singular_name' => __( 'project' ),
		'add_new' => _x('Add New', 'Project'),
		'add_new_item' => __('Add New Project'),
		'edit_item' => __('Edit Project'),
		'new_item' => __('New Project'),
		'view_item' => __('View Project'),
		'search_items' => __('Search Projects'),
		'not_found' =>  __('No Projects found'),
		'not_found_in_trash' => __('No Projects found in Trash'), 
		'parent_item_colon' => ''
	  );
	  
	  $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'rewrite' => array('slug' => __( 'projects' )),
		'supports' => array('title', 'custom-fields', 'thumbnail', 'editor')
	  ); 
	  
	  register_post_type(__( 'project' ),$args);
}



add_action( 'init', 'BH_create_post_type_projects' );


?>