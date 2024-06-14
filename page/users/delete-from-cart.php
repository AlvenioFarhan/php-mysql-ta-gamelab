<?php
session_start();
include "../../config.php";

if (isset($_GET['cart_id'])) {
    $cart_id = $_GET['cart_id'];

    // Debug cart_id
    echo "Debug: cart_id = $cart_id<br>";

    $sql = "DELETE FROM cart WHERE cart_id = '$cart_id'";

    if (mysqli_query($db, $sql)) {
        header("Location: cartUser.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
} else {
    die("Cart ID not set.");
}
