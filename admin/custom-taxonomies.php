<?php

/*-----------------------------------------------------------------------------------*/
/*	Create custom taxonomies
/*-----------------------------------------------------------------------------------*/

function bh_test_taxonomy() {
   register_taxonomy(
    'test_categories',
    'test', // the post type
    array(
        'hierarchical' => true,
        'label' => 'Sort by Something',
        'query_var' => true,
        'rewrite' => array('slug' => 'test'),
    )
);

}

add_action( 'init', 'bh_test_taxonomy' );

?>