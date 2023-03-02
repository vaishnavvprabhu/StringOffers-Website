<?php
include 'header.php';
include 'sideber.php';
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h2 class="page-title">
                Super Admin Panel<br>
                <span class="small-f">Last Login: 11:12 am, 21 December 2022</span>
            </h2>

            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i
                            class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="clearfix">
                            <h4 class="card-title float-left">Publishers</h4>

                        </div>
                        <canvas id="visit-sale-chart" class="mt-4"></canvas>

                    </div>
                    <div class="row p-10">
                        <div class="col-lg-4">
                            <p>186<br>Total Pending Requests</p>
                        </div>
                        <div class="col-lg-4">
                            <p>186<br>Total Accepted Requests</p>
                        </div>
                        <div class="col-lg-4">
                            <p>186<br>Total Rejected Requests</p>
                        </div>
                    </div>
                    <div class="row p-10">
                        <div class="col-lg-12">
                            <p>186 Uploaded Campaigns</p>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Campaigns</h4>
                        <canvas id="traffic-chart"></canvas>
                    </div>
                    <div class="row p-10">
                        <div class="col-lg-3">
                            <p>186<br>Uploaded Campaigns</p>
                        </div>
                        <div class="col-lg-3">
                            <p>186<br>Uploaded Requests</p>
                        </div>
                        <div class="col-lg-3">
                            <p>186<br>Campaigns Approved</p>
                        </div>
                        <div class="col-lg-3">
                            <p>186<br>Campaigns Rejected</p>
                        </div>
                    </div>
                    <div class="row p-10">
                        <div class="col-lg-12">
                            <p>186 Uploaded Campaigns</p>
                        </div>

                    </div>
                </div>

            </div>


        </div>
        <div class="row bg-color">
                                        <div class="col-6 ">
                                            <h4>All Campaigns</h4>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="pull-right">
                                                <button class="btn btn-block btn-lg btn-gradient-primary">View All</button>

                                                
                                            </div>
                                        </div>
                                    </div>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                    

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> S.No </th>
                                        <th>Name</th>
                                        <th>Payout ID</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th> Payment Cycle </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> 186</td>
                                        <td> Publishers Name </td>
                                        <td>12345</td>
                                        <td>$100</td>
                                        <td>30-12-22</td>
                                        <td>-</td>

                                    </tr>
                                    <tr>
                                    <td> 186</td>
                                        <td> Publishers Name </td>
                                        <td>12345</td>
                                        <td>$100</td>
                                        <td>30-12-22</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                    <td> 186</td>
                                        <td> Publishers Name </td>
                                        <td>12345</td>
                                        <td>$100</td>
                                        <td>30-12-22</td>
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
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<?php

include 'f-links.php';

?>