<?php
include '../database.php';
include 'header.php';
include 'sideber.php';


?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h2 class="page-title">
                <!-- <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> -->
                Dashboard<br>
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
                        <h4 class="card-title">Campaigns</h4>
                        <canvas id="traffic-chart"></canvas>
                    </div>
                    <div class="row p-10">
                        <div class="col-lg-4">
                            <p>20<br>Total</p>
                        </div>
                        <div class="col-lg-4">
                            <p>17<br>Live Campaigns</p>
                        </div>
                        <div class="col-lg-4">
                            <p>3<br>Rejected</p>
                        </div>
                    </div>
                    <div class="row p-10">
                        <div class="col-lg-12">
                            <p>26.3K Impressions</p>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="clearfix">

                            <h4 class="float-left">Publishers</h4>
                            <h4 class="float-right">Total Earnings $186.53</h4>

                        </div>
                        <canvas id="visit-sale-chart" class="mt-4"></canvas>

                    </div>
                    <div class="row p-10">
                        <div class="col-lg-2">
                            <p>1D</p>
                        </div>
                        <div class="col-lg-2">
                            <p>1W</p>
                        </div>
                        <div class="col-lg-2">
                            <p>1M</p>
                        </div>
                        <div class="col-lg-2">
                            <p>1Y</p>
                        </div>
                        <div class="col-lg-2">
                            <p>3Y</p>
                        </div>
                        <div class="col-lg-2">
                            <p>5Y</p>
                        </div>

                    </div>
                    <div class="row p-10">
                        <div class="col-lg-12">
                            <p>17.2 Conversions</p>
                        </div>

                    </div>
                </div>

            </div>


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
                                            <h4>Publishers</h4>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="pull-right">
                                                <button class="btn btn-block btn-lg btn-gradient-primary" id="download_excel">Download Excel</button>

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
                                                                    <th> Email Id</th>
                                                                    <th> Legal Entity Type </th>
                                                                    <th> Company Name </th>
                                                                    <th> Address Line 1</th>
                                                                    <th> Address Line 2 </th>
                                                                    <th> Zip/Postal Code </th>
                                                                    <th> Country</th>
                                                                    <th> City </th>
                                                                    <th> Phone No. </th>
                                                                    <th> Skype Id </th>
                                                                    <th> Linkedin url</th>
                                                                    <th> City </th>
                                                                    <th> Phone No. </th>


                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                 <?php
    $signup_query = "SELECT * FROM signup";
    $signup_result = mysqli_query($conn, $signup_query);
    while($signup = mysqli_fetch_array($signup_result)){
       ?>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> <?php echo $signup['first_name']; ?></td>
                                                                    <td><?php echo $signup['email_id']; ?> </td>
                                                                    <td><?php echo $signup['legal_entity_type']; ?> </td>
                                                                    <td><?php echo $signup['company_name']; ?> </td>
                                                                    <td><?php echo $signup['address_line_1']; ?> </td>
                                                                    <td><?php echo $signup['address_line_2']; ?> </td>
                                                                    <td><?php echo $signup['postal_code']; ?> </td>
                                                                    <td><?php echo $signup['country']; ?> </td>
                                                                    <td><?php echo $signup['city']; ?> </td>
                                                                    <td><?php echo $signup['phone']; ?> </td>
                                                                    <td><?php echo $signup['skype_id']; ?> </td>
                                                                    <td><?php echo $signup['linkedin_url']; ?> </td>
                                                                    <td><?php echo $signup['phone']; ?> </td>
                                                                    <td><?php echo $signup['skype_id']; ?> </td>
                                                                    
                                                                    

                                                                </tr>
                                                                <?php
} 
?>
                                                            
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
                                            <h4>Advertiser</h4>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="pull-right">
                                                <button class="btn btn-block btn-lg btn-gradient-primary" id="download_excel">Download Excel</button>

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
                                                                    <th> Full Name </th>
                                                                    <th> Email Id</th>
                                                                    <th> Skype Id </th>
                                                                    <th> Company Type</th>
                                                                    <th> Model Id </th>
                                                                  


                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                 <?php
    $signup_a_query = "SELECT * FROM signup_a";
    $signup_a_result = mysqli_query($conn, $signup_a_query);
    while($signup_a = mysqli_fetch_array($signup_a_result)){
       ?>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> <?php echo $signup_a['full_name']; ?></td>
                                                                    <td><?php echo $signup_a['email_id']; ?> </td>
                                                                    <td><?php echo $signup_a['skype_id']; ?> </td>
                                                                    <td><?php echo $signup_a['company_type']; ?> </td>
                                                                    <td><?php echo $signup_a['model_id']; ?> </td>
                                                                   
                                                                    
                                                                    

                                                                </tr>
                                                                <?php
} 
?>
                                                            
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
                                            <h4>Featured Campaigns</h4>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="pull-right">
                                                <button class="btn btn-block btn-lg btn-gradient-primary">View
                                                    More</button>

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
                                                                    <th> Category </th>
                                                                    <th> Payout </th>


                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 1</td>
                                                                    <td> catagory 1 </td>
                                                                    <td> Payout Amount </td>

                                                                </tr>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 2</td>
                                                                    <td> catagory 2 </td>
                                                                    <td> Payout Amount </td>

                                                                </tr>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 3</td>
                                                                    <td> catagory 3 </td>
                                                                    <td> Payout Amount </td>

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
                                            <h4>Active Campaigns</h4>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="pull-right">
                                                <button class="btn btn-block btn-lg btn-gradient-primary">View
                                                    All</button>

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
                                                                    <th> Campaign Type</th>
                                                                    <th> Payout </th>


                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 1</td>
                                                                    <td> catagory 1 </td>
                                                                    <td> Payout Amount </td>

                                                                </tr>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 2</td>
                                                                    <td> catagory 2 </td>
                                                                    <td> Payout Amount </td>

                                                                </tr>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Campaign 3</td>
                                                                    <td> catagory 3 </td>
                                                                    <td> Payout Amount </td>

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
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<?php

include 'f-links.php';

?>