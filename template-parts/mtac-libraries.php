<?php
/**
 * The Library template contains the MTAC library .
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _pandapress
 */

?>
<?php if( !post_password_required($post)): ?>
  <?php if( have_rows('libraries') ): $accordion_id = 1; ?>
    <div class="library-container">
      <div class="library-header"><h2>Library</h2>
        <div id="<?php echo 'accordion-'.$accordion_id; ?>" class="mtac-accordion-library">
          <?php while( have_rows('libraries') ): the_row(); ?>
            <h3><?php echo the_sub_field('library_title'); ?></h3>
            <div>
              <dl>
                <?php while( have_rows('library')):
                  the_row();
                  $title = get_sub_field('tool_title');
                  $description = get_sub_field('file_description');
                ?>
                <dt><?php echo $title; ?></dt>
                <?php if($description): ?>
                  <dd class="tool-description"><?php echo $description; ?></dd>
                <?php endif; ?>
                <dd class="tool-link">
                  <?php $file = get_sub_field('file_tool'); if($file): ?>
                    <a href="<?php echo $file['url']; ?>" target="_blank">
                      <?php if(get_sub_field('video')): ?>
                        <i class="fa fa-youtube-play"></i> Video Download
                      <?php else: ?>
                        <i class="fa fa-download"></i> Download
                      <?php endif; ?>
                    </a>
                  <?php elseif(get_sub_field('link_tool')): $link = get_sub_field('link_tool'); ?>
                    <a href="<?php echo $link; ?>" target="_blank">
                      <?php if(get_sub_field('video')): ?>
                        <i class="fa fa-youtube-play"></i> Video Link
                      <?php else: ?>
                        <i class="fa fa-external-link"></i> Go to website
                      <?php endif; ?>
                    </a>
                  <?php elseif (get_sub_field('page_tool')): $page = get_sub_field('page_tool'); ?>
                    <a href="<?php echo $page; ?>">
                      <?php if(get_sub_field('video')): ?>
                        <i class="fa fa-youtube-play"></i> Video Page
                      <?php else: ?>
                        <i class="fa fa-link"></i> Go to page
                      <?php endif; ?>
                    </a>
                  <?php endif;?>
                </dd>
                <?php endwhile; ?>
              </dl>
            </div>
          <?php  endwhile; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
<?php endif; ?>
