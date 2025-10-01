<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Restaurant | Table Reservations</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #2c3e50;
            --secondary: #34495e;
            --accent: #e67e22;
            --light: #ecf0f1;
            --dark: #2c3e50;
            --text: #333;
            --text-light: #7f8c8d;
        }

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

        /* Header Styles */
        header {
            background-color: var(--primary);
            color: white;
            padding: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 30px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
        }

        nav ul li a:hover {
            color: var(--accent);
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--accent);
            transition: width 0.3s;
        }

        nav ul li a:hover::after {
            width: 100%;
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

        /* About Section */
        .about {
            padding: 100px 0;
            background-color: white;
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

        .about-content {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .about-text {
            flex: 1;
        }

        .about-text h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--secondary);
        }

        .about-text p {
            margin-bottom: 20px;
            color: var(--text-light);
        }

        .about-image {
            flex: 1;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.5s;
        }

        .about-image:hover {
            transform: scale(1.02);
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Booking Section */
        .booking {
            padding: 100px 0;
            background-color: #f5f7fa;
        }

        .booking-form {
            background: white;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            max-width: 900px;
            margin: 0 auto;
            animation: slideInUp 0.8s ease;
        }

        .form-title {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2rem;
            color: var(--primary);
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
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

        .form-submit {
            text-align: center;
            margin-top: 20px;
        }

        /* Confirmation Section */
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
            color: #27ae60;
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

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            
            nav ul {
                margin-top: 20px;
                justify-content: center;
            }
            
            nav ul li {
                margin: 0 10px;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .about-content {
                flex-direction: column;
            }
            
            .about-image {
                order: -1;
            }
        }
    </style>
</head>
<body>

    <section class="about" id="about">
        <div class="container">
            <div class="section-title">
                <h2>About Royal Restaurant</h2>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>Our Story</h3>
                    <p>Founded in 2005, Royal Restaurant has been serving exceptional cuisine in a sophisticated yet comfortable atmosphere. Our passion for culinary excellence and dedication to creating memorable dining experiences has made us a favorite among food enthusiasts.</p>
                    <p>Our executive chef, Michael Anderson, brings over 20 years of international experience, crafting dishes that blend traditional techniques with modern innovation.</p>
                    <p>We take pride in sourcing the finest local ingredients and supporting sustainable farming practices. Each dish tells a story of quality, creativity, and attention to detail.</p>
                    <a href="#booking" class="btn">Book a Table</a>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="Restaurant Interior">
                </div>
            </div>
        </div>
    </section>

    <section class="booking" id="booking">
        <div class="container">
            <div class="section-title">
                <h2>Table Reservation</h2>
            </div>
            <div class="booking-form">
                <h3 class="form-title">Reserve Your Table</h3>
                <form id="bookingForm">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" class="form-control" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input title="Enter a valid Indian phone number with country code, e.g. +91 9876543210" type="tel" id="phone" pattern="^\+91[6-9]\d{9}$" class="form-control" placeholder="Enter your phone number" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" id="date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="time">Time</label>
                            <input type="time" id="time" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="guests">Number of Guests</label>
                            <select id="guests" class="form-control" required>
                                <option value="" disabled selected>Select number of guests</option>
                                <option value="1">1 Person</option>
                                <option value="2">2 People</option>
                                <option value="3">3 People</option>
                                <option value="4">4 People</option>
                                <option value="5">5 People</option>
                                <option value="6">6 People</option>
                                <option value="7">7+ People</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="occasion">Special Occasion (Optional)</label>
                            <select id="occasion" class="form-control">
                                <option value="" selected>No special occasion</option>
                                <option value="birthday">Birthday</option>
                                <option value="anniversary">Anniversary</option>
                                <option value="business">Business Dinner</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="requests">Special Requests (Optional)</label>
                            <textarea id="requests" class="form-control" rows="3" placeholder="Any special requests?"></textarea>
                        </div>
                    </div>
                    <div class="form-submit">
                        <button type="submit" class="btn">Book Now</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="confirmation" id="confirmation">
        <i class="fas fa-check-circle"></i>
        <h2>Reservation Confirmed!</h2>
        <p>Thank you for your reservation. We've sent a confirmation email with all the details.</p>
        <p>We look forward to serving you at Royal Restaurant!</p>
        <button class="btn" id="newBooking">Make Another Reservation</button>
    </div>

    <script>
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const name = document.getElementById('name').value;
            const date = document.getElementById('date').value;
            const time = document.getElementById('time').value;
            
            // Hide form and show confirmation
            document.querySelector('.booking-form').style.display = 'none';
            document.getElementById('confirmation').style.display = 'block';
            
            // Add some animation to the confirmation
            const confirmation = document.getElementById('confirmation');
            confirmation.style.animation = 'none';
            setTimeout(() => {
                confirmation.style.animation = 'fadeInUp 0.8s ease';
            }, 10);
        });

        document.getElementById('newBooking').addEventListener('click', function() {
            // Show form and hide confirmation
            document.querySelector('.booking-form').style.display = 'block';
            document.getElementById('confirmation').style.display = 'none';
            
            // Reset form
            document.getElementById('bookingForm').reset();
            
            // Add animation to the form
            const form = document.querySelector('.booking-form');
            form.style.animation = 'none';
            setTimeout(() => {
                form.style.animation = 'slideInUp 0.8s ease';
            }, 10);
        });

        // Set minimum date to today
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('date').setAttribute('min', today);

    </script>
</body>
</html>