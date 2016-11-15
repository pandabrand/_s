<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package _pandapress
 */
?>
 <form action="/" method="get">
   <div class="input-group mtac-search">
     <input class="form-control mtac-search-input" type="text" name="s" id="search" placeholder="Search..." value="<?php the_search_query(); ?>" />
     <button type="submit" class="btn btn-mtac-search"><span class="input-group-addon"><i class="fa fa-search"></i></span></button>
   </div>
 </form>
