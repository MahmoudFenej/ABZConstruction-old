<?php
session_start();
require_once 'DBConnection.php';
$username=$_POST['name'];
$password=$_POST['pass'];

$login =mysqli_query($con,"select Username,Password from user");
  $res3 =mysqli_query($con,"select Username from user where Username='$username'");

  
  $row1=mysqli_fetch_array($login);  
  $row3=mysqli_fetch_array($res3);

  
 
  $_SESSION["Name"]=$row3["Name"];

  
  

if($row1["Username"]==$username && $row1["Password"]==$password)
{
header("location: ShowAllMessages.php");
}

   

else
{
echo'not valid';
header("location: LoginPage.php");




}





mysqli_close($con);






?>