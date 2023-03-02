<?php
include 'header.php';
include 'sideber.php';
?>



<div class="main-panel">
    <div class="content-wrapper">
       


        <div class="page-header">
            <h2 class="page-title">
            Publisher Profile<br>
                
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

                        <div class="card-body">
                            <!-- Tab panes -->
                            <div class="tab-content">

                                <div class="tab-pane active" id="home1" role="tabpanel">

                                    <div class="row">
                                        <div class="col-6 ">
                                            <div class="row">
                                                <div class="col-4 text-center profile-img ">
                                                    <div class="imco">
                                                        <img src="../dashboard/assets/images/Vector.png" alt="">
                                                    </div>
                                                    <h4 class="mt-3">Jane Doe</h4>
                                                </div>
                                                <div class="col-8 profile ">
                                                    <div class="">
       
       <button class="btn btn-block btn-lg btn-w gradient"
                                                            data-toggle="modal" data-target="#change_profile_picture">Change Profile Picture</button>
                                                        <button class="btn btn-block btn-lg btn-w gradient"
                                                            data-toggle="modal" data-target="#passwordch">Change
                                                            Password</button>
                                                            
                                                        <button class="btn btn-block btn-lg btn-w gradient">Log
                                                            Out</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6"></div>
                                    </div>


                                    <div class="row mt-5">
                                        <!-- form -->
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <form action="">
                                                        <div class="row">
                                                            <div class="form-group col-6">
                                                                <input type="text" name="name" class="form-control"
                                                                    id="name" placeholder="Full Name" required>
                                                            </div>
                                                            <div class="form-group col-6">
                                                                <input type="text" name="name" class="form-control"
                                                                    id="name" placeholder="Email " required>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-6">
                                                                <input type="text" name="name" class="form-control"
                                                                    id="name" placeholder="Phone" required>
                                                            </div>
                                                            <div class="form-group col-6">
                                                                <input type="text" name="name" class="form-control"
                                                                    id="name" placeholder="Login" required>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-6">
                                                                <input type="text" name="name" class="form-control"
                                                                    id="name" placeholder="Address" required>
                                                            </div>
                                                            <div class="form-group col-6">
                                                                <input type="text" name="name" class="form-control"
                                                                    id="name" placeholder="State" required>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-6">
                                                                <input type="text" name="name" class="form-control"
                                                                    id="name" placeholder="Skype ID" required>
                                                            </div>
                                                            <div class="form-group col-6">
                                                                <input type="text" name="name" class="form-control"
                                                                    id="name" placeholder="ID Proof" required>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-6">
                                                                <input type="text" name="name" class="form-control"
                                                                    id="name" placeholder="Company Name" required>
                                                            </div>
                                                            <div class="form-group col-6">
                                                                <button
                                                                    class="btn btn-block btn-lg btn-gradient-primary btn-w">Save</button>
                                                                <button
                                                                    class="btn btn-block btn-lg gradient btn-w">Discard
                                                                    Changes</button>
                                                                <br><br>
                                                                <p><input type="checkbox" id="vehicle1" name="vehicle1"
                                                                        value="Bike"> Write ti us at
                                                                    help@stringoffers,com in to update
                                                                    details.</p>
                                                            </div>



                                                        </div>


                                                    </form>
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


<!-- change password name  -->
<div id="passwordch" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <h2>Change Password</h2>
            </div>

            <form action="" class="p-10">
                <div class="row">
                    <div class="form-group col-12">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Current Password"
                            required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12">
                        <input type="text" name="name" class="form-control" id="name" placeholder="New Password"
                            required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Confirm New Password"
                            required>
                    </div>
                </div>
            </form>

            <div class="mb-5 pl-5">
                <center>

                    <button type="button" class="btn btn-block btn-lg btn-gradient-primary" data-toggle="modal"
                        data-target="#okay">Save</button>
                </center>
            </div>
        </div>

    </div>
</div>

<!-- change password name  -->
<div id="change_profile_picture" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <h2>Change Profile Picture</h2>
            </div>

            <form action="" class="p-10">
                
                
                <div class="row">
                    <div class="form-group col-12">
                        <input type="file" name="change_profile_picture" class="form-control">
                    </div>
                </div>
                <div class="mb-5 pl-5">
                <center>

                    <button type="button" class="btn btn-block btn-lg btn-gradient-primary" 
                        name="change_profile_picture">Save</button>
                </center>
            </div>
            </form>

            
        </div>

    </div>
</div>



<!-- okay name  -->
<div id="okay" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content ">
            <div class="modal-header">

                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <h2>Change Password</h2>
            </div>
            <div class="text-cneter">
               <center>
               <p>Your password has been updated.</p>
               </center>
            </div>
            
            <div class="mb-5 pl-5">
                <center>
                    <button type="button" class="btn btn-block btn-lg btn-gradient-primary" data-toggle="modal"
                        data-target="#okay">Save</button>
                </center>
            </div>
        </div>

    </div>
</div>


<?php
include 'f-links.php';
?>