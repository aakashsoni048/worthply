<?php
/**
 * alfyi_graffersid functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package alfyi_graffersid
 */

if ( ! function_exists( 'alfyi_graffersid_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function alfyi_graffersid_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on alfyi_graffersid, use a find and replace
		 * to change 'alfyi_graffersid' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'alfyi_graffersid', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'alfyi_graffersid' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'alfyi_graffersid_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'alfyi_graffersid_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function alfyi_graffersid_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'alfyi_graffersid_content_width', 640 );
}
add_action( 'after_setup_theme', 'alfyi_graffersid_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function alfyi_graffersid_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'alfyi_graffersid' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'alfyi_graffersid' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'alfyi_graffersid_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function alfyi_graffersid_scripts() {
	wp_enqueue_style( 'alfyi_graffersid-style', get_stylesheet_uri() );

	wp_enqueue_script( 'alfyi_graffersid-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'alfyi_graffersid-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'alfyi_graffersid_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_topics_hierarchical_taxonomy', 0 );
 
//create a custom taxonomy name it topics for your posts
 
function create_topics_hierarchical_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Case Studies Categories', 'case_studies_categories' ),
    'singular_name' => _x( 'Case Studies Categories', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Case Studies Categories' ),
    'all_items' => __( 'All Case Studies Categories' ),
    'parent_item' => __( 'Parent Case Studies Categories' ),
    'parent_item_colon' => __( 'Parent Case Studies Categories:' ),
    'edit_item' => __( 'Edit Case Studies Categories' ), 
    'update_item' => __( 'Update Case Studies Categories' ),
    'add_new_item' => __( 'Add New Case Studies Categories' ),
    'new_item_name' => __( 'New Case Studies Categories Name' ),
    'menu_name' => __( 'Case Studies Categories' ),
  );    
 
// Now register the taxonomy
 
  register_taxonomy('case_studies_categories',array('case_studies'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'case_studies_categories' ),
  ));
 
}
function create_post_type() {
	register_post_type( 'case_studies',
	  array(
		'labels' => array(
		  'name' => __( 'Case Studies' ),
		  'singular_name' => __( 'case_studies' ),		  
		),
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', ),
		'taxonomies'          => array( 'case_studies_categories' ),
		'public' => true,
		'has_archive' => true,
		'rewrite' => ['slug' => 'case-studies', 'with_front' => FALSE] //<-- SET with_front to FALSE		
	  )
	);
  }
  add_action( 'init', 'create_post_type' );

//   add_filter('wpli/autoadd', function() {return false;} );

add_image_size( 'case_studies_thumb', 356, 356, true);

//   add_filter('wpli/autoadd', function() {return false;} );

// custom post services Start
add_action('init', 'service_register');  

function service_register() {   

$labels = array( 
    'name' => _x('Service', 'post type general name', 'textdomain' ), 
    'singular_name' => _x('service Item', 'post type singular name'), 
    'add_new' => _x('Add New', 'service item'), 
    'add_new_item' => __('Add New service Item'), 
    'edit_item' => __('Edit service Item'), 
    'new_item' => __('New service Item'), 

    'view_item' => __('View service Item'), 
    'search_items' => __('Search service'), 
    'not_found' => __('Nothing found'), 
    'not_found_in_trash' => __('Nothing found in Trash'), 
    'parent_item_colon' => '' 
);   

$args = array( 
    'labels' => $labels, 
    'public' => true, 
    'publicly_queryable' => true, 
    'show_ui' => true, 
    'query_var' => true, 
    'rewrite' => array( 'slug' => 'service', 'with_front'=> false ), 'capability_type' => 'post', 
    'hierarchical' => true, 
    'menu_position' => null, 
    'supports' => array('title','editor','thumbnail','service_categories' => 'service-categories' , 'excerpt', 'comments', 'custom-fields'),
    'taxonomies'          => array( 'service_categories' ),
	'has_archive' => true
);   
register_post_type( 'service' , $args ); 

 register_taxonomy( 'service_categories', array( 'service' ), array(
        'hierarchical' => true,
        'label' => "Service Categories",
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'service-categories' ),
    ) );
}
// custom post services End

