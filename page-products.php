<?php
/**
 * Template Name: Products
 */
get_header();
?>

<main id="products-page">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content container">
            <h1>OUR PRODUCTS</h1>
            <p>Clean-Up Green oil solutions products come in a two-step liquid solution and powder form. Each form has its designated use.</p>
        </div>
    </section>

    <!-- Product Navigation -->
    <nav class="product-nav">
        <div class="container">
            <ul>
                <li><a href="#liquid-solutions">Liquid Solutions</a></li>
                <li><a href="#powder-products">Powder Products</a></li>
            </ul>
        </div>
    </nav>

    <!-- Product Grid -->
    <section id="liquid-solutions" class="section-padding">
        <div class="container">
            <h2 class="section-title">Liquid <span>Solutions</span></h2>
            
            <div class="product-grid">
                <?php
                for ($i = 1; $i <= 1; $i++) : ?>
                <article class="product-card">
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cug-liquid" alt="Product <?php echo $i; ?>" loading="lazy">
                    </div>
                    <div class="product-details">
                        <h3>Clean-Up Green 2 Step OS Liquid</h3>
                        <p class="price">$49.99</p>
                        <p class="description">For stains on all surfaces including rock, concrete, asphalt, and wood.</p>
                        
                        <ul class="features">
                            <li>Eliminates oil smells</li>
                            <li>Works on old and new stains</li>
                            <li>Safe for all surfaces</li>
                        </ul>
                        
                        <div class="product-actions">
                            <a href="how-to-use/#clean-up-green-2-step-os-liquid" class="btn btn-outline">How to use?</a>
                            <a href="cart" class="btn">Add to Cart</a>
                        </div>
                    </div>
                </article>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <!-- Powder Products -->
    <section id="powder-products" class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Powder <span>Products</span></h2>
            
            <div class="product-grid">
                <?php for ($i = 2; $i <= 2; $i++) : ?>
                <article class="product-card">
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cug-powder-bags" alt="Product <?php echo $i; ?>" loading="lazy">
                    </div>
                    <div class="product-details">
                        <h3>Clean-Up Green OS Powder</h3>
                        <p class="price">$59.99</p>
                        <p class="description">For all types of pooling oil spills on hard surfaces or water.</p>
                        
                        <ul class="features">
                            <li>Absorbs 10X its weight</li>
                            <li>Environmentally safe</li>
                            <li>Reusable excess powder</li>
                        </ul>
                        
                        <div class="product-actions">
                            <a href="how-to-use/#clean-up-green-os-powder" class="btn btn-outline">How to use?</a>
                            <a href="shop" class="btn">Add to Cart</a>
                        </div>
                    </div>
                </article>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <!-- Retailers Section -->
    <section id="where-to-buy" class="section-padding">
        <div class="container">
            <h2 class="section-title text-center">Where to <span>Buy</span></h2>
            <p class="text-center">CLEAN-UP GREEN PRODUCTS ARE AVAILABLE AT THESE RETAILERS:</p>
            
            <div class="retailers-grid">
                <div class="retailer-card">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/retailer">
                    </a>
                </div>
                <div class="retailer-card">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/retailer">
                    </a>
                </div>
                <div class="retailer-card">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/retailer">
                    </a>
                </div>
                <div class="retailer-card">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/retailer">
                    </a>
                </div>
                <div class="retailer-card">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/retailer">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding bg-light">
        <div class="container text-center">
            <h2>Need Help Choosing a Product?</h2>
            <p>Our team can help you select the right solution for your needs.</p>
            <a href="/contact" class="btn btn-light">Contact Us</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>