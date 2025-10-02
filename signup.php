<!DOCTYPE html>
<html lang="en">
    <?php session_start();?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account | Bistro Elegante</title>
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

        /* Sign Up Section */
        .signup-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 0;
            position: relative;
            background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');
        }

        .signup-container {
            display: flex;
            max-width: 1100px;
            width: 100%;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            animation: fadeInUp 0.8s ease;
            position: relative;
            z-index: 2;
        }

        .signup-info {
            flex: 1;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .signup-info::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');
            background-size: cover;
            background-position: center;
            opacity: 0.2;
        }

        .signup-info-content {
            position: relative;
            z-index: 2;
        }

        .signup-info h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .signup-info p {
            margin-bottom: 30px;
            opacity: 0.9;
            font-size: 1.1rem;
        }

        .features-list {
            list-style: none;
            margin-top: 30px;
        }

        .features-list li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            font-size: 1.05rem;
        }

        .features-list li i {
            margin-right: 15px;
            color: var(--accent);
            font-size: 1.2rem;
        }

        .signup-form-container {
            flex: 1.2;
            padding: 50px;
            overflow-y: auto;
            max-height: 700px;
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

        .signup-form {
            width: 100%;
        }

        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 0;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
            flex: 1;
        }

        .form-group.full-width {
            flex: 0 0 100%;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--secondary);
        }

        .form-group .required::after {
            content: '*';
            color: var(--error);
            margin-left: 4px;
        }

        /* icons */

        .input-with-icon {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-with-icon .left-icon {
            position: absolute;
            left: 13px;
            color: #888;
        }
        
        .input-with-icon .right-icon {
            position: absolute;
            right: 10px;
            cursor: pointer;
            color: #888;
        }
        
        .input-with-icon input {
            padding-left: 35px;   /* space for lock icon */
            padding-right: 35px;  /* space for eye icon */
            width: 100%;
        }

        .form-control {
            width: 100%;
            padding: 14px 15px 14px 45px;
            border-radius: 8px;
            border: 2px solid #e1e8ed;
            background: white;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(230, 126, 34, 0.1);
        }

        .password-match{
            font-size: 0.7rem;
            margin-top: 0.2rem;
            height: 0.8rem;
        }

        .password-strength {
            margin-top: 8px;
            height: 6px;
            border-radius: 5px;
            background: #eee;
            overflow: hidden;
        }

        .password-strength-bar {
            height: 100%;
            width: 0;
            transition: width 0.3s, background-color 0.3s;
            border-radius: 5px;
        }

        .strength-weak {
            background: var(--error);
            width: 33%;
        }

        .strength-medium {
            background: #f39c12;
            width: 66%;
        }

        .strength-strong {
            background: var(--success);
            width: 100%;
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .terms-agreement {
            display: flex;
            align-items: flex-start;
        }

        .terms-agreement input {
            margin-right: 10px;
            margin-top: 4px;
        }

        .terms-agreement label {
            font-size: 0.9rem;
            color: var(--text-light);
        }

        .terms-agreement a {
            color: var(--accent);
            text-decoration: none;
            font-weight: 500;
        }

        .terms-agreement a:hover {
            text-decoration: underline;
        }

        .btn {
            display: inline-block;
            background: var(--accent);
            color: white;
            padding: 15px 30px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            text-align: center;
            font-size: 1.05rem;
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

        .login-link {
            text-align: center;
            margin-top: 30px;
            color: var(--text-light);
        }

        .login-link a {
            color: var(--accent);
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        /* Error Message */
        .error-message {
            background: #fdedec;
            color: var(--error);
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            align-items: center;
            gap: 10px;
            border-left: 4px solid var(--error);
        }

        .error-message i {
            font-size: 1.2rem;
        }

        /* Success Message */
        .success-message {
            background: #e8f6f3;
            color: var(--success);
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: none;
            align-items: center;
            gap: 10px;
            border-left: 4px solid var(--success);
        }

        .success-message i {
            font-size: 1.2rem;
        }

        /* Form Validation Styles */
        .form-control.error {
            border-color: var(--error);
        }

        .form-control.success {
            border-color: var(--success);
        }

        .validation-message {
            font-size: 0.8rem;
            margin-top: 5px;
            display: none;
        }

        .validation-message.error {
            color: var(--error);
            display: block;
        }

        .validation-message.success {
            color: var(--success);
            display: block;
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

        .password-strength {
          width: 100%;
          height: 8px;
          background: #ddd;
          border-radius: 5px;
          margin-top: 5px;
          overflow: hidden;
        }

        .password-strength-bar {
          height: 100%;
          width: 0;
          background: red;
          transition: width 0.3s ease, background 0.3s ease;
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
            
            .signup-container {
                flex-direction: column;
            }
            
            .signup-info {
                padding: 30px;
            }
            
            .signup-form-container {
                padding: 30px;
            }
            
            .form-row {
                flex-direction: column;
                gap: 0;
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

    <section class="signup-section">
        <div class="signup-container">
            <div class="signup-info">
                <div class="signup-info-content">
                    <h2>Join Our Culinary Community</h2>
                    <p>Create an account to enjoy exclusive benefits and personalized dining experiences at Royal Restaurant.</p>
                    
                    <ul class="features-list">
                        <li><i class="fas fa-check-circle"></i> Easy online reservations</li>
                        <li><i class="fas fa-check-circle"></i> Exclusive member offers</li>
                        <li><i class="fas fa-check-circle"></i> Priority seating</li>
                        <li><i class="fas fa-check-circle"></i> Special event invitations</li>
                        <li><i class="fas fa-check-circle"></i> Faster checkout process</li>
                    </ul>
                </div>
            </div>
            
            <div class="signup-form-container">
                <div class="form-header">
                    <h2>Create Account</h2>
                    <p>Join our community of food enthusiasts</p>
                </div>
<?php


if (!empty($_SESSION['registration_error']) || !empty($_SESSION['registration_error_phoneNumber'])) {
    echo '<div class="error-message" id="errorMessage">
            <i class="fas fa-exclamation-circle"></i>
            <span id="errorText">Please fix the errors below to continue.</span>
            <ul>';
    
    if (!empty($_SESSION['registration_error'])) {
        echo "<li>{$_SESSION['registration_error']}</li>";
    }
    if (!empty($_SESSION['registration_error_phoneNumber'])) {
        echo "<li>{$_SESSION['registration_error_phoneNumber']}</li>";
    }

    echo '</ul></div>';

    // Clear them so they don’t show on refresh
    unset($_SESSION['registration_error']);
    unset($_SESSION['registration_error_phoneNumber']);
}
?>
<?php
session_start();

if (!empty($_SESSION['registration_error']) || !empty($_SESSION['registration_error_phoneNumber'])) {
    echo '<div class="error-message" id="errorMessage">
            <i class="fas fa-exclamation-circle"></i>
            <span id="errorText">Please fix the errors below to continue.</span>
            <ul>';
    
    if (!empty($_SESSION['registration_error'])) {
        echo "<li>{$_SESSION['registration_error']}</li>";
    }
    if (!empty($_SESSION['registration_error_phoneNumber'])) {
        echo "<li>{$_SESSION['registration_error_phoneNumber']}</li>";
    }

    echo '</ul></div>';

    // Clear them so they don’t show on refresh
    unset($_SESSION['registration_error']);
    unset($_SESSION['registration_error_phoneNumber']);
}
?>


                
                <div class="success-message" id="successMessage">
                    <i class="fas fa-check-circle"></i>
                    <span id="successText">Account created successfully! Redirecting...</span>
                </div>
                
                <form class="signup-form" action="./server/process.php" method="post" id="signupForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName" class="required">First Name</label>
                            <div class="input-with-icon">
                                <i class="fas fa-user left-icon"></i>
                                <input type="text" name="firstName" class="form-control" placeholder="Enter your first name" required>
                            </div>
                            <div class="validation-message" id="firstNameError"></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="lastName" class="required">Last Name</label>
                            <div class="input-with-icon">
                                <i class="fas fa-user left-icon"></i>
                                <input type="text" name="lastName" class="form-control" placeholder="Enter your last name" required>
                            </div>
                            <div class="validation-message" id="lastNameError"></div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="required">Email Address</label>
                        <div class="input-with-icon">
                            <i class="fas fa-envelope left-icon"></i>
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="validation-message" id="emailError"></div>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone" class="required">Phone Number</label>
                        <div class="input-with-icon">
                            <i class="fas fa-phone left-icon"></i>
                            <input type="tel" name="phone" class="form-control" placeholder="Enter your phone number" pattern="^\+91[6-9]\d{9}$"
                              title="Enter a valid Indian phone number with country code, e.g. +91 9876543210"
                              required>
                        </div>
                        <div class="validation-message" id="phoneError"></div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password" class="required">Password</label>
                        <div class="input-with-icon">
                            <i class="fas fa-lock left-icon"></i>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Create a password" required>
                            <i class="fas fa-eye toggle-password right-icon" id="togglePassword"></i>
                        </div>
                        <div class="password-strength">
                            <div class="password-strength-bar" id="passwordStrength"></div>
                        </div>
                        <div class="validation-message" id="passwordError"></div>
                    </div>
                    
                    <div class="form-group">
                        <label for="confirmPassword" class="required">Confirm Password</label>
                        <div class="input-with-icon">
                            <i class="fas fa-lock left-icon"></i>
                            <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm your password" required>
                        </div>
                        <div class="validation-message" id="confirmPasswordError"></div>
                        <div id="passwordMatch" class="password-match"></div>
                    </div>
                    
                    <div class="form-group">
                        <label for="birthdate">Date of Birth</label>
                        <div class="input-with-icon">
                            <i class="fas fa-calendar left-icon"></i>
                            <input type="date" name="birthdate" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group full-width">
                        <div class="terms-agreement">
                            <input type="checkbox" name="terms" id="terms" required>
                            <label for="terms">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
                        </div>
                        <div class="validation-message" id="termsError"></div>
                    </div>
                    
                    <button type="submit" class="btn" id="signupBtn">Create Account</button>
                    
                    <div class="login-link">
                        Already have an account? <a href="login.php">Sign in here</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script>
        // Form submission
            const registrationForm = document.getElementById('signupForm');

            registrationForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const passwordInput = document.getElementById('password');
                const confirmPasswordInput = document.getElementById('confirmPassword');

                const passwordMatch = document.getElementById('passwordMatch');

                // Validate terms checkbox
                const termsCheckbox = document.getElementById('terms');
                if (!termsCheckbox.checked) {
                    alert('Please agree to the terms and conditions');
                    return;
                }

                // Validate password match
                if (passwordInput.value !== confirmPasswordInput.value) {
                    passwordMatch.innerHTML = 'Passwords do not match';
                    passwordMatch.style.color = "var(--error)";
                    return;
                }

                if (passwordInput.value.trim().length < 6) {
                    passwordMatch.innerHTML = 'Password must be at least 6 characters';
                    passwordMatch.style.color = "var(--error)";
                    return;
                }
                // If all validations pass, submit the form
                this.submit();
            });

            const passwordInput = document.getElementById('password');
            const strengthBar = document.getElementById("passwordStrength");

            passwordInput.addEventListener("input", () => {
              const password = passwordInput.value.trim();
              let strength = 0;
            
              // Rules for strength
              if (password.length >= 6) strength++;          // min length
              if (/[A-Z]/.test(password)) strength++;        // uppercase
              if (/[0-9]/.test(password)) strength++;        // numbers
              if (/[@$!%*?&#]/.test(password)) strength++;   // special characters
            
              // Update progress bar
              switch (strength) {
                case 0:
                  strengthBar.style.width = "0%";
                  strengthBar.style.background = "transparent";
                  break;
                case 1:
                  strengthBar.style.width = "25%";
                  strengthBar.style.background = "red";
                  break;
                case 2:
                  strengthBar.style.width = "50%";
                  strengthBar.style.background = "orange";
                  break;
                case 3:
                  strengthBar.style.width = "75%";
                  strengthBar.style.background = "blue";
                  break;
                case 4:
                  strengthBar.style.width = "100%";
                  strengthBar.style.background = "green";
                  break;
              }
            });

            const togglePassword = document.getElementById("togglePassword");

            togglePassword.addEventListener("click", () => {
                const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
                passwordInput.setAttribute("type", type);
            
                // Toggle icon (eye ↔ eye-slash)
                togglePassword.classList.toggle("fa-eye-slash");
            });
    </script>
</body>
</html>