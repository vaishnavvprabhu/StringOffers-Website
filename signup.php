<?php 
include 'database.php';
include 'header.php';
include 'important-link.php';
?>




<?php

// session_start();
if(isset($_POST['submit_p'])){
    // craete a varible for you create batabase table row
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email_id = mysqli_real_escape_string($conn, $_POST['email_id']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $legal_entity_type = mysqli_real_escape_string($conn, $_POST['legal_entity_type']);
    $company_name = mysqli_real_escape_string($conn, $_POST['company_name']);

    $address_line_1 = mysqli_real_escape_string($conn, $_POST['address_line_1']);
    $address_line_2 = mysqli_real_escape_string($conn, $_POST['address_line_2']);
    $postal_code = mysqli_real_escape_string($conn, $_POST['postal_code']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    
    $skype_id = mysqli_real_escape_string($conn, $_POST['skype_id']);
    $linkedin_url = mysqli_real_escape_string($conn, $_POST['linkedin_url']);
    $question1 = mysqli_real_escape_string($conn, $_POST['question1']);
    $question2 = mysqli_real_escape_string($conn, $_POST['question2']);
    $question3 = mysqli_real_escape_string($conn, $_POST['question3']);
    $question4 = mysqli_real_escape_string($conn, $_POST['question4']);
    
    $check_box = mysqli_real_escape_string($conn, $_POST['check_box']);
    //  insert qurey in datatable code
    $query =  "INSERT INTO signup (first_name,last_name,email_id,password,legal_entity_type,company_name,address_line_1,address_line_2,postal_code,country,city,phone,skype_id,linkedin_url,question1,question2,question3,question4,check_box) 
    VALUES ('$first_name','$last_name','$email_id','$password','$legal_entity_type','$company_name','$address_line_1','$address_line_1','$postal_code','$country','$city','$phone','$skype_id','$linkedin_url','$question1','$question2','$question3','$question4','$check_box')";
    $query_run = mysqli_query($conn, $query);
                    if($query_run>0)
                    {
                        echo "<h1 class='text-center'>Create Your Account Please login Now</h1>";
                        echo "<script> location.replace('thank-you.php') </script>";
                        // header('Location:https://stringoffers.com/');
                        exit(0);
                    }
                    else
                    {
                        echo "<h1 class='text-center'>Your Account Not Created Please Try Again</h1>";
                        exit(0);
                    }
    }

?>

<?php

if(isset($_POST['submit_a'])){
    
     $login = mysqli_real_escape_string($conn, $_POST['login']);
     $password = mysqli_real_escape_string($conn, $_POST['password']);
     $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
     $email_id = mysqli_real_escape_string($conn, $_POST['email_id']);
     $skype_id = mysqli_real_escape_string($conn, $_POST['skype_id']);
     $company_type = mysqli_real_escape_string($conn, $_POST['company_type']);
     $model_id = mysqli_real_escape_string($conn, $_POST['model_id']);
     $check_box = mysqli_real_escape_string($conn, $_POST['check_box']);
     
     
     $query =  "INSERT INTO signup_a (login,password,full_name,email_id,skype_id,company_type,model_id,check_box) 
     VALUES ('$login','$password','$full_name','$email_id','$skype_id','$company_type','$model_id','$check_box')";
     
        $query_run = mysqli_query($conn, $query);
                    if($query_run>0)
                    {
                        echo "<h1 class='text-center'>Create Your Account Please login Now</h1>";
                        echo "<script> location.replace('thank-you.php') </script>";
                        // header('Location:https://stringoffers.com/');
                        exit(0);
                    }
                    else
                    {
                        echo "<h1 class='text-center'>Your Account Not Created Please Try Again</h1>";
                        exit(0);
                    }
    }
     




?>







 <!-- ======= Hero Section ======= -->
 <section id="sign-sec" class="d-flex align-items-center">

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
            data-aos="fade-up" data-aos-delay="200">
            <h1>Join us as a publisher today.</h1>
            <center>
                <hr class="gradient-line">
            </center>
            <h2>Earn high commissions by promoting the best offers from the best
                                                        brands, without requiring a significant upfront investment.</h2>
                                                        <p style="color:#fff;">Already a member? <a href="login.php">Log in</a> here.</p>
        </div>

    </div>


  




</div>
</div>
</section><!-- End Hero -->



<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="exTab1" class="container ">
                    <div class="row">
                        
                        <div class="col-lg-12 text-center">
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#1a" data-toggle="tab">Publisher</a></li>
                                <li><a href="#2a" data-toggle="tab">Advertiser</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="1a">
                                    <div class="signup">
                                        <div class="row">
                                         
                                            <div class="col-lg-12 col-sm-6 col-xs-12">

                                                <div class="align-items-stretch">


                                                    <form action="signup.php" method="post" role="form" class="php-email-form" >
                                                        <div class="row">
                                                            <h2>Contact Details</h2>

                                                            <div class="form-group col-md-6">
                                                                <input type="text" name="first_name" class="form-control"
                                                                    id="first_name" placeholder="First Name" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <input type="text" class="form-control" name="last_name"
                                                                    id="last_name" placeholder="Last Name" required>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <input type="email" class="form-control" name="email_id"
                                                                    id="email" placeholder="Email" required>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <input type="password" class="form-control" name="password"
                                                                    id="password" placeholder="Password" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <input type="text" class="form-control" name="legal_entity_type"
                                                                    id="legal_entity_type" placeholder="Legal Entity Type" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <input type="text" class="form-control" name="company_name"
                                                                    id="company_name" placeholder="Company/Individual/Website Name" required>
                                                            </div>


                                                            <div class="form-group col-md-12">
                                                                <h2>Mailing Address</h2>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <input type="text" class="form-control" name="address_line_1"
                                                                    id="address_line_1" placeholder="Address Line 1" required>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <input type="text" class="form-control" name="address_line_2"
                                                                    id="address_line_2" placeholder="Address Line 2" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <input type="number" class="form-control" name="postal_code"
                                                                    id="number" placeholder="Zip/Postal Code" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <select id="cars" class="form-control" name="country" required>

                                                                    <option value="volvo"> Country</option>
                                                                    <option value="India">India</option>
                                                                    <option value="United States">United States</option>
                                                                    <option value="United Arab Emirates">United Arab
                                                                        Emirates</option>
                                                                    <option value="United Kingdom">United Kingdom
                                                                    </option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <input type="text" class="form-control" name="city"
                                                                    id="city" placeholder="City" required>
                                                            </div>

                                                          

                                                            
                                                            <div class="form-group col-md-6">
                                                                <input type="tel" class="form-control" name="phone"
                                                                    id="phone" placeholder="Phone Number" required>
                                                            </div>



                                                            <div class="form-group col-md-12">
                                                                <h2>Additional Information</h2>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <input type="text" class="form-control" name="skype_id"
                                                                    id="skype_id" placeholder="Skype ID" required>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <input type="text" class="form-control" name="linkedin_url"
                                                                    id="linkedin_url" placeholder="Linkedin URL" required>
                                                            </div>

                                                           

                                                           

                                                            <div class="form-group col-md-6">
                                                                <select id="cars" class="form-control" name="question1">

                                                                    <option
                                                                        value="What type of offers do you run the most?">
                                                                        What type of offers do you run the most?
                                                                    </option>
                                                                    <option
                                                                        value="What types of traffic do you currently run?">
                                                                        What types of traffic do you currently run?
                                                                    </option>
                                                                    <option value="What verticals do you focus on?">What
                                                                        verticals do you focus on?</option>
                                                                    <option
                                                                        value="What are some top GEOs you get traffic from?">
                                                                        What are some top GEOs you get traffic from?
                                                                    </option>
                                                                    <option
                                                                        value="What are some offer names you are running now?">
                                                                        What are some offer names you are running now?
                                                                    </option>
                                                                    <option
                                                                        value="Top affiliate networks you work with">Top
                                                                        affiliate networks you work with</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <select id="cars" class="form-control" name="question2">

                                                                    <option value="Average payout from all networks">
                                                                        Average payout from all networks</option>
                                                                    <option
                                                                        value="What types of traffic do you currently run?">
                                                                        What types of traffic do you currently run?
                                                                    </option>
                                                                    <option value="What verticals do you focus on?">What
                                                                        verticals do you focus on?</option>
                                                                    <option
                                                                        value="What are some top GEOs you get traffic from?">
                                                                        What are some top GEOs you get traffic from?
                                                                    </option>
                                                                    <option
                                                                        value="What are some offer names you are running now?">
                                                                        What are some offer names you are running now?
                                                                    </option>
                                                                    <option
                                                                        value="Top affiliate networks you work with">Top
                                                                        affiliate networks you work with</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <select id="cars" class="form-control" name="question3">

                                                                    <option
                                                                        value="What type of offers do you run the most?">
                                                                        What type of offers do you run the most?
                                                                    </option>
                                                                    <option
                                                                        value="What types of traffic do you currently run?">
                                                                        What types of traffic do you currently run?
                                                                    </option>
                                                                    <option value="What verticals do you focus on?">What
                                                                        verticals do you focus on?</option>
                                                                    <option
                                                                        value="What are some top GEOs you get traffic from?">
                                                                        What are some top GEOs you get traffic from?
                                                                    </option>
                                                                    <option
                                                                        value="What are some offer names you are running now?">
                                                                        What are some offer names you are running now?
                                                                    </option>
                                                                    <option
                                                                        value="Top affiliate networks you work with">Top
                                                                        affiliate networks you work with</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <select id="cars" class="form-control" name="question4">

                                                                    <option value="Average payout from all networks">
                                                                        Average payout from all networks</option>
                                                                    <option
                                                                        value="What types of traffic do you currently run?">
                                                                        What types of traffic do you currently run?
                                                                    </option>
                                                                    <option value="What verticals do you focus on?">What
                                                                        verticals do you focus on?</option>
                                                                    <option
                                                                        value="What are some top GEOs you get traffic from?">
                                                                        What are some top GEOs you get traffic from?
                                                                    </option>
                                                                    <option
                                                                        value="What are some offer names you are running now?">
                                                                        What are some offer names you are running now?
                                                                    </option>
                                                                    <option
                                                                        value="Top affiliate networks you work with">Top
                                                                        affiliate networks you work with</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group col-md-12 text-center">
                                                            <input type="checkbox" id="checkbox"  name="check_box"
                                                                value="I agree to the Terms and Conditions. ">
                                                            <label for="vehicle1"> I agree to the <b> <a
                                                                        data-toggle="modal" data-target="#myModal">
                                                                        Terms and
                                                                        Conditions.</a></b></label><br>
                                                        </div>
                                                        <div class="form-group col-md-12 text-center">
                                                            <button type="submit" id="submit_p" name="submit_p">Submit</button>
                                                                
                                                                <!--send OTO button-->
                                                                <!--<button type="submit" name="submit_p" data-toggle="modal"-->
                                                                <!--data-target="#otp">Submit</button> s-->
                                                        </div>



                                                        </div>

                                                        <!-- <p class="text-p"> Already a member? <b>Log in</b> here.</p> -->
                                                        
                                                    </form>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>











                                <div class="tab-pane" id="2a">
                                    <div class="signup">
                                        <div class="row">
                                           
                                            
                                            <div class="col-lg-12">
                                            
                                                <div class="align-items-stretch">
                                                <h2>Contact Details</h2>
                                                    <form action="signup.php" method="post" role="form"
                                                        class="php-email-form">
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <input type="text" name="login" class="form-control"
                                                                    id="login" placeholder="Login" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <input type="email" class="form-control" name="password"
                                                                    id="password" placeholder="Password" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <input type="email" class="form-control" name="full_name"
                                                                    id="full_name" placeholder="Full name" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <input type="email" class="form-control" name="email_id"
                                                                    id="email_id" placeholder="E-mail" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <input type="email" class="form-control" name="skype_id"
                                                                    id="skype_id" placeholder="Skype ID" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <input type="email" class="form-control" name="company_type"
                                                                    id="company_type" placeholder="Company Type" required>
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <input type="email" class="form-control" name="model_id"
                                                                    id="model_id" placeholder="Model" required>
                                                            </div>
                                                            <p class="text-p text-center"> Already a member? <b><a href="login.php">Log
                                                                    in</a></b> here.</p>

                                                            <div class="form-group col-md-12 text-center">
                                                                <input type="checkbox" id="checkbox"  name="check_box"
                                                                    value="I agree to the Terms and Conditions.">
                                                                <label for="check_box"> I agree to the <b>
                                                                        <a data-toggle="modal"
                                                                            data-target="#myModal">Terms and
                                                                            Conditions.</a> </label><br>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="text-center buttonWrap">
                                                             <div id="blocker"></div>
                                                            <button type="submit" id="submit_a" name="submit_a" disbaled >Submit</button>
                                                                
                                                                <!--send OTP button-->
                                                                <!--<button type="submit" data-toggle="modal"-->
                                                                <!--data-target="#otp">Submit</button>-->
                                                                
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
                </div>
            </div>
        </div>
</section>





<!-- Terms and conditions -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Terms and Conditions</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>PLEASE READ THESE TERMS OF SERVICE (“TERMS” OR THE “AGREEMENT”) CAREFULLY. BY CLICKING TO ACCEPT, OR BY ACCESSING OR USING OUR SERVICES, YOU AGREE TO BE BOUND BY THESE TERMS OF USE AND ALL TERMS INCORPORATED BY REFERENCE.
<br><br>
These are the Terms and Conditions that apply to the use, by Publishers, of the various services available on the Platform.
<br><br>
These Terms incorporate String Offers’s Privacy Policy, Cookies Policy as well as any other policies published on the Website, so by accepting these Terms, you agree with and accept all the policies published on the Website.
<br><br>
1. Parties to the Agreement<br>
References in these Terms to “your” or “you” are to the person/entity who accepts these Terms and agrees to create accounts and use the services as set out in and under these Terms. You and String Offers shall together be referred to as the “Parties” and references to a “Party” shall be to the relevant one of them as the context requires.
<br><br>
3. Services<br>
3.1. In order to become a Publisher and offer the Services you must register and create an Account with us.
<br><br>
3.2. You agree to provide accurate and complete information about yourself during the registration process and you also agree not to impersonate another person or entity, and not to hide your identity from String Offers for any reason whatsoever. If you register as a commercial entity, you declare that you have the required authority to bind that entity to this Agreement. When you open an Account, String Offers may ask that you provide certain documents to identify yourself and to verify the information you have submitted to us upon registration, such as identification card or a passport, a utility bill, a bank statement or any document proving their identity issued by a governmental body. String Offers reserves the right to refuse or reject a registration, at its own discretion.
<br><br>
3.3. You are only allowed to register to become a Publisher and/or use the Services if you are eligible in accordance with the laws of your jurisdiction or under the laws of any other jurisdiction to which you may be subject. String Offers has no obligation or capability to, and therefore does not, verify whether you are eligible to use any of the Services and we shall not bear any responsibility for your use of the Services.
<br><br>
3.4. We may directly or indirectly (through third parties), make any inquiries as we consider necessary to check the relevance and accuracy of the information provided for verification purposes.
<br><br>
3.5. By becoming a Publisher and/or using any of the Services you agree to be bound by these Terms which represent a binding legal contract between the Parties. You hereby agree to the use of electronic communication in order to enter into contracts, place orders and other records and to the electronic delivery of notices, policies and records of transactions initiated or completed through our application and platforms. Furthermore, you hereby waive any rights or requirements under any laws or regulations in any jurisdiction which require original (non-electronic) signature or delivery or retention of non-electronic records, to the extent permitted under applicable mandatory law.
<br><br>
3.6. Publishers are not allowed to hold more than one account with String Offers for any reason. String Offers shall have the right in its sole and absolute discretion to permit you to register more than one Publisher account. You will need to contact String Offers support to request such permission
<br><br>
4. Publishing<br>
4.1. Publishers are able to use the Services in order to Implement Advertising Materials. In this regard, String Offers grants you a non-exclusive, worldwide, royalty-free, fully paid up right and licence to use the String Offers Ad Tag on a Publisher’s Website.
<br><br>
4.2. String Offers shall have the right in its sole and absolute discretion to review and approve a Publisher’s Website which has been submitted on the Platform. In this regard, String Offers shall have the right in its sole and absolute discretion to refuse to accept a Publisher’s Website which it either disapproves of, or is deemed to be in breach of these Terms. String Offers may refuse to accept a Publisher’s Website for many reasons, such as but not limited to:
<br><br>
websites that are under construction, incomplete or with extremely limited audiences or viewerships;<br>
websites that infringe on any third-party rights or breach Applicable Laws (including but not limited to copyright and trademark laws and general rights to privacy);<br>
websites which contain Inappropriate Content; and<br>
websites which promote any goods or services that are illegal ( “Illegal Content”), such as but not limited to:<br>
i. human trafficking;<br>
ii. money laundering, terrorist financing, proliferation of weapons of mass destruction;<br>
iii. pornography, adult or mature content;<br>
iv. any goods of services that are illegal or the promotion, offer or marketing of which is illegal<br>
or that are offered in connection with illegal content, depict children or minors in sexual postures, depict means of propaganda of signs of unconditional organisations glorifying war or violating human dignity;
v. any goods or services, promotion, offer or marketing of which would would violate copyrights, industrial property rights or other rights of any person;<br>
vi. archaeological findings;<br>
vii. drugs, narcotics or hallucinogens;<br>
viii. weapons of any kind;<br>
ix. illegal gambling services;<br>
x. Ponzi, pyramid or any other “get rich quick” schemes;<br>
xi. goods that are subject to any trade embargo;<br>
xii. media that is harmful to minors and violates laws and, in particular, the provision in respect of the protection of minors;<br>
xiii. body parts or human remains;<br>
xiv. protected animals or protected plants; or<br>
xv. any other illegal goods, services or transactions.<br>
4.3. You are responsible for ensuring that a Publisher’s Website which has been submitted on the Platform does not feature any Inappropriate Content.<br>

4.4. You hereby expressly agree that a Publisher’s Website which has been submitted on the Platform does not and shall not infringe on any third-party rights or breach Applicable Laws (including but not limited to copyright and trademark laws and general rights to privacy). You also agree that a Publisher’s Website which has been uploaded on the Platform is not and shall not be offensive or defamatory or unlawful in any other way.<br>

4.5. String Offers shall notify the Publisher, via the Dashboard, of its approval (“Approval”) of a Publisher’s Website which has been submitted on the Platform. Following an Approval String Offers shall provide the Publisher with the String Offers Ad Tag Ad Tags to allow the Publisher to Implement the Advertising Materials.<br>

4.6. Following Implementation, the Adverting Materials may start generating impressions/clicks/actions.<br>

4.7. The Publisher shall place the String Offers Ad Tag on all appropriate pages within the Publisher’s Website. A Publisher shall not alter the String Offers Ad Tag in any way without String Offers’s prior written consent. The String Offers Ad Tag may not be used on a web page other than one located on a Publisher’s Website which has been approved by String Offers on the Platform and may not be distributed or submitted to any newsgroup, e-mail distribution list, chat room, guest books or any other location without String Offers’s prior written consent. The Publisher is not allowed to place String Offers Ad Tag into an iframe without String Offers’s prior written consent.<br>

4.8. String Offers has zero tolerance against SPAM of any kind, including but not limited to unsolicited e-mails, bulletin boards (forum) spam, chat or messengers spam or comments spam. You are responsible for ensuring that a Publisher’s Website which has been submitted on the Platform does not contain SPAM of any kind. String Offers reserves the right to terminate your account, in accordance with clause 7.1, if a Publisher’s Website contains SPAM of any kind.<br>

4.9 Publisher's Website must contain a privacy policy section that clearly discloses any data collection, sharing and usage that takes place on the Website. If the Website is placing and reading cookies on visitors' browsers to collect information, the cookies consent message should be provided to each visitor.<br>

5. Payments<br><br>
5.1. String Offers collects fees from Advertisers (the “Fees”), calculated as follows:<br><br>
An Advertiser may choose between any of the following three pricing models:<br><br>
<br><br>
Cost-Per-Mille – cost per 1,000 impressions (“CPM”);<br><br>
Cost-Per-Action – cost per 1 conversion (“CPA”);<br><br>
Cost per click (“CPC”).<br><br>
Each pricing model shall be referred to as a “Charge Event”.<br><br>

An Advertiser shall also set the price for the Advertising Material (the “Price”). The charge shall be calculated having regard to the applicable Charge Event and Price.
<br><br>
For example, if an Advertiser has opted for CPM and has set the price at $1.00, the Advertiser shall be charged a fee of $1.00 for every 1,000 impressions.
<br><br>
5.2. A Publisher shall be entitled to the Revenue Share received from the applicable String Offers Ad Tag (the “Net Fees”). By providing the Services you agree to accept the relevant Charges. You acknowledge and agree that the payment obligations hereunder are based solely on:
<br><br>
the number of impressions/clicks/actions, as determined solely by String Offers,<br>
String Offers receiving the Fees from the Advertisers,<br>
and not on any other criteria. You shall be able to view the number of impressions/clicks/actions via your Dashboard.<br>
<br><br>
5.3. You acknowledge and agree that String Offers may make adjustments to the number of impressions/clicks/actions or to your Account's balance in case of software errors, server downtime or under any other circumstance that caused discrepancy in the number of impressions/clicks/actions or in your Account's balance, in order to remedy and rectify any inaccuracies.
<br><br>
5.4. You acknowledge and agree that String Offers may make adjustments to the balance in your Account in the event that there is a chargeback received from an Advertiser, as this will reduce the Fees received from the Advertisers and accordingly the amount of the Revenue Share.
<br><br>
5.5. String Offers may, in its sole and absolute discretion, offer you custom Net Fees, custom Payment Dates and custom Minimum Net Fee (each a “Custom Term”). Any Custom Term must be agreed in writing between the Parties. You undertake to String Offers that you shall not disclose any of the information contained in a Custom Term to any third party.
<br><br>
5.6. String Offers shall pay the Publisher the Net Fees bi-monthly in arrears on the 1 st and 16 th day of each month (collectively “Payment Dates” and each a “Payment Date”) on a NET15 basis provided that each Payment Date falls on a Business Day. If a Payment Date does not fall on a Business Day, the payment shall be made on the next Business Day following the relevant Payment Date.
<br><br>
5.7. Payments shall be made to the bank account, payment service provider account or debit/credit card registered on your Account.
<br><br>
5.8. String Offers utilizes Hyperwallet payment services to deliver payments to you. Such payment services are subject to the Hyperwallet Terms of Service and the Hyperwallet Privacy Policy .
<br><br>
5.9 In the event that the Net Fee is less than the “Minimum Net Fee”, String Offers shall hold payment until the Net Fee exceeds the Minimum Net Fee. Once the Net Fees have exceeded the Minimum Net Fee, String Offers shall pay the Publisher the Net Fee on the next Payment Date.
<br><br>
5.10. String Offers has no control, and are not responsible for any fees or charges that may be imposed by a financial institution (such as a bank or other payment services provider) on the transfer of the Net Fees to a Publisher. You agree that any Net Fees received by you may be received net, after the deduction of any fees or charges imposed on the transfer.
<br><br>
5.11. String Offers may, on a Publisher’s written request, pay the Net Fees to the Publisher in a currency other than USD (for example, EUR, GBP or XBT), referring solely to such exchange rate as calculated by String Offers’s bank or payment provider (the “Conversion”). String Offers shall not be responsible or liable for any losses which may be suffered by you as a result of the Conversion, nor shall String Offers be liable for any errors in the rates of exchange provided by String Offers’s bank or payment provider.
<br><br>
5.12. String Offers shall, by method of self-billing, send you invoices in relation to each Payment Date. The invoices shall be generated automatically having regard to the Charges applicable for each Payment Date.
<br><br>
5.13. Publisher shall provide String Offers with accurate data which is fully and legally compliant for the purposes of invoicing and taxation.
<br><br>
5.14. Any Publisher residing in the European Union who has provided a VAT number expressly warrants that such VAT number is, in its own country, valid for the issuance of VAT-exempt invoices to String Offers. The Publisher expressly accepts to be solely liable for any error, direct or indirect loss or damage arising from the inaccuracy or non-compliance of such data or the breach of any of the aforementioned warranties and, accordingly, the Publisher will hold String Offers harmless from any of the direct or indirect loss or damages. Publisher hereby confirms that another VAT invoice won’t be issued.
<br><br>
5.15. Publisher shall notify String Offers if his VAT registration number has changed or cancelled.
<br><br>
5.16. In case there is any claim, administrative proceeding from any authority, dispute or conflict, in any way due to the inaccuracy or non-compliance of any data provided by the Publisher, String Offers is expressly authorized to retain any payments due to the Publisher until such incident has been resolved.
<br><br>
6. Your Representations and Warranties<br><br>
By becoming a Publisher and/or by using the Services you hereby agree, represent and warrant that:
<br><br>
you have read understood and accept these Terms;<br><br>
you have the necessary authority and consent to accept these Terms, to enter into a binding agreement with String Offers and to perform the obligations set out herein;
if you are an individual, you have sufficient legal capacity (in your jurisdiction) to accept these Terms and to enter into a binding agreement with String Offers on the terms set out herein;
you shall not attempt to obtain fees by using methods to artificially and/or fraudulently inflate the volumes of impression/clicks/actions. These methods include, but are not limited to:
<br><br>
i) framing an ad-banner’s click-through destination;
<br>
ii) auto-spawning of browsers, running ‘spiders’ against the Publisher’s Website; or
<br>
iii) using any technique of generating fraudulent clicks/impressions/actions as determined by String Offers in its sole and absolute discretion<br>
<br>
iv) using incentives to increase volumes of clicks or actions<br><br>
<br><br>
you shall not edit or modify any information in any Advertising Materials or Ad Tags including, but not limited to, changing the size of the Advertising Material or making Advertising Material partially or fully invisible;
you shall not use the Services to promote any Illegal Content;
you are the owner or are licensed to use the Publisher’s Website;
you shall not interfere with or attempt to interrupt the proper operation of the Platform or the Services through the use of any virus, device, information collection or transmission mechanism, software or routine, or access or attempt to gain access to any data, files, or passwords related to the Services through hacking, passwords or data mining, or any other means;
using the Services is not unlawful or prohibited under the laws of your jurisdiction or under the laws of any other jurisdiction to which you may be subject and your use of the Services shall be in full compliance with applicable laws (including, but not limited to, in compliance with any tax obligations to which you may be subject in any relevant jurisdiction);
you will comply with any applicable tax obligations in your jurisdiction arising from your use of the Services;
you will monitor all and any changes to your Account and take all steps to maintain and ensure the confidentiality of your Account’s credentials, including, but not limited to passwords, emails and/or usernames;
you will immediately inform us of any unauthorized use of your Account or password, or any other breach of security by email addressed to support@String Offers.com
you are responsible for any and all damages caused, and all liability actions brought against String Offers for any breach infringement of these Terms or of any third-party rights or violation of any Applicable Laws;
nothing in these Terms excludes or limits the liability of the Publishers for fraud, death or personal injury caused by their negligence, breach of the Terms implied by operation of law or any other liability which may not be limited or excluded by law;
any errors or malfunctions caused by or otherwise related to the Services including your own failure to properly maintain or use your Account may result in the loss of any Net Fees due to you;
you will provide String Offers with correct and relevant documents and personal information upon request. In case you provide counterfeit documents and false personal information, such behaviour will be interpreted as a fraudulent activity; and
you are responsible for implementing all reasonable and appropriate measures for maintaining the confidentiality and security of your Account name, user ID, passwords, personal identification and mobile unlock codes that you use to access the Platform.
you are not allowed to use, together with String Offers Ad Tag, any misleading and/or incentive creatives, logos and/or brand names without written approval of the owners, or confuse and force visitors to take any action
Publisher shall not advertise his Website and/or Referral Link on String Offers brand name, infringe the intellectual property rights, rights of privacy or any other rights of String Offers whatsoever.
<br><br>
7. Suspension or Termination
For cause
<br>
7.1. We reserve the right to suspend or terminate your Account if we have reason to believe or suspect that you are in breach of these Terms or other legal obligation (including fraudulent) without prior notice or liability. We also reserve the right to change, suspend or discontinue all or any part of the Services at any time without prior notice or liability.
<br>
7.2. Further, should your Account be suspended or terminated you will lose access to your Account and will not be able to undertake any transaction on the Platform.
<br>
7.3. You understand and agree that you may not be able to access any of the Services if your Account is suspended. In case the cause of the suspension is resolved by us, we shall restore your Account and restore your access to your Account. We shall not be liable to you for any consequential or indirect loss (such as loss of profits or opportunity) you may incur as a result of your account being suspended.
<br>
7.4. We further reserve the right in our sole discretion, to refuse or cancel any of our Services, and/or refuse to distribute profits (including Net fees) to any person for legitimate reasons, including, without limitation:
<br>
7.4.1. if we have reason to believe that your activities or use of the Services may be illegal;<br>
7.4.2. if we may be harmed by any fiscal or pecuniary damage due to your activities on or through the Services; or<br>
7.4.3. if we consider that you have used the Services in a manner which contravenes any of these Terms at our sole discretion.<br>

