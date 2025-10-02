<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found | Bistro Elegante</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./css/universal.css">
    
    <style>
        body {
            background-color: #f9f9f9;
            color: var(--text);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* 404 Section */
        .error-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 80px 0;
            background: linear-gradient(rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.95)), url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .error-container {
            text-align: center;
            max-width: 700px;
            padding: 60px 40px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 1s ease;
            position: relative;
            z-index: 2;
        }

        .error-animation {
            font-size: 8rem;
            color: var(--accent);
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
            animation: bounce 2s infinite;
        }

        .error-animation::before {
            content: '4';
            position: absolute;
            left: -80px;
            animation: float 3s ease-in-out infinite;
        }

        .error-animation::after {
            content: '4';
            position: absolute;
            right: -80px;
            animation: float 3s ease-in-out infinite reverse;
        }

        .error-title {
            font-size: 3rem;
            color: var(--accent);
            margin-bottom: 20px;
        }

        .error-subtitle {
            font-size: 1.5rem;
            color: var(--text-light);
            margin-bottom: 30px;
        }

        .error-description {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 40px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn {
            display: inline-block;
            background: var(--accent);
            color: white;
            padding: 14px 35px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin: 0 10px 15px;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            background: #d35400;
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--accent);
            color: var(--accent);
        }

        .btn-outline:hover {
            background: var(--accent);
            color: white;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        /* Floating Elements */
        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .floating-element {
            position: absolute;
            background: rgba(230, 126, 34, 0.1);
            border-radius: 50%;
            animation: float 15s infinite linear;
        }

        .floating-element:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 60%;
            left: 80%;
            animation-delay: -5s;
        }

        .floating-element:nth-child(3) {
            width: 60px;
            height: 60px;
            top: 80%;
            left: 20%;
            animation-delay: -10s;
        }

        .floating-element:nth-child(4) {
            width: 100px;
            height: 100px;
            top: 30%;
            left: 70%;
            animation-delay: -7s;
        }

        /* Quick Links */
        .quick-links {
            margin-top: 40px;
        }

        .quick-links h3 {
            margin-bottom: 20px;
            color: var(--accent);
        }

        .links-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
            max-width: 500px;
            margin: 0 auto;
        }

        .link-item {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            transition: all 0.3s;
            text-decoration: none;
            color: var(--text);
            display: block;
        }

        .link-item:hover {
            background: var(--accent);
            color: white;
            transform: translateY(-5px);
        }

        .link-item i {
            display: block;
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: var(--accent);
        }

        .link-item:hover i {
            color: white;
        }


        /* Animations */
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

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes float {
            0% {
                transform: translate(0, 0) rotate(0deg);
            }
            25% {
                transform: translate(10px, 20px) rotate(90deg);
            }
            50% {
                transform: translate(20px, 0) rotate(180deg);
            }
            75% {
                transform: translate(10px, -20px) rotate(270deg);
            }
            100% {
                transform: translate(0, 0) rotate(360deg);
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
            
            .error-animation {
                font-size: 5rem;
            }
            
            .error-animation::before,
            .error-animation::after {
                display: none;
            }
            
            .error-title {
                font-size: 2.2rem;
            }
            
            .error-subtitle {
                font-size: 1.2rem;
            }
            
            .action-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .btn {
                margin: 5px 0;
                width: 200px;
            }
        }
    </style>
</head>
<body>
    
    <section class="error-section">
        <div class="floating-elements">
            <div class="floating-element"></div>
            <div class="floating-element"></div>
            <div class="floating-element"></div>
            <div class="floating-element"></div>
        </div>
        
        <div class="error-container">
            <div class="error-animation">
                0
            </div>
            
            <h1 class="error-title">Page Not Found</h1>
            
            <p class="error-subtitle">Oops! The page you're looking for seems to have gone missing.</p>
            
            <p class="error-description">
                It seems the page you were trying to reach doesn't exist. Don't worry, even the best chefs 
                sometimes misplace their recipes. Let us help you find your way back to our delicious offerings.
            </p>
            
            <div class="action-buttons">
                <a href="./" class="btn">
                    <i class="fas fa-home"></i> Back to Home
                </a>
                <a href="index.php?menu" class="btn btn-outline">
                    <i class="fas fa-utensils"></i> View Our Menu
                </a>
            </div>
            
            <div class="quick-links">
                <h3>Quick Links</h3>
                <div class="links-grid">
                    <a href="index.php?menu" class="link-item">
                        <i class="fas fa-utensils"></i>
                        <span>Menu</span>
                    </a>
                    <a href="index.php?booking-table" class="link-item">
                        <i class="fas fa-calendar-check"></i>
                        <span>Reservations</span>
                    </a>
                    <a href="index.php?about-us" class="link-item">
                        <i class="fas fa-info-circle"></i>
                        <span>About Us</span>
                    </a>
                    <a href="index.php?contact" class="link-item">
                        <i class="fas fa-envelope"></i>
                        <span>Contact</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script>

        // Add some interactive elements
        document.querySelectorAll('.link-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Animate the error number on load
        document.addEventListener('DOMContentLoaded', function() {
            const errorAnimation = document.querySelector('.error-animation');
            setTimeout(() => {
                errorAnimation.style.animation = 'bounce 2s infinite';
            }, 500);
        });

        // Add a fun console message
        console.log(
            `%c
             ██████╗ ██████╗ ██████╗ 
            ██╔════╝██╔═══██╗██╔══██╗
            ██║     ██║   ██║██████╔╝
            ██║     ██║   ██║██╔══██╗
            ╚██████╗╚██████╔╝██║  ██║
             ╚═════╝ ╚═════╝ ╚═╝  ╚═╝
                                     
            Oops! 404 Error - Page Not Found
            Even the best chefs sometimes misplace their recipes!
            `,
            'color: #e67e22; font-family: monospace; font-size: 12px;'
        );
    </script>
</body>
</html>