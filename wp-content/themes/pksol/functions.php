<?php
$loptus_redux_demo = get_option('redux_demo');

//Custom fields:
require_once get_template_directory() . '/framework/wp_bootstrap_navwalker.php';
require_once get_template_directory() . '/visual/vc_shortcode.php';

//Theme Set up:
function loptus_theme_setup() {
    /*
     * This theme uses a custom image size for featured images, displayed on
     * "standard" posts and pages.
     */
	add_theme_support( 'custom-header' ); 
	add_theme_support( 'custom-background' );
	$lang = get_template_directory_uri() . '/languages';
  load_theme_textdomain('loptus', $lang);

    add_theme_support( 'post-thumbnails' );
    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );
    // Switches default core markup for search form, comment form, and comments
    // to output valid HTML5.
    add_theme_support( "title-tag" );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
    'primary' =>  esc_html__( 'Primary Navigation Menu: Chosen menu in single, blog, pages ...', 'loptus' ),
    'service' =>  esc_html__( 'Service Navigation Menu: Chosen menu in single Service ...', 'loptus' ),
	) );
    // This theme uses its own gallery styles.
    add_editor_style();
}
add_action( 'after_setup_theme', 'loptus_theme_setup' );
if ( ! isset( $content_width ) ) $content_width = 900;

