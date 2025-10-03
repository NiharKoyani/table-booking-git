<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Restaurant | Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./css/universal.css">
    <style>

        body {
            background-color: #f9f9f9;
            color: var(--text);
            line-height: 1.6;
        }
        

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section */
        .contact-hero {
            background: linear-gradient(rgba(44, 62, 80, 0.8), rgba(44, 62, 80, 0.8)), url('https://images.unsplash.com/photo-1554118811-1e0d58224f24?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1147&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
            animation: fadeIn 1s ease;
        }

        .contact-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .contact-hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
            opacity: 0.9;
        }

        .btn {
            display: inline-block;
            background: var(--accent);
            color: white;
            padding: 12px 30px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            background: #d35400;
        }

        /* Contact Section */
        .contact-section {
            padding: 100px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary);
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--accent);
        }

        .contact-container {
            display: flex;
            gap: 50px;
            align-items: flex-start;
        }

        .contact-form {
            flex: 1;
            background: white;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            animation: slideInLeft 0.8s ease;
        }

        .form-title {
            margin-bottom: 30px;
            font-size: 1.8rem;
            color: var(--primary);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--secondary);
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border-radius: 4px;
            border: 1px solid #ddd;
            background: white;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 2px rgba(230, 126, 34, 0.2);
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .form-submit {
            text-align: center;
            margin-top: 20px;
        }

        .contact-info {
            flex: 1;
            animation: slideInRight 0.8s ease;
        }

        .info-card {
            background: white;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .info-card h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--primary);
            display: flex;
            align-items: center;
        }

        .info-card h3 i {
            margin-right: 10px;
            color: var(--accent);
        }

        .info-card p {
            margin-bottom: 15px;
            color: var(--text-light);
            display: flex;
            align-items: flex-start;
        }

        .info-card p i {
            margin-right: 10px;
            color: var(--accent);
            margin-top: 4px;
        }

        .hours-list {
            list-style: none;
        }

        .hours-list li {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }

        .hours-list li:last-child {
            border-bottom: none;
        }

        .hours-list .day {
            font-weight: 500;
        }

        .hours-list .time {
            color: var(--text-light);
        }

        /* Map Section */
        .map-section {
            padding: 0 0 100px;
        }

        .map-container {
            height: 400px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .map-placeholder {
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .map-placeholder i {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .map-placeholder h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        /* FAQ Section */
        .faq-section {
            padding: 100px 0;
            background-color: #f5f7fa;
        }

        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            background: white;
            border-radius: 8px;
            margin-bottom: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .faq-question {
            padding: 20px;
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--primary);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background 0.3s;
        }

        .faq-question:hover {
            background: #f9f9f9;
        }

        .faq-question i {
            color: var(--accent);
            transition: transform 0.3s;
        }

        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
            color: var(--text-light);
        }

        .faq-item.active .faq-answer {
            padding: 0 20px 20px;
            max-height: 500px;
        }

        .faq-item.active .faq-question i {
            transform: rotate(180deg);
        }

        /* Confirmation Message */
        .confirmation {
            display: none;
            text-align: center;
            padding: 60px 40px;
            background: white;
            border-radius: 8px;
            margin: 50px auto;
            max-width: 700px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            animation: fadeInUp 0.8s ease;
        }

        .confirmation i {
            font-size: 4rem;
            color: var(--success);
            margin-bottom: 20px;
        }

        .confirmation h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--primary);
        }

        .confirmation p {
            margin-bottom: 15px;
            color: var(--text-light);
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                text-align: center;
            }
            
            nav ul {
                margin-top: 20px;
                justify-content: center;
            }
            
            nav ul li {
                margin: 0 10px;
            }
            
            .contact-hero h1 {
                font-size: 2.5rem;
            }
            
            .contact-container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="page">
    <section class="contact-hero">
        <div class="container">
            <h1>Get In Touch</h1>
            <p>We'd love to hear from you. Reach out with any questions, feedback, or reservation inquiries.</p>
            <a href="#contact-form" class="btn">Send Us a Message</a>
        </div>
    </section>

    <section class="contact-section">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
            </div>
            <div class="contact-container">
                <div class="contact-form" id="contact-form">
                    <h3 class="form-title">Send Us a Message</h3>
                    <form action="./server/inq.php" method="post" id="contactForm">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number (Optional)</label>
                            <input
                              type="tel"
                              id="phone"
                              name="phone"
                              class="form-control"
                              placeholder="+91 9876543210"
                              pattern="^\+91[6-9]\d{9}$"
                              title="Enter a valid Indian phone number with country code, e.g. +91 9876543210"
                            >
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <select id="subject" name="subject" class="form-control" required>
                                <option value="" disabled selected>Select a subject</option>
                                <option value="reservation">Reservation Inquiry</option>
                                <option value="feedback">Feedback</option>
                                <option value="event">Private Event</option>
                                <option value="careers">Careers</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" class="form-control" placeholder="How can we help you?" required></textarea>
                        </div>
                        <div class="form-submit">
                            <button type="submit" class="btn">Send Message</button>
                        </div>
                    </form>
                </div>
                
                <div class="contact-info">
                    <div class="info-card">
                        <h3><i class="fas fa-map-marker-alt"></i> Our Location</h3>
                        <p><i class="fas fa-location-dot"></i> ROYAL restaurant , Palace Road, Jamnagar, Gujarat - 361008</p>
                        <p><i class="fas fa-phone"></i> (555) 123-4567</p>
                        <p><i class="fas fa-envelope"></i> royal_info@123.com</p>
                    </div>
                    
                    <div class="info-card">
                        <h3><i class="fas fa-clock"></i> Opening Hours</h3>
                        <ul class="hours-list">
                            <li>
                                <span class="day">Monday - Thursday</span>
                                <span class="time">11:00 AM - 10:00 PM</span>
                            </li>
                            <li>
                                <span class="day">Friday - Saturday</span>
                                <span class="time">11:00 AM - 11:00 PM</span>
                            </li>
                            <li>
                                <span class="day">Sunday</span>
                                <span class="time">10:00 AM - 9:00 PM</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="info-card">
                        <h3><i class="fas fa-concierge-bell"></i> Additional Info</h3>
                        <p>For large party reservations (8+ people), please call us directly.</p>
                        <p>We offer private dining options for special events and celebrations.</p>
                        <p>Complimentary valet parking available Thursday-Saturday evenings.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map-section">
        <div class="container">
            <div class="map-container">
                <div class="map-placeholder">
                    <i class="fas fa-map"></i>
                    <h3>Our Location</h3>
                    <p>ROYAL restaurant , Palace Road, Jamnagar, Gujarat - 361008</p>
                    <a href="https://maps.app.goo.gl/wErA7YULqZQWueNc6" target="_blank" class="btn" style="margin-top: 20px;">Get Directions</a>
                </div>
            </div>
        </div>
    </section>

    <!-- F. A. Q -->
    <section class="faq-section">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        Do you accommodate dietary restrictions?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Yes, we happily accommodate various dietary restrictions including gluten-free, vegetarian, and vegan options. Please inform us of any allergies or dietary needs when making your reservation, and our chefs will prepare suitable alternatives.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        What is your cancellation policy?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        We require 24 hours notice for cancellation of reservations. For parties of 6 or more, we require 48 hours notice. Late cancellations may be subject to a fee.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        Do you offer private dining?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Yes, we have a private dining room that can accommodate up to 30 guests for special events, business dinners, or celebrations. Please contact our events team for more information and availability.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        Is there a dress code?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        We maintain a business casual dress code. We kindly ask guests to avoid wearing athletic wear, beach attire, or excessively casual clothing.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        Do you offer gift certificates?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Yes, we offer gift certificates in various denominations that can be purchased in-restaurant or by phone. They make perfect gifts for food enthusiasts and special occasions.
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- //class name = fadeInUp 0.8s ease -->
    <div class="confirmation" id="confirmation"> 
        <i class="fas fa-check-circle"></i>
        <h2>Message Sent Successfully!</h2>
        <p>Thank you for contacting Royal Restaurant. We've received your message and will respond within 24 hours.</p>
        <button class="btn" id="newMessage">Send Another Message</button>
    </div>
</div>
    <script>
        // (Removed JS that prevented form submission to allow PHP to process the form)

        // New message button
        document.getElementById('newMessage').addEventListener('click', function() {
            // Show sections and hide confirmation
            document.querySelector('.contact-section').style.display = 'block';
            document.querySelector('.map-section').style.display = 'block';
            document.querySelector('.faq-section').style.display = 'block';
            document.getElementById('confirmation').style.display = 'none';
            
            // Reset form
            document.getElementById('contactForm').reset();
            
            // Scroll to contact form
            window.scrollTo({
                top: document.getElementById('contact-form').offsetTop - 80,
                behavior: 'smooth'
            });
        });

        // FAQ functionality
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', function() {
                const faqItem = this.parentElement;
                faqItem.classList.toggle('active');
            });
        });

    </script>
</body>
</html>