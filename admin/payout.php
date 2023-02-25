<?php
include 'header.php';
include 'sideber.php';
?>



<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h2 class="page-title">Payouts</h2>
        </div>

        <div class="row">


            <div class="col-md-12 grid-margin stretch-card">
                <div class="col-md-12 ml-auto mr-auto">
                    <div class="">

                    <div class="">
                            <ul class="nav nav-tabs nav-tabs-neutral " role="tablist" data-background-color="orange">
                                <li class="nav-item nav-item-w">
                                    <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">Pending Payouts</a>
                                </li>
                                <li class="nav-item nav-item-w">
                                    <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">Recent Payouts</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages1" role="tab">Campaign
                                        Request</a>
                                </li> -->
                            </ul>
                        </div>

                        <div class="card-body">
                            <!-- Tab panes -->
                            <div class="tab-content">

                                <div class="tab-pane active" id="home1" role="tabpanel">
                                    <div class="row bg-color">
                                        <div class="col-6 ">
                                            <h4>Pending Payouts</h4>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="pull-right">
                                                <!-- <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                        class="mdi mdi-lead-pencil"></i></button>
                                                <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                        class="mdi mdi-play-pause"></i></button>

                                                <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                        class="mdi mdi-delete"></i></button> -->
                                                <a href="#"><button class="btn btn-block btn-lg btn-gradient-primary">Create
                                                    New</button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">

                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>PID</th>
                                                                    <th> Name </th>
                                                                    <th> Payout ID </th>
                                                                    <th> Amount </th>
                                                                    <th> Date </th>
                                                                    <th> Payment Cycle </th>
                                                                   


                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                   <td>012</td>
                                                                    <!-- <th><input type="checkbox"></th> -->
                                                                    <td>Publisher name</td>
                                                                    <td> 12345 </td>
                                                                    <td> $300 </td>
                                                                    <td>28-12-22</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                   <td>012</td>
                                                                    <!-- <th><input type="checkbox"></th> -->
                                                                    <td>Publisher name</td>
                                                                    <td> 12345 </td>
                                                                    <td> $300 </td>
                                                                    <td>28-12-22</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                   <td>012</td>
                                                                    <!-- <th><input type="checkbox"></th> -->
                                                                    <td>Publisher name</td>
                                                                    <td> 12345 </td>
                                                                    <td> $300 </td>
                                                                    <td>28-12-22</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                   <td>012</td>
                                                                    <!-- <th><input type="checkbox"></th> -->
                                                                    <td>Publisher name</td>
                                                                    <td> 12345 </td>
                                                                    <td> $300 </td>
                                                                    <td>28-12-22</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                   <td>012</td>
                                                                    <!-- <th><input type="checkbox"></th> -->
                                                                    <td>Publisher name</td>
                                                                    <td> 12345 </td>
                                                                    <td> $300 </td>
                                                                    <td>28-12-22</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                   <td>012</td>
                                                                    <!-- <th><input type="checkbox"></th> -->
                                                                    <td>Publisher name</td>
                                                                    <td> 12345 </td>
                                                                    <td> $300 </td>
                                                                    <td>28-12-22</td>
                                                                    <td>-</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                                <div class="tab-pane" id="profile1" role="tabpanel">
                                    <div class="row bg-color">
                                        <div class="col-6 ">
                                            <h4>Recent Payouts</h4>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="pull-right">
                                                <!-- <button
                                                    class="btn btn-block btn-lg btn-gradient-primary">Approve</button>
                                                <button
                                                    class="btn btn-block btn-lg btn-gradient-primary">Decline</button> -->
                                                <button class="btn btn-block btn-lg btn-gradient-primary">Create New</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">

                                                    <div class="table-responsive">
                                                    <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>PID</th>
                                                                    <th> Name </th>
                                                                    <th> Payout ID </th>
                                                                    <th> Amount </th>
                                                                    <th> Date </th>
                                                                    <th> Payment Cycle </th>
                                                                   


                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                   <td>012</td>
                                                                    <!-- <th><input type="checkbox"></th> -->
                                                                    <td>Publisher name</td>
                                                                    <td> 12345 </td>
                                                                    <td> $300 </td>
                                                                    <td>28-12-22</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                   <td>012</td>
                                                                    <!-- <th><input type="checkbox"></th> -->
                                                                    <td>Publisher name</td>
                                                                    <td> 12345 </td>
                                                                    <td> $300 </td>
                                                                    <td>28-12-22</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                   <td>012</td>
                                                                    <!-- <th><input type="checkbox"></th> -->
                                                                    <td>Publisher name</td>
                                                                    <td> 12345 </td>
                                                                    <td> $300 </td>
                                                                    <td>28-12-22</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                   <td>012</td>
                                                                    <!-- <th><input type="checkbox"></th> -->
                                                                    <td>Publisher name</td>
                                                                    <td> 12345 </td>
                                                                    <td> $300 </td>
                                                                    <td>28-12-22</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                   <td>012</td>
                                                                    <!-- <th><input type="checkbox"></th> -->
                                                                    <td>Publisher name</td>
                                                                    <td> 12345 </td>
                                                                    <td> $300 </td>
                                                                    <td>28-12-22</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                   <td>012</td>
                                                                    <!-- <th><input type="checkbox"></th> -->
                                                                    <td>Publisher name</td>
                                                                    <td> 12345 </td>
                                                                    <td> $300 </td>
                                                                    <td>28-12-22</td>
                                                                    <td>-</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="messages1" role="tabpanel">
                                    <div class="row bg-color">
                                        <div class="col-6 ">
                                            <h4>pending Advertisers sign Up Requests</h4>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="pull-right">
                                                <button
                                                    class="btn btn-block btn-lg btn-gradient-primary">Approve</button>
                                                <button
                                                    class="btn btn-block btn-lg btn-gradient-primary">Decline</button>
                                                <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                        class="mdi mdi-delete"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">

                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th>PID</th>
                                                                    <th> Name </th>
                                                                    <th> Email ID </th>
                                                                    <th> Skype </th>
                                                                    <th> Id Proof </th>
                                                                    <th> Date </th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> 012</td>
                                                                    <td> campaign Name </td>
                                                                    <td> campaignname@gmail.com </td>
                                                                    <td>Skype Id</td>
                                                                    <td>Verified</td>
                                                                    <td>30-12-22</td>
                                                                </tr>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> 012</td>
                                                                    <td> campaign Name </td>
                                                                    <td> campaignname@gmail.com </td>
                                                                    <td>Skype Id</td>
                                                                    <td>Verified</td>
                                                                    <td>30-12-22</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
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