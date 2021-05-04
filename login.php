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



if(isset($_POST['rgtUser'])){

    $user =$_POST['fname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $cpassword=$_POST['confirmpassword'];
    $hash_password=md5($password);

    $email_query = "SELECT * FROM user WHERE email ='$email'";
    $email_run= mysqli_query($connection,$email_query);
    if(mysqli_num_rows($email_run)>0){    
        $_SESSION['log']="Email Already Taken. Please Try Another one.";
        $_SESSION['log-code']="error";
        header("Location:/index.php");

    }else{

        if($password===$cpassword){

            $insert_query="INSERT INTO user  (name,phone,email,password) VALUES('$user','$phone','$email','$hash_password')";
            $insert_run=mysqli_query($connection,$insert_query);

            if($insert_run){
               
                $_SESSION['log']="User Record Added Sucessfully";
                $_SESSION['log-code']="Success";
                header("location: /index.php");


            }else
            {
                $_SESSION['log']="Admin User Record Not Added ";
                $_SESSION['log-code']="Error";
                header("location: ./index.php");
            }
            

        }else{
            $_SESSION['log']="Password Mismatch try again";
            $_SESSION['log-code']="Error";
            header("location: ./index.php");
        }

    }


}


?>


