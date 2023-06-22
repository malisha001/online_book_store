<?php

    include 'connection.php';

    session_start();
    session_destroy();

    $id = $_SESSION['usename'];

    $sql = "DELETE FROM customers WHERE email = '$id'";

    $connection->query($sql);
    
    header("Location:../log.php");

?>