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
        <!-----top-nav header------>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <ul class="login">
                        <li><i class="far fa-plus-square fa-xs"></i>&nbsp;<span> <a href="login_register.php"> Login</a></span> </li>
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
    </body>
</html>