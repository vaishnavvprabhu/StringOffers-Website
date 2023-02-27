<?php
include 'header.php';
include 'important-link.php';

?>


<!-- ======= Hero Section -  ======= -->
<!-- TODO:Figure out a better way to implement the Padding -->
<section id="Advertiser" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up" data-aos-delay="200">
            </div>
            <div class="col-lg-6 order-1 order-lg-2 side-gap-2 mt-5" data-aos="zoom-in" data-aos-delay="200">
                <div class="">
                    <img src="assets/img/surfing-1.jpg" class="img-fluid animated" alt="">
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 item-center" data-aos="zoom-in" data-aos-delay="200">
                <div class="mt-5">
                    <h1>Become A Advertiser</h1>
                    <p>As an advertiser with String Offers, you'll have the opportunity to get your brand in front of
                        engaged audiences and drive revenue growth through our premier CPA network and advanced
                        affiliate marketing platform. Our robust network of top-quality publishers and advanced tracking
                        capabilities ensure maximum performance and ROI. Plus, our dedicated account management team is
                        always available to provide support and guidance to help you achieve your business goals. Join
                        String Offers today and take your brand to the next level!</p>
                    <div class="d-flex justify-content-center justify-content-lg-start mt-5">
                        <a href="inner-page.php" class="btn-get-started btn-2 scrollto">Get Started <i
                                class="fa fa-rocket" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

    <div class="clearfix">
    </div>








    <section id="blog">
        <div class="container">
            <div class="section-title">
                <h1 style="color:#fff;">Check Out Our Advertiser Blogs</h1>
                <hr class="gradient-line">
            </div>


            <?php

include 'blog-view.php';
?>

        </div>

    </section>







    <!-- testimonials code -->







    <!-- client logo code -->







    <section id="join" class="">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 mb-5 aos-init aos-animate"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1 class="white">Ready To start your journey?</h1>
                    <hr class="gradient-line">
                </div>

                <div class="col-lg-6 order-1 order-lg-2 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                    <div class="">
                        <div class="justify-content-center justify-content-lg-start pull-left">
                            <a href="signup.php" class="btn-get-started scrollto">Join as Advertiser</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 order-1 order-lg-2 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">

                </div>

            </div>
        </div>

    </section>
    
    <?php 
include 'footer.php';
include 'f-important-link.php';
?>