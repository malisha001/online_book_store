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
    $bookid = $_POST["bookid"];

    $sql = "DELETE FROM book WHERE BID = $bookid";
    if($conn->query($sql)){
        echo "<script>alert('remove book succesfuly'); window.location.href = 'index.php';</script>";
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