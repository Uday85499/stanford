<?php
// Optional: Keep any PHP logic at the top if needed.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="High School Program at Stanford International School">
    <title>High School | Stanford International School</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/modern-styles.css">
    
    <style>
        .page-header {
            background: linear-gradient(rgba(15,23,42,0.8), rgba(15,23,42,0.8)), url('img/new-images/new-banner.webp') center/cover;
            padding: 12rem 0 6rem 0;
            text-align: center;
            color: white;
        }
        .academic-content {
            background: var(--surface);
            padding: 3rem;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-md);
            margin-top: -4rem;
            position: relative;
            z-index: 10;
        }
    </style>
</head>
<body style="background: var(--bg-color);">

    <!-- Header / Navbar -->
    <header class="modern-header glass">
        <div class="container nav-container">
            <a href="index.php" class="logo">
                <img src="img/new-images/new-logo1.webp" alt="Stanford International School">
            </a>
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

    <div class="page-header">
        <div class="container reveal">
            <h1 class="hero-title">High School <span>Program</span></h1>
            <p class="hero-desc">Preparing students for higher education and global challenges.</p>
        </div>
    </div>

    <section class="section-padding" style="padding-top: 0;">
        <div class="container">
            <div class="academic-content reveal">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 2rem;">
                    <div class="service-icon" style="margin: 0;"><i class="fas fa-graduation-cap"></i></div>
                    <h2 class="section-title" style="margin: 0; text-align: left;">Welcome to High School</h2>
                </div>
                
                <p style="font-size: 1.1rem; color: var(--text-main); margin-bottom: 1.5rem; line-height: 1.8;">
                    Our High School program focuses on academic rigor, critical thinking, and character building. We help ensure that each student leaves our school with worthwhile qualifications, strong leadership traits, and essential life skills.
                </p>
                <p style="font-size: 1.1rem; color: var(--text-main); margin-bottom: 1.5rem; line-height: 1.8;">
                    With dedicated guidance counseling and a broad range of subjects, our students are well-prepared for university and their future careers. We emphasize hands-on learning, technological proficiency, and global awareness.
                </p>
                
                <div style="margin-top: 3rem;">
                    <h3 style="color: var(--primary); margin-bottom: 1.5rem;">Key Highlights</h3>
                    <ul style="list-style: none; padding: 0; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem;">
                        <li style="display: flex; gap: 10px; align-items: center; color: var(--text-muted);"><i class="fas fa-check-circle" style="color: var(--secondary);"></i> Advanced Academics</li>
                        <li style="display: flex; gap: 10px; align-items: center; color: var(--text-muted);"><i class="fas fa-check-circle" style="color: var(--secondary);"></i> Career Counseling</li>
                        <li style="display: flex; gap: 10px; align-items: center; color: var(--text-muted);"><i class="fas fa-check-circle" style="color: var(--secondary);"></i> Leadership Programs</li>
                        <li style="display: flex; gap: 10px; align-items: center; color: var(--text-muted);"><i class="fas fa-check-circle" style="color: var(--secondary);"></i> Modern Laboratories</li>
                    </ul>
                </div>

                <div style="margin-top: 3rem; text-align: center;">
                    <a href="admission.php" class="btn btn-primary">Apply for Admission</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="modern-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <img src="img/new-images/new-logo1.webp" alt="Logo" style="height: 60px; margin-bottom: 1.5rem; background: white; padding: 0.5rem; border-radius: var(--radius-sm);">
                    <p style="margin-bottom: 1.5rem; line-height: 1.8;">Stanford International School is a leading educational institution in Bangalore committed to delivering academic excellence and holistic development.</p>
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
        <a href="https://wa.me/916364669933" target="_blank" class="fab fab-whatsapp"><i class="fas fa-comment-dots"></i></a>
        <a href="tel:+916364669933" class="fab fab-phone"><i class="fas fa-phone-volume"></i></a>
    </div>

    <script src="js/modern-script.js"></script>
</body>
</html>
