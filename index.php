<?php
include 'header.php';
include 'important-link.php';
include 'database.php';

?>


<?php

if(isset($_POST['submit_h'])){
    
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email_id = mysqli_real_escape_string($conn, $_POST['email_id']);
    $subject = mysqli_real_escape_string($conn, $_POST['name']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $checkbox = mysqli_real_escape_string($conn, $_POST['checkbox']);
    
     $query =  "INSERT INTO contact_form (name,email_id,subject,message,checkbox) 
     VALUES ('$name','$email_id','$subject','$message','$checkbox')";
     
        $query_run = mysqli_query($conn, $query);
                    if($query_run>0)
                    {
                        echo "<h1 class='text-center'>Thank You for Connecting Get Back To You </h1>";
                        echo "<script> location.replace('thank-you.php') </script>";
                        // header('Location:https://stringoffers.com/');
                        exit(0);
                    }
                    else
                    {
                        echo "<h1 class='text-center'>please fill the all fields</h1>";
                        exit(0);
                    }
    }
     
    



?>


    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Looking for new <br>ways to earn money?</h1>
                    <center>
                        <hr class="gradient-line">
                    </center>
                    <h2>Look no further. We can help you.</h2>
                </div>

            </div>


            <div class="row hero-img">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="200">
                    <div class="b-h">
                        <div class="row">
                            <div class="col-lg-2 text-center">
                                <img src="assets/img/paper-plane1.png" class="img-fluid " alt="">
                            </div>
                            <div class="col-lg-8 " data-aos="zoom-in" data-aos-delay="200">
                                <h3 class="fsize">Join as Publisher</h3>
                                <p>Maximize your earning potential with String Offers' diverse range of top-quality products and dedicated support for affiliate marketing success.</p>
                                <div class="justify-content-center justify-content-lg-start mt-5">
                                    <a href="signup.php" class="btn-get-started scrollto">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-1 order-1 order-lg-2 hidden-xs" data-aos="zoom-in" data-aos-delay="200">
                    <div class="line">
                    
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="200">
                    <div class="b-h">
                        <div class="row">
                            <div class="col-lg-2 text-center ">
                                <img src="assets/img/adwords1.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-8 order-1 order-lg-2" >
                                <h3 class="fsize">Join as Advertiser</h3>
                                <p>Get your brand in front of engaged audiences and drive revenue growth with String Offers' premier CPA network.</p>
                                <div class="justify-content-center justify-content-lg-start mt-5">
                                    <a href="signup.php" class="btn-get-started scrollto">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
        </div>
    </section><!-- End Hero -->



    <section id="about" class="d-flex align-items-center mt-5">

        <div class="container">
            <div class="row">
                <div class="mt-5 mb-5">
                    <h1>About Us</h1>
                    <hr class="gradient-line">
                </div>
                <div class="col-lg-6 aos-animate" data-aos="zoom-in" data-aos-delay="200">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-12 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                                <img src="assets/img/about.png" class="img-fluid animated" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 aos-animate " data-aos="zoom-in" data-aos-delay="200">

                    <div class="align-items">
                        <p>
                            <br>
                        String Offers is a leading CPA network and affiliate marketing platform, providing access to a wide range of products from top brands. Our user-friendly interface, real-time tracking, and dedicated support help users succeed in their affiliate marketing efforts and grow their businesses. Our ultimate goal is to empower our users to achieve financial growth through affiliate marketing.
                        </p>
                        <br>
                        <a href="about-us.php" class="btn-get-started scrollto mt-5">Read More</a>
                        <br><br>
                    </div>
                </div>

            </div>
        </div>

    </section>






        <section id="why-s">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h1>Why Join Us?</h1>
                    <hr class="gradient-line">
                </div>



                <div class="row mt-5 text-center">
                    <div class="col-lg-3">
                        <div class="mt-5">
                            <img src="assets/img/icon1.png" class="img-fluid animated about-icon" alt="">
                            <h3 class="fsize mt-4">Real Time Tracking</h3>
                            <p>Easily optimize your campaigns for maximum performance</p>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="mt-5">
                            <img src="assets/img/icon2.png" class="img-fluid animated about-icon" alt="">
                            <h3 class="fsize mt-4">Top Performing Offers</h3>
                            <p>Explore a wide range of products and offers from leading brands</p>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="mt-5">
                            <img src="assets/img/icon3.png" class="img-fluid animated about-icon" alt="">
                            <h3 class="fsize mt-4">Highest Payout Guaranteed</h3>
                            <p>Payments received through String Offers are always quick & easy, with maximum profits</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mt-5">
                            <img src="assets/img/icon4.png" class="img-fluid animated about-icon" alt="">
                            <h3 class="fsize mt-4">24*7 Support</h3>
                            <p>Personalized assistance and guidance to help you succeed in your affiliate marketing
                                efforts</p>
                        </div>
                    </div>



                </div>


        </section>


        <!-- End About Us Section -->

























        <section id="multi-sli">
            <div class="container">
                <div class="section-title">
                    <h1>Multiple offers to choose from</h1>
                    <hr class="gradient-line">
                </div>
                <div id="myCarousel" class="carousel slide mt-5" data-ride="carousel">


                    <!-- Item slider-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="carousel carousel-showmanymoveone slide" id="itemslider">
                                    <div class="carousel-inner">

                                        <div class="item  active">
                                            <div class="col-xs-12 col-sm-6 col-md-4">
                                                <a href="#" class=""><img src="assets/img/offers3.png"
                                                        class="img-responsive img-fluid center-block"></a>

                                            </div>
                                        </div>

                                        <div class="item ">
                                            <div class="col-xs-12 col-sm-6 col-md-4">
                                                <a href="#" class=""><img src="assets/img/offers3.png"
                                                        class="img-responsive img-fluid center-block"></a>

                                            </div>
                                        </div>

                                        <div class="item ">
                                            <div class="col-xs-12 col-sm-6 col-md-4">
                                                <a href="#" class=""><img src="assets/img/offers3.png"
                                                        class="img-responsive img-fluid center-block"></a>

                                            </div>
                                        </div>

                                        <div class="item ">
                                            <div class="col-xs-12 col-sm-6 col-md-4">
                                                <a href="#" class=""><img src="assets/img/offers3.png"
                                                        class="img-responsive img-fluid center-block"></a>

                                            </div>
                                        </div>

                                        <div class="item ">
                                            <div class="col-xs-12 col-sm-6 col-md-4">
                                                <a href="#" class=""><img src="assets/img/offers3.png"
                                                        class="img-responsive img-fluid center-block"></a>
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <div class="col-xs-12 col-sm-6 col-md-4">
                                                <a href="#" class=""><img src="assets/img/offers3.png"
                                                        class="img-responsive img-fluid center-block"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <!-- <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <i class='fa fa-angle-left'></i>
                    </a> -->
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <i class='fa fa-angle-right'></i>
                    </a>
                </div>
            </div>

            </sectipn>


            <section id="blog">
                <div class="container">
                    <div class="section-title">
                        
                        <h1 class="white">Check Out Our Blogs</h1>
                            <hr class="gradient-line">
                    </div>


                    <?php

include 'blog-view.php';
?>

                </div>

            </section>

            <section id="contact-form" class="d-flex align-items-center">

                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 pr-5">
                            <h1 class="black">Get In Touch</h1>
                            <hr class="gradient-line">
                            <p>We'd love to hear from you! For any inquiries or questions, please don't hesitate to reach out to our dedicated support team. Simply fill out the contact form or send us an email, and we'll get back to you as soon as possible.
                            </p>
                            <img src="assets/img/contact.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="200">
                            <div class="">
                                
                            <!--home page contact form -->
                                
                                
                                <form action="index.php" method="post" role="form" class="php-email-form">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Name" required="">
                                        </div>
                                         <div class="form-group col-md-12">
                                            <input type="email" class="form-control" name="email_id" id="email_id"
                                                placeholder="E-mail" required="">
                                        </div>
                                         <div class="form-group col-md-12">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <textarea name="message" class="form-control" placeholder="Message" id="" cols="30" rows="4" required=""></textarea>
                                        </div>
                                    </div>

                                    <!-- <p class="text-p"> Already a member? <b>Log in</b> here.</p> -->

                                    <div class="form-group " style="padding:10px 0px;">
                                        <input type="checkbox" id="checkbox" name="checkbox" value="I agree to the Terms & Conditions">
                                        <label for="vehicle1"> I agree to the</label> <b> <a href="terms-and-conditions.php"> Terms & Conditions</a></b><br>
                                    </div>
                                    <div class="buttonWrap">
                                         <div id="blocker"></div>
                                        <button class="btn-get-started scrollto" name="submit_h" id="submit_h" type="submit">Submit</button>
                                    
                                    </div>
                                </form>
                                
                                <!--home page contact form -->
                                
                                
                            </div>
                        </div>

                    </div>
                </div>
                </div>
            </section><!-- End Hero -->






            <!-- ======= Hero Section ======= -->
            <section id="join" class="">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 "
                            data-aos="fade-up" data-aos-delay="200">
                            <h1 class="white">Ready To start your journey?</h1>
                        </div>

                        <div class="col-lg-12" >
                            <div class="">
                                <div class="ul-btn">
                                    <ul>
                                        <li><a href="signup.php" class="btn-get-started scrollto">Join as Publisher</a></li>
                                        <li> <a href="signup.php" class="btn-get-started2 scrollto">Join as Advertiser</a></li>
                                    </ul>
                                </div>
                            </div>
                           
                        </div>
                        <div class="col-lg-6" >
                            
                        </div>

                    </div>
                </div>
                </div>
            </section><!-- End Hero -->




   

    <?php 
include 'footer.php';
include 'f-important-link.php';
?>



 
     <script>
     $(document).ready(function() {
  
  // Disable blocker.
  function unblock() {
    $("#blocker").css("display", "none");
  }

  // Enable blocker.
  function block() {
    $("#blocker").css("display", "block");
  }

  // Monitor checkbox.
  $('body').on('click', '#checkbox', function() {
    if( $(this).prop("checked") ) {
        unblock();
    } else {
        block();
    }
  });
  
  // Monitor blocker.
  $('#blocker').on('click', function() {
    alert('Please check the box.');
  });
});
        
    </script>
    
    
    
    <style>
        .buttonWrap {
  position: relative;
}

    

#blocker {
  position: absolute;
  height: 100%;
  width: 100%;
  background: rgba(255,255,255,0);
}


    </style>



