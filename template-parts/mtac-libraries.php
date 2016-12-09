<?php
/**
 * The Library template contains the MTAC library .
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _pandapress
 */

?>
<?php $parent = $post->post_parent; $menu_page_id = !get_post_ancestors($parent) ? $post->ID : $parent; $child_pages = get_pages( array('child_of'=>$menu_page_id));?>
<?php if(get_post_ancestors($parent) && count($child_pages) > 0): ?>
  <h4 class="sub-page-home"><a href="<?php echo get_page_link($menu_page_id); ?>">Back to <?php echo get_the_title($menu_page_id); ?></a></h4>
<?php endif; ?>
<?php if( have_rows('libraries') || (is_page() && $parent && get_post_ancestors($parent)) ): $accordion_id = 1; ?>
  <div class="library-container">
    <div class="library-header"><h2>Library</h2>
      <?php if(count($child_pages) > 0): ?>
        <div class="mtac-library-title"><?php echo get_the_title($menu_page_id); ?> Pages</div>
        <h1><?php echo $parent->post_title ?></h1>
        <div id="accordion-page" class="mtac-accordion-library">
          <?php foreach ($child_pages as $chile): ?>
              <h3><?php echo $chile->post_title; ?></h3>
              <div class="file-accordion-div">
                <a href="<?php echo get_page_link( $chile->ID ); ?>"><i class="fa fa-link"></i> Go to page</a>
              </div>
          <?php endforeach; ?>
        </div>
      <?php endif; while( have_rows('libraries') ): the_row(); ?>
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
                      <p>
                        <?php echo $description; ?>
                      </p>
                    </div>
                  <?php endif; ?>
                  <div class="tool-link">
                    <?php if(get_sub_field('file_tool')): $file = get_sub_field('file_tool'); ?>
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
<script>
  jQuery(document).ready(function($){
    var index = $("#accordion-page").find("h3").index($("#accordion-page").find("h3:contains('<?php echo $post->post_title; ?>')"));
    $("#accordion-page").accordion({active: index});
  });
</script>
