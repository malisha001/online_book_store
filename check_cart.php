<?php
    require 'config.php';
    session_start();

     // Check if a book is being added to the cart
    if (isset($_GET['book_id'])) {
        $bookID = $_GET['book_id'];
        $uname = $_SESSION["usename"];

        // Check if the book is already in the cart
        $sqlCheck = "SELECT * FROM cart WHERE c_name = '$uname' AND book_id = '$bookID'";
        $resultCheck = $conn->query($sqlCheck);

        if ($resultCheck->num_rows > 0) {
            // Book already exists in the cart
            echo "<script>alert('This book is already in your cart.')</script>";
        } else {
            // Book is not in the cart, add it
            $sqlAdd = "INSERT INTO cart (c_name, book_id) VALUES ('$uname', '$bookID')";
            if ($conn->query($sqlAdd) === TRUE) {
                echo "<script>alert('Book added to cart successfully.')</script>";
            } else {
                echo "<script>alert('Failed to add book to cart.')</script>";
            }
        }
    }
?>