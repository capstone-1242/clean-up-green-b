<?php
/**
 * Template Name: Contact Us
 */
get_header();
?>

<main class="contact">

<section id="hero-banner" class="hero">
    <div class="hero-content container">
        <h1>CONTACT US</h1>
    </div>
</section>
    <div class="contact-container" style="display: flex; flex-wrap: wrap; gap: 40px;">

        <div class="contact-us-form" style="flex: 1; min-width: 300px;">
            <h2>Contact Us</h2>
            <form>
                <div class="form-field">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" required>
                </div>
                
                <div class="form-field">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-field">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                
                <div class="form-field">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                
                <button type="submit" class="send-button">Send</button>
            </form>
        </div>

        <div class="contact-info" style="flex: 1; min-width: 300px;">
            <div class="info-block">
                <p>36, 52502 RR 25<br>
                Parkland County, AB<br>
                T7Y 2M2</p>
                
                <div class="contact-details">
                    <p><strong>Email:</strong> 
                        <a href="mailto:inquire@cleanupgreen.ca">inquire@cleanupgreen.ca</a>
                    </p>
                    <p><strong>Phone:</strong> 
                        <a href="tel:7805420486">(780) 542-0486</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
