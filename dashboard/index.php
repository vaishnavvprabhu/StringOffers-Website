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
                    <li class="breadcrumb-item active dashboard-logo" aria-current="page">
                        <span></span><img src="assets/images/blacklogo.png" class="img-fluid ">
                    </li>
                </ul>
            </nav>
        </div>

        <div class="row">


            <div class="col-md-6 ">
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
                    
                </div>
                <div class="card">
                <div class="bg-blue">
                        <p><span>26.3K</span>  Total Impressions</p>
                </div>
                </div>
                
            </div>
            
            <div class="col-md-6 ">
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
                   
                </div>
                <div class="card" style="margin-top:6px;">
                <div class="bg-blue">
                        <p><span>17.2 </span>  Total Conversions</p>
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
                                                <form action="export.php" method="Post">
                                                    <button class="btn btn-block btn-lg btn-gradient-primary" name="publishers">Download Excel</button>
                                                    </form>

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
                                               <form action="export.php" method="Post">
                                                    <button class="btn btn-block btn-lg btn-gradient-primary" name="advertiser">Download Excel</button>
                                                    </form>

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







 <!--contact form enquiry -->
        
        
        
        
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
                                            <h4>Contact Form</h4>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="pull-right">
                                                 <form action="export.php" method="Post">
                                                    <button class="btn btn-block btn-lg btn-gradient-primary" name="contact_form">Download Excel</button>
                                                    </form>

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
                                                                    <th> Subject</th>
                                                                    <th> Message</th>
                                                                    <!--<th> Model Id </th>-->
                                                                </tr>
                                                            </thead>
                                                           <tbody>
                                                                 <?php
    $contact_form_query = "SELECT * FROM contact_form";
    $contact_form_result = mysqli_query($conn, $contact_form_query);
    while($contact_form = mysqli_fetch_array($contact_form_result)){
       ?>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> <?php echo $contact_form['name']; ?></td>
                                                                    <td><?php echo $contact_form['email_id']; ?> </td>
                                                                    <td><?php echo $contact_form['subject']; ?> </td>
                                                                    <td><?php echo $contact_form['message']; ?> </td>
                                                                    
                                                                   
                                                                    
                                                                    

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
        
        
        
        
         <!--FAQ's form enquiry -->
        
        
        
        
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
                                            <h4>FAQ's Form</h4>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="pull-right">
                                                <form action="export.php" method="Post">
                                                    <button class="btn btn-block btn-lg btn-gradient-primary" name="faqs_enquiry">Download Excel</button>
                                                    </form>
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
                                                                    <th> Subject</th>
                                                                    <th> Describe your problem here</th>
                                                                    <!--<th> Model Id </th>-->
                                                                </tr>
                                                            </thead>
                                                           <tbody>
                                                                 <?php
    $faqs_enquiry_query = "SELECT * FROM faqs_enquiry";
    $faqs_enquiry_result = mysqli_query($conn, $faqs_enquiry_query);
    while($faqs_enquiry = mysqli_fetch_array($faqs_enquiry_result)){
       ?>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> <?php echo $faqs_enquiry['name']; ?></td>
                                                                    <td><?php echo $faqs_enquiry['email_id']; ?> </td>
                                                                    <td><?php echo $faqs_enquiry['subject']; ?> </td>
                                                                    <td><?php echo $faqs_enquiry['message']; ?> </td>
                                                                    
                                                                   
                                                                    
                                                                    

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
        
        
        
        
        
        




    </div>

</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<?php

include 'f-links.php';

?>