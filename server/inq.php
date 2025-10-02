<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

// Force flush errors before redirect
ob_implicit_flush(true);

include('./db.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debug: Show POST data
    echo '<pre>POST DATA: '; print_r($_POST); echo '</pre>';

    $name   = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : '';
    $subject    = isset($_POST['subject']) ? htmlspecialchars(trim($_POST['subject'])) : '';
    $message    = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

        // Email validation using filter_var
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<div style="color: orange; font-weight: bold;">Error: Invalid email format.</div>';
            exit;
        }

    // Insert enquiry into the database
    $stmt = $conn->prepare("INSERT INTO enquiry (full_name, email_address, phone_number, subject, message) VALUES (?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);

    if ($stmt->execute()) {
        echo "<b>Success:</b> Data inserted into enquiry table.";
    } else {
        echo "<b>Error:</b> " . $stmt->error;
    }   

    $stmt->close();
}

?>
