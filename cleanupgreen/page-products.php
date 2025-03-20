<?php
/**
 * Template Name: Products
 */

get_header();
?>

<!-- Hero Banner Section -->
<section id="hero-banner" class="hero-banner-section">
    <div class="hero-content">
        <h1>Products</h1>
    </div>
</section>

<!-- Products Section -->
<section id="products" class="products-section">
    <div class="products-container">
        <?php
        // Query client-added products
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => -1,
        );
        $products = new WP_Query($args);

        if ($products->have_posts()) :
            while ($products->have_posts()) : $products->the_post();
                $description = get_field('product_description');
                $features = get_field('product_features');
                $add_to_cart_link = get_field('add_to_cart_link');
                $features_list = explode("\n", $features); // Split features by new lines
                $product_image = get_field('product_image'); // Get the product image URL
                ?>
                <div class="product-item">
                    <div class="product-image">
                        <img src="<?php echo esc_url($product_image); ?>" alt="<?php the_title(); ?>">
                    </div>
                    <div class="product-content">
                        <h3><?php the_title(); ?></h3>
                        <ul>
                            <?php foreach ($features_list as $feature) : ?>
                                <li><?php echo esc_html(trim($feature)); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="<?php echo esc_url($add_to_cart_link); ?>" class="btn">Shop Now</a>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>

<!-- Availability Section -->
<section id="availability" class="availability-section">
    <h2>CLEAN-UP GREEN PRODUCTS ARE AVAILABLE AT:</h2>
    <div class="store-links">
        <!-- Default Stores -->
        <a href="#" class="store"><img src="<?php echo get_template_directory_uri(); ?>/images/store1.jpg" alt="Store 1"></a>
        <a href="#" class="store"><img src="<?php echo get_template_directory_uri(); ?>/images/store2.jpg" alt="Store 2"></a>
        <a href="#" class="store"><img src="<?php echo get_template_directory_uri(); ?>/images/store3.jpg" alt="Store 3"></a>

        <?php
        // Query client-added stores
        $stores = new WP_Query(array(
            'post_type' => 'store',
            'posts_per_page' => -1,
        ));
        if ($stores->have_posts()) :
            while ($stores->have_posts()) : $stores->the_post();
                $store_image = get_field('store_image'); // Get the store image URL
                $store_link = get_field('store_link'); // Get the store link
                ?>
                <a href="<?php echo esc_url($store_link); ?>" class="store" target="_blank">
                    <img src="<?php echo esc_url($store_image); ?>" alt="<?php the_title(); ?>">
                </a>
            <?php endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>