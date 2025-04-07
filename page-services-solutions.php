<?php
/**
 * Template Name: Services and Solutions
 */
get_header();
?>

<!-- Hero Banner Section -->
<section id="hero-banner" class="hero-section">
    <div class="hero-content container">
        <h1>SERVICES AND SOLUTIONS</h1>
        <p class="hero-subtitle">Innovative oil remediation solutions for every environment</p>
    </div>
</section>

<!-- Our Solutions Section -->
<section id="our-solutions" class="section-padding">
    <div class="container grid-layout">
        <div class="text-content">
            <h2 class="section-title">Our <span>Solutions</span></h2>
            <p class="section-description">At Clean-Up Green, we offer both industrial and residential solutions for oil stain removal. Our innovative liquid and powder products effectively clean parking lots, driveways, farms, and more.</p>
            
            <div class="icon-list">
                <div class="icon-item">
                    <svg class="check-icon" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12L3.41 13.41L9 19L21 7L19.59 5.59L9 16.17Z"/></svg>
                    <span>Eco-friendly formulations</span>
                </div>
                <div class="icon-item">
                    <svg class="check-icon" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12L3.41 13.41L9 19L21 7L19.59 5.59L9 16.17Z"/></svg>
                    <span>Cost-effective remediation</span>
                </div>
                <div class="icon-item">
                    <svg class="check-icon" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12L3.41 13.41L9 19L21 7L19.59 5.59L9 16.17Z"/></svg>
                    <span>Safe for all surfaces</span>
                </div>
            </div>
            <a href="shop" class="btn">Buy Now</a>
        </div>
        
        <div class="image-content">
            <div class="image-wrapper">
                <img src="https://clean-up-green-b.web.dmitcapstone.ca/wp-content/uploads/2025/04/solution-cleaning-300x200.webp">
            </div>
        </div>
    </div>
    <!-- Residential/Industrial Section -->
<section id="residential-industrial">
    <div class="container card-grid">
        <div class="solution-card">
            <div class="card-icon">
                <svg viewBox="0 0 24 24"><path d="M12 3L2 12H5V20H11V14H13V20H19V12H22L12 3Z"/></svg>
            </div>
            <h3>HOME SOLUTIONS</h3>
            <p>We know oil spills and stains can be an annoying problem around the house. We offer a complete line of household solutions for stains and spills of all sizes.</p>
            <a href="shop" class="btn btn-outline">Try Now</a>
        </div>
        
        <div class="solution-card">
            <div class="card-icon">
                <svg viewBox="0 0 24 24"><path d="M19 15V18H17V15H15V18H13V15H11V18H9V15H7V18H5V15H3V20H21V15H19ZM19 5V8H17V5H15V8H13V5H11V8H9V5H7V8H5V5H3V13H21V5H19Z"/></svg>
            </div>
            <h3>INDUSTRIAL SOLUTIONS</h3>
            <p>Oil spills are an inevitable part of the industrial sector. Left unchecked, these spills quickly become time-consuming and costly to clean.</p>
            <a href="shop" class="btn btn-outline">Try Now</a>
        </div>
    </div>
</section>
</section>



<!-- Services Section -->
<section id="our-services" class="section-padding bg-light">
    <div class="container">
        <h2 class="section-title text-center">Our <span>Services</span></h2>
        
        <div class="services-grid">
            <div class="services-list">
                <ul>
                    <li>
                        <svg class="check-icon" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12L3.41 13.41L9 19L21 7L19.59 5.59L9 16.17Z"/></svg>
                        Parking lot and parkade oil stain removal
                    </li>
                    <li>
                        <svg class="check-icon" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12L3.41 13.41L9 19L21 7L19.59 5.59L9 16.17Z"/></svg>
                        Driveway oil stain removal
                    </li>
                    <?php /* Dynamic services would be inserted here */ ?>
                </ul>
            </div>
            
            <div class="cta-card">
                <h3>Ready to Transform Your Space?</h3>
                <p>Get a free, no-obligation quote for your oil remediation needs.</p>
                <a href="#" class="btn">Get a Free Quote</a>
            </div>
        </div>
    </div>
</section>

<!-- Cost Comparison Section -->
<section id="cost-comparison" class="section-padding bg-dark">
    <div class="container">
        <h2 class="section-title text-center white">Cost <span>Comparison</span></h2>
        <p class="text-center">See how Clean-Up Green saves you time and money</p>
        
        <div class="tabbed-content">
            <div class="tab-buttons">
                <button class="tab-btn active" data-tab="traditional">Traditional</button>
                <button class="tab-btn" data-tab="cleanup">Clean-Up Green</button>
            </div>
            
            <div class="tab-panel active" id="traditional">
                <ul class="comparison-list">
                    <li>Using absorbent powders, mats, acids, and chemicals</li>
                    <li>Sorbent Materials: Only soaks up the mess</li>
                    <li>Not Safe For Landfill Disposal</li>
                </ul>
            </div>
            
            <div class="tab-panel" id="cleanup">
                <ul class="comparison-list">
                    <li>Complete permanent encapsulation</li>
                    <li>Instant Encapsulation</li>
                    <li>No Hydrovac needed!</li>
                </ul>
            </div>
        </div>
        
        <div class="cost-cards">
            <p class="case-study">Case Study: 900L diesel spill in gravel (Alberta, Summer 2020)</p>
            <div class="cards-container">
                <div class="card">
                    <h3>Traditional Remediation</h3>
                    <div class="cost">$21,097.00</div>
                    <p>Total Cost</p>
                </div>
                <div class="card highlight">
                    <h3>Clean-Up Green</h3>
                    <div class="cost">$9,800.00</div>
                    <p>Total Estimated Cost</p>
                    <div class="badge">52% Cost Savings</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<section id="testimonial" class="section-padding">
    <div class="container">
        <div class="testimonial-card">
            <svg class="quote-icon" viewBox="0 0 24 24"><path d="M14.017 21V12H17.017L18.017 8H14.017V6C14.017 5.46957 14.2277 4.96086 14.6026 4.58579C14.9777 4.21071 15.4864 4 16.017 4H18.017V0H16.017C13.8277 0 11.7275 0.842855 10.1568 2.34315C8.58607 3.84344 7.667 5.87827 7.667 8V8H4.667V12H7.667V21H14.017Z"/></svg>
            <blockquote>"I am very impressed by the product and would definitely recommend that it be used for hydrocarbon spills...there are time and huge cost savings by having this product in your toolbox."</blockquote>
            <cite>G. - Canadian Environmental Practitioner for 28 years</cite>
        </div>
    </div>
</section>

<?php get_footer(); ?>