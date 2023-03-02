<?php 
include 'header.php';
include 'important-link.php'
?>
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 mt-5">
                <center>
                <h2 class="me-auto ">Welcome Back!</h2>
                </center>
                <div id="exTab1" class="container text-center mt-5">
                    <ul class="nav nav-pills">
                        <!-- <li class="active">
                            <a href="#1a" data-toggle="tab">Publisher</a>
                        </li>
                        <li><a href="#2a" data-toggle="tab">Advertiser</a>
                        </li> -->
                    </ul>
                    <div class="tab-content clearfix">
                        <div class="tab-pane active" id="1a">
                            <div class="signup">
                                <div>
                                    <div class="filter-publisher">
                                        <div class="align-items-stretch">
                                            <form action="forms/contact.php" method="post" role="form"
                                                class="php-email-form">
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <input type="text" name="name" class="form-control" id="name"
                                                            placeholder="E-mail/Username" required>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <input type="email" class="form-control" name="email" id="email"
                                                            placeholder="Password" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <a class=" pull-right" data-toggle="modal" data-target="#forget-p">
                                                        Forgot Password?</a>
                                                </div>
                                                <div class="text-center">
                                                    <center>
                                                        <button type="submit">Submit</button>
                                                    </center>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                    <div class="row">
                                               <p>Don’t have an account?  <a class="" href="signup.php">
                                                Sign Up </a>here.</p>
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="2a">
                            <div class="signup">
                                <div>
                                    <div class="filter-publisher">
                                        <div class="align-items-stretch">
                                            <form action="forms/contact.php" method="post" role="form"
                                                class="php-email-form">
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <input type="text" name="name" class="form-control" id="name"
                                                            placeholder="Username" required>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <input type="email" class="form-control" name="email" id="email"
                                                            placeholder="Password" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <a class="pull-right" data-toggle="modal" data-target="#forget-p">
                                                        Forgot Password?</a>
                                                </div>
                                                <div class=""><button type="submit">Submit</button></div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="row">
                                               <p>Don’t have an account?  <a class="" href="signup.php">
                                                Sign Up </a>here.</p>
                                            </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>






<!-- forget password -->
<div class="modal fade" id="forget-p" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content ">
            <div class="modal-header ">
<h4 class="modal-title"></h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="height-100 d-flex justify-content-center align-items-center vh-50">
                <div class="position-relative">
                    <div class=" p-2">
                        <h4 class="modal-title">Forget password?</h4>
                        <h6>Enter your registered email ID below.</h6>

                        <div id="otp" class="inputs mt-2">

                            <div class="form-group col-md-12">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                    required>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-danger px-4 validate" data-toggle="modal"
                                data-target="#email-s">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



<!-- Email Sent -->
<div class="modal fade" id="email-s" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content ">
            <div class="modal-header ">


                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="height-100 d-flex justify-content-center align-items-center vh-50">
                <div class="position-relative">
                    <div class=" p-2">
                        <h4 class="modal-title">Email Sent</h4>
                        <h6>Please check your inbox. We have sent you a link.</h6>


                        <div class="mt-4">
                            <button class="btn btn-danger px-4 validate" data-toggle="modal"
                                data-target="#submission">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



<?php
    include 'f-important-link.php';
    ?>