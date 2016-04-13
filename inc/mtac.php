<?php
/**
 * Enqueue scripts and styles.
 */
function mtac_custom_scripts() {
  wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-2.2.1.min.js', array(), '2.2.1', true);
  wp_enqueue_style( 'mtac-fonts', mtac_fonts_url(), array(), null );
}

add_action( 'wp_enqueue_scripts', 'mtac_custom_scripts' );

if ( ! function_exists( 'mtac_fonts_url' ) ) :
/**
 * Register Google fonts for MTAC.
 *
 * @return string Google fonts URL for the theme.
 */
function mtac_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';
	/* translators: If there are characters in your language that are not supported by Open Sans, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'mtac' ) ) {
		$fonts[] = 'Open+Sans:400,700';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'mtac' ) ) {
		$fonts[] = 'Inconsolata:400';
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
