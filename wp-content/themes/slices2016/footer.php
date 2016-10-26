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

	<?php if ( is_front_page() ) : ?>

		<div id="logos" class="panel">
		<div class="container">

			<h3>Happy clients include:</h3>

			<img src="<?php echo get_stylesheet_directory_uri();?>/img/client_logos.png" />

		</div>
		</div>

	<?php endif; ?>


	<?php if ( is_front_page() ) : ?>

		<div id="testimonials" class="panel">
		<div class="container">

		<?php get_template_part( 'template-parts/content', 'testimonials' ); ?>

		</div>
		</div>

	<?php endif; ?>	

	<?php if ( is_active_sidebar( 'panel-footer' ) ) : ?>

		<div id="footer-panel" class="panel">
		<div class="container">

			<div class="alignment">
			<?php dynamic_sidebar( 'panel-footer' ); ?>
			</div>
			
		</div>
		</div>

	<?php endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">

			<div class="terms">
				<ul class="nav nav-pills">
					<li><a href="#">Terms &amp; Conditions</a></li>
					<li><a href="#">Privacy Policy</a></li>
			</div>
			<div class="copyright">&copy; <?php echo date("Y");?> Slices Consulting. All rights reserved.</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WKHQVN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

</body>
</html>
