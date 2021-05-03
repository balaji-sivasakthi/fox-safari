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
                        <h1 class="h4 ml-2 mb-0 text-gray-800">Edit User</h1>
                    </div>

                <?php
                
                $Eq="SELECT * FROM user";
                $Er = mysqli_query($connection,$Eq);
                foreach($Er as $row){

                }
                
                
                ?>

                 <form action="./code.php" method="POST">

                    <div class="modal-body">

                        <div class="form-group">
                            <label> Username </label>
                            <input type="text" name="username" value="" class="form-control" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control checking_email" placeholder="Enter Email">
                            <small class="error_email" style="color: red;"></small>
                        </div>
                        <div class="form-group">
                            <label>Phone number</label>
                            <input type="tel" name="phone" class="form-control" placeholder="Enter phone number">
                            <small class="error_phone" style="color: red;"></small>
                        </div>    
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password">
                        </div>

                        <div>
                            <button type="button" class="btn btn-secondary mr-3" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="editUserMainBtn" class="btn btn-primary">Edit</button>
                        </div>
      </form>

                </div>
                <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<?php 
include('./includes/scripts.php');
include('./includes/footer.php');
?>