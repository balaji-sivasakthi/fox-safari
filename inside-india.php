<?php include('./php/Admin/Database/dbconfig.php')?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Latrosoft is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="https://latrosoft.tech">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Inside</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
	
    <!--Owl Carousel-->

                <!-- Important Owl stylesheet -->
            <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
            
            <!-- Default Theme -->
            <link rel="stylesheet" href="owl-carousel/owl.theme.css">
            
            <!--  jQuery 1.7+  -->
            <script src="jquery-1.9.1.min.js"></script>
            
            <!-- Include js plugin -->
            <script src="assets/owl-carousel/owl.carousel.js"></script>

    <!--End od Owl Carousel-->

	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Latrosoft</a> -->

         <!-- Image Logo -->
         <a  class="navbar-brand logo-image" style="text-decoration: none;" href="index.html">
            <!-- <img src="images/logo.svg" alt="alternative">-->
           <h3 style="color: antiquewhite;margin: 0px;"  >Fox Safaries</h3>
         </a>
         
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" Latrosoft-controls="navbarsExampleDefault" Latrosoft-expanded="false" Latrosoft-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/index.php">HOME <span class="sr-only">(current)</span></a>
                </li>

                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="index.php#about" id="navbarDropdown" role="button" Latrosoft-haspopup="true" Latrosoft-expanded="false">TOUR</a>
                    <div class="dropdown-menu" Latrosoft-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="inside-india.php"><span class="item-text">Inside India</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="outside-india.php"><span class="item-text">Outside India</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php#services">GALLERY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php#testi">TESTIMONIAL</a>
                </li>
               

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php#contact">CONTACT</a>
                </li>
            </ul>
            <span class="nav-item">
                <span class="social">
                    <a style="text-decoration: none;" class="social-a popup-with-move-anim" href="#login">
                        <span class="social-box ">SIGN IN</span>
                       
                    </a>
                </span>
            </span>
            <span class="nav-item">
                <span class="social">
                    <a style="text-decoration: none;" class="social-a popup-with-move-anim" href="#signup">
                        <span class="social-box">SIGN UP</span>
                       
                    </a>
                </span>

            </span>
            
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->



    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Inside India</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->



    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a><i class="fa fa-angle-double-right"></i><span>Inside India</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->
<br>
    <!-- Project Lightboxes -->
    <!-- Lightbox -->
    <div id="login" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">??</button>
            <div class="col-lg-12">
                <h3>Sign In</h3>
                <hr class="line-heading">
              <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Enter your email address" >
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" class="form-control" placeholder="Enter a password">
              </div>
               
                <a class="btn-solid-reg" href="#your-link">Login</a> <a class="btn-outline-reg mfp-close as-button popup-with-move-anim" href="#signup">Sign Up</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

  

  <!-- Project Lightboxes -->
    <!-- Lightbox -->
    <div id="signup" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">??</button>
        
            <div class="col-lg-12">
                <h3>Sign Up</h3>
                <hr class="line-heading">


                    <form action="" method="post">


                        <div class="form-group">

                            <label for="fname">Full name <span class="red">*</span></label>
                            <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter your fullname" >

                        </div>
               
                          
                        <div class="form-group">

                            <label for="phone">Phone<span class="red"> *</span></label>
                            <input type="phone" name="phone" id="phone" class="form-control" placeholder="Enter your phone number" >
                       
                        </div>
                           
                        <div class="form-group">
                            <label for="email">Email<span class="red"> *</span></label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your Email Address" >
                        </div>
                           
                        <div class="form-group">

                            <label for="pass">Password<span class="red"> *</span></label>
                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Enter a password">

                        </div>
        
                           
                        <div class="form-group">
                         
                            <label for="cpass">Confirm Password<span class="red"> *</span></label>
                            <input type="password" name="cpass" id="cpass" class="form-control" placeholder="confirm password">

                        </div>
                           
                      
                            <div class="form-group">
                                <a class="btn-solid-reg" href="#your-link">Sign Up</a> <a class="btn-outline-reg mfp-close as-button popup-with-move-anim" href="#login">Sign In</a> 
                            </div>
        
                      


                    </form>
             
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->







  <div class="container">
      <div class="row">
         <div  class="col-lg-12 ">
           
             <div class="big-tour-card">
                <img width="100%" height="100%" src="/images/best-wildlife-camera.jpg" alt="">

             </div>
         </div>

<?php  

$q = "SELECT * from inside";
$eq= mysqli_query($connection,$q);

