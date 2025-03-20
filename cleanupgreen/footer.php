<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cleeanupgreen
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-content">
			<!-- Left Section: Logo + Address -->
			<div class="footer-section">
				<div class="footer-logo">
					<?php
					// Display the logo and site title
					if (has_custom_logo()) {
						the_custom_logo();
					} else {
						echo '<h2>' . get_bloginfo('name') . '</h2>';
					}
					?>
				</div>
				<div class="footer-address">
					<p>Clean-Up Green Inc.</p>
					<p>36, 52502 RR 25</p>
					<p>Parkland County, AB</p>
					<p>T7Y 2M2</p>
				</div>
			</div>

			<!-- Right Section: Social Icons + Contact Info -->
			<div class="footer-section">
				<div class="social-icons">
					<?php
					// Add social media icons (replace # with your links)
					echo '<a href="#" target="_blank" rel="noopener noreferrer"><img src="' . get_template_directory_uri() . '/images/icon-facebook.svg" alt="Facebook"></a>';
					echo '<a href="#" target="_blank" rel="noopener noreferrer"><img src="' . get_template_directory_uri() . '/images/icon-twitter.svg" alt="Twitter"></a>';
					echo '<a href="#" target="_blank" rel="noopener noreferrer"><img src="' . get_template_directory_uri() . '/images/icon-instagram.svg" alt="Instagram"></a>';
					?>
				</div>
				<div class="footer-contact">
					<p>contact@cleanupgreen.ca</p>
					<p>Phone: (780) 542-0486</p>
				</div>
			</div>
		</div>

		<!-- Copyright Section -->
		<div class="site-info">
			<p>&copy; <?php echo date('Y'); ?> CleanupGreen. All rights reserved.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>