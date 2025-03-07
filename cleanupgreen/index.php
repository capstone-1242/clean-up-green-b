<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cleeanupgreen
 */

get_header();
?>
    <!-- Hero Section -->
    <section id="hero" class="hero-banner">
        <h1>CleanupGreen</h1>
        <p>REMOVE ANY OIL <span>FROM ANY SURFACE</span></p>
        <p>Clean-up Green can help you clean the oil spills from any surface without putting in extra effort.</p>
        <a href="#" class="btn">Purchase Now</a>
    </section>

    <!-- Spills Happen Section -->
    <section id="spills-happen" class="content-section">
        <h2>SPILLS HAPPEN</h2>
        <p>Oil spills are an inevitable part of the industrial sector. Clean-Up Green is the safe effective way of permanently cleaning all types of spills. Clean-Up Green will save you time and expensive cleanup costs.</p>
        <a href="#" class="btn">Learn More</a>
    </section>

    <!-- Solutions Section -->
    <section id="solutions" class="content-section">
        <h2>SAVE TIME AND MONEY WITH JUST RIGHT SOLUTIONS</h2>
        <div class="solutions-container">
            <div class="solution">
                <h3>RESIDENTIAL SOLUTIONS</h3>
                <p>Find a list of Clean-Up Green oil remediation products and sizes. Ideal for residential, acreages, and farms.</p>
                <a href="#" class="btn">Explore Now</a>
            </div>
            <div class="solution">
                <h3>INDUSTRIAL SOLUTIONS</h3>
                <p>Learn about how Clean-Up Green can help with all your remediation needs and help avoid costly clean-up costs.</p>
                <a href="#" class="btn">Explore Now</a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-choose-us" class="content-section">
        <h2>WHY CHOOSE US?</h2>
        <div class="why-choose-us-container">
            <div class="choose-us-item">
                <h3>Safe for the environment!</h3>
                <p>Clean-Up Green offers Oil Solutions products that meet and exceed the standard of the US EPA Method 1311 (recognized in Canada).</p>
            </div>
            <div class="choose-us-item">
                <h3>Green Technology</h3>
                <p>Clean-Up Green offers groundbreaking patented Oil Solutions product technology to the Canadian market.</p>
            </div>
            <div class="choose-us-item">
                <h3>Easy to use</h3>
                <p>Clean-up green is one of the easiest ways of removing oil spills for both industrial and residential spills. All the products are labelled with clear instructions for the application of product.</p>
            </div>
            <div class="choose-us-item">
                <h3>Best Pricing Available</h3>
                <p>At Clean-Up Green, the products available to the customer are estimated to be 52% cheaper than related products in the market.</p>
            </div>
        </div>
    </section>

    <!-- Science Behind the Magic Section -->
    <section id="science-behind-magic" class="content-section">
        <h2>SCIENCE BEHIND THE MAGIC</h2>
        <p>Unlike traditional oil spill products that only absorb oil spills and stains, Clean-Up Green encapsulates the hydrocarbons therefore rendering it non-hazardous. This allows the encapsulated oil waste to be discarded as normal household waste! No more expensive clean up and disposal needed.</p>
        <a href="#" class="btn">Save now</a>
    </section>


<?php get_footer(); ?>