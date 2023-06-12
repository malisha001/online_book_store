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
    $userid = $_POST["userid"];

    $sql = "DELETE FROM customers WHERE CID = $userid";
    if($conn->query($sql)){
        echo "<script>alert('remove user succesfuly'); window.location.href = 'index.php';</script>";
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