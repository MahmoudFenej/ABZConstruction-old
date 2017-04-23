<?php
require_once 'DBConnection.php';
$name=$_POST['name'];      
 $email=$_POST['email'];
  $number=$_POST['phone'];
  $message=$_POST['message'];

$query="INSERT INTO `message` (`Name`, `Email`, `Phone`, `Message`) VALUES ('$name', '$email', '$number', '$message')";

if (mysqli_query($con, $query)) {
    echo "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

        
        
?>