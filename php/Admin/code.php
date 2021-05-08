<?php
session_start();
include('./security.php');

//  Admin Registration
$username = $password = $confirm_password = $phone = $name = $email = "";


if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $hash_password=md5($password);

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
            $query = "INSERT INTO admin (user,pass,email) VALUES ('$username','$hash_password','$email')";
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
    $hash_password=md5($password);

    $email_query = "SELECT * FROM user WHERE email ='$email'";
    $email_run= mysqli_query($connection,$email_query);
    if(mysqli_num_rows($email_run)>0){    
        $_SESSION['status']="Email Already Taken. Please Try Another one.";
        $_SESSION['status_code']="error";
        header("Location:/user.php");

    }else{

        if($password===$cpassword){

            $insert_query="INSERT INTO user  (name,phone,email,password) VALUES('$user','$phone','$email','$hash_password')";
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

// User Edit 

if(isset($_POST['editUserMainBtn']))
{
    $edit_id = $_POST['editid'];
    $name=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $pass=md5($_POST['password']);
    $equery="UPDATE user SET name='$name' ,phone='$phone',email='$email',password='$pass' WHERE id ='$edit_id'" ;
    $equery_run=mysqli_query($connection,$equery);
    if($insert_run){
           
        
       
        $_SESSION['status']='<p style="color: green;">User Record Edited Sucessfully</p>';
        $_SESSION['status_code']="Success";
        header("location: ./user.php");


    }else
    {
        $_SESSION['status']='<p style="color: red;">User Record Not Edited</p>';
        $_SESSION['status_code']="Error";
        header("location: ./user.php");
    }

}


// Edit cancel
if(isset($_POST['editCancel']))
{
    header("Location:./user.php");
}



// User Delete 

if(isset($_POST['userDeleteBtn'])){
    $edit_id = $_POST['editid'];
    $equery="DELETE FROM user WHERE id='$edit_id'";
    $equery_run=mysqli_query($connection,$equery);
    $_SESSION['status']='<p style="color: green;">SuccessFully Deleted</p>';


    header("Location:./user.php");
}


// Admin Delete 

if(isset($_POST['adminDeleteBtn'])){
    $edit_id = $_POST['editid'];
    $equery="DELETE FROM admin WHERE id='$edit_id'";
    $equery_run=mysqli_query($connection,$equery);
    $_SESSION['status']="Successfully Deleted";


    header("Location:./admin.php");
}
// event filling -inside india

if(isset($_POST['eventSaveBtn'])){
    $title = $_POST['title'];
    $fromplace = $_POST['fromplace'];
    $toplace = $_POST['toplace'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $price = $_POST['price'];
   // $image = $_POST['image'];
    $inside_query = "INSERT INTO inside (title,fromplace,toplace,date,time,price) VALUES ('$title','$fromplace','$toplace','$date',$time,'$price')";
    $inside_query_run = mysqli_query($connection, $inside_query);
}   

?>



