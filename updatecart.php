<?php
    require 'config.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cartID = $_POST["book_id"];
        $quantity = $_POST["quantity"];
        $price = $_POST["total"];

        // Calculate the new total
        $total = $price * $quantity;

        // Update the cart in the database
        $updateSql = "UPDATE cart SET Quantity = '$quantity', Total_price = '$total' WHERE BID = '$cartID'";
        $conn->query($updateSql);

        // Redirect back to the cart page
        header("Location: cart.php");
        exit();
    }
?>
