<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cleeanupgreen
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<!-- Add to Cart Success Modal -->
<div class="popup-modal" id="addToCartModal">
    <div class="popup-content">
        <p>Item added to cart!</p>
        <div class="modal-buttons">
            <a href="<?php echo esc_url( wc_get_page_permalink('shop') ); ?>" class="btn">Continue Shopping</a>
        </div>
    </div>
</div>

<?php
get_sidebar();
get_footer();
?>

<script>
jQuery(function($) {
    // Override WooCommerce's add to cart behavior
    $(document).on('click', '.add_to_cart_button', function(e) {
        e.preventDefault();
        
        var $button = $(this);
        var product_id = $button.data('product_id');
        var quantity = 1; // Default quantity
        
        // Add to cart via AJAX
        $.ajax({
            type: 'POST',
            url: wc_add_to_cart_params.ajax_url,
            data: {
                action: 'woocommerce_ajax_add_to_cart',
                product_id: product_id,
                quantity: quantity
            },
            beforeSend: function() {
                $button.addClass('loading');
            },
            complete: function() {
                $button.removeClass('loading');
            },
            success: function(response) {
                if (response.error) {
                    alert(response.error);
                } else {
                    // Show our custom modal
                    $('#addToCartModal').addClass('show');
                    
                    // Hide any default WooCommerce messages
                    $('.woocommerce-message').hide();
                    
                    // Update cart fragments
                    $(document.body).trigger('wc_fragment_refresh');
                }
            }
        });
    });

    // Close modal when clicking outside
    $(document).on('click', function(e) {
        if ($(e.target).is('#addToCartModal')) {
            $('#addToCartModal').removeClass('show');
        }
    });
});
</script>
