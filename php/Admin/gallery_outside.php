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
                        <h1 class="h4 ml-2 mb-0 text-gray-800">Gallery Outside </h1>
                    </div>
                   
                    <div class="row ml-2">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                              Add Photos
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
            <button type="submit" name="outsidegalleryBtn" class="btn btn-primary">Upload</button>
        </div>
      </form>

    </div>
  </div>
</div>

<?php

$tq="SELECT * FROM galleryout";
$tr = mysqli_query($connection,$tq);

?>

 <!-- Fox Admin  -->
 <div class="card shadow mt-5 mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Gallery</h6>
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
                                            
                                            <th>Image name</th>
                                            <th>Image preview</th>
                                            <th>Image Description</th>
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
                                              
                                               <td><?php echo($row['image']);?></td>
                                               <td>
                                               <?php $image_path = $row['image']; ?>
                                               <img src="/php/Admin/gallery/outside/<?php echo $image_path;?>" width="170" height="100">
                                               </td>
                                               <td><?php echo($row['image_text']);?></td>
                                               <td><button class="btn btn-primary">Edit</button></td>
                                               <td>
                                                <form action="code.php" method="post">
                                                    <input type="hidden" name="editid" value="<?php echo($row['id']);?>" > 
                                                    <button type="submit" name="galleryoutDeleteBtn" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
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