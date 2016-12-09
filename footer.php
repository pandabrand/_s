<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _pandapress
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="footer-info">
				<div class="footer-item">National Center for Women’s Equity in Apprenticeship and Employment &copy;<?php echo date('Y'); ?></div>
				<div class="footer-item">An initiative by <a href="http://chicagowomenintrades2.org" target="_blank">Chicago Women in Trades</a></div>
				<div class="footer-item">2444 W. 16th St. Chicago, IL 60608 </div>
				<div class="footer-item"><a href="tel:1-312-942-1444">312/942-1444</a> phone and 312/942-1599 fax</div>
				<div class="footer-item">Funded with support from the U.S. Department of Labor</div>
			</div>
			<div class="footer-links">
				<p>Connect with us.</p>
				<ul class="social-links">
					<li><a href="https://www.facebook.com/ChicagoWomenInTrade"><i class="fa fa-lg fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/pinkhardhats81"><i class="fa fa-lg fa-twitter"></i></a></li>
					<li><a href="mailto:info@mtac.org"><i class="fa fa-lg fa-envelope"></i></a></li>
				</ul>
				<div class="mtac-search-wrapper">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
