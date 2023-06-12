<?php
    require 'config.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM cart WHERE cartID = $id";
    if($conn->query($sql)){
        header("Location:cart.php");
    }
    else{
        echo "error ";
    }
?>