<?php
/**
 * Template Name: Main Page
 *
 * @package _pandapress
 * @since Pandapress 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area-main-mtac">
		<main id="main" class="site-main-mtac" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'main' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
