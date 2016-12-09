<?php
/**
 * Custom functions that act made explicitly for this theme.
 *
 *
 * @package _pandapress
 */

 if ( ! function_exists( 'mtac_underscore_fonts_url' ) ) :
 /**
  * Register Google fonts for Twenty Sixteen.
  *
  * Create your own twentysixteen_fonts_url() function to override in a child theme.
  *
  * @since Twenty Sixteen 1.0
  *
  * @return string Google fonts URL for the theme.
  */
 function mtac_underscore_fonts_url() {
 	$fonts_url = '';
 	$fonts     = array();
 	$subsets   = 'latin,latin-ext';
 	/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
 	if ( 'off' !== _x( 'on', 'Work Sans font: on or off', 'mtac_underscore' ) ) {
 		$fonts[] = 'Work Sans:400,500';
 	}
 	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
 	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'mtac_underscore' ) ) {
 		$fonts[] = 'Open Sans';
 	}

  /* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
 	if ( 'off' !== _x( 'on', 'Roboto Slab font: on or off', 'mtac_underscore' ) ) {
 		$fonts[] = 'Roboto Slab:700';
 	}
 	if ( $fonts ) {
 		$fonts_url = add_query_arg( array(
 			'family' => urlencode( implode( '|', $fonts ) ),
 			'subset' => urlencode( $subsets ),
 		), 'https://fonts.googleapis.com/css' );
 	}
 	return $fonts_url;
 }
 endif;


 /**
  * Enqueue scripts and styles.
  */
 if ( ! function_exists( 'mtac_scripts' ) ) :
 function mtac_scripts() {
   wp_enqueue_style( 'mtac_underscore-fonts', mtac_underscore_fonts_url(), array(), null );
   wp_enqueue_script('jquery');
   wp_enqueue_style( 'flexslider_css', get_template_directory_uri() . '/css/flexslider.css', array(), null);
   wp_enqueue_style( 'jquery_ui_css', get_template_directory_uri() . '/css/jquery-ui.min.css', array(), '1.12' );
   wp_enqueue_style( 'jquery_ui_structure', get_template_directory_uri() . '/css/jquery-ui.structure.min.css', array('jquery_ui_css'), '1.12' );
   wp_enqueue_style( 'jquery_ui_theme', get_template_directory_uri() . '/css/jquery-ui.theme.min.css', array('jquery_ui_css'), '1.12' );
   wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/e66e12446b.js', array(), '20160927', false );
   wp_enqueue_script( 'flexslider_js', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '2.6.3', true );
   wp_enqueue_script( 'slideout_js', get_template_directory_uri() . '/assets/scripts/vendor/slideout/slideout.min.js', array('jquery'), '2.6.3', true );
   wp_enqueue_script( 'jquery_ui', get_template_directory_uri() . '/js/jquery-ui.min.js', array('jquery'), '1.12', true);
   wp_enqueue_script( '_pandapress-app', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery'), '20160930', true );

 // 	wp_enqueue_style( '_pandapress-style', get_template_directory_uri() . '/assets/css/style.css' );
	//
	//
 }
endif;
add_action( 'wp_enqueue_scripts', 'mtac_scripts' );
 /**
 * add a custom template
 *
 * In addition to this filter, you must create a file named my_new_template.php in a /fpw2_views/ folder in the active child or parent theme
 *
 * @param	$templates	array	slug => label pairs of templates
 */
if ( ! function_exists( 'fpw_add_widget_template' ) ) :
function fpw_add_widget_template( $templates ) {
	$templates['front-feature'] = __( 'Front Feature Template', '_pandapress' );
	return $templates;
}
add_filter( 'fpw_widget_templates', 'fpw_add_widget_template' );
endif;

// Add other useful image sizes for use through Add Media modal
// add_image_size( 'medium-width', 480 );
add_image_size( 'slider-height', 1170, 350, true );
add_image_size( 'front_feature', 371, 213, true);
add_image_size( 'article_mid', 480, 724, true);
// add_image_size( 'medium-something', 480, 480 );

// Register the three useful image sizes for use in Add Media modal
if ( ! function_exists( 'mtac_custom_sizes' ) ) :
function mtac_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'slider-height' => __( 'Slider' ),
        'front_feature' => __( 'Front Feature' ),
        'article_mid' => __( 'Article Mid Size' ),
    ) );
}
add_filter( 'image_size_names_choose', 'mtac_custom_sizes' );
endif;
