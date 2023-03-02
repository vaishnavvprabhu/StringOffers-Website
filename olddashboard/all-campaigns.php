<?php
include 'header.php';
include 'sideber.php';
?>



<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h2 class="page-title">Campaigns</h2>
        </div>

        <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
                <div class="col-md-12 ml-auto mr-auto">
                    <div class="">

                        <div class="card-body">
                            <!-- Tab panes -->
                            <div class="tab-content">

                                <div class="tab-pane active" id="home1" role="tabpanel">
                                    <div class="row bg-color">
                                        <div class="col-6 ">
                                            <h4>All campaigns</h4>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="pull-right">
                                                <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                        class="mdi mdi-lead-pencil"></i></button>
                                                <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                        class="mdi mdi-play-pause"></i></button>

                                                <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                        class="mdi mdi-delete"></i></button>
                                                <button class="btn btn-block btn-lg btn-gradient-primary">Create
                                                    Campaign</button>
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
                                                                    <th> Campaign Type ID </th>
                                                                    <th> Payout </th>
                                                                    <th> Request Status </th>
                                                                    <th> Campaign Status </th>


                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign1</td>
                                                                    <td> insurance </td>
                                                                    <td> $30 </td>
                                                                    <td>Requested</td>
                                                                    <td>
                                                                        <select name="cars" id="cars">
                                                                            <option value="volvo">Active</option>
                                                                            <option value="saab">Paused</option>
                                                                            <option value="mercedes">Inactive</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign1</td>
                                                                    <td> insurance </td>
                                                                    <td> $30 </td>
                                                                    <td>Approved</td>
                                                                    <td>
                                                                        <select name="cars" id="cars">
                                                                            <option value="volvo">Active</option>
                                                                            <option value="saab">Paused</option>
                                                                            <option value="mercedes">Inactive</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign1</td>
                                                                    <td> insurance </td>
                                                                    <td> $30 </td>
                                                                    <td>Declined</td>
                                                                    <td>
                                                                        <select name="cars" id="cars">
                                                                            <option value="volvo">Active</option>
                                                                            <option value="saab">Paused</option>
                                                                            <option value="mercedes">Inactive</option>
                                                                        </select>
                                                                    </td>
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
                                                                    <td> Addvertieser Name </td>
                                                                    <td> Addvertiesername@gmail.com </td>
                                                                    <td>Skype Id</td>
                                                                    <td>Verified</td>
                                                                    <td>30-12-22</td>
                                                                </tr>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> 012</td>
                                                                    <td> Addvertieser Name </td>
                                                                    <td> Addvertiesername@gmail.com </td>
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