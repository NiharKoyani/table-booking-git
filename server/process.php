<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

// Force flush errors before redirect
ob_implicit_flush(true);

include('./db.php');


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate and sanitize input data
        $first_name   = htmlspecialchars(trim($_POST['firstName']));
        $last_name    = htmlspecialchars(trim($_POST['lastName']));
        $phone_number = htmlspecialchars(trim($_POST['phone']));
        $email        = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $birthdate    = htmlspecialchars(trim($_POST['birthdate']));
        $password     = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("Invalid email format");
        }

        // Check if passwords match
        if ($password !== $confirmPassword) {
            die("Passwords do not match");
        }

        // Check if terms were accepted
        if (!isset($_POST['terms'])) {
            die("You must accept the terms and conditions");
        }

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Check if email or phone already exists
        $checkStmt = $conn->prepare("SELECT email, phone_number FROM users WHERE email = ? OR phone_number = ?");
        $checkStmt->bind_param("ss", $email, $phone_number);
        $checkStmt->execute();
        $checkStmt->store_result();

        if ($checkStmt->num_rows > 0) {
            $checkStmt->bind_result($existingEmail, $existingMobile);
            $checkStmt->fetch();

            if ($existingEmail === $email) {
                $_SESSION['registration_error'] = "This e-mail is already registered.";
            }
            if ($existingMobile === $phone_number) {
                $_SESSION['registration_error_phoneNumber'] = "This mobile number is already registered.";
            }

            header("Location: ../signup.php");
            exit();
        }
        $checkStmt->close();

        // Insert new user
        $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, phone_number, email, password, birthdate) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $first_name, $last_name, $phone_number, $email, $hashedPassword, $birthdate);

        if ($stmt->execute()) {
            header("Location: ../");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

?>
