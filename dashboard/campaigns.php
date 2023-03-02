<?php
include 'header.php';
include 'sideber.php';
?>



<div class="main-panel">
    <div class="content-wrapper">
        

        <div class="page-header">
            <h2 class="page-title">
            Campaigns<br>
                
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
                            <ul class="nav nav-tabs nav-tabs-neutral" role="tablist" data-background-color="orange">
                                <li class="nav-item tab-d">
                                    <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">All
                                        Campaigns</a>
                                </li>
                                <li class="nav-item tab-d">
                                    <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">Active
                                        Campaigns</a>
                                </li>
                                <li class="nav-item tab-d">
                                    <a class="nav-link " data-toggle="tab" href="#messages1" role="tab">Decline Campaign
                                    </a>
                                </li>
                                <li class="nav-item tab-d">
                                    <a class="nav-link " data-toggle="tab" href="#messages2" role="tab">Applied Campaign
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <!-- Tab panes -->
                            <div class="tab-content">

                                <div class="tab-pane active" id="home1" role="tabpanel">
                                    <div class="row bg-color">
                                        <div class="col-6 ">
                                            <h4>All Campaigns</h4>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="pull-right">
                                                <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                        class="mdi mdi-view-grid"></i></button>

                                                <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                        class="mdi mdi-zip-box"></i></button>
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
                                                                    <th> Name </th>
                                                                    <th> Campaign Type </th>
                                                                    <th> Payout </th>
                                                                    <th> Request Status </th>
                                                                    <th> Campaigns Status </th>
                                                                    <th> </th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 1 </td>
                                                                    <td> Insurance </td>
                                                                    <td>$30</td>

                                                                    <td><button data-toggle="modal"
                                                                            data-target="#campaign_apply"
                                                                            class="btn btn-block btn-lg btn-gradient-primary">Apply</i></button>
                                                                    </td>

                                                                    <td>
                                                                        <select name="cars" id="cars">
                                                                            <option value="volvo">Active</option>
                                                                            <option value="saab">Paused</option>
                                                                            <option value="mercedes">Inactive</option>
                                                                        </select>
                                                                    </td>




                                                                    <td><button
                                                                            class="btn btn-block btn-lg btn-gradient-primary"
                                                                            data-toggle="modal"
                                                                            data-target="#campaign-n"><i
                                                                                class="mdi mdi-eye"></i></button></td>
                                                                </tr>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 2 </td>
                                                                    <td> Home Services</td>
                                                                    <td>$20</td>
                                                                    <td><button data-toggle="modal"
                                                                            data-target="#campaign_apply"
                                                                            class="btn btn-block btn-lg btn-gradient-primary">Apply</i></button>
                                                                    </td>

                                                                    <td>
                                                                        <select name="cars" id="cars">
                                                                            <option value="volvo">Active</option>
                                                                            <option value="saab">Paused</option>
                                                                            <option value="mercedes">Inactive</option>
                                                                        </select>
                                                                    </td>
                                                                    <td><button
                                                                            class="btn btn-block btn-lg btn-gradient-primary"
                                                                            data-toggle="modal"
                                                                            data-target="#campaign-n"><i
                                                                                class="mdi mdi-eye"></i></button></td>
                                                                </tr>

                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 3 </td>
                                                                    <td> legal </td>
                                                                    <td>$30</td>
                                                                    <td><button data-toggle="modal"
                                                                            data-target="#campaign_apply"
                                                                            class="btn btn-block btn-lg btn-gradient-primary">Apply</i></button>
                                                                    </td>

                                                                    <td>
                                                                        <select name="cars" id="cars">
                                                                            <option value="volvo">Active</option>
                                                                            <option value="saab">Paused</option>
                                                                            <option value="mercedes">Inactive</option>
                                                                        </select>
                                                                    </td>
                                                                    <td><button
                                                                            class="btn btn-block btn-lg btn-gradient-primary"
                                                                            data-toggle="modal"
                                                                            data-target="#campaign-n"><i
                                                                                class="mdi mdi-eye"></i></button></td>
                                                                </tr>

                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 4 </td>
                                                                    <td> Insurance </td>
                                                                    <td>$30</td>
                                                                    <td><button data-toggle="modal"
                                                                            data-target="#campaign_apply"
                                                                            class="btn btn-block btn-lg btn-gradient-primary">Apply</i></button>
                                                                    </td>

                                                                    <td>
                                                                        <select name="cars" id="cars">
                                                                            <option value="volvo">Active</option>
                                                                            <option value="saab">Paused</option>
                                                                            <option value="mercedes">Inactive</option>
                                                                        </select>
                                                                    </td>
                                                                    <td><button
                                                                            class="btn btn-block btn-lg btn-gradient-primary"
                                                                            data-toggle="modal"
                                                                            data-target="#campaign-n"><i
                                                                                class="mdi mdi-eye"></i></button></td>
                                                                </tr>

                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 5 </td>
                                                                    <td> Travel </td>
                                                                    <td>$30</td>
                                                                    <td>
                                                                        <select name="cars" id="cars">
                                                                            <option value="volvo">Approved</option>
                                                                            <option value="saab">Declined</option>
                                                                            <option value="mercedes">Requested</option>
                                                                            <option value="mercedes" class="apply-btn">
                                                                                Apply</option>
                                                                        </select>
                                                                    </td>

                                                                    <td>
                                                                        <select name="cars" id="cars">
                                                                            <option value="volvo">Active</option>
                                                                            <option value="saab">Paused</option>
                                                                            <option value="mercedes">Inactive</option>
                                                                        </select>
                                                                    </td>
                                                                    <td><button
                                                                            class="btn btn-block btn-lg btn-gradient-primary"
                                                                            data-toggle="modal"
                                                                            data-target="#campaign-n"><i
                                                                                class="mdi mdi-eye"></i></button></td>
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
                                            <h4>My Active Campaigns</h4>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="pull-right">

                                                <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                        class="mdi mdi-view-grid"></i></button>

                                                <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                        class="mdi mdi-zip-box"></i></button>
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
                                                                    <th> Name </th>
                                                                    <th> Campaign Type </th>
                                                                    <th> Payout </th>
                                                                    <!-- <th> Request Status </th>
                                                                    <th> Campaigns Status </th> -->
                                                                    <th> </th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 1 </td>
                                                                    <td> Insurance </td>
                                                                    <td>$30</td>

                                                                    <td><button
                                                                            class="btn btn-block btn-lg btn-gradient-primary"
                                                                            data-toggle="modal"
                                                                            data-target="#campaign-n"><i
                                                                                class="mdi mdi-eye"></i></button></td>
                                                                </tr>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 2 </td>
                                                                    <td> Home Services</td>
                                                                    <td>$20</td>
                                                                    <td><button
                                                                            class="btn btn-block btn-lg btn-gradient-primary"
                                                                            data-toggle="modal"
                                                                            data-target="#campaign-n"><i
                                                                                class="mdi mdi-eye"></i></button></td>
                                                                </tr>

                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 3 </td>
                                                                    <td> legal </td>
                                                                    <td>$30</td>
                                                                    <td><button
                                                                            class="btn btn-block btn-lg btn-gradient-primary"
                                                                            data-toggle="modal"
                                                                            data-target="#campaign-n"><i
                                                                                class="mdi mdi-eye"></i></button></td>
                                                                </tr>

                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 4 </td>
                                                                    <td> Insurance </td>
                                                                    <td>$30</td>
                                                                    <td><button
                                                                            class="btn btn-block btn-lg btn-gradient-primary"
                                                                            data-toggle="modal"
                                                                            data-target="#campaign-n"><i
                                                                                class="mdi mdi-eye"></i></button></td>
                                                                </tr>

                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 5 </td>
                                                                    <td> Travel </td>
                                                                    <td>$30</td>
                                                                    <td><button
                                                                            class="btn btn-block btn-lg btn-gradient-primary"
                                                                            data-toggle="modal"
                                                                            data-target="#campaign-n"><i
                                                                                class="mdi mdi-eye"></i></button></td>
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
                                            <h4>My Declined Campaigns</h4>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="pull-right">
                                                <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                        class="mdi mdi-view-grid"></i></button>

                                                <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                        class="mdi mdi-zip-box"></i></button>
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
                                                                    <th> Name </th>
                                                                    <th> Campaign Type </th>
                                                                    <th> Payout </th>
                                                                    <!-- <th> Request Status </th>
                                                                    <th> Campaigns Status </th> -->
                                                                    <th> </th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 1 </td>
                                                                    <td> Insurance </td>
                                                                    <td>$30</td>

                                                                    <td><button
                                                                            class="btn btn-block btn-lg btn-gradient-primary"
                                                                            data-toggle="modal"
                                                                            data-target="#campaign-n"><i
                                                                                class="mdi mdi-eye"></i></button></td>
                                                                </tr>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 2 </td>
                                                                    <td> Home Services</td>
                                                                    <td>$20</td>
                                                                    <td><button
                                                                            class="btn btn-block btn-lg btn-gradient-primary"
                                                                            data-toggle="modal"
                                                                            data-target="#campaign-n"><i
                                                                                class="mdi mdi-eye"></i></button></td>
                                                                </tr>

                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 3 </td>
                                                                    <td> legal </td>
                                                                    <td>$30</td>
                                                                    <td><button
                                                                            class="btn btn-block btn-lg btn-gradient-primary"
                                                                            data-toggle="modal"
                                                                            data-target="#campaign-n"><i
                                                                                class="mdi mdi-eye"></i></button></td>
                                                                </tr>

                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 4 </td>
                                                                    <td> Insurance </td>
                                                                    <td>$30</td>
                                                                    <td><button
                                                                            class="btn btn-block btn-lg btn-gradient-primary"
                                                                            data-toggle="modal"
                                                                            data-target="#campaign-n"><i
                                                                                class="mdi mdi-eye"></i></button></td>
                                                                </tr>

                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 5 </td>
                                                                    <td> Travel </td>
                                                                    <td>$30</td>
                                                                    <td><button
                                                                            class="btn btn-block btn-lg btn-gradient-primary"
                                                                            data-toggle="modal"
                                                                            data-target="#campaign-n"><i
                                                                                class="mdi mdi-eye"></i></button></td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="messages2" role="tabpanel">
                                    <div class="row bg-color">
                                        <div class="col-6 ">
                                            <h4>My Applied Campaigns</h4>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="pull-right">
                                                <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                        class="mdi mdi-view-grid"></i></button>

                                                <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                        class="mdi mdi-zip-box"></i></button>
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
                                                                    <th> Name </th>
                                                                    <th> Campaign Type </th>
                                                                    <th> Payout </th>
                                                                    <!-- <th> Request Status </th>
                                                                    <th> Campaigns Status </th> -->
                                                                    <th> </th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 1 </td>
                                                                    <td> Insurance </td>
                                                                    <td>$30</td>

                                                                    <td><button
                                                                            class="btn btn-block btn-lg btn-gradient-primary"
                                                                            data-toggle="modal"
                                                                            data-target="#campaign-n"><i
                                                                                class="mdi mdi-eye"></i></button></td>
                                                                </tr>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 2 </td>
                                                                    <td> Home Services</td>
                                                                    <td>$20</td>
                                                                    <td><button
                                                                            class="btn btn-block btn-lg btn-gradient-primary"
                                                                            data-toggle="modal"
                                                                            data-target="#campaign-n"><i
                                                                                class="mdi mdi-eye"></i></button></td>
                                                                </tr>

                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 3 </td>
                                                                    <td> legal </td>
                                                                    <td>$30</td>
                                                                    <td><button
                                                                            class="btn btn-block btn-lg btn-gradient-primary"
                                                                            data-toggle="modal"
                                                                            data-target="#campaign-n"><i
                                                                                class="mdi mdi-eye"></i></button></td>
                                                                </tr>

                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 4 </td>
                                                                    <td> Insurance </td>
                                                                    <td>$30</td>
                                                                    <td><button
                                                                            class="btn btn-block btn-lg btn-gradient-primary"
                                                                            data-toggle="modal"
                                                                            data-target="#campaign-n"><i
                                                                                class="mdi mdi-eye"></i></button></td>
                                                                </tr>

                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 5 </td>
                                                                    <td> Travel </td>
                                                                    <td>$30</td>
                                                                    <td><button
                                                                            class="btn btn-block btn-lg btn-gradient-primary"
                                                                            data-toggle="modal"
                                                                            data-target="#campaign-n"><i
                                                                                class="mdi mdi-eye"></i></button></td>
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