7.5. If we terminate your Account in accordance with clause 7.1, you surrender your right to receive payment of any balance standing to your credit in your Account and we shall be under no obligation to refund any balance held in your Account.
<br>
Without cause
<br><br>
7.6. Either Party may, without prejudice to any other rights they may have, by giving five (5) Business Days notice in writing to the other Party, terminate this Agreement without cause.
<br><br>
7.7. Subject to clause 7.4, on termination of this Agreement, in accordance with clause 7.6, we shall pay any Net Fees due to you up to the date of termination, provided that the amount is above the Minimum Net Fee, and this shall be paid to you on the next Payment Date following the date of termination. If the Agreement is terminated by String Offers, we shall pay any Net Fees due to you, even if the amount is below the Minimum Net Amount.
<br><br>
8. Intellectual Property
<br><br>
8.1. In this clause 8, “String Offers IP Rights” means in relation to String Offers, the Platform and Services, all: (i) patents, inventions, designs, copyright and related rights, database rights, knowhow and confidential information, trademarks and related goodwill, trade names (whether registered or unregistered), and rights to apply for registration; (ii) all other rights of a similar nature or having an equivalent effect anywhere in the world which currently exist or are recognised in the future; and (iii) all applications, extensions and renewals in relation to any such rights.
<br><br>
8.2. String Offers shall grant the Publisher an unlimited, non-exclusive, fully transferable, sub-licensable, worldwide, royalty-free, fully paid up right and licence to use the Platform.
<br><br>
8.3. Except as expressly set out in these Terms, you are not entitled, for any purpose, to any String Offers IP Rights. We shall at all times retain ownership, including all rights, title and interests in and to the String Offers IP Rights and you understand and accept that by using the Services pursuant to these Terms you shall not:
<br><br>
acquire or otherwise be entitled to any String Offers IP Rights;
<br><br>
make a claim in respect of any String Offers IP Rights or any other equivalent rights; or
<br><br>
use, attempt to use, copy, imitate or modify (whether in whole or in part) any String Offers IP Rights, except with our prior written consent.
<br><br>
9. Indemnity
<br>
9.1. To the fullest extent permitted by applicable law, you will indemnify, defend and hold harmless String Offers and our respective past, present and future employees, officers, directors, contractors, consultants, equity holders, suppliers, vendors, service providers, parent companies, subsidiaries, affiliates, agents, representatives, predecessors, successors and assigns (the “String Offers Parties”) from and against any and all claims, demands, actions, damages, losses, costs and expenses (including reasonable professional and legal fees) that arise from or relate to:
<br><br>
your use of the Services and/or Platform under these Terms;
<br>
the performance or non-performance of your responsibilities or obligations under these Terms;<br>
your breach of any of the terms and conditions set out in these Terms; or
<br>
your breach of any rights of any other person or entity.<br>

