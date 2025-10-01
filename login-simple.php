<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bistro Elegante | Login</title>
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
            --success: #27ae60;
            --error: #e74c3c;
        }

        body {
            background-color: #f9f9f9;
            background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');
            color: var(--text);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Login Section */
        .login-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 0;
            background-size: cover;
            background-position: center;
            z-index: 1;
        }

        .login-container {
            display: flex;
            max-width: 1000px;
            width: 100%;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 0.8s ease;
        }

        .login-info {
            flex: 1;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-info h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
        }

        .login-info p {
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .features-list {
            list-style: none;
            margin-top: 30px;
        }

        .features-list li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .features-list li i {
            margin-right: 10px;
            color: var(--accent);
        }

        .login-form-container {
            flex: 1;
            padding: 50px;
        }

        .form-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .form-header h2 {
            font-size: 2.2rem;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .form-header p {
            color: var(--text-light);
        }

        .login-form {
            width: 100%;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--secondary);
        }

        .input-with-icon {
            position: relative;
        }

        .input-with-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
        }

        .form-control {
            width: 100%;
            padding: 12px 15px 12px 45px;
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

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .remember-me {
            display: flex;
            align-items: center;
        }

        .remember-me input {
            margin-right: 8px;
        }

        .forgot-password {
            color: var(--accent);
            text-decoration: none;
            transition: color 0.3s;
        }

        .forgot-password:hover {
            color: #d35400;
            text-decoration: underline;
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
            width: 100%;
            text-align: center;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            background: #d35400;
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background: var(--primary);
            color: white;
        }

        .divider {
            text-align: center;
            margin: 30px 0;
            position: relative;
            color: var(--text-light);
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            width: 45%;
            height: 1px;
            background: #ddd;
        }

        .divider::after {
            content: '';
            position: absolute;
            top: 50%;
            right: 0;
            width: 45%;
            height: 1px;
            background: #ddd;
        }

        .signup-link {
            text-align: center;
            margin-top: 30px;
            color: var(--text-light);
        }

        .signup-link a {
            color: var(--accent);
            text-decoration: none;
            font-weight: 600;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }

        /* Error Message */
        .error-message {
            background: #fdedec;
            color: var(--error);
            padding: 12px 15px;
            border-radius: 4px;
            margin-bottom: 20px;
            display: none;
            align-items: center;
            gap: 10px;
        }

        .error-message i {
            font-size: 1.2rem;
        }

        /* Success Message */
        .success-message {
            background: #e8f6f3;
            color: var(--success);
            padding: 12px 15px;
            border-radius: 4px;
            margin-bottom: 20px;
            display: none;
            align-items: center;
            gap: 10px;
        }

        .success-message i {
            font-size: 1.2rem;
        }

        /* Floating Elements */
        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }

        .floating-element {
            position: absolute;
            background: #2c3e5051;
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

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }

        .shake {
            animation: shake 0.5s ease-in-out;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            
            .login-container {
                flex-direction: column;
            }
            
            .login-info {
                padding: 30px;
            }
            
            .login-form-container {
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="floating-elements">
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
    </div>

    <section class="login-section">
        <div class="login-container">
            <div class="login-info">
                <h2>Royal Restaurant</h2>
                <h3>Welcome Back</h3>
                <p>Sign in to your account to manage reservations, and receive exclusive offers.</p>
                
                <ul class="features-list">
                    <li><i class="fas fa-check-circle"></i> Manage your reservations</li>
                    <!-- <li><i class="fas fa-check-circle"></i> View your dining history</li> -->
                    <li><i class="fas fa-check-circle"></i> Receive exclusive offers</li>
                    <li><i class="fas fa-check-circle"></i> Fast checkout for future visits</li>
                </ul>
            </div>
            
            <div class="login-form-container">
                <div class="form-header">
                    <h2>Sign In</h2>
                    <p>Enter your credentials to access your account</p>
                </div>
                
                <div class="error-message" id="errorMessage">
                    <i class="fas fa-exclamation-circle"></i>
                    <span id="errorText">Invalid email or password. Please try again.</span>
                </div>
                
                <div class="success-message" id="successMessage">
                    <i class="fas fa-check-circle"></i>
                    <span id="successText">Login successful! Redirecting...</span>
                </div>
                
                <form class="login-form" id="loginForm">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <div class="input-with-icon">
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-with-icon">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="password" class="form-control" placeholder="Enter your password" required>
                        </div>
                    </div>
                    
                    <div class="form-options">
                        <div class="remember-me">
                            <input type="checkbox" id="remember">
                            <label for="remember">Remember me</label>
                        </div>
                        <a href="forgot-password.html" class="forgot-password">Forgot password?</a>
                    </div>
                    
                    <button type="submit" class="btn" id="loginBtn">Sign In</button>
                    
                    <div class="signup-link">
                        Don't have an account? <a href="signup.html">Sign up here</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>