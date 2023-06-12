<?php 

$servername ="localhost";
$username ="root";
$password ="";
$database ="online_bookstore";

$connection = new mysqli($servername,$username,$password,$database);

if($connection->connect_error){
    die("connection failed: " . $conn->connect_error);
}
?>
