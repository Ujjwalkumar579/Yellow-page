 <?php session_start();
    
    if(isset($_SESSION['get']))
        {
            header('location:login_register.php');
        }
        
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
        <title>Classified</title>
        <link href="./bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="./fontawesome-free-5.15.2-web/fontawesome-free-5.15.2-web/css/fontawesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
        <link href="./css/styles.css" rel="stylesheet">
    </head>

    <body>





    <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <ul class="login">
                        <li><i class="far fa-plus-square fa-xs"></i>&nbsp;<span> <a href="Logout.php"> Logout </a> </li>
                        <li><i class="fas fa-key fa-xs"></i>&nbsp;<span><a href="login_register.php"> Register</a> </span> </li>
                    </ul>
                </div>


                <div class="col-lg-8 col-12">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
                            <span class="fas fa-bars"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="nav">
                            <ul class="navbar-nav top-nav ">
                                <li class="nav-item"><a href="index.php" class="nav-link active" >Home</a></li>
                                <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                                <li class="nav-item"><a href="contactus.php" class="nav-link ">Contact</a></li>
                                <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
                                <li class="nav-item dropdown">
                                    <a href="" class="nav-link" data-bs-toggle="dropdown">Pages</a>
                                    <ul class="dropdown-menu p-2">
                                        <li><a href="FAQ_page_category.php" class="dropdown-item">FAQ page</a></li>
                                        <li><a href="dashboard.php" class="dropdown-item">Dashboard</a></li>
                                    </ul> 

                                </li>
                                <li class="nav-item"><a href="term_condition.php" class="nav-link">Term & Condition</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div><hr> 
        <!-----top-nav header end------>





        <!-------------2nd top header------>

        <div class="container pt-3">
            <div class="row">
                <div class="col-lg-3">
                    <p><a href="index.php" class="navbar-brand" ><img src="./img/logo.png" alt="logo"></a> </p> 
                </div>

                <div class="col-lg-9">
                    <form action="" method="POST">
                        <div class="row select-input">
                            <div class="col-lg-3">
                                    <select class="form-control city border-4 border-warning" name="cityname">
                                            <option selected disabled>Select City</option>
                                            <option>Ranchi</option>
                                            <option>Gaya</option>
                                            <option>Patna</option>
                                            <option>Varanasi</option>
                                            <option>Delhi</option>
                                            <option>Mumbai</option>
                                    </select> <p></p>
                            </div> 

                            <div class="col-lg-3">
                                    <select class="form-control city border-4 border-warning" name="">
                                            <option selected disabled>Select Category</option>
                                            <option>Vehicle</option>
                                            <option>Mobiles</option>
                                            <option>Electronics</option>
                                            <option>Real Estate</option>
                                            <option>Fashion</option>
                                            <option>Furniture</option>
                                    </select> <p></p>
                            </div>

                            <div class="col-lg-4">
                                <div class="input-group  ">
                                    <input type="text" class="form-control grp1 border-4 border-warning" placeholder="Enter Keyword" name="keyword" autocomplete="off">
                                    <input type="button" class="btn btn-warning border-4 border-warning grp2" value="&#xF002; Search">
                                </div> <p></p>
                            </div>

                            <div class="col-lg-2">
                            <a href="addlisting.php" class="btn btn-dark form-control listing border-4 border-dark"><b> Add Listing</b></a> <p></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <hr>




















        <div class="container pb-5">
            <div class="row">
                <div class="col-12 border p-0">
                    <div class="bg-grey">
                        <div class="row">
                            <div class="col-md-3 col-5">
                                <div class="profile-pic">
                                    <img src="./img/team1.jpg" alt="profile-pic">
                                </div>
                            </div>

                            <div class="col-md-9 col-7 profile-name">
                                <h3>
                                    <?php 
                                    // $conn = mysqli_connect('localhost','root','','yellow_page') ;
                                            // $sql = "SELECT * FROM login_register";
                                            // $result = mysqli_query($conn,$sql);
                                            // $row = mysqli_fetch_assoc($result);
                                            echo $_SESSION['get'];
                                            
                                                
                                    ?>
                                
                                </h3>
                                <i class="fas fa-map-marker-alt"></i>  <span>Gaya, Bihar</span> 
                                    <div class="logout-btn text-center">
                                        <button class="btn btn-dark text-warning"><a href="Logout.php"> <b>Logout</b> </a></button>
                                    </div>
                                <p>Create Account : 2 Years ago</p>

                                <ul class="nav nav-pills nav-justified  p-4">
                                    <li class="nav-item ">
                                       <a href="" data-bs-target="#first" data-bs-toggle="tab" class="nav-link active">
                                       <i class="far fa-id-card"></i> Dashboard </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" data-bs-target="#second" data-bs-toggle="tab" class="nav-link ">
                                        <i class="fas fa-search"></i> My Ads</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" data-bs-target="#third" data-bs-toggle="tab" class="nav-link ">
                                        <i class="fas fa-th-large"></i> My Searches</a>
                                    </li>

                                    

                                    <li class="nav-item">
                                        <a href="#" data-bs-target="#fifth" data-bs-toggle="tab" class="nav-link ">
                                        <i class="fas fa-cogs fa-xs"></i> Favourite Ads</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" data-bs-target="#fifth" data-bs-toggle="tab" class="nav-link ">
                                        <i class="fas fa-cogs fa-xs"></i> Settings</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                   <div class="col-12 border pb-3">
                        <div class="row p-0">
                                <!-- Tab content start here -->

                                <div class="tab-content">

                                <!-- First Tab -->
                                    <div class="tab-pane fade-show  content-in-tab" id="first">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pretium dictum diam vel laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer dictum justo nec lacus porta congue. Phasellus convallis ut urna a lobortis. Vestibulum bibendum quam ligula, ac fringilla mi efficitur sed. Curabitur non augue enim. Sed efficitur semper elit, eget gravida est scelerisque ut.</p>

                                           <p><a href="">Learn How It Work -</a> <span>Watch a short video that shows you have classifiedspot works..</span> </p>
                                           <p><a href="">Get Help -</a> <span>View our help section and FAQ to get started on classifiedspot.</span> </p>
                                           <hr>


                                           <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-12 pt-3">
                                                                <div class="my-ads border d-flex justify-content-center p-5">
                                                                <a href=""> <div class="my-ads-inner">
                                                                        <i class="far fa-id-card fa-3x text-dark"></i>
                                                                    </div></a>

                                                                </div>

                                                            
                                                            </div>


                                                            <div class="col-lg-3 col-md-6 col-12 pt-3">
                                                                <div class="my-ads border d-flex justify-content-center p-5">
                                                                <a href=""> <div class="my-ads-inner">
                                                                        <i class="fas fa-search fa-3x text-dark"></i>
                                                                    </div></a>

                                                                </div>

                                                            
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-12 pt-3">
                                                                <div class="my-ads border d-flex justify-content-center p-5">
                                                                <a href=""> <div class="my-ads-inner">
                                                                        <i class="fas fa-th-large fa-3x text-dark"></i>
                                                                    </div></a>

                                                                </div>

                                                            
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-12 pt-3">
                                                                <div class="my-ads border d-flex justify-content-center p-5">
                                                                <a href=""> <div class="my-ads-inner">
                                                                        <i class="fas fa-comments fa-3x text-dark"></i>
                                                                    </div></a>

                                                                </div>

                                                            
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-12 pt-3">
                                                                <div class="my-ads border d-flex justify-content-center p-5">
                                                                <a href="dsdc"> <div class="my-ads-inner">
                                                                        <i class="fas fa-cogs fa-3x text-dark"></i>
                                                                    </div> </a>

                                                                </div>

                                                            
                                                            </div>
                                                        </div>
                                           
                                    </div>

                                    <!-- First Tab end -->  

                                    <!-- Second Tab -->

                                    <div class="tab-pane fade-show content-in-tab" id="second">
                                            <div class="row m-3 mt-4 border rounded">
                                             
                                                <div class="col-md-3 col-12 p-0 m-0 ">
                                                    <img src="./img/car1.jpg" class=" rounded-left img-fluid p-0" height="" alt="car">
                                                </div>

                                                <div class="col-md-9 col-12 pt-3">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <h5>Ads post title here</h5>
                                                            <p>Category : Vehicle</p>
                                                            <i class="fas fa-map-marker-alt fa-xs"></i>
                                                            <span> Ludhiana, Punjab, India</span> &nbsp; &nbsp;
                                                            <i class="far fa-clock fa-xs"></i>
                                                            <span>15 Hour ago</span>

                                                        </div>

                                                         <div class="col-md-7">
                                                            <span class="badge text-dark"><a href="#">&#8377;12000</a></span> &nbsp;
                                                            <span class="badge text-dark"><a href="#"><i class="far fa-eye"></i></a></span> &nbsp;
                                                            <span class="badge text-dark"><a href="#"><i class="fas fa-pen"></i></a></span> &nbsp;
                                                            <span class="badge text-dark"><a href="#"><i class="fas fa-upload"></i></a></span> &nbsp;
                                                            <span class="badge text-dark"><a href="#"><i class="fas fa-trash-alt"></i></a></span> &nbsp;
                                                         </div> <hr>
                                                    </div> 
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pretium dictum diam vel laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer dictum justo nec lacus porta congue....</p>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            
                                                    </div>
                                                        
                                            
                                                    </div>
                                                    

                                                   
                                                </div>


                                                <!-- <div class="col-md-3 col-12 p-0">
                                                    <img src="./img/car1.jpg" alt="car" class="img-fluid">
                                                </div> -->

                                            </div>



                                            <div class="row m-3 mt-4 border rounded">
                                             
                                                <div class="col-md-3 col-12 p-0 m-0 ">
                                                    <img src="./img/car1.jpg" class=" rounded-left img-fluid p-0" height="" alt="car">
                                                </div>

                                                <div class="col-md-9 col-12 pt-3">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <h5>Ads post title here</h5>
                                                            <p>Category : Vehicle</p>
                                                            <i class="fas fa-map-marker-alt fa-xs"></i>
                                                            <span> Ludhiana, Punjab, India</span> &nbsp; &nbsp;
                                                            <i class="far fa-clock fa-xs"></i>
                                                            <span>15 Hour ago</span>

                                                        </div>

                                                         <div class="col-md-7">
                                                            <span class="badge text-dark"><a href="#">&#8377;12000</a></span> &nbsp;
                                                            <span class="badge text-dark"><a href="#"><i class="far fa-eye"></i></a></span> &nbsp;
                                                            <span class="badge text-dark"><a href="#"><i class="fas fa-pen"></i></a></span> &nbsp;
                                                            <span class="badge text-dark"><a href="#"><i class="fas fa-upload"></i></a></span> &nbsp;
                                                            <span class="badge text-dark"><a href="#"><i class="fas fa-trash-alt"></i></a></span> &nbsp;
                                                         </div> <hr>
                                                    </div> 
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pretium dictum diam vel laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer dictum justo nec lacus porta congue....</p>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            
                                                    </div>
                                                        
                                            
                                                    </div>
                                                    

                                                   
                                                </div>


                                                <!-- <div class="col-md-3 col-12 p-0">
                                                    <img src="./img/car1.jpg" alt="car" class="img-fluid">
                                                </div> -->

                                            </div>



                                            <div class="row m-3 mt-4 border rounded">
                                             
                                                <div class="col-md-3 col-12 p-0 m-0 ">
                                                    <img src="./img/car1.jpg" class=" rounded-left img-fluid p-0" height="" alt="car">
                                                </div>

                                                <div class="col-md-9 col-12 pt-3">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <h5>Ads post title here</h5>
                                                            <p>Category : Vehicle</p>
                                                            <i class="fas fa-map-marker-alt fa-xs"></i>
                                                            <span> Ludhiana, Punjab, India</span> &nbsp; &nbsp;
                                                            <i class="far fa-clock fa-xs"></i>
                                                            <span>15 Hour ago</span>

                                                        </div>

                                                         <div class="col-md-7">
                                                            <span class="badge text-dark"><a href="#">&#8377;12000</a></span> &nbsp;
                                                            <span class="badge text-dark"><a href="#"><i class="far fa-eye"></i></a></span> &nbsp;
                                                            <span class="badge text-dark"><a href="#"><i class="fas fa-pen"></i></a></span> &nbsp;
                                                            <span class="badge text-dark"><a href="#"><i class="fas fa-upload"></i></a></span> &nbsp;
                                                            <span class="badge text-dark"><a href="#"><i class="fas fa-trash-alt"></i></a></span> &nbsp;
                                                         </div> <hr>
                                                    </div> 
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pretium dictum diam vel laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer dictum justo nec lacus porta congue....</p>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            
                                                    </div>
                                                        
                                            
                                                    </div>
                                                    

                                                   
                                                </div>


                                                <!-- <div class="col-md-3 col-12 p-0">
                                                    <img src="./img/car1.jpg" alt="car" class="img-fluid">
                                                </div> -->

                                            </div>



                                            <div class="row m-3 mt-4 border rounded">
                                             
                                                <div class="col-md-3 col-12 p-0 m-0 ">
                                                    <img src="./img/car1.jpg" class=" rounded-left img-fluid p-0" height="" alt="car">
                                                </div>

                                                <div class="col-md-9 col-12 pt-3">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <h5>Ads post title here</h5>
                                                            <p>Category : Vehicle</p>
                                                            <i class="fas fa-map-marker-alt fa-xs"></i>
                                                            <span> Ludhiana, Punjab, India</span> &nbsp; &nbsp;
                                                            <i class="far fa-clock fa-xs"></i>
                                                            <span>15 Hour ago</span>

                                                        </div>

                                                         <div class="col-md-7">
                                                            <span class="badge text-dark"><a href="#">&#8377;12000</a></span> &nbsp;
                                                            <span class="badge text-dark"><a href="#"><i class="far fa-eye"></i></a></span> &nbsp;
                                                            <span class="badge text-dark"><a href="#"><i class="fas fa-pen"></i></a></span> &nbsp;
                                                            <span class="badge text-dark"><a href="#"><i class="fas fa-upload"></i></a></span> &nbsp;
                                                            <span class="badge text-dark"><a href="#"><i class="fas fa-trash-alt"></i></a></span> &nbsp;
                                                         </div> <hr>
                                                    </div> 
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pretium dictum diam vel laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer dictum justo nec lacus porta congue....</p>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            
                                                    </div>
                                                        
                                            
                                                    </div>
                                                    

                                                   
                                                </div>


                                                <!-- <div class="col-md-3 col-12 p-0">
                                                    <img src="./img/car1.jpg" alt="car" class="img-fluid">
                                                </div> -->

                                            </div>


                                            <div class="row m-3 mt-4 border rounded">
                                             
                                                <div class="col-md-3 col-12 p-0 m-0 ">
                                                    <img src="./img/car1.jpg" class=" rounded-left img-fluid p-0" height="" alt="car">
                                                </div>

                                                <div class="col-md-9 col-12 pt-3">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <h5>Ads post title here</h5>
                                                            <p>Category : Vehicle</p>
                                                            <i class="fas fa-map-marker-alt fa-xs"></i>
                                                            <span> Ludhiana, Punjab, India</span> &nbsp; &nbsp;
                                                            <i class="far fa-clock fa-xs"></i>
                                                            <span>15 Hour ago</span>

                                                        </div>

                                                         <div class="col-md-7">
                                                            <span class="badge text-dark"><a href="#">&#8377;12000</a></span> &nbsp;
                                                            <span class="badge text-dark"><a href="#"><i class="far fa-eye"></i></a></span> &nbsp;
                                                            <span class="badge text-dark"><a href="#"><i class="fas fa-pen"></i></a></span> &nbsp;
                                                            <span class="badge text-dark"><a href="#"><i class="fas fa-upload"></i></a></span> &nbsp;
                                                            <span class="badge text-dark"><a href="#"><i class="fas fa-trash-alt"></i></a></span> &nbsp;
                                                         </div> <hr>
                                                    </div> 
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pretium dictum diam vel laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer dictum justo nec lacus porta congue....</p>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            
                                                    </div>
                                                        
                                            
                                                    </div>
                                                    

                                                   
                                                </div>


                                                <!-- <div class="col-md-3 col-12 p-0">
                                                    <img src="./img/car1.jpg" alt="car" class="img-fluid">
                                                </div> -->

                                            </div>
                                    </div> 

                                    <!-- Second tab end -->


                                    <!-- Third tab content -->

                                            <div class="tab-pane fade-show content-in-tab active" id="third">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="row">

                                                            <div class="col-md-3 pt-3">
                                                                <div class="icons border p-4 rounded-circle">
                                                                    <img src="./img/icon1.png" class="img-fluid" alt="">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-7">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    <!-- Third tab content end  -->

                                </div>  
                                        
                            <!-- tab content ends here -->
                        
                        </div>

                        
                   </div> 
                    
                   
                   
                
                
                    
                
            </div>
        </div>











    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
        <script src="./fontawesome-free-5.15.2-web/fontawesome-free-5.15.2-web/js/all.min.js"></script>
        <script src="./bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    </body>
</html>