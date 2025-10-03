<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Restaurant | Table Reservations</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./css/booking-form.css">
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
                    <p>Royal Restaurant was started in 2005 by Chef Arjun Sharma, a passionate Indian chef from Ahmedabad, Gujarat. Inspired by the rich flavors and traditions of Indian cuisine, Chef Arjun wanted to create a place where families and friends could enjoy authentic Indian food in a warm, welcoming setting.</p>
                    <p>From classic North Indian curries to popular street food, every dish is made with fresh ingredients and a touch of home-style love. Our team believes in serving food that reminds you of Indian festivals and family gatherings.</p>
                    <p> ROYAL restaurant , Palace Road, Jamnagar, Gujarat - 361008</p>
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
                    <?php include('./util/booking-form.php')?>
            </div>
        </div>
    </section>

<script src="./util/booking-form-validation.js"></script>

</body>
</html>