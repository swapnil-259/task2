<?php
$servername = "localhost";
$username = "swapnil";
$password = "swapnil259";
$dbname = "login_details";


$conn = mysqli_connect($servername, $username, $password,$dbname);


if ($conn->connect_error) {
  die("Connection failed: " .  mysqli_connect_error());
}
echo "Connected successfully";
?>
