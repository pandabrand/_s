<?php
/**
 * "Front Feature" Layout Template File
 *
 */
?>

<article class="fpw-clearfix fpw-layout-front-feature">

	<a href="<?php the_permalink(); ?>" class="fpw-featured-link">
		<div class="fpw-featured-image">
			<?php the_post_thumbnail( 'front_feature' ); ?>
		</div>
		<h3 class="fpw-page-title"><?php the_title(); ?></h3>
	</a>

	<div class="fpw-excerpt">
		<?php the_excerpt(); ?>
	</div>

</article>
