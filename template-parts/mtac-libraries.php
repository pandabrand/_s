<?php
/**
 * The Library template contains the MTAC library .
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _pandapress
 */

?>

<?php if( have_rows('libraries') ): $accordion_id = 1; ?>
  <div class="library-container">
    <div class="library-header"><h2>Library</h2>
      <?php while( have_rows('libraries') ): the_row(); ?>
        <div class="mtac-library-title"><?php the_sub_field('library_title'); ?></div>
          <?php if( have_rows('library')): ?>
            <div id="<?php echo 'accordion-'.$accordion_id; ?>" class="mtac-accordion-library">
              <?php while( have_rows('library' ) ): the_row();
                $title = get_sub_field('tool_title');
                $description = get_sub_field('file_description');
              ?>
                <?php if($title): ?>
                  <h3><?php echo $title; ?></h3>
                <?php endif; ?>
                <div class="file-accordion-div">
                  <?php if($description): ?>
                    <div class="tool-description">
                      <?php echo $description; ?>
                    </div>
                  <?php endif; ?>
                  <div class="tool-link">
                    <?php if(get_sub_field('file_tool')): $file = get_sub_field('file_tool'); ?>
                      <a href="<?php echo $file['url']; ?>" target="_blank"><i class="fa fa-download"></i> Download</a>
                    <?php elseif(get_sub_field('link_tool')): $link = get_sub_field('link_tool'); ?>
                      <a href="<?php echo $link; ?>" target="_blank"><i class="fa fa-external-link"></i> Go to website</a>
                    <?php elseif (get_sub_field('page_tool')): $page = get_sub_field('page_tool'); ?>
                      <a href="<?php echo $page; ?>"><i class="fa fa-link"></i> Go to page</a>
                    <?php endif; $accordion_id++; ?>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
      <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>
