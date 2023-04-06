<?php
//$con = mysqli_connect("localhost","my_user","my_password","my_db");
$con = mysqli_connect("localhost","root","","mysite21");

// Check connection
if (mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

 ?>
