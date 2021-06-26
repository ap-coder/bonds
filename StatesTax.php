<?php 

if ( ! function_exists( 'state_taxonomy' ) ) {

// Register Custom Taxonomy
function state_taxonomy() {

	$labels = array(
		'name'                       => _x( 'States', 'Taxonomy General Name', 'bonds_text_domain' ),
		'singular_name'              => _x( 'State', 'Taxonomy Singular Name', 'bonds_text_domain' ),
		'menu_name'                  => __( 'States', 'bonds_text_domain' ),
		'all_items'                  => __( 'All Items', 'bonds_text_domain' ),
		'parent_item'                => __( 'Parent Item', 'bonds_text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'bonds_text_domain' ),
		'new_item_name'              => __( 'New State', 'bonds_text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'bonds_text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'bonds_text_domain' ),
		'update_item'                => __( 'Update Item', 'bonds_text_domain' ),
		'view_item'                  => __( 'View Item', 'bonds_text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'bonds_text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'bonds_text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'bonds_text_domain' ),
		'popular_items'              => __( 'Popular Items', 'bonds_text_domain' ),
		'search_items'               => __( 'Search Items', 'bonds_text_domain' ),
		'not_found'                  => __( 'Not Found', 'bonds_text_domain' ),
		'no_terms'                   => __( 'No items', 'bonds_text_domain' ),
		'items_list'                 => __( 'Items list', 'bonds_text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'bonds_text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'state',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$capabilities = array(
		'manage_terms'               => 'manage_states',
		'edit_terms'                 => 'manage_states',
		'delete_terms'               => 'manage_states',
		'assign_terms'               => 'edit_states',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'query_var'                  => 'state',
		'rewrite'                    => $rewrite,
		'capabilities'               => $capabilities,
		'show_in_rest'               => true,
		'rest_base'                  => 'state',
		'rest_controller_class'      => 'WP_REST_States_Controller',
	);
	register_taxonomy( 'state', array( 'bonds' ), $args );

}
add_action( 'init', 'state_taxonomy', 0 );

}

 ?>