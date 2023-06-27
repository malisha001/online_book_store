<?php
session_start();

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



if(isset($_POST['contactDetails']))
{
    $fname = mysqli_real_escape_string($connection, $_POST['firstName']);
    $lname = mysqli_real_escape_string($connection, $_POST['lastName']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $message = mysqli_real_escape_string($connection, $_POST['message']);

    $query = "INSERT INTO ontactus (first_name,last_name,email,number,quection) VALUES ('$fname','$lname','$email','$phone','$message')";

    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Reported Successfully";
        ?>
            <script>
            Swal.fire(
                'Good job!',
                'You clicked the button!',
                'success'
                )
            </script>
        <?php
        header("Location: ../contact.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Connection Lost";
        header("Location: ../contact.php");
        exit(0);
    }
}


?>