<?php
/**
 * Template Name: Contact
 */

get_header();
?>

    <!-- Page Heading -->
    <section id="page-heading" class="content-section">
        <h1>Contact Us</h1>
        <p>If you have any questions, feedback, or need assistance, please feel free to reach out to us using the form below.</p>
    </section>

    <!-- Contact Form Section -->
    <section id="contact-form" class="content-section">
        <h2>Get in Touch</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </section>

<?php get_footer(); ?>