<?php
// Primary Program - Stanford International School
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Primary education program at Stanford International School — building essential skills and intellectual curiosity.">
    <title>Primary | Stanford International School</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/modern-styles.css">
    
    <style>
        .academic-content {
            background: var(--surface);
            padding: 3.5rem;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-xl);
            margin-top: -4rem;
            position: relative;
            z-index: 10;
        }
        .highlight-item {
            display: flex;
            gap: 12px;
            align-items: center;
            color: var(--text-muted);
            font-size: 1rem;
            padding: 0.5rem 0;
        }
        .highlight-item i { color: var(--secondary); font-size: 1.1rem; }
    </style>
</head>
<body>

    <header class="modern-header glass">
        <div class="container nav-container">
            <a href="index.php" class="logo"><img src="img/new-images/new-logo1.webp" alt="Stanford International School"></a>
            <nav>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li class="active"><a href="kindergarden.php">Academics</a></li>
                    <li><a href="admission.php">Admission</a></li>
                    <li><a href="activities.php">Activities</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                </ul>
            </nav>
            <button class="mobile-menu-btn"><i class="fas fa-bars"></i></button>
        </div>
    </header>

    <div class="page-header" style="background-image: linear-gradient(rgba(10,22,40,0.85), rgba(10,22,40,0.85)), url('img/new-images/banner2.webp'); background-size: cover; background-position: center;">
        <div class="container reveal">
            <h1 class="hero-title">Primary <span>Program</span></h1>
            <p class="hero-desc">Helping children acquire social and learning-related skills.</p>
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span class="separator">/</span>
                <a href="kindergarden.php">Academics</a>
                <span class="separator">/</span>
                <span class="current">Primary</span>
            </div>
        </div>
    </div>

    <section class="section-padding" style="padding-top: 0;">
        <div class="container">
            <div class="academic-content reveal">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 2rem;">
                    <div class="service-icon" style="margin: 0;"><i class="fas fa-book-open"></i></div>
                    <h2 class="section-title" style="margin: 0; text-align: left;">Welcome to Primary</h2>
                </div>
                
                <p style="font-size: 1.1rem; color: var(--text-main); margin-bottom: 1.5rem; line-height: 1.8;">
                    Important goals of our primary schools are to help children acquire essential life skills, social competence, and robust learning-related skills. Our curriculum is designed to stimulate intellectual curiosity and foster a growth mindset.
                </p>
                <p style="font-size: 1.1rem; color: var(--text-main); margin-bottom: 1.5rem; line-height: 1.8;">
                    We integrate core academic subjects—Mathematics, Science, Languages, and Social Studies—with practical, hands-on activities that make learning exciting and highly relevant to the modern world.
                </p>
                
                <div style="margin-top: 3rem;">
                    <h3 style="color: var(--primary); margin-bottom: 1.5rem; font-family: var(--font-display);">Key Highlights</h3>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 0.5rem;">
                        <div class="highlight-item"><i class="fas fa-check-circle"></i> Core Subject Mastery</div>
                        <div class="highlight-item"><i class="fas fa-check-circle"></i> Collaborative Projects</div>
                        <div class="highlight-item"><i class="fas fa-check-circle"></i> Value Education</div>
                        <div class="highlight-item"><i class="fas fa-check-circle"></i> Digital Literacy</div>
                    </div>
                </div>

                <!-- Academic Navigation -->
                <div style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid #e2e8f0;">
                    <h3 style="color: var(--primary); margin-bottom: 1.25rem; font-size: 1.1rem;">Explore Other Programs</h3>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.75rem;">
                        <a href="kindergarden.php" class="btn btn-outline" style="color: var(--primary); border-color: var(--primary); padding: 0.6rem 1.25rem; font-size: 0.85rem;">Kindergarden</a>
                        <a href="pre-primary.php" class="btn btn-outline" style="color: var(--primary); border-color: var(--primary); padding: 0.6rem 1.25rem; font-size: 0.85rem;">Pre-Primary</a>
                        <a href="highschool.php" class="btn btn-outline" style="color: var(--primary); border-color: var(--primary); padding: 0.6rem 1.25rem; font-size: 0.85rem;">High School</a>
                    </div>
                </div>

                <div style="margin-top: 2.5rem; text-align: center;">
                    <a href="admission.php" class="btn btn-primary">Apply for Admission</a>
                </div>
            </div>
        </div>
    </section>

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
                        <li style="display: flex; gap: 10px;"><i class="fas fa-phone-alt" style="margin-top: 5px; color: var(--secondary);"></i> <span><a href="tel:+916364669933">+91 636 466 9933</a></span></li>
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
