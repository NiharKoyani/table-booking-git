<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savory Haven | Premium Restaurant Experience</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/univarsal.css">
    <style>
        /* Reset and Base Styles */
        body {
            background-color: #f9f9f9;
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
        }

        a{
            text-decoration: none;
        }

        /* Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }

            .nav-links {
                position: fixed;
                top: 80px;
                left: 0;
                width: 100%;
                background: white;
                flex-direction: column;
                align-items: center;
                padding: 20px 0;
                box-shadow: var(--shadow);
                transform: translateY(-100%);
                opacity: 0;
                transition: var(--transition);
                z-index: 999;
            }

            .nav-links.active {
                transform: translateY(0);
                opacity: 1;
            }

            .nav-links li {
                margin: 15px 0;
            }

            .auth-buttons {
                display: none;
            }

            .hero h2 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 100%;
                max-width: 300px;
            }
        }
    </style>

</head>
<body>
    <!-- Navigation Bar -->
    <?php include('./util/nav-bar.php')?>

    <?php
        $current_page = basename($_SERVER['PHP_SELF']);

        if ($current_page == "index.php") {
            if (!isset($_GET) || count($_GET) === 0) {
                
                include('./pages/home.php'); // No query string → index page

            } elseif(isset($_GET['booking-table'])){

                include('./pages/booking.php'); // booking page

            }elseif(isset($_GET['menu'])){

                include('./pages/menu.php'); // menu page

            }elseif(isset($_GET['about-us'])){

                include('./pages/about.php'); // about us page

            }elseif(isset($_GET['contact'])){

                include('./pages/contact.php'); // contact page

            } else {
                include('./pages/page-not-found.php');
            }
        } else {
            // If someone tries to directly access another file
            include('./pages/page-not-found.php');
        }

    
    ?>

    <!-- Footer -->
    <?php include('./util/footer.php')?>

    <script>
        // Mobile Menu Toggle
        document.querySelector('.menu-toggle').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.querySelector('.navbar').classList.add('scrolled');
            } else {
                document.querySelector('.navbar').classList.remove('scrolled');
            }
        });

        // Scroll animations
        function checkVisibility() {
            const elements = document.querySelectorAll('.feature-card, .specialty-card, .testimonial-card');
            
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('visible');
                }
            });
        }
        
        window.addEventListener('scroll', checkVisibility);
        // Initial check
        checkVisibility();

    </script>
</body>
</html>