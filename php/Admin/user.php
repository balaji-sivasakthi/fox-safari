<?php session_start();
    include('./security.php');
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
                        <h1 class="h4 ml-2 mb-0 text-gray-800">Add Users</h1>
                    </div>
                   
                    <div class="row ml-2">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                              Add User
                        </button>
                     </div>

                        <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                       <div class="modal-dialog" role="document">
                         <div class="modal-content">
                     <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="./code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control checking_email" placeholder="Enter Email" required>
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Phone number</label>
                <input type="tel" name="phone" class="form-control" placeholder="Enter phone number" required>
                <small class="error_phone" style="color: red;"></small>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required>
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerUserBtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<?php

$tq="SELECT * FROM user";
$tr = mysqli_query($connection,$tq);

?>


 <!-- Fox Admin  -->
 <div class="card shadow mt-5 mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Fox user</h6>
                        </div>
                       
                        <div class="card-body">
                            <div class="table-responsive">
                            <?php
                            if (isset($_SESSION['status']) && $_SESSION['status']!=''){
                                ?>
                                <p style="color: green;">
                                <?php
                                echo $_SESSION['status'];
                                $_SESSION['status']='';
                                session_destroy();
                               ?>
                               </p>
                               <?php
                            }
                            if (isset($_SESSION['status-code']) && $_SESSION['status-code']!=''){
                               
                                echo $_SESSION['status-code'];
                                $_SESSION['status-code']='';
                                session_destroy();
                                
                            }
                           
                        ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Encrypted Password</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                   <?php
                                       
                                        if(mysqli_num_rows($tr)>0)
                                        {

                                            while($row = mysqli_fetch_assoc($tr))
                                            {
                                               ?>


                                            

                                            <tr>
                                                <td><?php echo($row['name']);?></td>
                                                <td><?php echo($row['phone']);?></td>
                                                <td><?php echo($row['email']);?></td>
                                                <td><?php echo($row['password']);?></td>
                                                <td>
                                                    <form action="edit_user.php" method="post">
                                                    <input type="hidden" name="editid" value="<?php echo($row['id']);?>" > 
                                                    <button type="submit" name="userEditBtn" class="btn btn-primary">Edit</button>
                                                    </form>
                                                </td>
                                                <td>
                                                <form action="code.php" method="post">
                                                    <input type="hidden" name="editid" value="<?php echo($row['id']);?>" > 
                                                    <button type="submit" name="userDeleteBtn" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>


                                            <?php 
                                            }

                                        }
                                        else{
                                          echo ("<p>No record Found</p>");
                                        }
                                        ?>
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>

      </div>
      <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->





<?php include('./includes/scripts.php')?>
<?php include('./includes/footer.php')?>
