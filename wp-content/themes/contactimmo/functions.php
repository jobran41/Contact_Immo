<?php

require get_template_directory() . '/inc/script.php';

require get_template_directory() . '/inc/walker.php';

function awesome_theme_setup() {

	add_theme_support('menus');	

	register_nav_menu('primary', 'Primary Header Navigation');

	register_nav_menu('secondary', 'Footer Navigation');

	register_nav_menu('top', 'top Navigation');	

}

add_action('init', 'awesome_theme_setup');

add_theme_support('custom-background');

add_theme_support('custom-header');

add_theme_support('post-thumbnails');

add_theme_support('post-formats',array('aside','image','video'));

add_theme_support('html5',array('search-form'));

function awesome_widget_setup() {	

	register_sidebar(

		array(

			'name'	=> 'Sidebar',

			'id'	=> 'sidebar-1',

			'class'	=> 'custom',

			'description' => 'Standard Sidebar',

			'before_widget' => '<aside id="%1$s" class="widget %2$s">',

			'after_widget'  => '</aside>',

			'before_title'  => '<h1 class="widget-title">',

			'after_title'   => '</h1>',

		)

	);	

}

add_action('widgets_init','awesome_widget_setup');

function awesome_remove_version() {

	return '';

}

add_filter('the_generator', 'awesome_remove_version');

function awesome_custom_post_type (){	

	$labels = array(

		'name' => 'Portfolio',

		'singular_name' => 'Portfolio',

		'add_new' => 'Add Item',

		'all_items' => 'All Items',

		'add_new_item' => 'Add Item',

		'edit_item' => 'Edit Item',

		'new_item' => 'New Item',

		'view_item' => 'View Item',

		'search_item' => 'Search Portfolio',

		'not_found' => 'No items found',

		'not_found_in_trash' => 'No items found in trash',

		'parent_item_colon' => 'Parent Item'

	);

	$args = array(

		'labels' => $labels,

		'public' => true,

		'has_archive' => true,

		'publicly_queryable' => true,

		'query_var' => true,

		'rewrite' => true,

		'capability_type' => 'post',

		'hierarchical' => false,

		'supports' => array(

			'title',

			'editor',

			'excerpt',

			'thumbnail',

			'revisions',

		),

		'menu_position' => 5,

		'exclude_from_search' => false

	);

	register_post_type('portfolio',$args);

}

add_action('init','awesome_custom_post_type');

function awesome_custom_taxonomies() {

	$labels = array(

		'name' => 'Fields',

		'singular_name' => 'Field',

		'search_items' => 'Search Fields',

		'all_items' => 'All Fields',

		'parent_item' => 'Parent Field',

		'parent_item_colon' => 'Parent Field:',

		'edit_item' => 'Edit Field',

		'update_item' => 'Update Field',

		'add_new_item' => 'Add New Work Field',

		'new_item_name' => 'New Field Name',

		'menu_name' => 'Fields'

	);

	$args = array(

		'hierarchical' => true,

		'labels' => $labels,

		'show_ui' => true,

		'show_admin_column' => true,

		'query_var' => true,

		'rewrite' => array( 'slug' => 'field' )

	);	

	register_taxonomy('field', array('portfolio'), $args);

	register_taxonomy('software', 'portfolio', array(

		'label' => 'Software',

		'rewrite' => array( 'slug' => 'software' ),

		'hierarchical' => false

	) );	

}

add_action( 'init' , 'awesome_custom_taxonomies' );

function custom_field_excerpt() {

	global $post;

	$text = get_field('content',false,false);

	if ( '' != $text ) {

		$text = strip_shortcodes( $text );

		$text = apply_filters('the_content', $text);

		$text = str_replace(']]>', ']]>', $text);

		$excerpt_length = 10; // 20 words

		$excerpt_more = apply_filters('excerpt_more', ' ' . '...');

		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );

	}

	return apply_filters('the_excerpt', $text);

}

