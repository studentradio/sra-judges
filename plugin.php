<?php
/*
Plugin Name: SRA Judges Plugin
Plugin URI: http://github.com/studentradio/sra-judges
Description: A plugin for the SRA Judges
Version: 1.0
Author: Fred Bradley
Author URI: http://fred.im
*/
	class SRA_Judges_Plugin {
		function __construct() {
			if (get_current_user_id()==7):
				add_action( 'init', array($this, 'sra_cpt_awards_judges'), 0 );
			endif;
		}
		// Register Custom Post Type
		function sra_cpt_awards_judges() {
		
			$labels = array(
				'name'                  => _x( 'Judges', 'Post Type General Name', 'studentradio' ),
				'singular_name'         => _x( 'Judge', 'Post Type Singular Name', 'studentradio' ),
				'menu_name'             => __( 'Judges', 'studentradio' ),
				'name_admin_bar'        => __( 'Judges', 'studentradio' ),
				'archives'              => __( 'Judges Archives', 'studentradio' ),
				'parent_item_colon'     => __( 'Parent Item:', 'studentradio' ),
				'all_items'             => __( 'All Judges', 'studentradio' ),
				'add_new_item'          => __( 'Add New Judge', 'studentradio' ),
				'add_new'               => __( 'Add New', 'studentradio' ),
				'new_item'              => __( 'New Judge', 'studentradio' ),
				'edit_item'             => __( 'Edit Judge', 'studentradio' ),
				'update_item'           => __( 'Update Judge', 'studentradio' ),
				'view_item'             => __( 'View Judge', 'studentradio' ),
				'search_items'          => __( 'Search Judge', 'studentradio' ),
				'not_found'             => __( 'Not found', 'studentradio' ),
				'not_found_in_trash'    => __( 'Not found in Trash', 'studentradio' ),
				'featured_image'        => __( 'Profile Picture', 'studentradio' ),
				'set_featured_image'    => __( 'Set Profile Picture', 'studentradio' ),
				'remove_featured_image' => __( 'Remove Profile Picture', 'studentradio' ),
				'use_featured_image'    => __( 'Use as Profile Picture', 'studentradio' ),
				'insert_into_item'      => __( 'Insert into item', 'studentradio' ),
				'uploaded_to_this_item' => __( 'Uploaded to this judge', 'studentradio' ),
				'items_list'            => __( 'Judges list', 'studentradio' ),
				'items_list_navigation' => __( 'Judges list navigation', 'studentradio' ),
				'filter_items_list'     => __( 'Filter Judges list', 'studentradio' ),
			);
			$args = array(
				'label'                 => __( 'Judge', 'studentradio' ),
				'description'           => __( 'Awards Judges', 'studentradio' ),
				'labels'                => $labels,
				'supports'              => array( 'title', 'editor', 'thumbnail', ),
				'taxonomies'            => array( 'category', 'post_tag' ),
				'hierarchical'          => false,
				'public'                => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'menu_position'         => 5,
				'menu_icon'             => 'groups',
				'show_in_admin_bar'     => true,
				'show_in_nav_menus'     => true,
				'can_export'            => true,
				'has_archive'           => true,		
				'exclude_from_search'   => true,
				'publicly_queryable'    => true,
				'capability_type'       => 'page',
			);
			register_post_type( 'judges', $args );
		
		}
	}
new SRA_Judges_Plugin();
