<?php
    require 'config.php';
    session_start();

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $userID = $_SESSION["usename"];
        $bookID = $_POST['book_id'];
        $image = $_POST['image'];
        $book_name = $_POST['book_name'];
        $book_price = $_POST['book_price'];
        $quentity = $_POST['quentity'];

        // Check if the book is already in the cart
        $sqlCheck = "SELECT * FROM cart WHERE c_name = '$userID' AND BID = '$bookID'";
        $resultCheck = $conn->query($sqlCheck);

        if ($resultCheck->num_rows > 0) {
            // Book already exists in the cart
            echo "<script>alert('This book is already in your cart.'); window.location.href = 'homepage.php';</script>";
        } else {
            // Book is not in the cart, add it
            $sqlAdd = "INSERT INTO cart (c_name,BID,image,book_name,price,Quantity) VALUES ('$userID','$bookID','$image','$book_name','$book_price','$quentity')";
            if ($conn->query($sqlAdd) === TRUE) {
                echo "<script>alert('Book added to cart successfully.')</script>";
                header("Location:homepage.php");
            } 
            else {
                echo "<script>alert('Failed to add book to cart.')</script>";
                header("Location:homepage.php");
                exit;
            }
        }

        // $sql = "INSERT INTO cart (c_name,BID,book_name,price,Quantity) VALUE ('$userID','$bookID','$book_name','$book_price','$quentity')";
        // if($conn->query($sql)){
        //     echo"<script>alert('successfull')</script>";
        //     header("Location:index.php");
        // }
        // else{
        //     echo"<script>alert('error')</script>";
        // }
    }
    else{
        header("Location:index.php");
    }
?>