<?php
   $username="id658662_root";
   $password="root123";
   $database="id658662_abz";
   $servername="localhost";
 
   $con=new mysqli($servername, $username, $password, $database);
  if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);

       
   }

?>
SAVE & CLOSE  SAVE
