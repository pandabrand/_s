<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _pandapress
 */

get_header(); ?>
	<div id="primary" class="content-area-front">
		<main id="main" class="site-main-front" role="main">
			<?php
			if( have_rows('slider_images')):
				// loop through the rows of data
			?>
				<div id="slider" class="flexslider">
					<ul class="slides">
					<?php while ( have_rows('slider_images') ) : the_row(); ?>
						<li>
							<?php
								// display a sub field value
								$slider_image = get_sub_field('slider_image');
								$slider_text = get_sub_field('slider_text');
								$slider_link = get_sub_field('slider_link');

								if( $slider_link ): ?>
									<a class="slider-link" href="<?php echo $slider_link; ?>">
								<?php endif; ?>

								<?php echo get_image_tag( $slider_image['id'], $slider_image['alt'], $slider_image['title'], 'none', 'slider-height' ); ?>
								<!-- div class="slider-image" style="background-image:url()"></div -->

								<?php if($slider_text): ?>
									<div class="slider-text">
							    	<?php echo $slider_text; ?>
									</div>
								<?php
									endif;
									if( $slider_link ):
								?>
									</a>
								<?php endif; ?>

						</li>
					<?php endwhile; ?>
				</ul>
				</div>
			<?php
			endif;

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'front_page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar('front_features');
get_footer();
