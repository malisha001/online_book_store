<?php

    include 'connection.php';

    session_start();
    session_destroy();

    $id = $_SESSION['usename'];

    $sql = "DELETE FROM customers WHERE email = '$id'";

    $connection->query($sql);
    
    echo "<script>alert('delete account succesfull.'); window.location.href = '../index.html';</script>";

?>