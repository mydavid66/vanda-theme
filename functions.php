<?php 
add_theme_support('post-thumbnails');
function custome_theme_init (){
  // register_taxonomy_for_object_type ...
	$labels = array(
    'name' => _x('Portfolio', 'post type general name'),
    'singular_name' => _x('portfolio', 'post type singular name'),
    'add_new' => _x('Add New', 'portfolio'),
    'add_new_item' => __('Add New Portfolio'),
    'edit_item' => __('Edit Portfolio'),
    'new_item' => __('New Portfolio'),
    'view_item' => __('View Portfolio'),
    'search_items' => __('Search Portfolio'),
    'not_found' =>  __('No Portfolio found'),
    'not_found_in_trash' => __('No Portfolio found in Trash'),
    'parent_item_colon' => '',
    'menu_name' => _x('Portfolio', 'post type general name')
);

$args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 25,
    'menu_icon' => get_bloginfo('template_url') . '/images/portfolio_icon.png', // 16x16
    'supports' => array('title','editor','thumbnail','excerpt')
);

register_post_type ('portfolio',$args);
register_taxonomy_for_object_type('category', 'page');
//add category to page
//register_taxonomy_for_object_type('category', 'portfolio');
//add category to portfolio
/*register_taxonomy(
  'type',
  'portfolio',
  array(
    'label' => _x( 'Type',"Portfolio taxonomy"),
    'rewrite' => array( 'slug' => 'type' )
  )
);*/
register_taxonomy (
  'type',
  'portfolio',
  array(
    'labels' => array(
      'name' => __('type'),
      'singular_name' => __('type'),
      'menu_name' => __('Type'),
      'all_items' => __('All type'),
      'edit_item' => __('Edit Type'),
      'view_item' => __('View Type'),
      'update_item' => __('Update Type'),
      'add_new_item' => __('Add New Type'),
      'new_item_name' => __('New Type Name'),
      'parent_item' => __('Parent Type'),
      'search_items' => __('Search type'),
      'popular_items' => __('Popular type'),
      'parent_item_colon' => __('Popular type :'),
      'separate_items_with_commas' => __('Separate type with commas'),
      'add_or_remove_items' => __('Add or remove Type'),
      'choose_from_most_used' => __('Choose from the most used type'),
      'not_found' => __( 'No Type found.' )
    ),
    'public' => true,
    'show_ui' => true,
    'show_in_nav_menus' => true,
    'show_tagcloud' => true,
    'hierarchical' => true,
    'query_var' => 'type',
    'rewrite' => array( 'slug' => 'type' )
  )
);

//i can even add type for page
add_action('after_setup_theme', 'my_theme_setup');

}
add_action('init', 'custome_theme_init'); // add init event
add_shortcode('hello','say_hello');
add_shortcode('contact_form','contact_form');


function say_hello($atts){
  extract( shortcode_atts( array(
    'name' => 'ali'
  ), $atts ) );
  return "<h1 style=\"color:red;text-align:center;\">Hello $name</h1>";
}
function contact_form(){
  return file_get_contents( get_template_directory() . '/contact_form.html');
}
function my_theme_setup(){
    load_theme_textdomain('1langs', get_template_directory() . '/langs');
    echo __('type','1langs');
    _e('text 2','1langs');

}