// employee feedback Start
function customAdminAddCss() {
    $url = "https://graffersid.com";
    echo '<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" />  ';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/css/bootstrap.min.css" />  ';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/css/font-awesome.min.css" />  ';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/css/animate.css" />  ';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/css/normalize.css" />  ';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/css/meanmenu.min.css" />  ';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/css/main.css" />  ';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/css/educate-custon-icon.css" />  ';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/css/morrisjs/morris.css" />  ';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/css/scrollbar/jquery.mCustomScrollbar.min.css" />  ';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/css/metisMenu/metisMenu.min.css" />  ';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/css/metisMenu/metisMenu-vertical.css" />  ';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/css/calendar/fullcalendar.min.css" />  ';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/css/calendar/fullcalendar.print.min.css" />  ';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/css/editor/select2.css" />  ';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/css/editor/datetimepicker.css" />  ';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/css/editor/bootstrap-editable.css" />  ';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/css/editor/x-editor-style.css" />  ';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/css/data-table/bootstrap-table.css" />  ';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/css/data-table/bootstrap-editable.css" />  ';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/style.css" />  ';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/css/responsive.css" />  ';
    echo '<link rel="stylesheet" type="text/css" href="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/vendor/modernizr-2.8.3.min.js" />  ';
}
add_action('admin_head', 'customAdminAddCss');

add_action( 'admin_menu', 'employee_feedback' );

function employee_feedback() {
add_menu_page( 'Employee Feedbacks', 'Employee Feedbacks', 'manage_options', 'employee_feedback', 'my_custom_options' );
}

function my_custom_options() {
if ( !current_user_can( 'manage_options' ) )  {
    wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
}
echo "<div class='details'>";
echo "<h1>All Employee Feedbacks</h1>";
 echo "
<div class='data-table-area mg-b-15'>
<div class='container-fluid'>
<div class='row'>
<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
<div class='sparkline13-list'>
<div class='sparkline13-hd'>
    <div class='main-sparkline13-hd'>
        <h1>Employee  <span class='table-project-n'>Feedbacks</span> Table</h1>
    </div>
</div>
<div class='sparkline13-graph'>
    <div class='datatable-dashv1-list custom-datatable-overright'>
        <table class='custom_table' id='table' data-toggle='table' data-pagination='true' data-search='true' data-show-columns='true' data-show-pagination-switch='true' data-show-refresh='true' data-key-events='true' data-show-toggle='true' data-resizable='true' data-cookie='true'
            data-cookie-id-table='saveId' data-show-export='true' data-click-to-select='true' data-toolbar='#toolbar'>
            <thead>
                <tr>
                    <th data-field='sno'>S.No.</th>
                    <th data-field='employee_feedback' data-editable='true'>Employee Feedback</th>
                    <th data-field='date' data-editable='true'>Created Date</th>
                </tr>
            </thead>";

global $wpdb;

$results = $wpdb->get_results("SELECT * FROM LVrLH2Su2_feedback_custom ORDER BY feedback_id DESC");
echo "<tbody>";

$i=1;
foreach ( $results as $result ) { 
    echo "<tr>";
    echo "<td>" . $i . "\n</td>";
    echo "<td>" . $result->feed_comment . "\n</td>";
    echo "<td>" . date('d/m/Y',strtotime($result->create_date)) . "\n</td>";
    echo "</tr>";
    $i++;
    }
  echo "</tbody>"; 
 echo "</table>";   
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
}

function customAdmin() {
	$url = "https://graffersid.com";
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/vendor/jquery-1.12.4.min.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/bootstrap.min.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/wow.min.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/jquery.meanmenu.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/jquery.sticky.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/jquery.scrollUp.min.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/scrollbar/mCustomScrollbar-active.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/metisMenu/metisMenu.min.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/metisMenu/metisMenu-active.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/data-table/bootstrap-table.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/data-table/tableExport.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/data-table/data-table-active.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/data-table/bootstrap-table-editable.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/data-table/bootstrap-editable.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/data-table/bootstrap-table-resizable.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/data-table/colResizable-1.5.source.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/data-table/bootstrap-table-export.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/editable/jquery.mockjax.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/editable/mock-active.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/editable/select2.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/editable/moment.min.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/editable/bootstrap-datetimepicker.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/editable/bootstrap-editable.js"></script>';
    echo '<script src="' . $url . '/wp-content/themes/alfyi_graffersid/data_table/js/editable/xediable-active.js"></script>';
}
add_action('admin_head', 'customAdmin');

// employee feedback End

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
  html body #toplevel_page_wck-page{ display:none!important;}
  </style>';
}

function custom_menu_page_removing() {
    remove_menu_page('sas-page.php');
}
add_action( 'admin_menu', 'custom_menu_page_removing' );