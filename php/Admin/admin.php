<?php include('./security.php')?>
<?php include('./includes/header.php') ?>
<?php include('./includes/navbar.php') ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
            <div id="content">

               
<?php include('./includes/top-bar.php');?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 ml-2 mb-0 text-gray-800">Add Admin</h1>
                    </div>
                    <?php
                            if (isset($_SESSION['status']) && $_SESSION['status']!=''){
                                echo $_SESSION['status'];
                                $_SESSION['status']='';
                                session_destroy();
                               
                            }
                            if (isset($_SESSION['status-code']) && $_SESSION['status-code']!=''){
                                echo $_SESSION['status-code'];
                                $_SESSION['status']='';
                                session_destroy();
                                
                            }
                           
                        ?>
                    <div class="row ml-2">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                              Add Admin
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
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control checking_email" placeholder="Enter Email">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<?php

$tq="SELECT * FROM admin";
$tr = mysqli_query($connection,$tq);

?>

 <!-- Fox Admin  -->
 <div class="card shadow mt-5 mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Fox Admin</h6>
                        </div>
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
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
                                               <td><?php echo($row['user']);?></td>
                                               <td><?php echo($row['email']);?></td>
                                               <td><?php echo($row['pass']);?></td>
                                               <td style="text-align: center;"><button class="btn btn-primary">Edit</button></td>
                                               <td style="text-align: center;"><button class="btn btn-danger">Delete</button></td>
                                           </tr>


                                           <?php 
                                           }

                                       }
                                       else{
                                           echo ("No record Found");
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