<?php
add_action( 'after_setup_theme', 'backshield_setup' );
function backshield_setup()
{
load_theme_textdomain( 'backshield', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'backshield' ) )
);
}
add_action( 'wp_enqueue_scripts', 'backshield_load_scripts' );
function backshield_load_scripts()
{
wp_enqueue_script( 'jquery' );
wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0.0', true );
wp_enqueue_script( 'in-view', get_template_directory_uri() . '/js/in-view.min.js', array( 'jquery' ), '1.0.0', true );
wp_enqueue_script( 'skrollr', get_template_directory_uri() . '/js/skrollr.min.js', array( 'jquery' ), '1.0.0', true );
wp_register_script( 'TweenMax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js', null, null, true );
wp_enqueue_script('TweenMax');
wp_register_script( 'GreenSock', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js', null, null, true );
wp_enqueue_script('GreenSock');
wp_register_script( 'addIndicators', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.js', null, null, true );
wp_enqueue_script('addIndicators');


wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css',false,'1.1','all');
wp_enqueue_style( 'gridiculous', get_template_directory_uri() . '/css/gridiculous.css', array(), '1.1', 'all');
}


add_action( 'comment_form_before', 'backshield_enqueue_comment_reply_script' );
function backshield_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'backshield_title' );
function backshield_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'backshield_filter_wp_title' );
function backshield_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'backshield_widgets_init' );
function backshield_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'backshield' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function backshield_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'backshield_comments_number' );
function backshield_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}

/* GOOGLE FONTS */
function add_google_fonts() {

wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:100,400,700|Libre+Baskerville:400,700', false ); 

}

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );




/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Required: include OptionTree.
 */
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
