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
			<div class="footer-logo">
				<a href="http://chicagowomenintrades2.org/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cwit_logo.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/cwit_logo.png 1x, <?php echo get_template_directory_uri(); ?>/assets/img/cwit_logo@2x.png 2x"/></a>
			</div>
			<div class="footer-info">
				<div class="footer-item">National Center for Women’s Equity in Apprenticeship and Employment &copy;<?php echo date('Y'); ?></div>
				<div class="footer-item">A product by Chicago Women in Trades</div>
				<div class="footer-item">2444 W. 16th St. Chicago, IL 60608 </div>
				<div class="footer-item">312/942-1444 phone and 312/942-1599 fax</div>
				<div class="footer-item">Funded with support from the U.S. Department of Labor</div>
			</div>
			<div class="footer-links">
				<p>Connect with us.</p>
				<ul class="social-links">
					<li><a href="https://www.facebook.com/ChicagoWomenInTrade"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/pinkhardhats81"><i class="fa fa-twitter"></i></a></li>
					<li><a href="mailto:info@mtac.org"><i class="fa fa-envelope"></i></a></li>
				</ul>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
