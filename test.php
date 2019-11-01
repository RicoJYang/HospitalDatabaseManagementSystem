<?php
$ser= "localhost";
$user = "root";
$pass= "aditya2000";
$db="hospital";
$con=mysqli_connect($ser,$user,$pass,$db) or die("Connection failed");
echo "Connection success";
?>
