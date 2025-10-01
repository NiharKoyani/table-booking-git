<?php
if (isset($_POST['submit'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate and sanitize input data
        $firstName = htmlspecialchars(trim($_POST['firstName']));
        $lastName = htmlspecialchars(trim($_POST['lastName']));
        $phone = htmlspecialchars(trim($_POST['phone']));
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $password = trim($_POST['password']);
        $confirmPassword = htmlspecialchars(trim($_POST['confirmPassword']));

        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("Invalid email format");
        }

        // Check if passwords match (client-side should handle this, but double-check)
        if ($_POST['password'] !== $_POST['confirmPassword']) {
            die("Passwords do not match");
        }

        // Check if terms were accepted
        if (!isset($_POST['terms'])) {
            die("You must accept the terms and conditions");
        }

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Check if email or mobile already exists
        $checkStmt = $conn->prepare("SELECT email, mobile_number FROM shopkeeper WHERE email = ? OR mobile_number = ?");
        $checkStmt->bind_param("ss", $email, $mobile);
        $checkStmt->execute();
        $checkStmt->store_result();

        if ($checkStmt->num_rows > 0) {
            // Fetch existing values
            $checkStmt->bind_result($existingEmail, $existingMobile);
            $checkStmt->fetch();

            if ($existingEmail === $email) {
                $_SESSION['registration_error'] = "This e-mail is already registered.";
            }
            if ($existingMobile === $mobile) {
                $_SESSION['registration_error_phoneNumber'] = "This mobile number is already registered.";
            }
            header("Location: ../signup.php");
            exit();
        }
        $checkStmt->close();

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO shopkeeper (shop_name, owner_name, mobile_number, email, password, shop_location, created_at, Status) VALUES (?, ?, ?, ?, ?, ?, NOW(),0)");
        $stmt->bind_param("ssssss", $shopName, $ownerName, $mobile, $email, $hashedPassword, $shopAddress);

        // Execute the statement
        if ($stmt->execute()) {
            // Registration successful - redirect to success page
            header("Location: ../registration_sucess.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    }
    // Close statement
    $stmt->close();
}
    ?>