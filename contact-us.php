<?php
// Contact Us - Stanford International School
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact Stanford International School in Bangalore — phone, email, address, and enquiry form.">
    <title>Contact Us | Stanford International School</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/modern-styles.css">
    
    <style>
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
        }
        .contact-info-card {
            background: var(--surface);
            padding: 2rem;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-md);
            margin-bottom: 1.25rem;
            display: flex;
            align-items: center;
            gap: 1.5rem;
            transition: var(--transition);
            border-left: 4px solid var(--accent);
        }
        .contact-info-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }
        .contact-icon {
            width: 56px; height: 56px;
            background: linear-gradient(135deg, rgba(37,99,235,0.08) 0%, rgba(37,99,235,0.15) 100%);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            color: var(--accent);
            font-size: 1.3rem;
            flex-shrink: 0;
        }
        .contact-form-wrap {
            background: white;
            padding: 2.5rem;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-lg);
        }
        .form-control {
            width: 100%;
            padding: 0.9rem 1rem;
            border: 1.5px solid #e2e8f0;
            border-radius: var(--radius-sm);
            font-family: var(--font-body);
            transition: var(--transition);
            margin-bottom: 1.25rem;
            font-size: 0.95rem;
            background: var(--bg-color);
        }
        .form-control:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
            background: white;
        }
        @media (max-width: 768px) {
            .contact-grid { grid-template-columns: 1fr; gap: 2.5rem; }
        }
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
                    <li><a href="admission.php">Admission</a></li>
                    <li><a href="activities.php">Activities</a></li>
                    <li class="active"><a href="contact-us.php">Contact Us</a></li>
                </ul>
            </nav>
            <button class="mobile-menu-btn"><i class="fas fa-bars"></i></button>
        </div>
    </header>

    <div class="page-header" style="background-image: linear-gradient(rgba(10,22,40,0.85), rgba(10,22,40,0.85)), url('img/new-images/banner2.webp'); background-size: cover; background-position: center;">
        <div class="container reveal">
            <h1 class="hero-title">Contact <span>Us</span></h1>
            <p class="hero-desc">We would love to hear from you. Get in touch with us today.</p>
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span class="separator">/</span>
                <span class="current">Contact Us</span>
            </div>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="contact-grid">
                <div class="reveal">
                    <h2 class="section-title" style="text-align: left; font-size: 2rem;">Get In Touch</h2>
                    <p style="margin-bottom: 2rem; color: var(--text-muted); line-height: 1.8;">Have any questions or need more information? Feel free to reach out to us using the contact details below.</p>
                    
                    <div class="contact-info-card">
                        <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h3 style="margin-bottom: 0.25rem; font-size: 1.05rem;">Address</h3>
                            <p style="color: var(--text-muted); margin: 0; font-size: 0.95rem;">#11, Gajanana Nagara, Hegganahalli,<br>Bangalore - 560 091</p>
                        </div>
                    </div>

                    <div class="contact-info-card">
                        <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
                        <div>
                            <h3 style="margin-bottom: 0.25rem; font-size: 1.05rem;">Phone Number</h3>
                            <p style="color: var(--text-muted); margin: 0; font-size: 0.95rem;"><a href="tel:+916364669933">+91 636 466 9933</a><br><a href="tel:+916364669911">+91 636 466 9911</a></p>
                        </div>
                    </div>

                    <div class="contact-info-card">
                        <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <h3 style="margin-bottom: 0.25rem; font-size: 1.05rem;">Email Address</h3>
                            <p style="color: var(--text-muted); margin: 0; font-size: 0.95rem;"><a href="mailto:admin.stanfordschool@gmail.com">admin.stanfordschool@gmail.com</a></p>
                        </div>
                    </div>

                    <div class="contact-info-card">
                        <div class="contact-icon"><i class="fas fa-clock"></i></div>
                        <div>
                            <h3 style="margin-bottom: 0.25rem; font-size: 1.05rem;">Working Hours</h3>
                            <p style="color: var(--text-muted); margin: 0; font-size: 0.95rem;">Mon – Sat: 8:00 AM – 4:00 PM</p>
                        </div>
                    </div>
                </div>

                <div class="reveal contact-form-wrap" style="transition-delay: 0.2s;">
                    <h2 style="margin-bottom: 0.5rem; color: var(--primary); font-family: var(--font-display); font-size: 1.75rem;">Send a Message</h2>
                    <p style="color: var(--text-muted); margin-bottom: 2rem; font-size: 0.95rem;">We'll get back to you within 24 hours.</p>
                    <form action="enquiry_mail.php" method="POST">
                        <input type="text" name="name" placeholder="Your Name *" class="form-control" required>
                        <input type="email" name="email" placeholder="Your Email *" class="form-control" required>
                        <input type="tel" name="phone" placeholder="Your Phone *" class="form-control" required>
                        <textarea name="message" placeholder="Your Message" class="form-control" rows="5"></textarea>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                    </form>
                </div>
            </div>
            
            <div class="reveal" style="margin-top: 4rem; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg);">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15551.487140735748!2d77.502931!3d12.980068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDU4JzQ4LjIiTiA3N8KwMzAnMTAuNiJF!5e0!3m2!1sen!2sin!4v1611234567890!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
