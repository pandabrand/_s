<?php
/**
 * The Library template contains the MTAC library .
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _pandapress
 */

?>
<?php $page = get_field('page_to_return', false, false); ?>
<h4 class="return-link-title"><a href="<?php echo get_the_permalink($page); ?>">Return to <?php echo get_the_title($page); ?></a></h4>
