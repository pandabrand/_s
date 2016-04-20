<?php
/**
 * The front page file.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _pandapress
 */

get_header(); ?>


	<div class="front-page-header">
	  <div class="img-header">
		<?php
		  if (has_post_thumbnail( $post->ID ) ) {
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
			echo '<img src="'.$image[0].'" >';
		  }
		?>
	  </div>
	  <div class="state-container">
	    <h4>Find Resources For Your State</h4>
		<ul class="state-menu">
		  <li><a href="http://chicagowomenintrades2.org/mtac/illinois/"><span class="sf-il">Illinois</span></a></li>
		  <li><a href="http://chicagowomenintrades2.org/mtac/indiana/"><span class="sf-in">Indiana</span></a></li>
		  <li><a href="http://chicagowomenintrades2.org/mtac/iowa/"><span class="sf-ia">Iowa</span></a></li>
		  <li><a href="http://chicagowomenintrades2.org/mtac/kansas/"><span class="sf-ks">Kansas</span></a></li>
		  <li><a href="http://chicagowomenintrades2.org/mtac/michigan/"><span class="sf-mi">Michigan</span></a></li>
		  <li><a href="http://chicagowomenintrades2.org/mtac/minnesota/"><span class="sf-mn">Minnesota</span></a></li>
		  <li><a href="http://chicagowomenintrades2.org/mtac/missouri/"><span class="sf-mo">Missouri</span></a></li>
		  <li><a href="http://chicagowomenintrades2.org/mtac/nebraska/"><span class="sf-ne">Nebraska</span></a></li>
		  <li><a href="http://chicagowomenintrades2.org/mtac/ohio/"><span class="sf-oh">Ohio</span></a></li>
		  <li><a href="http://chicagowomenintrades2.org/mtac/wisconsin/"><span class="sf-wi">Wisconsin</span></a></li>
		</ul>
	  </div>
	</div>	
	<div id="primary" class="content-area">
	  <?php get_sidebar(); ?>
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>