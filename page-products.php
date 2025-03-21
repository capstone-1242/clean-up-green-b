<?php
/**
 * Template Name: Products
 */

get_header();
?>

<!-- Page Heading -->
<section id="page-heading" class="content-section">
    <h2>Products</h2>
    <p>Clean-Up Green oil solutions products come in a two-step liquid solution and powder form. Each form has its designated use. Find out which solution you need for your job by clicking the links above or scrolling through the info below.</p>
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
            ?>
            <section id="product-<?php the_ID(); ?>" class="content-section">
                <h3><?php the_title(); ?></h3>
                <p><?php echo esc_html($description); ?></p>
                <ul>
                    <?php foreach ($features_list as $feature) : ?>
                        <li><?php echo esc_html(trim($feature)); ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?php echo esc_url($add_to_cart_link); ?>" class="btn">Add to Cart</a>
            </section>
        <?php endwhile;
        wp_reset_postdata();
    endif;
    ?>
</section>

<!-- Availability Section -->
<section id="availability" class="content-section">
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
                $store_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                ?>
                <a href="#" class="store"><img src="<?php echo esc_url($store_image); ?>" alt="<?php the_title(); ?>"></a>
            <?php endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>