<!-- Modal -->
<div id="campaign-n" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Campaign Name</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>
                    <span>Payout: <b>$40</b> </span><br>
                    <span><b>Description:</b> Caller Types Accepted: Any Caller Looking for Assistance with Drug and
                        Alcohol Addiction Treatment.</span><br>
                    <span><b>Sample Landing Page: </b> http://stringoffers.com/lp/rehab/</span><br>
                    <span><b>Negative keywords: </b> <span
                            style="font-size:10px;">https://docs.google.com/spreadsheets/d/1C6vjvXoxtTHIbwwXkkWiDAEVLfryg0iJ48m89oRXVV8/edit?usp=sharing</span></span><br>
                    <span><b>Target Geo: </b> USA (Nationwide)</span><br>
                    <span><b>Hours of Operation:</b> Mon - Sun : 9:00 AM - 11:59 PM EST</span><br>
                    <span><b>Compliance Guidelines:</b> Caller must have ability to pay without medicare of government
                        insurance. No calls for AA or NA. Creatives, call flow, and any filtering process must be
                        submitted with application for approval.</span><br>
                    <span>Repeat Callers: No payout if caller calls back within 30 days-- None of the following are
                        permitted: Craigslist, Discount/coupon sites, Offline, Email blasts, SMS, Outbound call centres
                        or any source with low intent from the lead or caller.</span><br>
                    <span><a href="#">Download Zip Code Coverage</a></span><br>
                    <span><a href="#">Download Campaign Keyword</a></span>

                </p>
            </div>
            <div class="mb-5 pl-5">
                <button type="button" class="btn btn-block btn-lg btn-gradient-primary">Apply</button>
            </div>
        </div>

    </div>
