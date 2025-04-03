<?php
/**
 * Template Name: Contact us
 */
get_header();
?>

<main>
    <div class="contact-container" style="display: flex; gap: 50px; max-width: 1200px; margin: 50px auto; padding: 0 20px;">
        <!-- Contact Form Column -->
        <div class="contact-us-form" style="flex: 1;">
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
                
                <button type="submit" style="width: 100%; padding: 12px; background-color: #000000; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer; transition: background-color;">Send</button>
            </form>
        </div>

        <!-- Contact Information Column -->
        <div class="contact-info" style="flex: 1;">
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