function awesome_get_terms( $postID, $term ){	

	$terms_list = wp_get_post_terms($postID, $term); 

	$output = '';					

	$i = 0;

	foreach( $terms_list as $term ){ $i++;

		if( $i > 1 ){ $output .= ', '; }

		$output .= '<a href="' . get_term_link( $term ) . '">'. $term->name .'</a>';

	}	

	return $output;	

}

// add_action('admin_menu','parent_page_models_produits' );

// function parent_page_models_produits() { remove_meta_box('pageparentdiv', 'nos_produits', 'normal');}

// add_action('add_meta_boxes', 'parent_page_models_boxes_produits');

// function parent_page_models_boxes_produits() {

// add_meta_box('chapter-parent', 'Parent', 'chapter_attributes_models_meta_box_produits', 'nos_produits', 'side', 'high');

// }

// function chapter_attributes_models_meta_box_produits($post) {

// $post_type_object = get_post_type_object($post->post_type);

// if ( $post_type_object->hierarchical ) {

//     $pages = wp_dropdown_pages(array('post_type' => 'nos_produits', 'selected' => $post->post_parent, 'name' => 'parent_id', 'show_option_none' => __('(no parent)'), 'sort_column'=> 'menu_order, post_title', 'echo' => 0));

//     if ( ! empty($pages) ) {

//     echo $pages;

//     }

// }

// }

function get_top_ancestor_id() { 

	global $post;

	if($post->post_parent){

		$ancestors = array_reverse(get_post_ancestors( $post->ID ));

	    return $ancestors[0];

	}

	return $post->ID;       

}

add_action( 'wp_ajax_search_post', 'search_post' );
add_action( 'wp_ajax_nopriv_search_post', 'search_post' );
function search_post() {
	$keyword = $_POST['keyword'];
        $args = get_posts(array(
             'numberposts'  => -1,
             'post_type'        => 'projet',
             'meta_query'   => array(
                     'relation'     => 'OR',
                     array(
                             'key'      => 'piece',
                             'value'        => $keyword
                     ),
                     array(
                             'key'      => 'prix',
                             'value'        => $keyword
                     ),
             ),
     ));
     //print_r($args);
    // require_once 'inc/result_search.php';
    die();
}



function personalise_search() {
	$keyword = $_GET['s'];
        $args = array(
             'numberposts'  => -1,
             'post_type'        => 'projet',
             'meta_query'   => array(
                     'relation'     => 'OR',
                     array(
                             'key'      => 'piece',
                             'value'        => $keyword
                     ),
                     array(
                            'key'      => 'prix',
                            'value' => array( 20, $keyword ),
                            'type' => 'numeric',
                            'compare' => 'BETWEEN'
                     ),
             ),
     );
     //print_r($args);
     require_once 'inc/result_search.php';
}

add_action( 'wp_ajax_mon_action', 'mon_action' );

add_action( 'wp_ajax_nopriv_mon_action', 'mon_action' );

function mon_action() {

$param = $_POST['year'];

$param2 = $_POST['year2'];

$param3 = $_POST['id'];

$args = array(

  'post_type' => 'portfolio',

  'p'=> $param3,

  'post_type' => 'any'

);

$my_query = new WP_Query($args);

$images='false';

if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();

$repeater = get_field('product');

	if( $repeater ):

	   foreach( $repeater as $row ):

	    if( $row['taille']==$param && $row['couleur']==$param2 ):{

	       $images=$row['images'];

	     }

	     endif;

	   endforeach;

	 endif;

endwhile;

endif;

wp_reset_postdata();

echo $images;

die();

}
function my_alter_query($query) {

    if ( is_admin() || !$query->is_main_query())
        return;

    if (is_search()){
        $query->set('lang', NULL);
    }

}
add_action('pre_get_posts','my_alter_query');
// add_image_size('thumb_homeper1',1563,890,true);