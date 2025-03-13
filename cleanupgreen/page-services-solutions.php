<?php
/**
 * Template Name: Services and Solutions
 */

get_header();
?>
<div id="primary" <?php astra_primary_class(); ?>>

<?php astra_content_page_loop(); ?>

</div><!-- #primary -->

    <!-- Page Heading -->
    <section id="page-heading" class="content-section">
        <h1>Our Solutions</h1>
        <p>At Clean-Up Green, we offer both industrial and residential solutions for oil stain removal. Our innovative liquid and powder products effectively clean parking lots, driveways, farms, and more. They safely encapsulate hydrocarbons, making disposal easy, eco-friendly, and cost-effective.</p>
        <nav class="on-page-nav">
            <ul>
                <li><a href="#industrial-solutions">Industrial Solutions</a></li>
                <li><a href="#residential-solutions">Residential Solutions</a></li>
            </ul>
        </nav>
    </section>


    <!-- Industrial Solutions Section -->
    <section id="industrial-solutions" class="content-section">
        <h2>INDUSTRIAL SOLUTIONS</h2>
        <p>Oil spills are an inevitable part of the industrial sector. Left unchecked, these spills quickly become time-consuming and costly to clean. Furthermore, the ramifications of the environmental damage caused by a spill can cause unwanted attention and can lead to expensive government fines.</p>
        <p>Most remediation options involve a combination of extensive and invasive excavation or an application of a chemical solution that is harmful to the user and the environment. Both methods result in excessive costs, and both require spill clean-up waste to be hauled away and disposed of at waste treatment facilities.</p>
        <p>Clean-Up Green oil solutions technology is the safe effective way of permanently cleaning all types of spills. Clean-Up Green will save you time and expensive clean-up costs.</p>
        <a href="#">Explore Now</a>
    </section>

    <section id="residential-solutions" class="content-section">
        <h2>HOME SOLUTIONS</h2>
        <p>We know oil spills and stains can be an annoying problem around the house. We offer a complete line of household solutions for stains and spills of all sizes. Great for residential homes, acreages, ranches, and farms.</p>
        <a href="#">Explore Now</a>
    </section>

    <!-- Our Services Section -->
    <section id="our-services" class="content-section">
        <h2>Our Services</h2>
        <ul>
            <!-- Default Services -->
            <li>Parking lot and parkade oil stain removal</li>
            <li>Driveway oil stain removal</li>
            <li>Farm and ranch oil stain cleanup</li>
            <li>Gas pump island stain removal service</li>

            <?php
            // Query client-added services
            $args = array(
                'post_type' => 'service',
                'posts_per_page' => -1,
            );
            $services = new WP_Query($args);

            if ($services->have_posts()) :
                while ($services->have_posts()) : $services->the_post();
                    $service_description = get_field('service'); // ACF field
                    ?>
                    <li>
                        <?php echo esc_html($service_description); ?>
                    </li>
                <?php endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </ul>
        <a href="#">Get a Free Quote</a>
    </section>

    <!-- Cost Comparison Section -->
    <section id="cost-comparison" class="content-section">
        <h3>SAVE TIME + MONEY</h3>
        <div class="comparison-container">
            <div class="comparison-item">
                <h4>TRADITIONAL REMEDIATION</h4>
                <ul>
                    <li>Using absorbent powders, mats, acids, and chemicals.</li>
                    <li>Sorbent Materials: Only soaks up the mess but does not encapsulate the hydrocarbons.</li>
                    <li>Not Safe For Landfill Disposal: Most waste is toxic and must still be disposed of using a Hydrovac and cleaning facility.</li>
                    <li>Expensive Disposal Costs: Must be disposed of in an approved remediation facility. Costs up to $800 per 55 gal drum.</li>
                    <li>Costs Time: Cleanup time, including arranging transport to a remediation facility is time-consuming.</li>
                </ul>
            </div>
            <div class="comparison-item">
                <h4>CLEAN-UP GREEN REMEDIATION</h4>
                <ul>
                    <li>Complete permanent encapsulation of the hydrocarbons using oil solutions technology.</li>
                    <li>Instant Encapsulation: Permanently encapsulates the hydrocarbons. Will not leech over time.</li>
                    <li>No Hydrovac needed! Safe for landfill disposal in both Canada and the US.</li>
                    <li>Avoided Costs: Avoid up to $800 per 55 Gal drum in disposal fees.</li>
                    <li>Save on clean-up time. Easy to use and easy to dispose.</li>
                </ul>
            </div>
        </div>
        <p>Below is a cost comparison of an actual 900L diesel spill in gravel and the clean-up costs associated with it. This spill happened in the summer of 2020 in Alberta.</p>
        <div class="cost-comparison-container">
            <div class="cost-comparison-item">
                <h4>Traditional Remediation</h4>
                <p>TOTAL Cost: $21,097.00</p>
            </div>
            <div class="cost-comparison-item">
                <h4>Clean-Up Green Remediation</h4>
                <p>* Estimated Total cost to clean this spill with Clean-Up Green</p>
                <p>TOTAL with Clean-Up Green: $9,800</p>
                <p>52% *Estimated cost savings using Clean-Up Green liquid solution and powder for a comparable spill.</p>
            </div>
        </div>        
    </section>

    <!-- Review Section -->
    <section id="review" class="content-section">
        <blockquote>
            "I am very impressed by the product and would definitely recommend that it be used for hydrocarbon spills...there are time and huge cost savings by having this product in your toolbox."
            <cite>G. - Canadian Environmental Practitioner for 28 years</cite>
        </blockquote>
    </section>

<?php get_footer(); ?>