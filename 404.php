<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cleeanupgreen
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
		<div class="cug-404-container">
        <div class="cug-404-logo">CleanUpGreen</div>
        <div id="cug-404-error-code">404 Error</div>
        <div class="cug-404-icon">🌍</div>
        <h1 class="cug-404-title">Oops! This Page Got Lost in Nature</h1>
        <p class="cug-404-message">The page you're looking for seems to have wandered off the trail. Maybe it's out cleaning up somewhere green!</p>
        
        <div class="cug-404-search">
            <input type="text" class="cug-404-search-input" placeholder="Search our site...">
            <button type="submit" class="cug-404-search-button">Search</button>
        </div>
        
        <div class="cug-404-actions">
            <a href="/home" class="cug-404-primary-btn">Return Home</a>
            <a href="/contact" class="cug-404-secondary-btn">Report Broken Link</a>
        </div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
