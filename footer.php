<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clean
 */

?>
	<footer id="colophon" class="footer">
		<div class="container">
			<div class="footer__logo">
				<img src="/wp-content/uploads/2022/05/footer-logo.png" alt="logo">
			</div>
			<div class="footer__center">
				<?php wp_nav_menu( array( 'theme_location' => 'footer_menu', 'menu_class' => 'nav-menu' ) ); ?>
				<div class="footer__social">
					<a href=""><img src="/wp-content/uploads/2022/05/insta.png" alt="instagram"></a>
					<a href=""><img src="/wp-content/uploads/2022/05/twitter.png" alt="twitter"></a>
					<a href=""><img src="/wp-content/uploads/2022/05/facebook.png" alt="facebook"></a>
					<a href=""><img src="/wp-content/uploads/2022/05/whatsapp.png" alt="whatsapp"></a>
				</div>
				<p>© 2020, Video Editors</p>
			</div>
			<div class="footer__privacy">
				<a href="/" class="footer__privacy-link">Privacy Policy</a>
				<a href="/" class="footer__terms-link">Terms & Conditions</a>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript" src="/slick-1.8.1/slick/slick.min.js"></script>
<script src="/wp-content/themes/clean/js/common.js"></script>
</body>
</html>
