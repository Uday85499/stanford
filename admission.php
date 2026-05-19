<?php
// Admission - Stanford International School
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Apply for admission at Stanford International School, Bangalore. Join our community of excellence for 2026-27.">
    <title>Admission | Stanford International School</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/modern-styles.css">
    
    <style>
        .form-container {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(24px) saturate(200%);
            border: 1px solid rgba(255, 255, 255, 0.08);
            padding: 3rem;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-xl);
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }
        .form-group { margin-bottom: 1.5rem; }
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--primary);
            font-size: 0.95rem;
        }
        .form-control {
            width: 100%;
            padding: 0.9rem 1rem;
            border: 1.5px solid rgba(255, 255, 255, 0.15);
            border-radius: var(--radius-sm);
            font-family: var(--font-body);
            transition: var(--transition);
            font-size: 0.95rem;
            background: rgba(255, 255, 255, 0.05);
            color: white;
        }
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }
        .form-control:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(250, 204, 21, 0.15);
            background: rgba(255, 255, 255, 0.1);
        }
        select.form-control option {
            background: var(--bg-color);
            color: white;
        }
        .process-step {
            text-align: center;
            padding: 2rem 1.5rem;
        }
        .process-step .step-num {
            width: 56px; height: 56px;
            border-radius: 50%;
            background: var(--gradient-gold);
            color: var(--primary);
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto 1.25rem;
            font-weight: 800; font-size: 1.25rem;
            font-family: var(--font-display);
        }
        .process-step h3 { font-size: 1.15rem; margin-bottom: 0.5rem; }
        .process-step p { color: var(--text-muted); font-size: 0.95rem; }
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
                    <li><a href="kindergarden.php">Academics</a></li>
                    <li class="active"><a href="admission.php">Admission</a></li>
                    <li><a href="activities.php">Activities</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                </ul>
            </nav>
            <button class="mobile-menu-btn"><i class="fas fa-bars"></i></button>
        </div>
    </header>

    <div class="page-header" style="background-image: linear-gradient(rgba(10,22,40,0.85), rgba(10,22,40,0.85)), url('img/new-images/banner1.webp'); background-size: cover; background-position: center;">
        <div class="container reveal">
            <h1 class="hero-title">Admissions <span>Open</span></h1>
            <p class="hero-desc">Take the first step towards a brilliant future.</p>
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span class="separator">/</span>
                <span class="current">Admission</span>
            </div>
        </div>
    </div>

    <!-- Admission Process Steps -->
    <section class="section-padding" style="background: var(--bg-alt);">
        <div class="container">
            <h2 class="section-title reveal">Admission Process</h2>
            <p class="section-subtitle reveal">A simple, transparent admission process designed for your convenience.</p>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.5rem;" class="reveal">
                <div class="process-step">
                    <div class="step-num">1</div>
                    <h3>Enquiry</h3>
                    <p>Fill out the enquiry form below or visit our campus.</p>
                </div>
                <div class="process-step">
                    <div class="step-num">2</div>
                    <h3>Campus Tour</h3>
                    <p>Schedule a guided tour of our state-of-the-art facilities.</p>
                </div>
                <div class="process-step">
                    <div class="step-num">3</div>
                    <h3>Assessment</h3>
                    <p>Age-appropriate interaction to understand your child's readiness.</p>
                </div>
                <div class="process-step">
                    <div class="step-num">4</div>
                    <h3>Enrollment</h3>
                    <p>Complete the registration and welcome your child to Stanford.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Admission Form -->
    <section class="section-padding">
        <div class="container">
            <div class="form-container reveal">
                <h2 class="section-title">Admission Enquiry</h2>
                <p class="section-subtitle">Fill out the form below and our admission counselor will get back to you shortly.</p>
                
                <form action="enquiry_mail.php" method="POST">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                        <div class="form-group">
                            <label for="parent_name">Parent's Name *</label>
                            <input type="text" id="parent_name" name="parent_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="child_name">Child's Name *</label>
                            <input type="text" id="child_name" name="child_name" class="form-control" required>
                        </div>
                    </div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                        <div class="form-group">
                            <label for="phone">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="grade">Seeking Admission For Grade *</label>
                        <select id="grade" name="grade" class="form-control" required>
                            <option value="">Select Grade</option>
                            <option value="Kindergarden">Kindergarden</option>
                            <option value="Pre-primary">Pre-primary</option>
                            <option value="Primary">Primary</option>
                            <option value="High School">High School</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Additional Message / Query</label>
                        <textarea id="message" name="message" class="form-control" rows="4"></textarea>
                    </div>
                    <div style="text-align: center; margin-top: 2rem;">
                        <button type="submit" class="btn btn-primary" style="width: 100%; max-width: 300px;">Submit Enquiry</button>
                    </div>
                </form>
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
