<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "online_bookstore";

//create connection object
$conn = new mysqli($servername,$username,$password,$db);

//check connection
if ($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}   
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $bookimage = $_POST["b_image"];
    $bookname = $_POST["book_name"];
    $author = $_POST["author"];
    $bookprice = $_POST["bookprice"];

    $sql = "INSERT INTO book(image, title, Author, price) VALUES ('$bookimage', '$bookname', '$author', '$bookprice')";
    if ($conn->query($sql)) {
        echo "<script>alert('add book successfully.'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Error occurred while add book.');</script>";
    }
}
else {
    header('Location: sign_up.html');
    exit();
}
?>
