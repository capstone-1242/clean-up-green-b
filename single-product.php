<?php
defined( 'ABSPATH' ) || exit;

// Remove default Woo outputs before they get added
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_breadcrumb', 2 );

get_header( 'shop' ); ?>

<main class="custom-single-product">
  <div class="product-wrapper container">

    <?php while ( have_posts() ) : the_post(); global $product;

      do_action( 'woocommerce_before_single_product' );

      if ( post_password_required() ) {
        echo get_the_password_form();
        return;
      }
    ?>

      <div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

        <div class="custom-product-content">

          <!-- Image on Left -->
          <div class="custom-product-image">
            <?php do_action( 'woocommerce_before_single_product_summary' ); ?>
          </div>

          <!-- Product Details on Right -->
          <div class="custom-product-details">
            <h1 class="custom-product-title"><?php the_title(); ?></h1>
            <div class="custom-breadcrumbs"><?php woocommerce_breadcrumb(); ?></div>

            <?php 
            // Only output price, add to cart, and other product details
            woocommerce_template_single_excerpt();
            woocommerce_template_single_price();
            ?>

            <div class="product-actions">
              <?php woocommerce_template_single_add_to_cart(); ?>
              
              <form class="buy-now-form" method="post" action="<?php echo esc_url( wc_get_checkout_url() ); ?>">
                <input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" />
                <input type="hidden" name="quantity" value="1" />
                <button type="submit" class="buy-now-button">Buy Now</button>
              </form>
            </div>
          </div>

        </div>

        <!-- Tabs/Reviews/etc -->
        <div class="custom-product-tabs">
          <?php do_action( 'woocommerce_after_single_product_summary' ); ?>
        </div>

      </div>

      <?php do_action( 'woocommerce_after_single_product' ); ?>

    <?php endwhile; ?>

  </div>
</main>

<!-- Add to Cart Success Modal -->
<div class="popup-modal" id="addToCartModal">
    <div class="popup-content">
        <p>Item added to cart!</p>
        <div class="modal-buttons">
            <a href="<?php echo esc_url( wc_get_page_permalink('shop') ); ?>" class="btn">Continue Shopping</a>
        </div>
    </div>
</div>

<?php get_footer( 'shop' ); ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get the add to cart form
    const addToCartForm = document.querySelector('form.cart');
    const modal = document.getElementById('addToCartModal');

    if (addToCartForm) {
        addToCartForm.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent default form submission
            
            // Get the form data
            const formData = new FormData(addToCartForm);
            
            // Submit the form via AJAX
            fetch(addToCartForm.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(() => {
                // Show our custom modal
                modal.classList.add('show');
                
                // Hide any default WooCommerce messages
                const defaultMessages = document.querySelector('.woocommerce-message');
                if (defaultMessages) {
                    defaultMessages.style.display = 'none';
                }
            })
            .catch(error => console.error('Error:', error));
        });
    }

    // Close modal when clicking outside
    window.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.classList.remove('show');
        }
    });
});
</script>
