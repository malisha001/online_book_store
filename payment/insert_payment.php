<?php
require '../config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $uid = $_SESSION["usename"];
    $tpay = $_POST["T_payment"];
    $strln1 = $_POST["strln1"];
    $strln2 = $_POST["strln2"];
    $cname = $_POST["cardholder_name"];
    $cnum = $_POST["card_number"];
    $month = $_POST["months"];
    $year = $_POST["year"];
    $cvv = $_POST["cvv"];
    

    $sql = "INSERT INTO payment(c_name, T_payment, address_line1, address_line2,cardholder_name,card_number,exp_month,exp_year,	cvv) VALUES ('$uid', '$tpay', '$strln1', '$strln2','$cname','$cnum','$month','$year','$cvv')";
    if ($conn->query($sql)) {
        echo "<script>alert('payment added succes fully.'); window.location.href = 'finaldelet.php';</script>";
    } else {
        echo "<script>alert('Error occurred while creating the account.');</script>";
    }
}
else {
    header('Location: sign_up.html');
    exit();
}
?>
