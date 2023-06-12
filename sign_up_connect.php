<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $finame = $_POST["fname"];
    $email = $_POST["mail"];
    $pnumber = $_POST["pnumber"];
    $pasword = $_POST["pswd"];
    $cpassword = $_POST["cpasswd"];

    // Check if the name and email already exist in the database
    $checkQuery = "SELECT COUNT(*) AS count FROM customers WHERE first_name = '$finame' OR email = '$email'";
    $checkResult = $conn->query($checkQuery);
    $checkRow = $checkResult->fetch_assoc();
    $existingCount = $checkRow['count'];

    if ($existingCount > 0) {
        echo "<script>alert('Name or email already exists. Please enter different information.'); window.location.href = 'sign_up.php';</script>";
    } else {
        $sql = "INSERT INTO customers(first_name, phoneNumber, email, pasword) VALUES ('$finame', '$pnumber', '$email', '$pasword')";
        if ($conn->query($sql)) {
            echo "<script>alert('Account created successfully.'); window.location.href = 'sign_in.php';</script>";
        } else {
            echo "<script>alert('Error occurred while creating the account.');</script>";
        }
    }
}
else {
    header('Location: sign_up.html');
    exit();
}
?>
