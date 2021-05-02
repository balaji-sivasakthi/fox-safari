<?php
<<<<<<< HEAD
session_start();
$server_name = "localhost:3308";
=======

$server_name = "localhost";
>>>>>>> 26db72ca1f90c49136af46aed53c4eb60e64959c
$db_username = "root";
$db_password = "";
$db_name = "foxsafari";

$connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);



if(!$connection)
{
    die("Connection failed: " . mysqli_connect_error());
}else{
  //  echo("Database Sucessfully Connnected");
}

?>
