<?php
include('./security.php');
//  Admin Registration

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    $email_query = "SELECT * FROM admin WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: admin.php');  
    }
    else
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO admin (user,pass,email) VALUES ('$username','$password','$email')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: admin.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: admin.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: admin.php');  
        }
    }


}


// User Registration

if(isset($_POST['registerUserBtn'])){

    $user =$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $cpassword=$_POST['confirmpassword'];

    $email_query = "SELECT * FROM user WHERE email ='$email'";
    $email_run= mysqli_query($connection,$email_query);
    if(mysqli_num_rows($email_run)>0){    
        $_SESSION['status']="Email Already Taken. Please Try Another one.";
        $_SESSION['status_code']="error";
        header("Location:/user.php");

    }else{

        if($password===$cpassword){

            $insert_query="INSERT INTO user  (name,phone,email,password) VALUES('$user','$phone','$email','$password')";
            $insert_run=mysqli_query($connection,$insert_query);

            if($insert_run){
               
                $_SESSION['status']="User Record Added Sucessfully";
                $_SESSION['status_code']="Success";
                header("location: ./user.php");


            }else
            {
                $_SESSION['status']="Admin User Record Not Added ";
                $_SESSION['status_code']="Error";
                header("location: ./user.php");
            }
            

        }else{
            $_SESSION['status']="Password Mismatch try again";
            $_SESSION['status-code']="Error";
            header("location: ./user.php");
        }

    }


}




?>



