<?php session_start();?>

<?php 
include('./security.php');
include('./includes/header.php'); ?>
<?php include('./includes/navbar.php');?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
            <div id="content">

               
<?php include('./includes/top-bar.php');?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 ml-2 mb-0 text-gray-800">Events For Inside india</h1>
                    </div>
                   
                    <div class="row ml-2">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                              Add New Event
                        </button>
                     </div>

                        <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                       <div class="modal-dialog" role="document">
                         <div class="modal-content">
                     <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Add New Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="./code.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        <div class="modal-body">

            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" id="title" class="form-control" placeholder="" required>
            </div>

            <div class="row">
            <div class="form-group col-6">
              <label for="fromPlace">From Place</label>
              <input type="text" name="fromplace" id="fromplace" class="form-control" placeholder="" required>
            </div>
            <div class="form-group col-6">
              <label for="toPlace">To Place</label>
              <input type="text" name="toplace" id="toplace" class="form-control" placeholder="" required>
            </div>
            </div>
           

            <div class="form-group">
              <label for="date">Date</label>
              <input type="date" name="date" id="date" class="form-control" placeholder="" required>
            </div>

            <div class="form-group">
              <label for="time">Time</label>
              <input type="time" name="time" id="time" class="form-control" placeholder="" required>
            </div>

            <div class="form-group">
              <label for="price">Price</label>
              <input type="tel" name="price" id="price" class="form-control" placeholder="" required>
            </div>
           <div class="form-group">
             <label for="image">Image</label>
             <input type="file" accept="image/*" name="image" id="image" class="form-control" placeholder="" >
            
           </div>
           <div class="form-group">
             <label for="image">Image Description</label>
             <input type="text" name="image_text" id="image_text" class="form-control" placeholder="" >
            
           </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="eventSaveBtn" class="btn btn-primary">Save</button>
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
                            <h6 class="m-0 font-weight-bold text-primary">Events</h6>
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
                                ?>
                                <p style="color: green;">
                                <?php
                                echo $_SESSION['status-code'];
                                $_SESSION['status-code']='';
                                session_destroy();
                               ?>
                               </p>
                               <?php
                                
                            }
                           
                        ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>From Place</th>
                                            <th>To Place</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                           <tr>
                                               <td>Coimbatore Event</td>
                                               <td>Coimbatore</td>
                                               <td>Chennai</td>
                                               <td>12-08-2020</td>
                                               <td>12:00PM</td>
                                               <td>Rs.2000</td>
                                               <td>img_12.png</td>
                                               <td><button class="btn btn-primary">Edit</button></td>
                                               <td><button class="btn btn-danger">Delete</button></td>
                                           </tr>
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