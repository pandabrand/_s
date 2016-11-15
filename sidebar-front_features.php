<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _pandapress
 */

if ( ! is_active_sidebar( 'front-features' ) ) {
	return;
}
?>

<aside id="secondary" class="front-features" role="complementary">
	<div class="front-features-gallery">
		<?php dynamic_sidebar( 'front-features' ); ?>
	</div>
</aside><!-- #secondary -->
