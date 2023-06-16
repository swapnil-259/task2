<?php
echo "test1";
include_once 'connect.php';
echo "test2";
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $gender = $_POST['gender'];
     $address = $_POST['address'];
     $email = $_POST['email'];
     $phone = $_POST['phone_number'];
     $stay=$_POST['stay'];

     $sql = "INSERT INTO details (name,gender,address,email,phone,stay)
     VALUES ('$name','$gender','$address','$email','$phone_number','$stay')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
else {
   echo "not connected";
}
?>