<?php 

function getUserById($id, $db){
    $sql = "SELECT * FROM customers WHERE email = '$id'";
    $result = $db->query($sql);
    
    if($result->num_rows == 1){
        $user = $result->fetch_assoc();
        return $user;
    }else {
        return 0;
    }
}

 ?>