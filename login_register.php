<?php session_start();
    if(isset($_SESSION['get']))
        {
            header('location:dashboard.php');
        }
        
?> 

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
        <title>Classified</title>
        <link href="./bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="./fontawesome-free-5.15.2-web/fontawesome-free-5.15.2-web/css/fontawesome.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />

        <link href="./css//styles.css" rel="stylesheet">
        
        <style>
            body
            { 
                padding: 0;
                margin: 0;
            }
        </style>
    </head>


    <body>

        <div class="container-fluid main-div">
            <div class="row">
                <div class="col-lg-12 col-12 login-reg">
                    <div class="button-div">
                            <div id="btn-bg"></div>
                            <button type="button" class="toggle-btn" id="login-butn" onclick="login()"><b>Login</b> </button>
                            <button type="button" class="toggle-btn" onclick="register()"><b>Register</b> </button>
                    </div>

                    <div class="social-icons">
                        <span class="fab fa-facebook icons"></span>
                        <i class="fab fa-google-plus icons"></i>
                        <i class="fab fa-apple icons"></i>
                        <i class="fab fa-github icons"></i>
                    </div>


                    <?php
                        error_reporting(0);
                        if(isset($_POST['submit_login']))
                            {
                                $conn1 = mysqli_connect('localhost','root','','yellow_page');
                                // 
                                // $sql2 = "SELECT * FROM login_register";
                                // $result2 = mysqli_query($conn1,$sql2);
                                // $row2 = mysqli_fetch_assoc($result2);
                                // 
                                $login_username = $_POST['username'];
                                $login_password = $_POST['check_password'];
                                 $sql1 = "SELECT * FROM login_register WHERE email='$login_username' and BINARY confirm_password='$login_password'";
                                $result1 = mysqli_query($conn1,$sql1);
                                
                                $row = mysqli_num_rows($result1);
                                    if($row==1)
                                        {
                                           $success_print = "Login Success";
                                            //  =;
                                            $row2 = mysqli_fetch_assoc($result1);
                                            $_SESSION['get'] = "$row2[name]";
                                              header("location:dashboard.php");
                                        }
                                    else
                                        {
                                            $unsuccess_print = "Username or Password Wrong";
                                        }
                            }
                    ?>

                    <form action="" method="post" id="login" class="input-field-form">
                        <input type="text" class="input-field" name="username" placeholder="Email Id or username" required>
                        <input type="Password" class="input-field" name="check_password" placeholder="Password" required>
                        <input type="checkbox" class="check" id="check" name="remember-pass"> <span for="check">Remember Password</span>
                        <input type="submit" class="submit-btn" name="submit_login" value="Submit">
                        <h3> <?php echo "$success_print"; ?> </h3>
                        <h3> <?php echo "$unsuccess_print"; ?> </h3>
                        
                    </form>

                    

                    
                    <?php
                        
                        if(isset($_POST['submit_register']))
                            {   
                                $conn = mysqli_connect('localhost','root','','yellow_page');
                                $register_name = $_POST['name'];
                                $register_email = $_POST['email'];
                                $register_password = $_POST['password'];
                                $register_re_password = $_POST['re_password'];

                                $sql = "INSERT into login_register(name,email,password,confirm_password) VALUES('$register_name','$register_email','$register_password','$register_re_password')";
                                $result = mysqli_query($conn,$sql); 
                            }
                    
                ?>
                    


                    <form action="" method="post" id="register" class="input-field-form">
                        <input type="text" class="input-field" name="name" placeholder="Name" required>
                        <input type="email" class="input-field" name="email" placeholder="Enter Email" required>
                        <input type="Password" class="input-field" name="password" placeholder="Enter Password" required>
                        <input type="Password" class="input-field" name="re_password" placeholder="Confirm Password" required>
                        <input type="checkbox" class="check" id="check" name="remember-pass"> <span for="check">Term & Condition</span>
                        <input type="submit" class="submit-btn" name="submit_register" value="Submit">
                    </form>

                            
                    <!-- //insert data to register// -->
                    


                </div>
            </div>
        </div>
        


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

        <script src="./fontawesome-free-5.15.2-web/fontawesome-free-5.15.2-web/js/all.min.js"></script>

        <script src="./bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

        <script>
            var x = document.getElementById("login");
            var y =  document.getElementById("register");
            var z = document.getElementById("btn-bg");
            var l = document.getElementById("login-butn");

            

            function register()
            {
                x.style.left = "-400px";
                y.style.left = "20px";
                z.style.left = "167px"
               
            }

            function login()
            {
                x.style.left = "20px";
                y.style.left = "-400px";
                z.style.left = "0px";
                
            }
        </script>
    </body>

    
</html>