while($row = mysqli_fetch_assoc($eq))
{ ?>

<div class="col-lg-4">
            <div class="small-tour-card">
           
                <img width="100%" height="50%" src="./php/Admin/images/inside/<?php echo($row['image']);?>" alt="">
                <div class="disc">

                    <table>
                        <tr>
                            <th colspan="2" ><h2><?php echo($row['title'])?></h2></th>
                        </tr>
                        <tr>
                            <th><h6>From</h6></th>
                            <td><h6><?php echo($row['fromplace'])?></h6></td>
                        </tr>
                        <tr>
                            <th><h6>To</h6></th>
                            <td><h6><?php echo($row['toplace'])?></h6></td>
                        </tr>
                        <tr>
                            <th><h6>Date</h6></th>
                            <td><h6><?php echo($row['date'])?></h6></td>
                        </tr>
                        <tr>
                            <th><h6>Time</h6></th>
                            <td><h6><?php echo($row['time'])?></h6></td>
                        </tr>
                        <tr>
                            <th><h6>Rs.</h6></th>
                            <td><h6><?php echo($row['price'])?></h6></td>
                        </tr>
                    </table>

                    <button class=" btn btn-success w-100 ">Book</button>
                </div>

            </div>
        </div>



<?php
 } 
 
 ?>

      
        </div>
      </div>
  </div>


    <!-- Inside Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h3>India-A challenging nation with brimming youth</h3>
                        <p>India is the most preffered travel destination among the wildlife lovers who want to click the best of wilds in the woods. The country is blessed with many national parks and wildlife sancturies thus, offering an excellent opportunity to wildlife photographers.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled li-space-lg indent">
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Enjoying wild animals in their natural enviornment is just one way to enhance your experience of seeing the world you live in.</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Lorem ipsum dolor sit amet consectetur.</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, natus.</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Lorem ipsum dolor sit amet.</div>
                                    </li>
                                </ul>
                            </div> <!-- end of col -->

                            <div class="col-md-6">
                                <ul class="list-unstyled li-space-lg indent">
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Lorem ipsum dolor sit, amet consectetur adipisicing.</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Lorem ipsum dolor sit amet consectetur.</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, natus.</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Lorem ipsum dolor sit amet.</div>
                                    </li>
                                </ul>
                            </div> <!-- end of col -->
                        </div> <!-- end of row -->
                    </div> <!-- end of text-container-->
                    
                    <div class="text-container">
                        <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, suscipit?</p>
                        <ol class="li-space-lg">
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, amet?</li>
                            <li>Dolore deleniti doloremque earum amet corrupti vitae voluptatem exercitationem temporibus.</li>
                            <li>Odit fuga velit cumque dolorem numquam hic ex cum optio?</li>
                            <li>Mollitia similique corporis perferendis commodi, ex magnam eius doloribus saepe?</li>
                            <li>Mollitia necessitatibus ipsa aliquid doloremque obcaecati eos aperiam, sed dolore!</li>
                            <li>Nam quae nostrum similique, voluptatem nemo animi aspernatur ut explicabo.</li>
                            <li>Fugit esse aliquid fugiat id in quia dolorem pariatur exercitationem.</li>
                            <li>Sit quas neque modi esse? Similique sint laudantium illum quam.</li>
                            <li>Quos repellat quisquam maiores voluptas cumque possimus, consequuntur nam quidem?</li>
                            <li>Debitis quae praesentium, aspernatur quam omnis architecto autem vitae deserunt!</li>
                        </ol>
                    </div> <!-- end of text-container -->

                   
                                       
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-container last">
                                <h3>Lorem ipsum dolor sit amet.</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, molestias. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, autem.</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, laboriosam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam placeat neque aspernatur consequatur hic inventore harum molestiae doloribus fuga quasi?</p>
                            </div> <!-- end of text container -->
                        </div> <!-- end of col-->
                        <div class="col-md-6">

                            <!-- Privacy Form -->
                            <div class="form-container">
                                <form id="privacyForm" data-toggle="validator" data-focus="false">
                                    <div class="form-group">
                                        <input type="text" class="form-control-input" id="pname" required>
                                        <label class="label-control" for="pname">Name</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control-input" id="pemail" required>
                                        <label class="label-control" for="pemail">Email</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control-select" id="pselect" required>
                                            <option class="select-option" value="" disabled selected>Select Option</option>
                                            <option class="select-option" value="Delete data">Delete my data</option>
                                            <option class="select-option" value="Show me data">Show me my data</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group checkbox">
                                        <input type="checkbox" id="pterms" value="Agreed-to-Terms" required>I have read and agree to Latrosoft's <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="form-control-submit-button">SUBMIT</button>
                                    </div>
                                    <div class="form-message">
                                        <div id="pmsgSubmit" class="h3 text-center hidden"></div>
                                    </div>
                                </form>
                            </div> <!-- end of form container -->
                            <!-- end of privacy form -->

                        </div> <!-- end of col--> 
                    </div> <!-- end of row -->
                    <a class="btn-outline-reg back" href="index.html">BACK</a>
                </div> <!-- end of col-->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->
    <!-- end of privacy content -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a><i class="fa fa-angle-double-right"></i><span>Inside India</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->

    
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-container about">
                        <h4>Few Words About Latrosoft</h4>
                        <p class="white">We're passionate about creating the best mobile apps for personal develop passionate about creating the best mobile apps for. Personal develop passionate about creating the best mobile apps.</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Links</h4>
                        <ul class="list-unstyled li-space-lg white">
                            <li>
                                <a class="white" href="#your-link">startupguide.com</a>
                            </li>
                            <li>
                                <a class="white" href="terms-conditions.html">Terms & Conditions</a>
                            </li>
                            <li>
                                <a class="white" href="privacy-policy.html">Privacy Policy</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Tools</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="#your-link">startupguide.com</a>
                            </li>
                            <li>
                                <a class="white" href="terms-conditions.html">Terms & Conditions</a>
                            </li>
                            <li class="media">
                                <a class="white" href="privacy-policy.html">Privacy Policy</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Partners</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="#your-link">startupguide.com</a>
                            </li>
                            <li>
                                <a class="white" href="terms-conditions.html">Terms & Conditions</a>
                            </li>
                            <li>
                                <a class="white" href="privacy-policy.html">Privacy Policy</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright ?? 2020 <a href="https://latrosoft.tech">Template by https://latrosoft.tech</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->

    
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>