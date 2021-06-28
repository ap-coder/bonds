<?php  

if ( ! function_exists( 'biztype_taxonomy' ) ) {

// Register Custom Taxonomy
function biztype_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Business Types', 'Taxonomy General Name', 'biztype_text_domain' ),
		'singular_name'              => _x( 'Business Type', 'Taxonomy Singular Name', 'biztype_text_domain' ),
		'menu_name'                  => __( 'States', 'biztype_text_domain' ),
		'all_items'                  => __( 'All Items', 'biztype_text_domain' ),
		'parent_item'                => __( 'Parent Item', 'biztype_text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'biztype_text_domain' ),
		'new_item_name'              => __( 'New Business Type', 'biztype_text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'biztype_text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'biztype_text_domain' ),
		'update_item'                => __( 'Update Item', 'biztype_text_domain' ),
		'view_item'                  => __( 'View Item', 'biztype_text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'biztype_text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'biztype_text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'biztype_text_domain' ),
		'popular_items'              => __( 'Popular Items', 'biztype_text_domain' ),
		'search_items'               => __( 'Search Items', 'biztype_text_domain' ),
		'not_found'                  => __( 'Not Found', 'biztype_text_domain' ),
		'no_terms'                   => __( 'No items', 'biztype_text_domain' ),
		'items_list'                 => __( 'Items list', 'biztype_text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'biztype_text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'btype',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$capabilities = array(
		'manage_terms'               => 'manage_btye',
		'edit_terms'                 => 'manage_btypes',
		'delete_terms'               => 'manage_btype',
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
		'query_var'                  => 'bistype',
		'rewrite'                    => $rewrite,
		'capabilities'               => $capabilities,
		'show_in_rest'               => true,
		'rest_base'                  => 'btype',
		'rest_controller_class'      => 'WP_REST_BType_Controller',
	);
	register_taxonomy( 'bis_type', array( 'btype' ), $args );

}
add_action( 'init', 'biztype_taxonomy', 0 );

}

 ?>