function loptus_fonts_url() {
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'loptus' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function loptus_fonts_url2() {
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'loptus' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Niramit:300,300i,400,400i,500,500i,600,600i,700,700i' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function loptus_theme_scripts_styles() {
	$loptus_redux_demo = get_option('redux_demo');
	$protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.css');
    wp_enqueue_style( 'fontawesome-all', get_template_directory_uri().'/css/fontawesome-all.css');
    wp_enqueue_style( 'audioplayer', get_template_directory_uri().'/css/audioplayer/audioplayer.css');
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/css/magnific-popup/magnific-popup.css');
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/css/owl-carousel/owl.carousel.css');
    wp_enqueue_style( 'loptus-base', get_template_directory_uri().'/css/base.css');
    wp_enqueue_style( 'loptus-shortcodes', get_template_directory_uri().'/css/shortcodes.css');
    wp_enqueue_style( 'loptus-fonts', loptus_fonts_url(), array(), '1.0.0' );
    wp_enqueue_style( 'loptus-fonts2', loptus_fonts_url2(), array(), '1.0.0' );
    wp_enqueue_style( 'loptus-css', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style( 'loptus-responsive', get_template_directory_uri().'/css/responsive.css');
    if(isset($loptus_redux_demo['chosen-color']) && $loptus_redux_demo['chosen-color']==1){
    wp_enqueue_style( 'color', get_template_directory_uri().'/framework/color.php');
    } 
    wp_enqueue_style( 'loptus-style', get_stylesheet_uri(), array(), '2018-11-13' );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );



  //Javascript 
    wp_enqueue_script("popper", get_template_directory_uri()."/js/popper.min.js",array(),false,true);
    wp_enqueue_script("bootstrap", get_template_directory_uri()."/js/bootstrap.min.js",array(),false,true);
    wp_enqueue_script("jquery-appear", get_template_directory_uri()."/js/jquery.appear.js",array(),false,true);
    wp_enqueue_script("modernizr", get_template_directory_uri()."/js/modernizr.js",array(),false,true);
    wp_enqueue_script("jquery-smartmenus", get_template_directory_uri()."/js/menu/jquery.smartmenus.js",array(),false,true);
    wp_enqueue_script("audioplayer", get_template_directory_uri()."/js/audioplayer/audioplayer.js",array(),false,true);
    wp_enqueue_script("magnific-popup", get_template_directory_uri()."/js/magnific-popup/jquery.magnific-popup.min.js",array(),false,true);
    wp_enqueue_script("owl-carousel", get_template_directory_uri()."/js/owl-carousel/owl.carousel.min.js",array(),false,true);
    wp_enqueue_script("counter", get_template_directory_uri()."/js/counter/counter.js",array(),false,true);
    wp_enqueue_script("jquery-countdown", get_template_directory_uri()."/js/countdown/jquery.countdown.min.js",array(),false,true);
    wp_enqueue_script("isotope-pkgd", get_template_directory_uri()."/js/isotope/isotope.pkgd.min.js",array(),false,true);
    if(is_page_template('page-templates/template-home.php')){
    wp_enqueue_script("tweenmax", get_template_directory_uri()."/js/mouse-parallax/tweenmax.min.js",array(),false,true);
    wp_enqueue_script("jquery-parallax", get_template_directory_uri()."/js/mouse-parallax/jquery-parallax.js",array(),false,true);
    }
    if(is_page_template('page-templates/other-page.php')){
    wp_enqueue_script("loptus-maps",$protocol."://maps.google.com/maps/api/js?key=AIzaSyDJScy7qJ156DWM8kJVG-ZrK0R7Kize2Jg&amp",array(),false,true);
    wp_enqueue_script("loptus-map", get_template_directory_uri()."/js/map.js",array(),false,true);
    }
    wp_enqueue_script("wow-min", get_template_directory_uri()."/js/wow.min.js",array(),false,true);
    if(is_page_template('page-templates/template-home.php')){
    wp_enqueue_script("loptus-theme-script", get_template_directory_uri()."/js/theme-script-home.js",array(),false,true);
  }else{
    wp_enqueue_script("loptus-theme-script", get_template_directory_uri()."/js/theme-script.js",array(),false,true);
  }
   }
add_action( 'wp_enqueue_scripts', 'loptus_theme_scripts_styles' );


function loptus_body_classes( $classes ) {
  $loptus_redux_demo = get_option('redux_demo');
  // Add class if sidebar is used.
  if ( is_active_sidebar( 'sidebar-1' ) ) {
    $classes[] = 'has-sidebar';
  }
  if(isset($loptus_redux_demo['header_box']) && $loptus_redux_demo['header_box']!= ''){
    $classes[] = 'boxed-view';
  }
    return $classes;
}
add_filter( 'body_class', 'loptus_body_classes' );

//Custom Excerpt Function
function loptus_do_shortcode($content) {
    global $shortcode_tags;
    if (empty($shortcode_tags) || !is_array($shortcode_tags))
        return $content;
    $pattern = get_shortcode_regex();
    return preg_replace_callback( "/$pattern/s", 'do_shortcode_tag', $content );
}
// Widget Sidebar
function loptus_widgets_init() {
  register_sidebar( array(
        'name'          => esc_html__( 'Primary Sidebar', 'loptus' ),
        'id'            => 'sidebar-1',        
    'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'loptus' ),        
    'before_widget' => '<div id="%1$s" class="widget %2$s">',        
    'after_widget'  => '</div>',        
    'before_title'  => '<h5 class="widget-title">',        
    'after_title'   => '</h5>'
    ) );
  register_sidebar( array(
        'name'          => esc_html__( 'Aside Widget', 'loptus' ),
        'id'            => 'aside-widget',        
    'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'loptus' ),        
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
    ) );

  register_sidebar( array(
        'name'          => esc_html__( 'Service Sidebar', 'loptus' ),
        'id'            => 'service',        
    'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'loptus' ),        
    'before_widget' => '<div id="%1$s" class="widget %2$s">',        
    'after_widget'  => '</div>',        
    'before_title'  => '<h5 class="widget-title">',        
    'after_title'   => '</h5>'
    ) );
  
  register_sidebar( array(
    'name'          => esc_html__( 'Footer One Widget', 'loptus' ),
    'id'            => 'footer-area-1',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'loptus' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Two Widget', 'loptus' ),
    'id'            => 'footer-area-2',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'loptus' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Three Widget', 'loptus' ),
    'id'            => 'footer-area-3',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'loptus' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Form', 'loptus' ),
    'id'            => 'footer-area-4',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'loptus' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );

}
add_action( 'widgets_init', 'loptus_widgets_init' );

//function tag widgets
function loptus_tag_cloud_widget($args) {
	$args['number'] = 0; //adding a 0 will display all tags
	$args['largest'] = 18; //largest tag
	$args['smallest'] = 11; //smallest tag
	$args['unit'] = 'px'; //tag font unit
	$args['format'] = 'list'; //ul with a class of wp-tag-cloud
	$args['exclude'] = array(20, 80, 92); //exclude tags by ID
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'loptus_tag_cloud_widget' );

function loptus_excerpt() {
  $loptus_redux_demo = get_option('redux_demo');
  if(isset($loptus_redux_demo['blog_excerpt'])){
    $limit = $loptus_redux_demo['blog_excerpt'];
  }else{
    $limit = 50;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}


function loptus_excerpt1() {
    $limit = 22;
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

//pagination
function loptus_pagination($pages='') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    if($pages==''){
        global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
    }
    $pagination = array(
    'base'      => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
    'format'    => '',
    'current'     => max( 1, get_query_var('paged') ),
    'total'     => $pages,
    'prev_text' => wp_specialchars_decode(esc_html__( '<i class="fas fa-arrow-left"></i>', 'loptus' ),ENT_QUOTES),
    'next_text' => wp_specialchars_decode(esc_html__( '<i class="fas fa-arrow-right"></i>', 'loptus' ),ENT_QUOTES),
    'type'      => 'list',
    'end_size'    => 3,
    'mid_size'    => 3
);
    $return =  paginate_links( $pagination );
  echo str_replace( "<ul class='page-numbers'>", '<ul class="mt-8 pagination">', $return );
}

function loptus_search_form( $form ) {
    $form = '<div class="widget-search">
              <form class="form-inline form" action="' . esc_url(home_url('/')) . '">
                <div class="widget-searchbox">
                  <button type="submit" class="search-btn"> <i class="fas fa-search"></i>
                  </button>
                  <input type="search" placeholder="'.esc_attr__('Search Here...', 'loptus').'" class="form-control" value="' . get_search_query() . '" name="s" id="s">
                </div>
              </form>
            </div>
	';
    return $form;
}
add_filter( 'get_search_form', 'loptus_search_form' );
//Custom comment List:

// Comment Form
function loptus_theme_comment($comment, $args, $depth) {
    //echo 's';
   $GLOBALS['comment'] = $comment;
   $gravatar = get_avatar($comment,$size='80' ); ?>
   <li class="media">
     <?php echo get_avatar($comment,$size='80' ); ?>
      <div class="media-body">
        <h6><?php printf( get_comment_author_link()) ?></h6> 
        <div class="comment_text"><?php comment_text() ?></div>
        <div class="comment-date"> <span class="date"><?php the_time('F j, Y'); ?></span>
        </div>
        <div class="reply"> <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
      </div>
    </li>
<?php
}


function loptus_custom_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
    if($tag=='vc_row' || $tag=='vc_row_inner') {
        $class_string = str_replace('vc_row-fluid', '', $class_string);
    }
    if($tag=='vc_column' || $tag=='vc_column_inner') {
    $class_string = preg_replace('/vc_col-sm-12/', 'col-md-12', $class_string);
    $class_string = preg_replace('/vc_col-sm-6/', 'col-md-6', $class_string);
    $class_string = preg_replace('/vc_col-sm-4/', 'col-md-4', $class_string);
    $class_string = preg_replace('/vc_col-sm-3/', 'col-md-3', $class_string);
    $class_string = preg_replace('/vc_col-sm-5/', 'col-md-5', $class_string);
    $class_string = preg_replace('/vc_col-sm-7/', 'col-md-7', $class_string);
    $class_string = preg_replace('/vc_col-sm-8/', 'col-md-8', $class_string);
    $class_string = preg_replace('/vc_col-sm-9/', 'col-md-9', $class_string);
    $class_string = preg_replace('/vc_col-sm-10/', 'col-md-10', $class_string);
    $class_string = preg_replace('/vc_col-sm-11/', 'col-md-11', $class_string);
    $class_string = preg_replace('/vc_col-sm-1/', 'col-md-1', $class_string);
    $class_string = preg_replace('/vc_col-sm-2/', 'col-md-2', $class_string);
    }
    return $class_string;
}
// Filter to Replace default css class for vc_row shortcode and vc_column
add_filter('vc_shortcodes_css_class', 'loptus_custom_css_classes_for_vc_row_and_vc_column', 10, 2); 
// Add new Param in Row
if(function_exists('vc_add_param')){

vc_add_param('vc_row',array(
                             'type' => 'dropdown',
                             'heading' => esc_html__( 'Chosen type row', 'loptus' ),
                             'param_name' => 'type_row',
                             'value' => array(
                                esc_html__( 'None Section', 'loptus' ) => 'type2',
                                esc_html__( 'Contact 1', 'loptus' ) => 'contact1',
                                esc_html__( 'Contact 2', 'loptus' ) => 'contact2',
                             ),
                             'description' => esc_html__( 'Select type row', 'loptus' )
      )); 

vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Title', 'loptus'),
                              "param_name" => "ses_title",
                              "value" => "",
                              "description" => esc_html__("Title of Section, Leave a blank do not show frontend.", "loptus"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textarea",
                              "heading" => esc_html__('Section Subtitle', 'loptus'),
                              "param_name" => "ses_subtitle",
                              "value" => "",
                              "description" => esc_html__("Section Subtitle, Leave a blank do not show frontend.", "loptus"),   
    ));
vc_add_param('vc_row',array(
                             'type' => 'attach_image',
                             'heading' => esc_html__( 'Image Background', 'loptus' ),
                             'param_name' => 'ses_image',
                             'value' => '',
                             'description' => esc_html__( 'Select image from media library to do your signature.', 'loptus' )
      ));
vc_add_param('vc_row',array(
                              "type" => "checkbox",
                              "holder" => "div",
                              "class" => "",
                              "heading" => esc_html__("Container", 'loptus'),
                              "param_name" => "container",
                              "value" => array('Center Page'=>true),
                              "description" => esc_html__("Choose whether you want to add a container before row or not.", 'loptus')
                            ));
// Add new Param in Column  
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Column Title', 'loptus'),
                              "param_name" => "title",
                              "value" => "",
                              "description" => esc_html__("Title of column", "loptus"),      
                            ) 
    );
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Column Subtitle', 'loptus'),
                              "param_name" => "subtitle",
                              "value" => "",
                              "description" => esc_html__("Subtitle of column", "loptus"),      
                            ) 
    );
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Column Class', 'loptus'),
                              "param_name" => "wap_class",
                              "value" => "",
                              "description" => esc_html__("Column Class", "loptus"),      
                            ) 
    );
