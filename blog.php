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
        <?php include './file/header.php'; ?>


        <div class="container">
        <div class="row">
                 <div class="col-6">
                     <nav>
                         <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
                         </ol>
                     </nav>                     
                 </div>

                 <div class="col-6">
                     <h5 class="text-end">Blog</h5>
                 </div>
             </div> <hr>
        </div>



        <div class="container">
            <div class="row">
                    <!---side menu--->
                <div class="col-lg-3 col-12">
                   <div class="side-menu-search p-3">
                        <div class="input-group">
                            <input type="text" class="form-control grp1 border-2 border-warning" placeholder="Enter Keyword" name="keyword">
                            <input type="button" class="btn btn-warning border-2 border-warning grp2" value="&#xF002; Search">
                        </div> <br>

                        <div class="side-menu-links" style="background: rgb(240, 240, 240);padding:15px;border:1px solid rgb(212, 212, 212);">
                           <div class="row">
                               <div class="col-12"> <h5>Category</h5> </div> <hr class="mt-2">
                           </div>
                           
                           <div class="row">
                               <div class="col-12"><p><a href="vehicle_category.php"> <img src="./img/motorcycle.png" width="15" height="15" alt=""> Vehicle</a></p> </div> <hr class="">
                           </div>

                           <div class="row">
                               <div class="col-12"> <p><a href="./mobile_category.php"><img src="./img/tablet.png" width="15" height="15" alt=""> Mobiles</a></p> </div> <hr class="">
                           </div>

                           <div class="row">
                               <div class="col-12"><p><a href="./electronics_category.php"><img src="./img/globe-bulb.png" width="15" height="15" alt=""> Electronics</a></p></div> <hr class="">
                           </div>

                           <div class="row">
                               <div class="col-12"><p><a href="./real-state_category.php"><img src="./img/building.png" width="15" height="15" alt=""> Real Estate</a></p></div> <hr class="">
                           </div>

                           <div class="row">
                               <div class="col-12"><p><a href="./fashion_category.php"><img src="./img/trainer.png" width="15" height="15" alt=""> Fashion</a></p></div> <hr class="">
                           </div>

                           <div class="row">
                               <div class="col-12"><p><a href="./furniture_category.php"><img src="./img/chair.png" width="15" height="15" alt=""> Furniture</a></p></div> <hr class="">
                           </div>

                           <div class="row">
                               <div class="col-12"><p><a href="./jobs_category.php"><img src="./img/briefcase.png" width="15" height="15" alt=""> Jobs</a></p></div> <hr class="">
                           </div>

                           <div class="row">
                               <div class="col-12"><p><a href="./services_category.php"><img src="./img/maintenance.png" width="15" height="15" alt=""> Services</a></p></div> <hr class="">
                           </div>

                           <div class="row">
                               <div class="col-12"><p><a href="./pets_category.php"><img src="./img/dog.png" width="15" height="15" alt=""> Pets</a></p></div> <hr class="">
                           </div>

                           <div class="row">
                               <div class="col-12"><p><a href="./Education_category.php"><img src="./img/books.png" width="15" height="15" alt=""> Education</a></p></div> <hr class="">
                           </div>

                           <div class="row">
                               <div class="col-12"><p><a href="./Matrimony_category.php"><img src="./img/man-woman.png" width="15" height="15" alt=""> Matrimony</a></p></div> <hr class="">
                           </div>

                           <div class="row">
                               <div class="col-12"><p><a href="./Notes_coins_category.php"><img src="./img/paper-money.png" width="15" height="15" alt=""> Notes and Coins</a></p></div> <hr class="">
                           </div>
                    </div>

                    <div class="side-menu-links mt-4" style="background: rgb(240, 240, 240);padding:15px;border:1px solid rgb(212, 212, 212);">
                           <div class="row">
                               <div class="col-12"> <h5>Category</h5> </div> <hr class="mt-2">
                           </div>

                           <div class="row">
                               <div class="col-12"> 
                                    <input type="text" placeholder="Enter Your Email" name="entermail" class="form-control" style="border-radius: 30px;">    
                               </div>

                               <div class="col-12 pt-3">
                                   <input type="submit" value="Subscribe" name="subscribe" class="btn btn-dark form-control" style="border-radius: 30px;">
                               </div>
                           </div>
                    </div>

                    <div class="side-menu-links mt-4" style="padding:15px;border:1px solid rgb(212, 212, 212);">
                           <div class="row">
                               <div class="col-12"> <h5>TAGS</h5> </div> <hr class="mt-2">
                           </div>

                           <div class="row">
                               <div class="col-12"> 
                                    <span class="badge text-dark "><a href="./vehicle.php">Vehicles</a> </span>
                                    <span class="badge text-dark"><a href="#">Pets</a> </span>
                                    <span class="badge text-dark"><a href="#">Services</a> </span>
                                    <span class="badge text-dark"><a href="#">Jobs</a> </span>
                                    <span class="badge text-dark"><a href="#">Fashion</a> </span>
                                    <span class="badge text-dark"><a href="#">Matrimony</a> </span>
                                    <span class="badge text-dark"><a href="#">Real Estate</a> </span>
                                    <span class="badge text-dark"><a href="#">Electronics</a> </span>

                               </div>
                           </div>
                    </div>
                </div>

                
              </div>
                    <!---side menu end--->


                        <!---blog post--->

                                <!-----article 1st---->
                    <div class="col-lg-9 col-12">
                        <div class="blog-post">
                            <div class="row">
                                <div class="col-12">
                                    <img src="./img/car-blog.jpg" class="img-fluid rounded-top" alt="">
                                </div>

                                <div class="col-12 blog-data">
                                    <div class="row">
                                        <div class="col-lg-2 col-12 ">
                                            <div class="date-square text-center">
                                                20 <br> <b>Dec</b> 
                                            </div>
                                        </div>
                                            <div class="col-lg-3 col-12"><a href="" style="font-size: 13px;text-decoration: none;color: grey;" ><i class="fas fa-user fa-xs"></i><span > By Ujjwal kumar</span> </a> </div>
                                            <div class="col-lg-2 col-12"><a href="" style="font-size: 13px;text-decoration: none;color: grey;"><i class="fas fa-clock fa-xs"></i><span> 02:40 pm</span> </a></div>
                                            <div class="col-lg-2 col-12"><a href="" style="font-size: 13px;text-decoration: none;color: grey;"><i class="fas fa-comment-alt fa-xs"></i><span> Comments 5</span> </a></div> 
                                            <div class="col-lg-2 col-12"><a href="" style="font-size: 13px;text-decoration: none;color: grey;"><i class="fas fa-thumbs-up fa-xs"></i><span> Likes 22</span></a></div>
                                        


                                    </div>
                                
                                    <div class="row">
                                        <div class="col-12 blog-article p-5">
                                            <h5>Blog title here</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pretium dictum diam vel laoreet. 
                                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                                Integer dictum justo nec lacus porta congue. Phasellus convallis ut urna a lobortis. 
                                                Vestibulum bibendum quam ligula, ac fringilla mi efficitur sed.
                                            </p>
                                            <a href="blog-detail.php" class="btn btn-dark" >Read More</a>
                                        </div>
                                </div>
                        </div>
                          </div>
                        </div>
                                <!-----article 1st end---->

                                <!-----article 2nd----> 
                           <div class="blog-post mt-4">
                             <div class="row">
                                <div class="col-12">
                                    <img src="./img/mobile-blog.jpg" class="img-fluid rounded-top" alt="">
                                </div>

                                <div class="col-12 blog-data">
                                    <div class="row">
                                        <div class="col-lg-2 col-12 ">
                                            <div class="date-square text-center">
                                                20 <br> <b>Dec</b> 
                                            </div>
                                        </div>
                                            <div class="col-lg-3 col-12"><a href="" style="font-size: 13px;text-decoration: none;color: grey;" ><i class="fas fa-user fa-xs"></i><span > By Ujjwal kumar</span> </a> </div>
                                            <div class="col-lg-2 col-12"><a href="" style="font-size: 13px;text-decoration: none;color: grey;"><i class="fas fa-clock fa-xs"></i><span> 02:40 pm</span> </a></div>
                                            <div class="col-lg-2 col-12"><a href="" style="font-size: 13px;text-decoration: none;color: grey;"><i class="fas fa-comment-alt fa-xs"></i><span> Comments 5</span> </a></div> 
                                            <div class="col-lg-2 col-12"><a href="" style="font-size: 13px;text-decoration: none;color: grey;"><i class="fas fa-thumbs-up fa-xs"></i><span> Likes 22</span></a></div>
                                        


                                    </div>
                                
                                    <div class="row">
                                        <div class="col-12 blog-article p-5">
                                            <h5>Blog title here</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pretium dictum diam vel laoreet. 
                                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                                Integer dictum justo nec lacus porta congue. Phasellus convallis ut urna a lobortis. 
                                                Vestibulum bibendum quam ligula, ac fringilla mi efficitur sed.
                                            </p>
                                            <a href="#" class="btn btn-dark" >Read More</a>
                                        </div>
                                </div>
                                </div>
                                </div>
                            </div>

                             <!-----article 2nd end---->



                             <!-----article 3rd----> 
                           <div class="blog-post mt-4">
                             <div class="row">
                                <div class="col-12">
                                    <img src="./img/animal-blog.jpg" class="img-fluid rounded-top" alt="">
                                </div>

                                <div class="col-12 blog-data">
                                    <div class="row">
                                        <div class="col-lg-2 col-12 ">
                                            <div class="date-square text-center">
                                                20 <br> <b>Dec</b> 
                                            </div>
                                        </div>
                                            <div class="col-lg-3 col-12"><a href="" style="font-size: 13px;text-decoration: none;color: grey;" ><i class="fas fa-user fa-xs"></i><span > By Ujjwal kumar</span> </a> </div>
                                            <div class="col-lg-2 col-12"><a href="" style="font-size: 13px;text-decoration: none;color: grey;"><i class="fas fa-clock fa-xs"></i><span> 02:40 pm</span> </a></div>
                                            <div class="col-lg-2 col-12"><a href="" style="font-size: 13px;text-decoration: none;color: grey;"><i class="fas fa-comment-alt fa-xs"></i><span> Comments 5</span> </a></div> 
                                            <div class="col-lg-2 col-12"><a href="" style="font-size: 13px;text-decoration: none;color: grey;"><i class="fas fa-thumbs-up fa-xs"></i><span> Likes 22</span></a></div>
                                        


                                    </div>
                                
                                    <div class="row">
                                        <div class="col-12 blog-article p-5">
                                            <h5>Blog title here</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pretium dictum diam vel laoreet. 
                                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                                Integer dictum justo nec lacus porta congue. Phasellus convallis ut urna a lobortis. 
                                                Vestibulum bibendum quam ligula, ac fringilla mi efficitur sed.
                                            </p>
                                            <a href="#" class="btn btn-dark" >Read More</a>
                                        </div>
                                </div>
                                </div>
                                </div>
                            </div>

                             <!-----article 3rd end---->



                             <!-----article 4th----> 
                           <div class="blog-post mt-4">
                             <div class="row">
                                <div class="col-12">
                                    <img src="./img/real_estate.jpg" class="img-fluid rounded-top" alt="">
                                </div>

                                <div class="col-12 blog-data">
                                    <div class="row">
                                        <div class="col-lg-2 col-12 ">
                                            <div class="date-square text-center">
                                                20 <br> <b>Dec</b> 
                                            </div>
                                        </div>
                                            <div class="col-lg-3 col-12"><a href="" style="font-size: 13px;text-decoration: none;color: grey;" ><i class="fas fa-user fa-xs"></i><span > By Ujjwal kumar</span> </a> </div>
                                            <div class="col-lg-2 col-12"><a href="" style="font-size: 13px;text-decoration: none;color: grey;"><i class="fas fa-clock fa-xs"></i><span> 02:40 pm</span> </a></div>
                                            <div class="col-lg-2 col-12"><a href="" style="font-size: 13px;text-decoration: none;color: grey;"><i class="fas fa-comment-alt fa-xs"></i><span> Comments 5</span> </a></div> 
                                            <div class="col-lg-2 col-12"><a href="" style="font-size: 13px;text-decoration: none;color: grey;"><i class="fas fa-thumbs-up fa-xs"></i><span> Likes 22</span></a></div>
                                        


                                    </div>
                                
                                    <div class="row">
                                        <div class="col-12 blog-article p-5">
                                            <h5>Blog title here</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pretium dictum diam vel laoreet. 
                                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                                Integer dictum justo nec lacus porta congue. Phasellus convallis ut urna a lobortis. 
                                                Vestibulum bibendum quam ligula, ac fringilla mi efficitur sed.
                                            </p>
                                            <a href="#" class="btn btn-dark" >Read More</a>
                                        </div>
                                </div>
                                </div>
                                </div>
                            </div>

                             <!-----article 4th end---->
                    </div>
                    <!---blog post end--->
                </div>
            </div> <hr>


            <?php include './file/footer.php'; ?>
        

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
        <script src="./fontawesome-free-5.15.2-web/fontawesome-free-5.15.2-web/js/all.min.js"></script>
        <script src="./bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    </body>
</html>