9.2. String Offers reserves the right to exercise sole control over the defence, at your sole cost and expense, of any claim subject to an indemnity set out in clause 9.1.
<br>
9.3. The indemnity set out in this clause 9 is in addition to, and not in lieu of, any other remedies that may be available to String Offers under Applicable Law.
<br>
10. Disclaimers
<br><br>
To the fullest extent permitted by applicable law and except as otherwise specified in writing by us:
<br><br>
the Services and/or Platform are available on an “as is” and “as available” basis, without any warranties or representations of any kind, and we expressly disclaim all warranties and representations relating to the Services (whether express or implied), including, without limitation, any implied warranties of skill, care, diligence, quality and suitability, fitness for a particular purpose and non-infringement;
we do not represent or warrant that the Services and/or Application is reliable, current or defect- free, meet your expectations, or that any defects will be corrected;
we provide no warranties or assurances with respect to the (i) placement or performance of any Advertising Materials; or (ii) the number of views/clicks or conversions;
we are not responsible for the accuracy of the information present on any of the Services and the use of the Services is at your own discretion and risk; and
String Offers may from time to time carry out routine and emergency maintenance of the Website and/or Platform. String Offers shall give the Publisher as much notice of any routine or emergency maintenance as is reasonably possible and where reasonably possible shall endeavour to perform routine maintenance in such a way as to cause minimal disruption to the Publisher.
<br><br>
11. Limitation of Liability<br>
11.1. To the fullest extent permitted by Applicable Law, in no circumstances shall:<br>

