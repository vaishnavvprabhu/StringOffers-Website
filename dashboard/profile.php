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
                                                        <button class="btn btn-block  btn-w gradient" > Change Profile Picture</button>
                                                        <button class="btn btn-block  btn-w gradient" data-toggle="modal" data-target="#passwordch">Change Password</button>
                                                        <button class="btn btn-block  btn-w gradient">Log Out</button>
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
                                                                    id="name" placeholder="Name of Account Holder"
                                                                    required>
                                                            </div>
                                                            <div class="form-group col-6">
                                                                <input type="text" name="name" class="form-control"
                                                                    id="name" placeholder="Country" required>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-6">
                                                                <input type="text" name="name" class="form-control"
                                                                    id="name" placeholder="Bank Name" required>
                                                            </div>
                                                            <div class="form-group col-6">
                                                                <input type="text" name="name" class="form-control"
                                                                    id="name" placeholder="Zip Code" required>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-6">
                                                                <input type="text" name="name" class="form-control"
                                                                    id="name" placeholder="banK Address" required>
                                                            </div>
                                                            <div class="form-group col-6">
                                                                <input type="text" name="name" class="form-control"
                                                                    id="name" placeholder="City" required>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-6">
                                                                <input type="text" name="name" class="form-control"
                                                                    id="name" placeholder="Account Number" required>
                                                            </div>
                                                            <div class="form-group col-6">
                                                                <input type="text" name="name" class="form-control"
                                                                    id="name" placeholder="State" required>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-6">
                                                                <input type="text" name="name" class="form-control"
                                                                    id="name" placeholder="IFSC Code" required>
                                                            </div>
                                                            <div class="form-group col-6">
                                                            <button
                                                            class="btn btn-block btn-lg btn-gradient-primary">Save</button>
                                                            <button
                                                            class="btn btn-block btn-lg btn-gradient-primary">Discard Changes</button>
                                                            </div>
                                                            <br>
                                                            <p>Write ti us at help@stringoffers,com in to update
                                                                details.</p>
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


<?php
include 'f-links.php';
?>