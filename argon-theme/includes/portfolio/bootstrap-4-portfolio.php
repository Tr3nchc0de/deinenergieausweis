<?php 

// Register 'videos' Post Type
if ( ! function_exists('jivedig_videos_post_type') ) {
	function jivedig_videos_post_type() {
		$labels = array(
			'name'                => _x( 'Works', 'themename' ),
			'singular_name'       => _x( 'Work', 'themename' ),
			'menu_name'           => __( 'Works', 'themename' ),
			'parent_item_colon'   => __( 'Parent Work:', 'themename' ),
			'all_items'           => __( 'All Works', 'themename' ),
			'view_item'           => __( 'View Work', 'themename' ),
			'add_new_item'        => __( 'Add New Work', 'themename' ),
			'add_new'             => __( 'New Work', 'themename' ),
			'edit_item'           => __( 'Edit Work', 'themename' ),
			'update_item'         => __( 'Update Work', 'themename' ),
			'search_items'        => __( 'Search Works', 'themename' ),
			'not_found'           => __( 'No Works found', 'themename' ),
			'not_found_in_trash'  => __( 'No Works found in Trash', 'themename' ),
		);

		$rewrite = array(
			'slug'                => 'works',
			'with_front'          => true,
			'pages'               => true,
			'feeds'               => true,
		);

		$args = array(
			'label'               => __( 'works', 'themename' ),
			'description'         => __( 'Works section of website', 'themename' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments','excerpt', ),
			/* 		'taxonomies'          => array( 'category', 'post_tag' ), */
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			/* 		'menu_icon'           => '', */
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'query_var'           => 'works',
			'rewrite'             => $rewrite,
			'capability_type'     => 'page',
		);

		register_post_type( 'works', $args );
	}
// Hook into the 'init' action
	add_action( 'init', 'jivedig_videos_post_type', 0 );
}

/** Change the number of video items to be displayed (props Bill Erickson) */
add_action( 'pre_get_posts', 'jivedig_video_archive_count' );
function jivedig_video_archive_count( $query ) {
	if( $query->is_main_query() && !is_admin() && is_post_type_archive( 'works' ) ) {
		$query->set( 'posts_per_page', '12' );
	}
}
/*END CUSTOM POST TYPE*/