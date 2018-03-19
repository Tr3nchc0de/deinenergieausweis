<?php


/*
==============================================
Enqueue Stylesheet & Script
==============================================
*/

function theme_styles()
{
    wp_enqueue_style( 'theme_css', get_template_directory_uri() . '/assets/src/css/app.min.css' );
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/public/css/bootstrap.min.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );


add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );

function enqueue_load_fa() {

    wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );

}


function theme_js()
{
    global $wp_scripts;

        wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
        wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );
        $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
        $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

    wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/public/js/app.js', array('jquery'), '', true );

}
add_action( 'wp_enqueue_scripts', 'theme_js' );



/*
==============================================
Register Main Menu
==============================================
*/

function register_main_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_main_menu' );

/*
==============================================
Register Nav Walker Bootstrap 4
==============================================
*/

require_once('includes/navigation/bs4navwalker.php');


/*
==============================================
Add Theme support (thumbnails)
==============================================
*/
add_theme_support( 'post-thumbnails' );


/*
==============================================
Add Theme support (thumbnails)
==============================================
*/
add_post_type_support( 'page', 'excerpt' );
/*
==============================================
Add Custom Post Type (work)
==============================================
*/


// Register 'works' Post Type
if ( ! function_exists('wp_theme_works_post_type') ) {
	function wp_theme_works_post_type() {
		$labels = array(
			'name'                => _x( 'works', 'themename' ),
			'singular_name'       => _x( 'work', 'themename' ),
			'menu_name'           => __( 'works', 'themename' ),
			'parent_item_colon'   => __( 'Parent work:', 'themename' ),
			'all_items'           => __( 'All works', 'themename' ),
			'view_item'           => __( 'View work', 'themename' ),
			'add_new_item'        => __( 'Add New work', 'themename' ),
			'add_new'             => __( 'New work', 'themename' ),
			'edit_item'           => __( 'Edit work', 'themename' ),
			'update_item'         => __( 'Update work', 'themename' ),
			'search_items'        => __( 'Search works', 'themename' ),
			'not_found'           => __( 'No works found', 'themename' ),
			'not_found_in_trash'  => __( 'No works found in Trash', 'themename' ),
		);

		$rewrite = array(
			'slug'                => 'works',
			'with_front'          => true,
			'pages'               => true,
			'feeds'               => true,
		);

		$args = array(
			'label'               => __( 'works', 'themename' ),
			'description'         => __( 'works section of website', 'themename' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments','excerpt','post-formats', ),
			'taxonomies'          => array( 'category'),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-admin-appearance',
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
	add_action( 'init', 'wp_theme_works_post_type', 0 );
}

/** Change the number of work items to be displayed (props Bill Erickson) */
add_action( 'pre_get_posts', 'jivedig_work_archive_count' );
function jivedig_work_archive_count( $query ) {
	if( $query->is_main_query() && !is_admin() && is_post_type_archive( 'works' ) ) {
		$query->set( 'posts_per_page', '12' );
	}
}
/*END CUSTOM POST TYPE*/



//Stop work
// add post-formats to post_type 'page'
add_action('init', 'my_theme_slug_add_post_formats_to_page', 11);

function my_theme_slug_add_post_formats_to_page(){
    add_post_type_support( 'page', 'post-formats' );
    register_taxonomy_for_object_type( 'post_format', 'page' );
}




/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


/********************************/
add_filter('gform_confirmation_anchor', '__return_false');