String Offers or any of the String Offers Parties (where applicable) be liable for any direct, indirect, special, incidental or consequential loss of any kind (including, but not limited to, loss of revenue, income, business or profits, loss of contract or depletion of goodwill, loss of anticipated savings, loss of use or data, or damages for business interruption or any like loss) arising out of or in any way related to:
<br><br>
1) the use of Services and/or the Platform or otherwise related to these Terms, regardless of the cause of action, whether based in contract, tort (including negligence), breach of statutory duty, restitution or any other legal or equitable basis (even if String Offers or any of the String Offers Parties have been advised of the possibility of such losses and regardless of whether such losses were foreseeable);
<br><br>
2) delays or disruptions to the Services and/or Platform, including but not limited to, the unavailability or suspension of the Platform for the performance of routine or emergency maintenance;
<br><br>
3) viruses or other malicious software obtained by accessing the Services or Platform;
<br><br>
4) the content, actions, or inactions of third parties;
<br><br>
5) a suspension or other action taken with respect to your Account;
<br><br>
6) your need to modify practices, content, or behaviours, or your loss of or inability to do business, as a result of changes to these Terms;
<br>
7) illegal actions and operations of third persons performed using counterfeited and/or illegal documents or illegally received data;
the aggregate liability of String Offers and the String Offers Parties (jointly), whether in contract, tort (including negligence), breach of statutory duty, restitution or any other legal or equitable basis, arising out of or relating to these Terms or the use of or inability to use the Services, exceed the total amount of Net Fees paid to you from you under this Agreement in the last three (3) months; and
the limitations and exclusions of liability set out in clause 11.1 shall not limit or exclude liability for the gross negligence, fraud or intentional, wilful or reckless misconduct of String Offers, nor shall it limit or exclude any losses for which, as a matter of Applicable Law, it would be unlawful to limit or exclude liability.
<br><br>
11.2. We shall not bear any liability for any damage or interruptions caused by any computer viruses, spyware, or other malware that may affect your computer or other equipment, or any phishing, spoofing, or other attack. We advise the regular use of a reliable virus and malware screening and prevention software. If you question the authenticity of a communication purporting to be from String Offers, you should login to your Account through the Website, not by clicking links contained in emails.
<br><br>
12. Taxation
You are solely responsible for determining whether any action or transaction contemplated by these Terms or related to the Services will give rise to any tax implications on your part.
<br><br>
You are also solely responsible for withholding, collecting, reporting, paying, settling and/or remitting any/or all other taxes to which you may become liable to the appropriate tax authorities in such jurisdiction(s) in which you may be liable to pay tax howsoever arising. String Offers shall not be responsible for withholding, collecting, reporting, paying, settling and/or remitting any taxes (including, but not limited to, any income, capital gains, sales, value added or similar tax) which may arise from any action or transaction contemplated by these Terms or related to the Services.
<br><br>
13. Force Majeure
Neither String Offers nor any member of the String Offers Companies shall be liable or responsible to you, or be deemed to have breached these Terms, for any failure or delay in fulfilling or performing its obligations under these Terms, if and to the extent such failure or delay is caused by, results from or is otherwise connected to acts beyond its reasonable control, including, without limitation: (a) acts of God; (b) flood, fire, earthquake or explosion; (c) war, invasion, hostilities (whether war is declared or not), terrorist, hacking or cyber threats, attacks or acts, or other civil unrest; (d) any laws, statutes, ordinances, rules, regulations, judgments, injunctions, orders and decrees; or (e) action by any nation or government, state or other political subdivision thereof, any entity exercising legislative, regulatory, judicial or administrative functions of or pertaining to government, including, without limitation, any government authority, agency, department, board, commission or council.
<br><br>
14. Security
<br><br>
14.1. You are solely responsible for maintaining the confidentiality of your Account, including, but not limited to a password, email, wallet address, balance and all activity including transactions made through your Account. String Offers personnel will never ask you to disclose your password. Any message you receive or website you visit that asks for the password, other than on the Application, should be reported to String Offers.
<br><br>
14.2. It is advisable to change your password regularly (at least every three (3) to six (6) months) in order to reduce the risk of a security breach in relation to your Account. String Offers also advises you not to choose a password that is easily guessed from information someone might know or gather about you or a password that has a meaning. You must never allow anyone to access your Account or watch you accessing your account.
<br><br>
14.3. You must take reasonable care to ensure that your e-mail account(s) are secure and only accessed by you, as your e-mail address may be used to reset passwords or to communicate with you about the security of your Account.
<br><br>
15. Miscellaneous
<br><br>
15.1. We may amend these Terms from time to time, including where there are changes to the Services or as may be otherwise required by any laws or regulatory requirements to which we are subject. The changes will become effective and shall be deemed accepted by the Account Holder, the first time the Account Holder uses the Services after the publishing of the revised Terms and shall apply on a going-forward basis with respect to any activity initiated after publishing. In the event that an Account Holder does not agree with any such modifications, the Account Holder’s sole and exclusive remedy is to terminate the use of the Services and close the Account.
<br><br>
15.2. If any term, clause or provision of these Terms is found to be illegal, void or unenforceable (in whole or in part), then such term, clause or provision shall be severable from these Terms without affecting the validity or enforceability of any remaining part of that term, clause or provision, or any other term, clause or provision of these Terms, which shall remain in full force and effect.
<br><br>
15.3. These Terms constitute the entire agreement between the Parties in relation to its subject matter. These Terms replace and extinguish any and all prior agreements, draft agreements, arrangements, warranties, statements, assurances, representations and undertakings of any nature made by, or on behalf of the Parties, whether oral or written, public or private, in relation to that subject matter.
<br><br>
15.4. You acknowledge that by accepting these Terms, you have not relied on any oral or written statements, warranties, assurances, representations or undertakings which were or may have been made by or on behalf of String Offers in relation to the subject matter of these Terms at any time before your acceptance of them (“Pre-Contractual Statements”), other than those set out in these Terms. You hereby waive any and all rights and remedies which might otherwise be available in relation to such Pre-Contractual Statements.
<br><br>
15.5. Nothing in these Terms shall be deemed to create any form of partnership, joint venture or any other similar relationship between you and String Offers and/or other individuals or entities involved with the development and deployment of the Services.
<br><br>
15.6. These Terms and any dispute or claim arising out of or in connection with their subject matter or formation (including non-contractual disputes and claims) shall be governed by and construed in accordance with United States of America Law.
<br><br>
15.7. The Parties irrevocably agree that the United States of America courts shall have exclusive jurisdiction to settle any dispute or claim that arises out of or in connection with these Terms or their subject matter or formation (including non-contractual disputes and claims).
<br><br>
15.8. You acknowledge that by accepting these Terms, you agree on using contact details provided in your personal account for any communication method (system email, marketing email, etc.)
<br><br>
16. Contact Us
<br><br>
You can communicate for any reason, whether a complaint or not, with us by phone or email. Please note that our calls may be recorded so as to safeguard and protect your interests and for us to ensure the quality of our services. String Offers may, but are not obligated to, retain any communication with you.

                </p>
            </div>
            <div class=" text-center">
                <center>
                    <button type="submit" class="btn" data-dismiss="modal">Okay</button>
                </center>
                <br>
            </div>
        </div>

    </div>
