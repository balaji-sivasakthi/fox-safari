<?php 
session_start();
include('./includes/header.php');
include('./includes/navbar.php');
include('./Database/dbconfig.php');
?>

   <!-- Content Wrapper -->
   <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

               
<?php include('./includes/top-bar.php');?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 ml-2 mb-0 text-gray-800">Edit Admin</h1>
                    </div>

                    <?php
                    
                    
                    $editid = $_POST['editid'];
                    $eq="SELECT * FROM admin WHERE id ='$editid' ";
                    $eq_r=mysqli_query($connection,$eq);
                    foreach($eq_r as $row){
?>


<form action="./code.php" method="POST">

                    <div class="modal-body">

                        <div class="form-group">
                            <label> Username </label>
                            <input type="text" name="username" value="<?php echo($row['name']); ?>" class="form-control" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="<?php echo($row['email']); ?>" class="form-control checking_email" placeholder="Enter Email">
                            <small class="error_email" style="color: red;"></small>
                        </div>
                        <div class="form-group">
                            <label>Phone number</label>
                            <input type="tel" name="phone" value="<?php echo($row['phone']); ?>" class="form-control" placeholder="Enter phone number">
                            <small class="error_phone" style="color: red;"></small>
                        </div>    
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password"   value="<?php echo(""); ?>" name="password" autocomplete="off" class="form-control" placeholder="Enter Password">
                        </div>

                        <div>
                            <button type="submit" class="btn btn-secondary mr-3" name ="editCancel" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="editUserMainBtn" class="btn btn-primary">Edit</button>
                        </div>
      </form>


                   <?php     }
                    
                    ?>

                 

                </div>
                <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<?php 
include('./includes/scripts.php');
include('./includes/footer.php');
?>