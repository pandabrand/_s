<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _pandapress
 */

?>

<aside id="secondary" class="widget-area" role="complementary">
<!-- ?php elseif( is_page() && $parent && get_post_ancestors($parent)): ? -->
		<!-- ?php $top_parent = get_post_ancestors($parent)[0]; ? -->
		<!-- ul class="aside-menu" -->
			<!-- ?php wp_list_pages('title_li=&child_of='.$top_parent.'&depth=2'); ? -->
		<!-- /ul -->

<!-- taking out $post->post_parent from conditional -->
	<?php $return_link = get_field('page_to_return'); if($return_link) {
		get_template_part('template-parts/mtac', 'page_return_link');
	}	?>

	<?php if( is_page() ) {
		get_template_part('template-parts/mtac', 'libraries');
	} ?>
</aside><!-- #secondary -->
