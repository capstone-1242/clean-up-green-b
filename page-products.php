<?php
/**
 * Template Name: Products
 */

get_header();
?>

<main id="products-page">
    <!-- Hero Section -->
    <section class="page-hero">
        <div class="hero-content">
            <h1>Our Products</h1>
            <p>Clean-Up Green oil solutions products come in a two-step liquid solution and powder form. Each form has its designated use.</p>
        </div>
    </section>

    <!-- Product Categories Navigation -->
    <nav class="product-categories">
        <div class="categories-container">
            <ul>
                <li><a href="#liquid-solutions">Liquid Solutions</a></li>
                <li><a href="#powder-products">Powder Products</a></li>
                <li><a href="#kits">Kits & Bundles</a></li>
            </ul>
        </div>
    </nav>

    <!-- Product Grid Section -->
    <section class="product-grid-section">
        <div class="grid-container">
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
                    $features_list = explode("\n", $features);
                    ?>
                    <article class="product-card">
                        <div class="card-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php endif; ?>
                        </div>
                        
                        <div class="card-content">
                            <h3><?php the_title(); ?></h3>
                            <p class="product-description"><?php echo esc_html($description); ?></p>
                            
                            <div class="product-features">
                                <h4>Features:</h4>
                                <ul>
                                    <?php foreach ($features_list as $feature) : ?>
                                        <li><?php echo esc_html(trim($feature)); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            
                            <div class="product-actions">
                                <a href="<?php the_permalink(); ?>" class="btn btn-outline">View Details</a>
                                <a href="<?php echo esc_url($add_to_cart_link); ?>" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </article>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p class="no-products">No products found.</p>
            <?php endif; ?>
        </div>
    </section>

    <!-- Where to Buy Section -->
    <section class="availability-section">
        <div class="availability-container">
            <h2>Where to Buy</h2>
            <p class="availability-subtitle">CLEAN-UP GREEN PRODUCTS ARE AVAILABLE AT THESE RETAILERS:</p>
            
            <div class="retailers-grid">
                <!-- Default Stores -->
                <div class="retailer-card">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/store1.jpg" alt="Store 1">
                    </a>
                </div>
                <div class="retailer-card">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/store2.jpg" alt="Store 2">
                    </a>
                </div>
                <div class="retailer-card">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/store3.jpg" alt="Store 3">
                    </a>
                </div>

                <?php
                // Query client-added stores
                $stores = new WP_Query(array(
                    'post_type' => 'store',
                    'posts_per_page' => -1,
                ));
                if ($stores->have_posts()) :
                    while ($stores->have_posts()) : $stores->the_post();
                        $store_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        ?>
                        <div class="retailer-card">
                            <a href="#">
                                <img src="<?php echo esc_url($store_image); ?>" alt="<?php the_title(); ?>">
                            </a>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="product-cta-section">
        <div class="cta-container">
            <h2>Need Help Choosing a Product?</h2>
            <p>Our team can help you select the right solution for your needs.</p>
            <a href="/contact" class="btn btn-primary">Contact Us</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>