<?php
require 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd1"];

    //check customer table
    $sql = "SELECT * FROM customers WHERE email = '$uid' AND pasword = '$pwd'";
    $result = $conn->query($sql);

    //check administrater table
    $sql1 = "SELECT * FROM administrator WHERE email = '$uid' AND pasword = '$pwd'";
    $result1 = $conn->query($sql1);

    //check author table
    $sql2 = "SELECT * FROM author WHERE email = '$uid' AND pasword = '$pwd'";
    $result2 = $conn->query($sql2);

    if($result->num_rows > 0){
        $_SESSION["usename"] = $uid;
        header("Location:homepage.php");
    }
    elseif($result1->num_rows > 0){
        $_SESSION["usename"] = $uid;
        header("Location:Admin/admin.php");
    }
    elseif ($result2->num_rows > 0) {
        $_SESSION["usename"] = $uid;
        header("Location:author.php");
    }
    else{
        echo "<script>alert('invalid credantial.'); window.location.href = 'sign_in.php';</script>";
    }
}
else{
    header("Location:homepage.php");
}


// $select = mysqli_query($conn, "SELECT * FROM usersaccounts WHERE email='$username' AND pasword = '$password'");
// $row = mysqli_fetch_array($select);

// if(is_array($row)){
//     $_SESSION["username"] = $row['email'];
//     $_SESSION["pass"] = $row['pasword'];
// }
// else{
//     echo '<script> alert("invalid username or password")</script>';
// }

// if (isset($_SESSION["username"])){
//     header("Location:welcome.php");
// }