<?php
// Activities - Stanford International School
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore the dynamic extracurricular activities at Stanford International School — Chess, Robotics, Dance, Yoga, and more.">
    <title>Activities | Stanford International School</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/modern-styles.css">
</head>
<body>

    <header class="modern-header glass">
        <div class="container nav-container">
            <a href="index.php" class="logo"><img src="img/new-images/new-logo1.webp" alt="Stanford International School"></a>
            <nav>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="kindergarden.php">Academics</a></li>
                    <li><a href="admission.php">Admission</a></li>
                    <li class="active"><a href="activities.php">Activities</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                </ul>
            </nav>
            <button class="mobile-menu-btn"><i class="fas fa-bars"></i></button>
        </div>
    </header>

    <div class="page-header" style="background-image: linear-gradient(rgba(10,22,40,0.85), rgba(10,22,40,0.85)), url('img/new-images/banner1.webp'); background-size: cover; background-position: center;">
        <div class="container reveal">
            <h1 class="hero-title">Our <span>Activities</span></h1>
            <p class="hero-desc">Fostering holistic development through engaging extracurriculars.</p>
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span class="separator">/</span>
                <span class="current">Activities</span>
            </div>
        </div>
    </div>

    <!-- Activities Intro -->
    <section class="section-padding" style="background: var(--bg-alt);">
        <div class="container" style="text-align: center;">
            <h2 class="section-title reveal">Beyond the Classroom</h2>
            <p class="section-subtitle reveal">We believe education extends far beyond textbooks. Our diverse range of activities builds confidence, creativity, and character in every student.</p>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-top: 2rem;" class="reveal">
                <div style="text-align: center;">
                    <div style="font-size: 2.5rem; color: var(--accent); margin-bottom: 0.5rem;"><i class="fas fa-brain"></i></div>
                    <h3 style="font-size: 1.1rem;">Cognitive Skills</h3>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 2.5rem; color: var(--accent); margin-bottom: 0.5rem;"><i class="fas fa-running"></i></div>
                    <h3 style="font-size: 1.1rem;">Physical Fitness</h3>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 2.5rem; color: var(--accent); margin-bottom: 0.5rem;"><i class="fas fa-palette"></i></div>
                    <h3 style="font-size: 1.1rem;">Creative Arts</h3>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 2.5rem; color: var(--accent); margin-bottom: 0.5rem;"><i class="fas fa-om"></i></div>
                    <h3 style="font-size: 1.1rem;">Mindfulness</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Activities Grid -->
    <section class="section-padding">
        <div class="container">
            <div class="activities-grid reveal">
                <div class="activity-card">
                    <img src="img/new-images/chess-img.webp" alt="Chess">
                    <div class="activity-overlay">
                        <h3>Chess</h3>
                        <p style="margin-top: 0.5rem; opacity: 0.9; font-size: 0.9rem;">Enhancing strategic thinking and concentration.</p>
                    </div>
                </div>
                <div class="activity-card">
                    <img src="img/new-images/robotics-img.webp" alt="Robotics">
                    <div class="activity-overlay">
                        <h3>Robotics</h3>
                        <p style="margin-top: 0.5rem; opacity: 0.9; font-size: 0.9rem;">Building innovation and problem-solving skills.</p>
                    </div>
                </div>
                <div class="activity-card">
                    <img src="img/new-images/martial-arts-img.webp" alt="Martial Arts">
                    <div class="activity-overlay">
                        <h3>Martial Arts</h3>
                        <p style="margin-top: 0.5rem; opacity: 0.9; font-size: 0.9rem;">Instilling discipline, focus, and physical fitness.</p>
                    </div>
                </div>
                <div class="activity-card">
                    <img src="img/new-images/hip-hop-dance-img.webp" alt="Hip Hop Dance">
                    <div class="activity-overlay">
                        <h3>Hip Hop Dance</h3>
                        <p style="margin-top: 0.5rem; opacity: 0.9; font-size: 0.9rem;">Promoting rhythm, coordination, and expression.</p>
                    </div>
                </div>
                <div class="activity-card">
                    <img src="img/new-images/classical-dance-img.webp" alt="Classical Dance">
                    <div class="activity-overlay">
                        <h3>Classical Dance</h3>
                        <p style="margin-top: 0.5rem; opacity: 0.9; font-size: 0.9rem;">Preserving culture and enhancing grace.</p>
                    </div>
                </div>
                <div class="activity-card">
                    <img src="img/new-images/abacus-img.webp" alt="Abacus">
                    <div class="activity-overlay">
                        <h3>Abacus</h3>
                        <p style="margin-top: 0.5rem; opacity: 0.9; font-size: 0.9rem;">Improving mental math and cognitive abilities.</p>
                    </div>
                </div>
                <div class="activity-card">
                    <img src="img/new-images/yoga-img.webp" alt="Yoga">
                    <div class="activity-overlay">
                        <h3>Yoga</h3>
                        <p style="margin-top: 0.5rem; opacity: 0.9; font-size: 0.9rem;">Ensuring mental peace and physical flexibility.</p>
                    </div>
                </div>
                <div class="activity-card">
                    <img src="img/new-images/holistic-development-img.webp" alt="Holistic Development">
                    <div class="activity-overlay">
                        <h3>Holistic Development</h3>
                        <p style="margin-top: 0.5rem; opacity: 0.9; font-size: 0.9rem;">Comprehensive growth of mind, body, and spirit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container reveal" style="position: relative; z-index: 2;">
            <h2>Want Your Child to Explore More?</h2>
            <p>Enroll at Stanford International School and discover a world of opportunities.</p>
            <a href="admission.php" class="btn btn-primary">Apply for Admission</a>
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