</div>



<!-- Modal -->
<div id="campaign_apply" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form action="/action_page.php">
                <div class="modal-header">
                    <h4 class="modal-title">Apply to Campaign Name</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                      <input type="radio" id="html" name="fav_language" value="HTML" class="radio">
                      <label for="html">Adwords</label><br>
                      <input type="radio" id="css" name="fav_language" value="CSS" class="radio">
                      <label for="css">Bing</label><br>
                      <input type="radio" id="javascript" name="fav_language" value="JavaScript" class="radio">
                      <label for="javascript">Facebook</label><br>
                      <input type="radio" id="javascript" name="fav_language" value="JavaScript" class="radio">
                      <label for="javascript">Other</label>


                    <div class="form-group mt-5">

                        <input type="text" class="form-control" id="exampleInputUsername1"
                            placeholder="Landing Page URL">
                    </div>
                    <div class="form-group mt-5">

                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Ads Copy Text">
                    </div>

                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label> I agree to the <a>terms and conditions.</a></label><br>
                </div>
                <div class="mb-5 pl-5">
                    <button type="button" class="btn btn-block btn-lg btn-gradient-primary" data-toggle="modal"
                        data-target="#applyto">Apply</button>
                </div>
            </form>
        </div>

    </div>
</div>


<!-- apply to campaign name  -->
<div id="applyto" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Apply To Campaign Name</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <i class="mdi mdi-check"></i>
                <h2>Your campaign request<br>
                    has been sent.</h2>
                <p>
                    Please wait for admin approval.<br>
                    Write to support@stringoffers.com for any queries.
                </p>
            </div>
            <div class="mb-5 pl-5">
                <center>
                    <button type="button" class="btn btn-block btn-lg btn-gradient-primary">Apply to More
                        Campaigns</button>
                    <button type="button" class="btn btn-block btn-lg btn-gradient-primary"
                        data-dismiss="modal">Close</button>
                </center>
            </div>
        </div>

    </div>
</div>


<?php
include 'f-links.php';
?>