<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package slices2016
 */

?>

	</div><!-- #content .container -->

	<?php if ( is_front_page() && is_active_sidebar( 'panel-home' ) ) : ?>

		<div id="logos" class="panel">
		<div class="container">

			<?php dynamic_sidebar( 'panel-home' ); ?>

		</div>
		</div>

	<?php endif; ?>


	<?php if ( is_front_page() ) : ?>

		<div id="quotes" class="panel">
		<div class="container">

		<?php get_template_part( 'template-parts/content', 'testimonials' ); ?>

		</div>
		</div>

	<?php endif; ?>	

	<?php if ( is_active_sidebar( 'panel-footer' ) ) : ?>

		<div id="footer-panel" class="panel">
		<div class="container">

			<?php dynamic_sidebar( 'panel-footer' ); ?>
			
		</div>
		</div>

	<?php endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">

			<!-- TODO: Make the copyright year dynamic -->
			<div class="terms">
				<ul class="nav nav-pills">
					<li><a href="#">Terms &amp; Conditions</a></li>
					<li><a href="#">Privacy Policy</a></li>
			</div>
			<div class="copyright">&copy; 2016 Slices Consulting. All rights reserved.</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
