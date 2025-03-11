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

    <!-- Default Products -->
    <section id="product-1" class="content-section">
        <h3>#1 - Clean-Up Green OS Powder</h3>
        <p>Clean-Up Green Oil Spill Powder is used for all types of pooling oil spills. It works on hard surfaces such as asphalt, concrete or compacted soil, and also on water.</p>
        <ul>
            <li>Quickly Turns oil into a non-hazardous silica for safe disposal</li>
            <li>Environmentally safe - Permanent, non-toxic encapsulation</li>
            <li>Will absorb 10X its weight</li>
            <li>Powder will only use what it needs to absorb and encapsulate hydrocarbons</li>
        </ul>
        <a href="#" class="btn">Add to Cart</a>
    </section>

    <section id="product-2" class="content-section">
        <h3>#2 - Clean-Up Green 2-Step OS Liquid</h3>
        <p>Clean-Up Green Oil Two-Step Liquid is used for stains on all surfaces, including rock, concrete, asphalt, and wood. It also helps eliminate oil smells.</p>
        <ul>
            <li>Simple 2 STEP Liquid solution to clean up oil stains and oil odours</li>
            <li>Works well on old and new stains</li>
            <li>Works on Rock, Concrete, Asphalt, Soil, Sand, Water, Wood</li>
        </ul>
        <a href="#" class="btn">Add to Cart</a>
    </section>

    <section id="product-3" class="content-section">
        <h3>#3 - Clean-Up Green Oil Sheen Remover</h3>
        <p>Easily remove rainbow sheen after a fuelling overfill on water.</p>
        <ul>
            <li>Safe to clean gas and oil from fiberglass and aluminum hulls</li>
            <li>Perfect for marine use anywhere around water</li>
            <li>Environmentally safe complete encapsulation</li>
            <li>Naturally bio-degrades the hydrocarbons leaving water clean</li>
        </ul>
        <a href="#" class="btn">Add to Cart</a>
    </section>

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