<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $date = isset($_POST['date']) ? trim($_POST['date']) : '';
    $time = isset($_POST['time']) ? trim($_POST['time']) : '';
    $requests = isset($_POST['requests']) ? trim($_POST['requests']) : '';
    $guests = isset($_POST['guests']) ? intval($_POST['guests']) : 0;
    $occasion = isset($_POST['occasion']) ? trim($_POST['occasion']) : '';
    $table_preference = isset($_POST['table_preference']) ? trim($_POST['table_preference']) : 'standard';

    include('./db.php');

    $date = date('Y-m-d', strtotime($date));
    // Convert received time into 24-hour format (HH:MM:SS)
    $time = date('H:i:s', strtotime($time));
    $datetime = $date.' '.$time;

    echo $datetime;

    $stmt = $conn->prepare("INSERT INTO reservation (name, email, phone_number, date_time, number_of_guests, special_occasion, special_requests, table_preference) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssisss", $name, $email, $phone, $datetime, $guests, $occasion, $requests, $table_preference );

    if ($stmt->execute()) {
        $_SESSION['booking'] = ['name'=>ucfirst($name),'date'=>$date, 'time'=>$time, 'guests'=> $guests, 'table-type'=> ucfirst($table_preference)];
        header('Location: ../index.php?booking-table');
        exit();
    }
}
?>