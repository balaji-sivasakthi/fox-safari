<?php
session_start();
include('./php/Admin/Database/dbconfig.php');




if(isset($_POST['login']))
{

$email=$_POST['email'];
$pass=$_POST['pass'];
$hash=md5($pass);
$login_query ="SELECT * FROM user WHERE email='$email' and password='$hash'";
$login_query_run=mysqli_query($connection,$login_query);
            if(mysqli_num_rows($login_query_run)==1){
                echo("Success");
              
                $_SESSION['log']="Balaji";

            }else{
                $_SESSION['status']="User Name and Password inVaild";
                echo("Not Success");
            }
header("location: ./index.php");
}
?>