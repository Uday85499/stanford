<?php
// Optional: Keep any PHP logic at the top if needed.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Stanford International School offers world-class education, experienced faculty, modern facilities and holistic development for students in Bangalore.">
    <title>Best International School in Bangalore | Stanford International School</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.webp">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Modern CSS -->
    <link rel="stylesheet" href="css/modern-styles.css">
    
    <!-- SEO & Social Meta -->
    <meta property="og:title" content="Top International School in Bangalore | Stanford International School">
    <meta property="og:description" content="Discover Stanford International School, one of Bangalore’s leading schools offering academic excellence, smart learning and holistic education.">
    <meta property="og:image" content="https://www.stanfordtechnoschool.com/img/new-images/new-logo1.webp">
    <meta property="og:type" content="website">
</head>
<body>

    <!-- Header / Navbar -->
    <header class="modern-header">
        <div class="container nav-container">
            <a href="index.php" class="logo">
                <img src="img/new-images/new-logo1.webp" alt="Stanford International School">
            </a>
            <nav>
                <ul class="nav-links">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li class="has-dropdown">
                        <a href="about-us.php">About Us <i class="fas fa-chevron-down" style="font-size: 0.7rem; margin-left: 3px;"></i></a>
                        <ul class="dropdown">
                            <li><a href="about-us.php">Our Legacy</a></li>
                            <li><a href="chairman-desk.php">Chairman's Desk</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <a href="kindergarden.php">Academics <i class="fas fa-chevron-down" style="font-size: 0.7rem; margin-left: 3px;"></i></a>
                        <ul class="dropdown">
                            <li><a href="kindergarden.php">Kindergarten</a></li>
                            <li><a href="pre-primary.php">Pre-Primary</a></li>
                            <li><a href="primary.php">Primary</a></li>
                        </ul>
                    </li>
                    <li><a href="admission.php">Admissions</a></li>
                    <li><a href="activities.php">Activities</a></li>
                    <li><a href="contact-us.php">Contact</a></li>
                    <li class="nav-cta"><a href="admission.php" class="btn btn-primary" style="padding: 0.6rem 1.75rem; font-size: 0.85rem;">Apply Now</a></li>
                </ul>
            </nav>
            <button class="mobile-menu-btn"><i class="fas fa-bars"></i></button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-slider">
            <div class="slide" style="background-image: url('img/new-images/new-banner.webp');"></div>
            <div class="slide" style="background-image: url('img/new-images/banner1.webp');"></div>
            <div class="slide" style="background-image: url('img/new-images/banner2.webp');"></div>
        </div>
        <div class="hero-content reveal">
            <div class="hero-badge" style="border-color: rgba(212,166,79,0.5); color: #FFF; background: rgba(0,0,0,0.3);">A Legacy of Excellence</div>
            <h1 class="hero-title">Shaping Future Leaders With <span style="color: var(--secondary-light);">30 Years</span> of Educational Excellence</h1>
            <p class="hero-desc">Empowering young minds for a global future. Where academic excellence meets character development in a world-class environment.</p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="admission.php" class="btn btn-primary">Begin Your Journey</a>
                <a href="about-us.php" class="btn btn-outline" style="border-color: rgba(255,255,255,0.4);">Discover Our Legacy</a>
            </div>
            
            <!-- Trust Indicators -->
            <div class="trust-indicators reveal">
                <div class="trust-item">
                    <i class="fas fa-award"></i> 30+ Years Experience
                </div>
                <div class="trust-item">
                    <i class="fas fa-globe"></i> International Curriculum
                </div>
                <div class="trust-item">
                    <i class="fas fa-user-graduate"></i> 5000+ Alumni
                </div>
            </div>
        </div>
    </section>

    <!-- Academic Excellence Section -->
    <div class="container" style="position: relative; z-index: 40; margin-top: -4rem;">
        <!-- Background blob for glassmorphism -->
        <div style="position: absolute; top: 10%; left: 50%; transform: translateX(-50%); width: 80%; height: 80%; background: linear-gradient(135deg, var(--secondary-light) 0%, var(--primary-light) 100%); filter: blur(80px); opacity: 0.15; z-index: 0; border-radius: 50%;"></div>
        <div class="services-grid reveal">
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-child"></i></div>
                <h3>Kindergarten</h3>
                <p>Joyful discovery and foundational skills in a nurturing, safe environment.</p>
                <a href="kindergarden.php" class="read-more">Explore Program <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card alt-card">
                <div class="service-icon"><i class="fas fa-shapes"></i></div>
                <h3>Pre-Primary</h3>
                <p>Building cognitive and social skills through engaging, play-based methodologies.</p>
                <a href="pre-primary.php" class="read-more">Explore Program <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-book-open"></i></div>
                <h3>Primary</h3>
                <p>Fostering critical thinking and global awareness for the leaders of tomorrow.</p>
                <a href="primary.php" class="read-more">Explore Program <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>

    <!-- Storytelling About Section -->
    <section class="section-padding about-section">
        <div class="container">
            <div class="about-grid">
                <div class="about-image reveal">
                    <img src="img/new-images/1.webp" alt="Stanford Students" style="border-radius: var(--radius-lg); position: relative; z-index: 2;">
                    <img src="img/new-images/banner1.webp" alt="Campus Facilities" class="about-image-layered">
                    <div class="about-experience">
                        <h3 style="color: var(--secondary-light);">30+</h3>
                        <p>Years of<br>Excellence</p>
                    </div>
                </div>
                <div class="about-content reveal" style="transition-delay: 0.2s;">
                    <div class="hero-badge" style="color: var(--primary); background: rgba(6, 78, 59, 0.08); border-color: rgba(6, 78, 59, 0.15);">Our Legacy</div>
                    <h2 class="section-title" style="text-align: left; margin-top: 1rem;">A Tradition of Academic Prestige</h2>
                    <p style="margin-bottom: 1.5rem; font-size: 1.15rem; color: var(--text-muted); line-height: 1.8;">
                        For over three decades, Stanford International School has stood as a beacon of educational excellence. Recognized by the Government of Karnataka, we seamlessly blend international academic standards with strong foundational values.
                    </p>
                    <p style="margin-bottom: 2.5rem; font-size: 1.15rem; color: var(--text-muted); line-height: 1.8;">
                        Our mission is not just to educate, but to inspire. We foster an elite, future-ready environment where students are empowered to innovate, lead, and excel on the global stage.
                    </p>
                    <a href="about-us.php" class="btn btn-primary">Discover Our Philosophy</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Campus Experience (New Section) -->
    <section class="section-padding" style="background: var(--bg-alt); position: relative;">
        <div class="container">
            <h2 class="section-title reveal">World-Class Campus Experience</h2>
            <p class="section-subtitle reveal">Explore our state-of-the-art infrastructure designed to facilitate modern learning, innovation, and holistic development.</p>
            
            <div class="activities-grid reveal">
                <div class="activity-card">
                    <img src="img/new-images/chess-img.webp" alt="Smart Classrooms"> <!-- Placeholder img -->
                    <div class="activity-overlay">
                        <h3>Smart Classrooms</h3>
                        <p style="font-size: 0.95rem; opacity: 0.9; margin-top: 0.5rem; font-weight: 300;">Interactive digital learning environments.</p>
                    </div>
                </div>
                <div class="activity-card">
                    <img src="img/new-images/robotics-img.webp" alt="STEM Labs">
                    <div class="activity-overlay">
                        <h3>Advanced STEM Labs</h3>
                        <p style="font-size: 0.95rem; opacity: 0.9; margin-top: 0.5rem; font-weight: 300;">Hands-on scientific exploration and robotics.</p>
                    </div>
                </div>
                <div class="activity-card">
                    <img src="img/new-images/martial-arts-img.webp" alt="Sports Facilities">
                    <div class="activity-overlay">
                        <h3>Premium Sports Complex</h3>
                        <p style="font-size: 0.95rem; opacity: 0.9; margin-top: 0.5rem; font-weight: 300;">Olympic-standard courts and coaching.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Activities & Innovation Section -->
    <section class="section-padding" style="background: var(--bg-color);">
        <div class="container">
            <h2 class="section-title reveal">Beyond the Classroom</h2>
            <p class="section-subtitle reveal">Cultivating leadership, creativity, and global awareness through our elite extracurricular programs.</p>
            
            <div class="activities-grid reveal">
                <div class="activity-card">
                    <img src="img/new-images/robotics-img.webp" alt="Robotics">
                    <div class="activity-overlay">
                        <h3>Robotics & Innovation</h3>
                    </div>
                </div>
                <div class="activity-card">
                    <img src="img/new-images/classical-dance-img.webp" alt="Performing Arts">
                    <div class="activity-overlay">
                        <h3>Performing Arts</h3>
                    </div>
                </div>
                <div class="activity-card">
                    <img src="img/new-images/chess-img.webp" alt="Leadership">
                    <div class="activity-overlay">
                        <h3>Leadership & Strategy</h3>
                    </div>
                </div>
                <div class="activity-card">
                    <img src="img/new-images/martial-arts-img.webp" alt="Sports Excellence">
                    <div class="activity-overlay">
                        <h3>Sports Excellence</h3>
                    </div>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 4rem;" class="reveal">
                <a href="activities.php" class="btn btn-outline" style="color: var(--primary); border-color: rgba(13,27,76,0.3);">Explore All Activities</a>
            </div>
        </div>
    </section>

    <!-- Achievements Band -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid reveal">
                <div class="stat-item">
                    <h2><span class="counter-val" data-target="100">0</span>%</h2>
                    <p>Board Result Success</p>
                </div>
                <div class="stat-item">
                    <h2><span class="counter-val" data-target="5000">0</span>+</h2>
                    <p>Global Alumni</p>
                </div>
                <div class="stat-item">
                    <h2><span class="counter-val" data-target="50">0</span>+</h2>
                    <p>University Placements</p>
                </div>
                <div class="stat-item">
                    <h2><span class="counter-val" data-target="30">0</span>+</h2>
                    <p>Years of Legacy</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Luxury Testimonials -->
    <section class="section-padding" style="background: var(--bg-alt);">
        <div class="container">
            <h2 class="section-title reveal">A Legacy of Trust</h2>
            <p class="section-subtitle reveal">Hear from the parents who have chosen Stanford International School to shape their children's futures.</p>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2.5rem;" class="reveal">
                <div class="testimonial-card">
                    <i class="fas fa-quote-left quote-icon" style="color: var(--secondary); opacity: 0.15; font-size: 4rem; position: absolute; top: 1rem; right: 1.5rem;"></i>
                    <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                        <img src="img/new-images/1.webp" alt="Parent" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; border: 2px solid var(--secondary-light); box-shadow: var(--shadow-sm);">
                        <div>
                            <h4 style="font-size: 1.1rem; margin-bottom: 0.2rem;">Mr. Ram Kumar</h4>
                            <p style="margin: 0; font-size: 0.85rem; color: var(--text-muted); font-style: normal; font-family: var(--font-body);">Parent of Grade 8 Student</p>
                        </div>
                    </div>
                    <p style="font-size: 1.05rem;">"Stanford International School provides an unparalleled academic environment. The infrastructure and faculty are world-class, ensuring my child is prepared for global challenges."</p>
                </div>
                <div class="testimonial-card">
                    <i class="fas fa-quote-left quote-icon" style="color: var(--secondary); opacity: 0.15; font-size: 4rem; position: absolute; top: 1rem; right: 1.5rem;"></i>
                    <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                        <img src="img/new-images/1.webp" alt="Parent" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; border: 2px solid var(--secondary-light); box-shadow: var(--shadow-sm);">
                        <div>
                            <h4 style="font-size: 1.1rem; margin-bottom: 0.2rem;">Mr. Dhanraj</h4>
                            <p style="margin: 0; font-size: 0.85rem; color: var(--text-muted); font-style: normal; font-family: var(--font-body);">Parent of Grade 10 Student</p>
                        </div>
                    </div>
                    <p style="font-size: 1.05rem;">"The meticulous attention to both academic rigor and holistic development is outstanding. The leadership programs have truly transformed my daughter's confidence."</p>
                </div>
                <div class="testimonial-card">
                    <i class="fas fa-quote-left quote-icon" style="color: var(--secondary); opacity: 0.15; font-size: 4rem; position: absolute; top: 1rem; right: 1.5rem;"></i>
                    <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                        <img src="img/new-images/1.webp" alt="Parent" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; border: 2px solid var(--secondary-light); box-shadow: var(--shadow-sm);">
                        <div>
                            <h4 style="font-size: 1.1rem; margin-bottom: 0.2rem;">Mrs. Anitha</h4>
                            <p style="margin: 0; font-size: 0.85rem; color: var(--text-muted); font-style: normal; font-family: var(--font-body);">Parent of Grade 5 Student</p>
                        </div>
                    </div>
                    <p style="font-size: 1.05rem;">"An institution of true prestige. The dedication of the faculty and the exposure to international methodologies makes Stanford the best choice in Bangalore."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Admissions CTA -->
    <section class="cta-section">
        <div class="container reveal" style="position: relative; z-index: 2;">
            <div class="hero-badge" style="margin-bottom: 1.5rem; background: rgba(0,0,0,0.2); border-color: rgba(255,255,255,0.2); color: white;">Admissions 2026-27</div>
            <h2 style="font-size: 3.2rem; margin-bottom: 1.5rem;">Begin Your Child's Journey Toward Excellence</h2>
            <p style="font-size: 1.25rem;">Join a prestigious community dedicated to nurturing the innovators, leaders, and thinkers of tomorrow.</p>
            <a href="admission.php" class="btn btn-primary" style="padding: 1.1rem 3.5rem; font-size: 1.05rem; margin-top: 1.5rem;">Apply for Admission</a>
        </div>
    </section>

    <!-- Luxury Footer -->
    <footer class="modern-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col" style="grid-column: span 2;">
                    <img src="img/new-images/new-logo1.webp" alt="Logo" style="height: 70px; margin-bottom: 1.5rem; background: white; padding: 0.75rem; border-radius: var(--radius-md);">
                    <p style="margin-bottom: 1.5rem; line-height: 1.8; color: rgba(255,255,255,0.85); max-width: 90%;">A premier educational institution dedicated to cultivating academic brilliance, character, and global leadership for over 30 years.</p>
                    <div style="margin-bottom: 2rem;">
                        <h4 style="color: white; font-family: var(--font-body); font-size: 0.95rem; margin-bottom: 0.75rem; font-weight: 600;">Accreditations</h4>
                        <div style="display: flex; gap: 1rem;">
                            <div style="background: rgba(255,255,255,0.1); padding: 0.5rem 1rem; border-radius: 4px; font-size: 0.8rem; border: 1px solid rgba(255,255,255,0.2);">Govt. of Karnataka</div>
                            <div style="background: rgba(255,255,255,0.1); padding: 0.5rem 1rem; border-radius: 4px; font-size: 0.8rem; border: 1px solid rgba(255,255,255,0.2);">ISO 9001:2015</div>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Institution</h3>
                    <ul class="footer-links">
                        <li><a href="about-us.php">Our Legacy</a></li>
                        <li><a href="chairman-desk.php">Chairman's Vision</a></li>
                        <li><a href="kindergarden.php">Academic Excellence</a></li>
                        <li><a href="admission.php">Admissions</a></li>
                        <li><a href="activities.php">Student Life</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contact Admission</h3>
                    <ul class="footer-links">
                        <li style="display: flex; gap: 12px;"><i class="fas fa-phone-alt" style="margin-top: 5px; color: var(--secondary);"></i> <span><a href="tel:+916364669933">+91 636 466 9933</a><br><a href="tel:+916364669911">+91 636 466 9911</a></span></li>
                        <li style="display: flex; gap: 12px; margin-top: 1.25rem;"><i class="fas fa-envelope" style="margin-top: 5px; color: var(--secondary);"></i> <a href="mailto:admin.stanfordschool@gmail.com">admin.stanfordschool@gmail.com</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Campus & Newsletter</h3>
                    <div style="display: flex; gap: 12px; margin-bottom: 1.5rem;">
                        <i class="fas fa-map-marker-alt" style="margin-top: 5px; color: var(--secondary);"></i>
                        <p style="line-height: 1.8; color: rgba(255,255,255,0.85);">#11, Gajanana Nagara,<br>Hegganahalli,<br>Bangalore - 560 091</p>
                    </div>
                    <form style="display: flex; flex-direction: column; gap: 0.5rem;">
                        <input type="email" placeholder="Email Address" style="padding: 0.75rem 1rem; border-radius: var(--radius-sm); border: none; background: rgba(255,255,255,0.1); color: white; outline: none; font-family: var(--font-body);">
                        <button type="button" class="btn btn-primary" style="padding: 0.75rem 1rem; border-radius: var(--radius-sm); font-size: 0.85rem; width: 100%;">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Stanford International School. All Rights Reserved. | <span style="opacity: 0.6;">Designed for Excellence</span></p>
        </div>
    </footer>

    <!-- Floating Actions -->
    <div class="fab-container">
        <a href="https://wa.me/916364669933" target="_blank" class="fab fab-whatsapp" aria-label="WhatsApp"><i class="fab fa-whatsapp" style="font-size: 1.75rem;"></i></a>
        <a href="tel:+916364669933" class="fab fab-phone" aria-label="Call Us"><i class="fas fa-phone-volume"></i></a>
    </div>

    <!-- Scroll to Top -->
    <button class="scroll-top" aria-label="Scroll to top"><i class="fas fa-chevron-up"></i></button>

    <!-- Scripts -->
    <script src="js/modern-script.js"></script>
</body>
</html>
