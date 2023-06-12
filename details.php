<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "online_bookstor";

//create connection object
$conn = new mysqli($servername,$username,$password,$db);

//chech connection
if ($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}
echo"connected succesfully";


$sql = "SELECT first_name, second_name, email FROM usersaccounts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "first_name: " . $row["first_name"]. " second_name: " . $row["second_name"]. "emil :" . $row["email"]. "<br>";
  }
} else
{
  echo "0 results";
}
$conn->close();
?>