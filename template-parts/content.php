<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _pandapress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<!-- div class="entry-meta" -->
			<!-- ?php _pandapress_posted_on(); ? -->
		<!-- /div --> <!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', '_pandapress' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_pandapress' ),
				'after'  => '</div>',
			) );
		?>
		<?php if( have_rows('information_sections') ): ?>
			<div id="accordion" class="mtac-accordion">
				<?php while( have_rows('information_sections' ) ): the_row();
					$title = get_sub_field('title');
					$content = get_sub_field('content');
				?>
					<?php if($title): ?>
						<h3><?php echo $title; ?></h3>
					<?php endif; ?>
					<?php if($content): ?>
						<div><?php echo $content; ?></div>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<!-- ?php _pandapress_entry_footer(); ? -->
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
