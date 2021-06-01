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

        <style>
            
        </style>
    </head>

    <body>
        <?php include'./file/header.php'; ?>


        <div class="container pb-4">
            <div class="row">
                <div class="col-12 listing-form pb-5">
                    <div class="row">
                        <div class="col-12 pad">
                           <h5>Submit a Free Ad</h5>  
                        </div>
                    </div> <hr>

                    <div class="row" >
                            <div class="col-lg-3 d-none d-sm-block"></div>
                            <div class="col-lg-6 col-12">
                                <form action="">
                                            <div class="row" id="label">
                                                <div class="col-6">
                                                <h5>Add Title*</h5>
                                                </div>

                                                <div class="col-6 text-end">
                                                    <p id="para">70 char. left</p>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" name="" placeholder="">
                                        <div class="row pt-4">
                                            <div class="col-12">
                                                <h5>Select Category*</h5>
                                            </div>
                                        </div>

                                  <!--  <div class="row pt-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-2"> 
                                                        <label for="vehicle" id="custom-radio"><p id="ppp">Vehicle</p> </label>
                                                        <input type="radio" id="vehicle" name="category" value="vehicle">
                                                    </div>

                                                    <div class="col-2"> 
                                                        <label for="mobiles">Mobile</label>
                                                        <input type="radio" id="mobiles" name="category" value="mobiles">
                                                    </div>

                                                    <div class="col-2"> 
                                                        <label for="Electronics">Electronics</label>
                                                        <input type="radio" id="Electronics" name="category" value="Electronics">
                                                    </div>

                                                    <div class="col-2"> 
                                                        <label for="Real Estate">Real Estate</label>
                                                        <input type="radio" id="Real Estate" name="category" value="Real Estate">
                                                    </div>

                                                    <div class="col-2"> 
                                                        <label for="Fashion">Fashion</label>
                                                        <input type="radio" id="Fashion" name="category" value="Fashion">
                                                    </div>

                                                    <div class="col-2"> 
                                                        <label for="Furniture">Furniture</label>
                                                        <input type="radio" id="Furniture" name="category" value="Furniture">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <!---price------>

                                    <div class="row pt-4">
                                            <div class="col-12">
                                                <h5>Price*</h5>
                                            </div>
                                        </div>

                                    <div class="row">
                                        <div class="col-lg-8 col-12">
                                            <input type="text" name="price" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <!---price end------>


                                        <!---Model------>

                                        <div class="row pt-4">
                                            <div class="col-12">
                                                <h5>Model*</h5>
                                            </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-lg-9 col-12">
                                            <input type="text" name="Model" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                         <!---Model end------>


                                         <!-----Year------>

                                        <div class="row pt-4">
                                            <div class="col-12">
                                                <h5>Year*</h5>
                                            </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-lg-9 col-12">
                                            <input type="text" name="year" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                         <!---Year end------>



                                         <!---KM Driven------>

                                        <div class="row pt-4">
                                            <div class="col-12">
                                                <h5>Model*</h5>
                                            </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-lg-9 col-12">
                                            <input type="text" name="Model" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                         <!---KM Driven end------>


                                         <!---Description------>

                                        <div class="row pt-4">
                                            <div class="col-12">
                                                <h5>Description*</h5>
                                            </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-lg-12 col-12">
                                            <textarea name="description" id="" class="form-control" rows="8"></textarea>
                                        </div>
                                    </div>
                                         <!---Description end------>



                                         <!---Add PHotos

                                                <div class="row pt-4">
                                                    <div class="col-12">
                                                        <h5>Add Photos*</h5>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                <div class="col-lg-9 col-12">
                                                    <input type="text" name="Model" placeholder="" class="form-control">
                                                </div>
                                                </div>
                                         Add Photos end------>


                                         <!---Name------>

                                        <div class="row pt-4">
                                            <div class="col-12">
                                                <h5>Name*</h5>
                                            </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-lg-8 col-12">
                                            <input type="text" name="sname" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                         <!---Name end------>


                                         <!---Phone Number------>

                                        <div class="row pt-4">
                                            <div class="col-12">
                                                <h5>Phone Number*</h5>
                                            </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-lg-9 col-12">
                                            <input type="text" name="snum" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                         <!---Phone Number end------>


                                         <!---Enter city------>

                                        <div class="row pt-4">
                                            <div class="col-12">
                                                <h5>Enter city*</h5>
                                            </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-lg-8 col-12">
                                            <input type="text" name="scity" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                         <!---Enter city end------>

                                         <!---submit button------>

                                        <div class="row pt-4">
                                            <div class="col-lg-3 col-12 ">
                                                <input type="submit" name="submit" value="Submit" class="btn btn-dark form-control" id="submit-button">
                                            </div>
                                        </div>

                                       
                                         <!---submit button end------>
                                </form>
                                 
                                  
                            </div>

                            <!---Gap-->
                        
                            <!---Gap-->
                        
                    </div>
                </div> 

                
            </div>


            
        </div>

        <?php include'./file/footer.php'; ?>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

        <script src="./fontawesome-free-5.15.2-web/fontawesome-free-5.15.2-web/js/all.min.js"></script>

        <script src="./bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    </body>
</html>