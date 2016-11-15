<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _pandapress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mtac-article'); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php if(get_field('full_width_image')): ?>
			<?php $image = get_field('full_width_image'); ?>
			<div class="full-width-image-header">
				<img src="<?php echo $image['url'];?>" alt="<?php echo $image['title']; ?>" />
			</div>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content<?php echo (have_rows('libraries') ? ' entry-content-with-sidebar' : '' ); ?>">
		<?php
			the_content();

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

	<?php if (have_rows('libraries')): ?>
		<div class="entry-content-sidebar">
			<?php get_template_part('template-parts/mtac', 'libraries'); ?>
		</div>
	<?php endif; ?>
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', '_pandapress' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
