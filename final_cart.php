<?php
require 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $userID = $_SESSION["usename"];
    $ftotal = $_POST["ftotal"];


    $sql = "INSERT INTO final_cart(c_name,final_payment) VALUES ('$userID','$ftotal')";
    if($conn->query($sql)){
        echo "<script>alert('creat account succesfully.'); window.location.href = 'payment/paymentpage.php';</script>";
    }
    else{
        echo"<script>alert('error')</script>";
    }
}
else{
    header('sign_up.html');
}
?>