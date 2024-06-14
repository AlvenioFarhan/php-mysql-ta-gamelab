<?php
session_start();
include "../../config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_SESSION['id'])) {
        die("Session user ID not set. Please log in first.");
    }

    $user_id = $_SESSION['id'];
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Debug inputs
    echo "Debug: user_id = $user_id, product_id = $product_id, quantity = $quantity<br>";

    $sql = "INSERT INTO cart (user_id, product_id, quantity) VALUES ('$user_id', '$product_id', '$quantity')";

    if (mysqli_query($db, $sql)) {
        header("Location: cartUser.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}
