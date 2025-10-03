<?php
session_start();

include('./db.php');

// Get POST data from contact.PHP
$name        = isset($_POST['name']) ? trim($_POST['name']) : '';
$email       = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone       = isset($_POST['phone_number']) ? trim($_POST['phone_number']) : '';
$subject     = isset($_POST['subject']) ? trim($_POST['subject']) : '';
$message     = isset($_POST['message']) ? trim($_POST['message']) : '';

// Basic validation
if ($name && $email && $subject && $message) {
    $stmt = $conn->prepare("INSERT INTO enquiries (name, email, phone_number, subject, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);

    if ($stmt->execute()) {
        $_SESSION['enquirie'] = 'enquirie is send!';
        header('Location: ../index.php?contact');
    } else {
        echo json_encode(['success' => false, 'message' => 'Database error: ' . $stmt->error]);
    }
    $stmt->close();
} else {
    echo json_encode(['success' => false, 'message' => 'Please fill all required fields.']);
}

$conn->close();
?>