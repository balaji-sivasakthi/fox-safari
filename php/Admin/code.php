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
    $_SESSION['status']='<p style="color: green;">SuccessFully Deleted</p>';


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
    // Get image name
    $msg = "";
    $image_text = $_POST['image_text'];
    $image = $_FILES['image']['name'];
    // Get text
    $image_text = mysqli_real_escape_string($connection, $image_text);

    // image file directory
    $target = "images/inside/".basename($image);

  //  $sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
    // execute query
    
//$result = mysqli_query($db, "SELECT * FROM images");
    $inside_query = " INSERT INTO inside ( title, fromplace, toplace, date, time, price, image, image_text) VALUES ('$title', '$fromplace', '$toplace', '$date', '$time', '$price', '$image', '$image_text')";
    $inside_query_run = mysqli_query($connection,$inside_query);
  //  mysqli_query($connection, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
 /*   if($inside_query_run){
        echo("Success");

    }else{
        echo("Not Success");
    }   */
    $_SESSION['status']='<p style="color: green;">SuccessFully added</p>';
    header("location:./event_inside.php");
} 




//inside event delete






if(isset($_POST['eventDeleteBtn'])){
    $edit_id = $_POST['editid'];
    $equery="DELETE FROM inside WHERE id='$edit_id'";
    $equery_run=mysqli_query($connection,$equery);
    $_SESSION['status']='<p style="color: green;">SuccessFully Deleted</p>';
    header("Location:./event_inside.php");
} 




//outside event




if(isset($_POST['outeventSaveBtn'])){
    $title = $_POST['title'];
    $fromplace = $_POST['fromplace'];
    $toplace = $_POST['toplace'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $price = $_POST['price'];
    // Get image name
    $msg = "";
    $image_text = $_POST['image_text'];
    $image = $_FILES['image']['name'];
    // Get text
    $image_text = mysqli_real_escape_string($connection, $image_text);

    // image file directory
    $target = "images/outside/".basename($image);

  //  $sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
    // execute query
    
//$result = mysqli_query($db, "SELECT * FROM images");
   // echo "success";
    $outside_query = " INSERT INTO outside ( title, fromplace, toplace, date, time, price, image, image_text) VALUES ('$title', '$fromplace', '$toplace', '$date', '$time', '$price', '$image', '$image_text')";
    $outside_query_run = mysqli_query($connection,$outside_query);
  //  mysqli_query($connection, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
       
    }else{
        $msg = "Failed to upload image";
    }
 /*   if($inside_query_run){
        echo("Success");

    }else{
        echo("Not Success");
    }   */
    $_SESSION['status']='<p style="color: green;">SuccessFully added</p>';
    header("location:./event_outside.php");

} 




// outside event delete






if(isset($_POST['outeventDeleteBtn'])){
    $edit_id = $_POST['editid'];
    $equery="DELETE FROM outside WHERE id='$edit_id'";
    $equery_run=mysqli_query($connection,$equery);
    $_SESSION['status']='<p style="color: green;">SuccessFully Deleted</p>';


    header("Location:./event_outside.php");
}




//gallery inside





if(isset($_POST['insidegalleryBtn'])){
    // Get image name
    $msg = "";
    $image_text = $_POST['image_text'];
    $image = $_FILES['image']['name'];
    // Get text
    $image_text = mysqli_real_escape_string($connection, $image_text);

    // image file directory
    $target = "gallery/inside/".basename($image);

  //  $sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
    // execute query
    
//$result = mysqli_query($db, "SELECT * FROM images");
    $inside_query = " INSERT INTO galleryin ( image, image_text) VALUES ('$image', '$image_text')";
    $inside_query_run = mysqli_query($connection,$inside_query);
  //  mysqli_query($connection, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
        $_SESSION['status']='<p style="color: green;">SuccessFully added</p>';
    }else{
        $msg = "Failed to upload image";
        $_SESSION['status']='<p style="color: red;">Failed to upload image</p>';
    }

    header("Location:./gallery_inside.php");
}




//gallery outside



if(isset($_POST['outsidegalleryBtn'])){
    // Get image name
    $msg = "";
    $image_text = $_POST['image_text'];
    $image = $_FILES['image']['name'];
    // Get text
    $image_text = mysqli_real_escape_string($connection, $image_text);

    // image file directory
    $target = "gallery/outside/".basename($image);

  //  $sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
    // execute query
    
//$result = mysqli_query($db, "SELECT * FROM images");
    $outside_query = " INSERT INTO galleryout ( image, image_text) VALUES ('$image', '$image_text')";
    $outside_query_run = mysqli_query($connection,$outside_query);
  //  mysqli_query($connection, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
        $_SESSION['status']='<p style="color: green;">SuccessFully added</p>';
    }else{
        $msg = "Failed to upload image";
    }

    header("Location:./gallery_outside.php");
}





//gallery inside delete





if(isset($_POST['galleryinDeleteBtn'])){
    $edit_id = $_POST['editid'];
    $equery="DELETE FROM galleryin WHERE id='$edit_id'";
    $equery_run=mysqli_query($connection,$equery);
    $_SESSION['status']='<p style="color: green;">SuccessFully Deleted</p>';
 header("Location:./gallery_inside.php");
}





//gallery outside delete



if(isset($_POST['galleryoutDeleteBtn'])){
    $edit_id = $_POST['editid'];
    $equery="DELETE FROM galleryout WHERE id='$edit_id'";
    $equery_run=mysqli_query($connection,$equery);
    header("Location:./gallery_outside.php");
    $_SESSION['status']='<p style="color: green;">SuccessFully Deleted</p>';

}


?>