vc_add_param('vc_column',array(
                             'type' => 'dropdown',
                             'heading' => esc_html__( 'Type', 'loptus' ),
                             'param_name' => 'type',
                             'value' => array(
                                esc_html__( 'None', 'loptus' ) => 'none',
                                esc_html__( 'Testimonia 1', 'loptus' ) => 'testimonia1',
                                esc_html__( 'Testimonia 2', 'loptus' ) => 'testimonia2',

                             ),
                             'description' => esc_html__( 'Select type section content', 'loptus' )
      )); 
}

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin <thomasgriffinmedia.com>
 * @author     Gary Jones <gamajo.com>
 * @copyright  Copyright (c) 2014, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'loptus_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
 
 
function loptus_theme_register_required_plugins() {
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
      array(
            'name'      => esc_html__( 'Contact Form 7', 'loptus' ),
            'slug'      => 'contact-form-7',
            'required'  => true,
        ),
      array(
            'name'      => esc_html__( 'One Click Demo Import', 'loptus' ),
            'slug'      => 'one-click-demo-import',
            'required'  => true,
        ),
        array(
            'name'               => esc_html__( 'WPBakery Visual Composer', 'loptus' ), // The plugin name.
            'slug'               => 'visualcomposer',
            'source'             => get_template_directory_uri() . '/framework/plugins/js_composer.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
      array(
            'name'                     => esc_html__( 'Loptus Common', 'loptus' ),
            'slug'                     => 'loptus-common',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/loptus-common.zip',
        )
    );
    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => esc_html__( 'Install Required Plugins', 'loptus' ),
            'menu_title'                      => esc_html__( 'Install Plugins', 'loptus' ),
            'installing'                      => esc_html__( 'Installing Plugin: %s', 'loptus' ), // %s = plugin name.
            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'loptus' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'loptus' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'loptus' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'loptus' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'loptus' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'loptus' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'loptus' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'loptus' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'loptus' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'loptus' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'loptus' ),
            'return'                          => esc_html__( 'Return to Required Plugins Installer', 'loptus' ),
            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'loptus' ),
            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'loptus' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
    tgmpa( $plugins, $config );
}


function loptus_import_files() {
    return array(
        array(
            'import_file_name'           => 'Demo Import loptus',
            'import_file_url'            => 'http://sttheme.com/import/loptus/content.xml',
            'import_widget_file_url'     => 'http://sttheme.com/import/loptus/widget.wie',
            'import_preview_image_url'   => 'http://sttheme.com/import/loptus/Image-Preview.jpg',
            'import_notice'              => esc_html__( 'Import data example loptus', 'loptus' ),
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'loptus_import_files' );




function loptus_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Primary Menu', 'primary' );
    

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home 1' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'loptus_after_import_setup' );


?>