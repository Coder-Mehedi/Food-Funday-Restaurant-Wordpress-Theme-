<?php 


function cptui_register_my_cpts() {

	/**
	 * Post Type: Team Members.
	 */

	$labels = array(
		"name" => __( "Team Members", "custom-post-type-ui" ),
		"singular_name" => __( "Team Member", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "Team Members", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "team_member", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "team_member", $args );

	/**
	 * Post Type: Our Blog Section.
	 */

	$labels = array(
		"name" => __( "Our Blog Section", "custom-post-type-ui" ),
		"singular_name" => __( "Our Blog Post", "custom-post-type-ui" ),
		"all_items" => __( "All Blog Posts", "custom-post-type-ui" ),
		"add_new" => __( "Add a new blog post", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "Our Blog Section", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "our_blog", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "our_blog", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
