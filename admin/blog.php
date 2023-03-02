<?php
include 'header.php';
include 'sideber.php';
?>



<div class="main-panel">
    <div class="content-wrapper">
        

        <div class="page-header">
            <h2 class="page-title">
            Blog <br>
                
            </h2>

            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active dashboard-logo" aria-current="page">
                        <span></span><img src="assets/images/blacklogo.png" class="img-fluid ">
                    </li>
                </ul>
            </nav>
        </div>

        <div class="row">


            <div class="col-md-12 grid-margin stretch-card">
                <div class="col-md-12 ml-auto mr-auto">
                    <div class="">

                        <div class="">
                            <ul class="nav nav-tabs nav-tabs-neutral " role="tablist" data-background-color="orange">
                                <li class="nav-item nav-item-w nav-item-w2">
                                    <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">Recent Blog
                                        Posts</a>
                                </li>
                                <li class="nav-item nav-item-w nav-item-w2">
                                    <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">Drafts</a>
                                </li>
                               
                            </ul>
                        </div>

                        <div class="card-body">
                            <!-- Tab panes -->
                            <div class="tab-content">

                                <div class="tab-pane active" id="home1" role="tabpanel">
                                    <div class="row bg-color">
                                        <div class="col-6 ">
                                            <h4>Recent Blog Posts</h4>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="pull-right">
                                                <!-- <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                        class="mdi mdi-lead-pencil"></i></button>
                                                <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                        class="mdi mdi-play-pause"></i></button>

                                                <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                        class="mdi mdi-delete"></i></button> -->
                                                        <a href="create-blog.php"> <button class="btn btn-block btn-lg btn-gradient-primary">Create
                                                    New</button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">


                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="blog-b">
                                                                <img src="assets/images/blog4.png" alt="">
                                                                <h3 class="mt-3">Blog Headline Lorem Ipsum Dolor Sit
                                                                </h3>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit...</p>
                                                                <p>Posted on 12 January 2021</p>
                                                                <a href="#"><button
                                                                        class="btn btn-block btn-lg btn-gradient-primary">Edit</button></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="blog-b">
                                                                <img src="assets/images/blog4.png" alt="">
                                                                <h3 class="mt-3">Blog Headline Lorem Ipsum Dolor Sit
                                                                </h3>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit...</p>
                                                                <p>Posted on 12 January 2021</p>
                                                                <a href="#"><button
                                                                        class="btn btn-block btn-lg btn-gradient-primary">Edit</button></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="blog-b">
                                                                <img src="assets/images/blog4.png" alt="">
                                                                <h3 class="mt-3">Blog Headline Lorem Ipsum Dolor Sit
                                                                </h3>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit...</p>
                                                                <p>Posted on 12 January 2021</p>
                                                                <a href="#"><button
                                                                        class="btn btn-block btn-lg btn-gradient-primary">Edit</button></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="blog-b">
                                                                <img src="assets/images/blog4.png" alt="">
                                                                <h3 class="mt-3">Blog Headline Lorem Ipsum Dolor Sit
                                                                </h3>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit...</p>
                                                                <p>Posted on 12 January 2021</p>
                                                                <a href="#"><button
                                                                        class="btn btn-block btn-lg btn-gradient-primary">Edit</button></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="blog-b">
                                                                <img src="assets/images/blog4.png" alt="">
                                                                <h3 class="mt-3">Blog Headline Lorem Ipsum Dolor Sit
                                                                </h3>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit...</p>
                                                                <p>Posted on 12 January 2021</p>
                                                                <a href="#"><button
                                                                        class="btn btn-block btn-lg btn-gradient-primary">Edit</button></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="blog-b">
                                                                <img src="assets/images/blog4.png" alt="">
                                                                <h3 class="mt-3">Blog Headline Lorem Ipsum Dolor Sit
                                                                </h3>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit...</p>
                                                                <p>Posted on 12 January 2021</p>
                                                                <a href="#"><button
                                                                        class="btn btn-block btn-lg btn-gradient-primary">Edit</button></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="blog-b">
                                                                <img src="assets/images/blog4.png" alt="">
                                                                <h3 class="mt-3">Blog Headline Lorem Ipsum Dolor Sit
                                                                </h3>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit...</p>
                                                                <p>Posted on 12 January 2021</p>
                                                                <a href="#"><button
                                                                        class="btn btn-block btn-lg btn-gradient-primary">Edit</button></a>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                                <div class="tab-pane" id="profile1" role="tabpanel">
                                    <div class="row bg-color">
                                        <div class="col-6 ">
                                            <h4>Drafts</h4>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="pull-right">
                                                <!-- <button
                                                    class="btn btn-block btn-lg btn-gradient-primary">Approve</button>
                                                <button
                                                    class="btn btn-block btn-lg btn-gradient-primary">Decline</button> -->
                                               <a href="create-blog.php"> <button class="btn btn-block btn-lg btn-gradient-primary">Create
                                                    New</button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">


                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="blog-b">
                                                                <img src="assets/images/blog4.png" alt="">
                                                                <h3 class="mt-3">Blog Headline Lorem Ipsum Dolor Sit
                                                                </h3>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit...</p>
                                                                <p>Posted on 12 January 2021</p>
                                                                <a href="#"><button
                                                                        class="btn btn-block btn-lg btn-gradient-primary">Edit</button></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="blog-b">
                                                                <img src="assets/images/blog4.png" alt="">
                                                                <h3 class="mt-3">Blog Headline Lorem Ipsum Dolor Sit
                                                                </h3>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit...</p>
                                                                <p>Posted on 12 January 2021</p>
                                                                <a href="#"><button
                                                                        class="btn btn-block btn-lg btn-gradient-primary">Edit</button></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="blog-b">
                                                                <img src="assets/images/blog4.png" alt="">
                                                                <h3 class="mt-3">Blog Headline Lorem Ipsum Dolor Sit
                                                                </h3>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit...</p>
                                                                <p>Posted on 12 January 2021</p>
                                                                <a href="#"><button
                                                                        class="btn btn-block btn-lg btn-gradient-primary">Edit</button></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="blog-b">
                                                                <img src="assets/images/blog4.png" alt="">
                                                                <h3 class="mt-3">Blog Headline Lorem Ipsum Dolor Sit
                                                                </h3>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit...</p>
                                                                <p>Posted on 12 January 2021</p>
                                                                <a href="#"><button
                                                                        class="btn btn-block btn-lg btn-gradient-primary">Edit</button></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="blog-b">
                                                                <img src="assets/images/blog4.png" alt="">
                                                                <h3 class="mt-3">Blog Headline Lorem Ipsum Dolor Sit
                                                                </h3>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit...</p>
                                                                <p>Posted on 12 January 2021</p>
                                                                <a href="#"><button
                                                                        class="btn btn-block btn-lg btn-gradient-primary">Edit</button></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="blog-b">
                                                                <img src="assets/images/blog4.png" alt="">
                                                                <h3 class="mt-3">Blog Headline Lorem Ipsum Dolor Sit
                                                                </h3>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit...</p>
                                                                <p>Posted on 12 January 2021</p>
                                                                <a href="#"><button
                                                                        class="btn btn-block btn-lg btn-gradient-primary">Edit</button></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="blog-b">
                                                                <img src="assets/images/blog4.png" alt="">
                                                                <h3 class="mt-3">Blog Headline Lorem Ipsum Dolor Sit
                                                                </h3>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit...</p>
                                                                <p>Posted on 12 January 2021</p>
                                                                <a href="#"><button
                                                                        class="btn btn-block btn-lg btn-gradient-primary">Edit</button></a>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                    <!-- End Tabs on plain Card -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>

<?php
include 'f-links.php';
?>