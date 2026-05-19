<?php
// About Us - Stanford International School
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About Stanford International School - Learn about our mission, vision, and core values that drive academic excellence in Bangalore.">
    <title>About Us | Stanford International School</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/modern-styles.css">
</head>
<body>

    <!-- Header / Navbar -->
    <header class="modern-header glass">
        <div class="container nav-container">
            <a href="index.php" class="logo">
                <img src="img/new-images/new-logo1.webp" alt="Stanford International School">
            </a>
            <nav>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="about-us.php">About Us</a></li>
                    <li><a href="kindergarden.php">Academics</a></li>
                    <li><a href="admission.php">Admission</a></li>
                    <li><a href="activities.php">Activities</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                </ul>
            </nav>
            <button class="mobile-menu-btn"><i class="fas fa-bars"></i></button>
        </div>
    </header>

    <div class="page-header" style="background-image: linear-gradient(rgba(10,22,40,0.85), rgba(10,22,40,0.85)), url('img/new-images/new-banner.webp'); background-size: cover; background-position: center;">
        <div class="container reveal">
            <h1 class="hero-title">About <span>Us</span></h1>
            <p class="hero-desc">Discover the foundation of our excellence.</p>
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span class="separator">/</span>
                <span class="current">About Us</span>
            </div>
        </div>
    </div>

    <!-- Vision & Mission -->
    <section class="section-padding">
        <div class="container">
            <div class="about-grid">
                <div class="about-content reveal">
                    <h2 class="section-title" style="text-align: left;">Our Vision & Mission</h2>
                    <p style="font-size: 1.1rem; color: var(--text-main); margin-bottom: 1.5rem; line-height: 1.8;">
                        Stanford International School was established with a singular vision: to create an inclusive, innovative, and deeply enriching educational environment where every student has the opportunity to thrive.
                    </p>
                    <p style="font-size: 1.1rem; color: var(--text-main); margin-bottom: 1.5rem; line-height: 1.8;">
                        We believe that education is not just about academic excellence, but about building character, instilling moral values, and preparing children to be global citizens. Our highly qualified educators are committed to nurturing the unique talents of each individual.
                    </p>
                    <p style="font-size: 1.1rem; color: var(--text-main); margin-bottom: 1.5rem; line-height: 1.8;">
                        Our mission is to foster a safe, nurturing, and engaging environment where children are empowered to explore, create, and grow into confident, capable leaders of tomorrow.
                    </p>
                    <div style="margin-top: 2rem;">
                        <a href="chairman-desk.php" class="btn btn-outline" style="color: var(--primary); border-color: var(--primary);">Message from Chairman</a>
                    </div>
                </div>
                <div class="about-image reveal" style="transition-delay: 0.2s;">
                    <img src="img/new-images/1.webp" alt="Stanford Students" style="border-radius: var(--radius-lg);">
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="section-padding" style="background: var(--bg-alt);">
        <div class="container">
            <h2 class="section-title reveal">Our Core Values</h2>
            <p class="section-subtitle reveal">The principles that guide everything we do at Stanford International School.</p>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;" class="reveal">
                <div class="service-card" style="border-image: none; border-top: 4px solid var(--accent);">
                    <div class="service-icon"><i class="fas fa-star"></i></div>
                    <h3>Excellence</h3>
                    <p>Pursuing the highest standards in academics, character, and personal growth.</p>
                </div>
                <div class="service-card" style="border-image: none; border-top: 4px solid var(--accent);">
                    <div class="service-icon"><i class="fas fa-heart"></i></div>
                    <h3>Integrity</h3>
                    <p>Building strong moral foundations through honesty, respect, and responsibility.</p>
                </div>
                <div class="service-card" style="border-image: none; border-top: 4px solid var(--accent);">
                    <div class="service-icon"><i class="fas fa-lightbulb"></i></div>
                    <h3>Innovation</h3>
                    <p>Embracing modern methodologies and creative approaches to learning.</p>
                </div>
                <div class="service-card" style="border-image: none; border-top: 4px solid var(--accent);">
                    <div class="service-icon"><i class="fas fa-users"></i></div>
                    <h3>Community</h3>
                    <p>Fostering a collaborative, inclusive environment where everyone belongs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section">
        <div class="container reveal" style="position: relative; z-index: 2;">
            <h2>Ready to Join Stanford?</h2>
            <p>Take the first step towards a brilliant future for your child.</p>
            <a href="admission.php" class="btn btn-primary">Apply for Admission</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="modern-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <img src="img/new-images/new-logo1.webp" alt="Logo" style="height: 60px; margin-bottom: 1.5rem; background: white; padding: 0.5rem; border-radius: var(--radius-sm);">
                    <p style="margin-bottom: 1.5rem; line-height: 1.8;">Stanford International School is a leading educational institution in Bangalore committed to delivering academic excellence and holistic development.</p>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="kindergarden.php">Academics</a></li>
                        <li><a href="admission.php">Admissions</a></li>
                        <li><a href="activities.php">Activities</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contact Info</h3>
                    <ul class="footer-links">
                        <li style="display: flex; gap: 10px;"><i class="fas fa-phone-alt" style="margin-top: 5px; color: var(--secondary);"></i> <span><a href="tel:+916364669933">+91 636 466 9933</a><br><a href="tel:+916364669911">+91 636 466 9911</a></span></li>
                        <li style="display: flex; gap: 10px;"><i class="fas fa-envelope" style="margin-top: 5px; color: var(--secondary);"></i> <a href="mailto:admin.stanfordschool@gmail.com">admin.stanfordschool@gmail.com</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Our Address</h3>
                    <div style="display: flex; gap: 10px;">
                        <i class="fas fa-map-marker-alt" style="margin-top: 5px; color: var(--secondary);"></i>
                        <p>#11, Gajanana Nagara,<br>Hegganahalli,<br>Bangalore - 560 091</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Stanford International School. All Rights Reserved. | Powered by Beyondweb Technologies</p>
        </div>
    </footer>

    <div class="fab-container">
        <a href="https://wa.me/916364669933" target="_blank" class="fab fab-whatsapp" aria-label="WhatsApp"><i class="fas fa-comment-dots"></i></a>
        <a href="tel:+916364669933" class="fab fab-phone" aria-label="Call Us"><i class="fas fa-phone-volume"></i></a>
    </div>
    <button class="scroll-top" aria-label="Scroll to top"><i class="fas fa-chevron-up"></i></button>

    <script src="js/modern-script.js"></script>
</body>
</html>
