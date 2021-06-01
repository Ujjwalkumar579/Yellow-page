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

         <div class="container pb-5">
             <div class="row">
                 <div class="col-6">
                     <nav>
                         <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="contactus.php">Contact</a></li>
                         </ol>
                     </nav>                     
                 </div>

                 <div class="col-6">
                     <h5 class="text-end">Contact Us</h5>
                 </div>
             </div> <hr>

                <div class="row pt-3 gmap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14649.833214976275!2d85.30328010000001!3d23.371631999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1620838120754!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>                      
         </div>


         <div class="container">
             <div class="row">
                 <div class="col-lg-9 col-12 pb-5">
                    <div class=" address1" style="background-color: rgb(240, 240, 240);padding:10px;border-radius:8px;">
                        <div class="row pb-5 pt-5">
                                <div class="col-12 text-start pb-3  category-title">
                                    <span >Contact Us</span><hr>
                                </div> 
                        </div>


                        <div class="row pb-5">
                            <div class="col-lg-6 col-12">
                                <input type="text" name="name" placeholder="Name" class="form-control gol">
                            </div>

                            <div class="col-lg-6 col-12">
                                <input type="email" name="mail" placeholder="Email" class="form-control gol">
                            </div>

                            <div class="col-lg-6 col-12 pt-3">
                                <input type="text" name="subject" placeholder="Subject" class="form-control gol">
                            </div>

                            <div class="col-lg-6 col-12 pt-3">
                                <input type="text" name="website" placeholder="Website" class="form-control gol">
                            </div>

                            <div class="col-lg-12 col-12 pt-3">
                                <textarea name="message" id="" class="form-control gol" placeholder="Write Message" cols="102" rows="5"></textarea>
                            </div>

                            <div class="col-3 pt-3">
                                <input type="submit" name="submit" value="send" class="form-control btn btn-dark gol">
                            </div>
                        </div>
                    </div>
                 </div>


                 <div class="col-lg-3">
                        <div class="row" >
                            <div class="col-lg-12" >
                                <div class=" " style="background-color: rgb(240, 240, 240);padding-left:10px;border-radius:8px;">
                                    <h4 class="pt-2">Address</h4>
                                    <hr>
                                    <p class="text-secondary p-2" style="font-size: 13px;line-height:22px;">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc metus lectus,
                                        viverra vehicula porta id, posuere at massa. Nam sollicitudin porta nunc.
                                    </p>
                                </div>
                            </div>


                            <div class="col-lg-12" >
                                <div class=" " style="background-color: rgb(240, 240, 240);padding-left:10px;border-radius:8px;">
                                    <h4 class="pt-2">Contact info</h4>
                                    <hr>
                                        <div class="row">
                                            <div class="col-3"> <h6>Address:</h6> </div>
                                            <div class="col-9"><p style="color: grey; font-size:13px;">Lorem ipsum 115/2, Near BOK Chownk, Ludhiana, Punjab, INDIA.</p> </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-3"> <h6>Email:</h6> </div>
                                            <div class="col-9"><p style="color: grey; font-size:13px;">ujjwal.kumar579@gmail.com</p> </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-3"><h6>Phone:</h6> </div>
                                            <div class="col-9"> <p style="color: grey; font-size:13px;">022 888 8888 & 011 888 8888</p> </div>
                                        </div>
                                </div>
                            </div>


                        </div>
                 </div>
             </div>
         </div>

            
            <?php include './file/footer.php'; ?>
         
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
        <script src="./fontawesome-free-5.15.2-web/fontawesome-free-5.15.2-web/js/all.min.js"></script>
        <script src="./bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    </body>
</html>