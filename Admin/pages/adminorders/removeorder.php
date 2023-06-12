<?php

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
    $orderid = $_POST["orderid"];

    $sql = "DELETE FROM payment WHERE payID = $orderid";
    if($conn->query($sql)){
        echo "<script>alert('remove order succesfuly'); window.location.href = 'index.php';</script>";
    }
    else{
        echo "error ";
    }
}
else {
    header('Location: sign_up.html');
    exit();
}

?>