</div>





<!-- Submit For OTP -->
<div class="modal fade" id="otp" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content ">
            <div class="modal-header ">

                <h4 class="modal-title">Verify Your Email</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="height-100 d-flex justify-content-center align-items-center vh-50">
                <div class="position-relative">
                    <div class=" p-2 text-center">
                        <h6>Please enter the 6 digit OTP (One Time Password)<br> sent to your email ID below.</h6>

                        <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2"> <input
                                class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" />
                            <input class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1" />
                            <input class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" />
                            <input class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" />
                            <input class="m-2 text-center form-control rounded" type="text" id="fifth" maxlength="1" />
                            <input class="m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1" />
                        </div>
                        <h6>Resend OTP</h6>
                        <div class="mt-4"> <button class="btn btn-danger px-4 validate" data-toggle="modal"
                                data-target="#submission">Validate</button> </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>





<!-- sign up form submission  -->
<div class="modal fade" id="submission" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content ">
            <div class="modal-header ">

                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="height-100 d-flex justify-content-center align-items-center vh-50">
                <div class="position-relative">
                    <div class=" p-2 text-center">

                        <img src="assets/img/thanks.png" class="img-fluid animated " alt="">
                        <h4 class="modal-title mt-5">Thanks for Signing Up!</h4>
                        <h6>Your sign-up request has been sent. Please verify your email ID and wait for admin
                            approval.<br>
                            Write to us at support@stringoffers.com for any queries.</h6>



                        <div class="mt-3">
                            <button class="btn btn-danger px-4 validate">Okay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>





<!-- End Contact Section -->
<?php
    include 'f-important-link.php';
    include 'footer.php';
    ?>
    
    
    <script>
     $(document).ready(function() {
  
  // Disable blocker.
  function unblock() {
    $("#blocker").css("display", "none");
  }

  // Enable blocker.
  function block() {
    $("#blocker").css("display", "block");
  }

  // Monitor checkbox.
  $('body').on('click', '#checkbox', function() {
    if( $(this).prop("checked") ) {
        unblock();
    } else {
        block();
    }
  });
  
  // Monitor blocker.
  $('#blocker').on('click', function() {
    alert('Please check the box.');
  });
});
        
    </script>
    
    <style>
        .buttonWrap {
  position: relative;
}

#blocker {
  position: absolute;
  height: 100%;
  width: 100%;
  background: rgba(255,255,255,0.7);
}
    </style>
    
    
    