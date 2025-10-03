<?php
// forgot-password.php
// Step 1: User enters email to request OTP
// Step 2: User enters OTP and new password


session_start();
include_once __DIR__ . '/server/db.php';

// You will need to set up your own mail sending logic in send_otp_to_email($email, $otp)
function send_otp_to_email($email, $otp) {
    // Send OTP to email using PHP's mail() function (for demo)
    $subject = "Your OTP for Password Reset";
    $message = "Your OTP for password reset is: $otp";
    $headers = "From: noreply@royal-restaurant.com";
    // Uncomment below in production and configure mail server
    // mail($email, $subject, $message, $headers);
    // For demo, store OTP in session
    $_SESSION['otp'] = $otp;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['request_otp'])) {
        $email = trim($_POST['email']);
        // Validate email exists in users table
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $otp = rand(100000, 999999);
            $_SESSION['reset_email'] = $email;
            send_otp_to_email($email, $otp);
            $step = 2;
        } else {
            $error = 'Email not found.';
            $step = 1;
        }
        $stmt->close();
    } elseif (isset($_POST['reset_password'])) {
        $email = $_SESSION['reset_email'] ?? '';
        $otp = $_POST['otp'] ?? '';
        $new_password = $_POST['new_password'] ?? '';
        if ($otp == ($_SESSION['otp'] ?? '') && !empty($new_password)) {
            // Hash new password
            $hashedPassword = password_hash($new_password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
            $stmt->bind_param("ss", $hashedPassword, $email);
            if ($stmt->execute()) {
                unset($_SESSION['otp'], $_SESSION['reset_email']);
                $success = 'Password changed successfully!';
            } else {
                $error = 'Failed to update password.';
                $step = 2;
            }
            $stmt->close();
        } else {
            $error = 'Invalid OTP or password.';
            $step = 2;
        }
    }
}
if (!isset($step)) $step = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="css/universal.css">
    <style>
        .forgot-container { max-width: 400px; margin: 60px auto; background: #fff; border-radius: 10px; box-shadow: 0 2px 12px #0001; padding: 32px; }
        .forgot-container h2 { margin-bottom: 18px; }
        .forgot-container input { width: 100%; margin-bottom: 16px; padding: 10px; border-radius: 6px; border: 1px solid #ccc; }
        .forgot-container button { width: 100%; padding: 10px; border-radius: 6px; background: #3498db; color: #fff; border: none; font-weight: bold; }
        .success { color: #27ae60; }
        .error { color: #e74c3c; }
    </style>
</head>
<body>
<div class="forgot-container">
    <h2>Forgot Password</h2>
    <?php if (!empty($success)): ?>
        <div class="success"><?= $success ?></div>
    <?php elseif (!empty($error)): ?>
        <div class="error"><?= $error ?></div>
    <?php endif; ?>
    <?php if ($step === 1): ?>
        <form method="post">
            <label for="email">Enter your email:</label>
            <input type="email" name="email" id="email" required>
            <button type="submit" name="request_otp">Send OTP</button>
        </form>
    <?php elseif ($step === 2): ?>
        <form method="post">
            <label for="otp">Enter OTP sent to your email:</label>
            <input type="text" name="otp" id="otp" required>
            <label for="new_password">New Password:</label>
            <input type="password" name="new_password" id="new_password" required>
            <button type="submit" name="reset_password">Change Password</button>
        </form>
    <?php endif; ?>
    <div style="margin-top:18px;">
        <a href="login.php">Back to Login</a>
    </div>
</div>
</body>
</html>
