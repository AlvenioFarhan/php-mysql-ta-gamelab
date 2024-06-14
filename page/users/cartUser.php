<?php
session_start();
include "../../config.php";

// Debug session
if (!isset($_SESSION['id'])) {
    die("Session user ID not set.");
}

$user_id = $_SESSION['id'];

// Debug user_id
echo "Debug: user_id = $user_id<br>";

$sql = "SELECT c.*, p.name AS product_name, p.price AS product_price, p.image AS product_image FROM cart c JOIN products p ON c.product_id = p.product_id WHERE c.user_id = $user_id";
$result = mysqli_query($db, $sql);

// Debug query
if (!$result) {
    die("Query Error: " . mysqli_error($db));
}

// Debug result
if (mysqli_num_rows($result) == 0) {
    die("No data found in cart for user_id: $user_id");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <section class="content mb-5 mt-5 pt-5">
        <div class="container">
            <h1>Your Cart</h1>
            <div class="row">
                <?php while ($row = mysqli_fetch_assoc($result)) {?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo $row['product_image']; ?>" class="card-img-top" alt="<?php echo $row['product_name']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
                            <p class="card-text">Price: $<?php echo number_format($row['product_price'], 2); ?></p>
                            <p class="card-text">Quantity: <?php echo $row['quantity']; ?></p>
                            <p class="card-text">Total: $<?php echo number_format($row['quantity'] * $row['product_price'], 2); ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="delete-from-cart.php?cart_id=<?php echo $row['cart_id']; ?>" class="btn btn-danger">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
</body>
</html>
