<?php
    require '../config.php';
    session_start();
    $uid = $_SESSION["usename"];

    $sql = "DELETE FROM cart WHERE c_name = '$uid'";
    $sql1 = "DELETE FROM final_cart WHERE c_name = '$uid'";
    if($conn->query($sql) && $conn->query($sql1)){
        echo "<script>alert('payment added succes fully.'); window.location.href = '../homepage.php';</script>";
    }
    else{
        echo "error ";
    }
?>