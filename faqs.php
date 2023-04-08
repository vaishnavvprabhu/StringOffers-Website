<?php
include 'header.php';
include 'important-link.php';
include 'database.php';

?>


<?php

if(isset($_POST['submit_f'])){
    
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email_id = mysqli_real_escape_string($conn, $_POST['email_id']);
    $subject = mysqli_real_escape_string($conn, $_POST['name']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $checkbox = mysqli_real_escape_string($conn, $_POST['checkbox']);
    
     $query =  "INSERT INTO faqs_enquiry (name,email_id,subject,message,checkbox) 
     VALUES ('$name','$email_id','$subject','$message','$checkbox')";
     
        $query_run = mysqli_query($conn, $query);
                    if($query_run>0)
                    {
                        echo "<h1 class='text-center'>Thank You for Connecting Get Back To You </h1>";
                        echo "<script> location.replace('thank-you.php') </script>";
                        // header('Location:https://stringoffers.com/');
                        exit(0);
                    }
                    else
                    {
                        echo "<h1 class='text-center'>please fill the all fields</h1>";
                        exit(0);
                    }
    }
     
    



?>








<!-- ======= Hero Section ======= -->
<!-- <section id="faqs" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center mt-5">
                <div class="blog-sideber mt-5">
                    <h1>How Can We Help You?</h1>
                    <center>
                    <hr class="gradient-line">
                    <center>
                    <br>
                    <div class="search">
                        <form action="" method="post">
                            <input type="email" name="email" placeholder="Type your Question">
                            <button type="submit" class="btn-sub"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End Hero -->



<section id="faq" class="faq section-bg">
    <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq-list">
            <ul>
                <li data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">

                    <a data-bs-toggle="collapse" class="collapse collapsed" data-bs-target="#faq-list-1"
                        aria-expanded="false"><span class="s-size">01</span> <l>What is String Offers?</l> <i
                            class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list" style="">
                        <p>
                            Stringoffers.com is an affiliate network that provides to its partners/affiliates with the internet’s top performing advertising offers from one side and real-time tracking, highest payouts, scheduled payments and 24/7 professional support from another side.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed"
                        aria-expanded="false"><span class="s-size">02</span>How do I join String Offers as an Advertiser or Publisher? <i
                            class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            You can fill out our advertiser or publisher applications, and we will review and get back to you within 2 business days. Make sure to click the appropriate tab at the top for Advertiser or Publisher sign up. Please note that we are very selective about the types of affiliates we accept in order to meet our high standards of service for both our affiliates and advertisers.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed"
                        aria-expanded="false"><span class="s-size">03</span>Are there any fees to join String Offers as an Advertiser or as a Publisher? <i
                            class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                        <p>
                           There are NO FEES involved in becoming a String Offers affiliate or advertiser. There is simply an approval process to ensure that an advertiser’s offers or an affiliate’s promotional methods are a mutually beneficial match for the affiliate network.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed"
                        aria-expanded="false"><span class="s-size">04</span>Can I join String Offers if I live outside of the United States? <i
                            class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Yes. String Offers accepts advertisers and publishers from all over the world.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed"
                        aria-expanded="false"><span class="s-size">05</span>What is affiliate marketing?<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                        <p>
                           A method of marketing whereby publishers are permitted to sell an advertiser’s products for a commission. The publisher assumes all the advertising risk and is only paid a CPA per valid action as defined by the advertiser.
                        </p>
                    </div>
                </li>
                
                <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed"
                        aria-expanded="false"><span class="s-size">06</span>What is an Affiliate Network?<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                        <p>
                           An affiliate network acts as an intermediary between advertisers and publishers, matching products and services with media and marketing experience. The network polices the advertisers offers and also provides publishers with a tracking system to help monitor earnings and performance metrics.
                        </p>
                    </div>
                </li>
                
                <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-7" class="collapsed"
                        aria-expanded="false"><span class="s-size">07</span>What is an Advertiser?<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                        <p>
                           An advertiser has a product or service that they would like to have marketed by affiliates within an affiliate network. Advertisers often work with multiple networks, but we try to gain exclusivity for top performing offers.
                        </p>
                    </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed"
                        aria-expanded="false"><span class="s-size">08</span>What is an Affiliate/Publisher?<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          A affiliate/publisher is paid on a specified action for marketing the advertiser’s products and services according to the guidelines listed for an offer. There are many kinds of media that publishers use for marketing, such as email, banners, search, contextual, pop-ups, incentives, and social media. Payouts are defined by the advertiser and can be on a CPA, CPS, CPM, CPC, etc.
                        </p>
                    </div>
                </li>
                
                 <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-9" class="collapsed"
                        aria-expanded="false"><span class="s-size">09</span>What is CPA, CPL, CPS, CPC and CPM?<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-9" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          CPA is Cost Per Acquisition (or Action) – a valid lead as defined by the advertiser.
CPL (Cost Per Lead) and CPS (Cost Per Sale) are often used interchangeably depending on the action needed to be taken.
CPC is Cost Per Click and defines a commission generated upon a click of the offer.
CPM represents Cost Per Thousand (M is the roman numeral for Thousand), which is a set payment for emailers based on every thousand names to which they mail an offer.

                        </p>
                    </div>
                </li>
                
                <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-10" class="collapsed"
                        aria-expanded="false"><span class="s-size">10</span>COMMISSIONS & PAYMENTS<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-10" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          How often are my commission statistics updated?
Your statistics are shown in real-time. This means that you can log in 24/7/365 to review your commissions earned and best optimize your campaigns.


                        </p>
                    </div>
                </li>
                
                <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-11" class="collapsed"
                        aria-expanded="false"><span class="s-size">11</span>When do I get paid?<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-11" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          String Offers’s standard is NET15 and NET30 payments for all affiliates. This means you should expect to receive your commission in 15 or 30 days from the end of each calendar month. For our best affiliates, we offer a variety of much faster payment plans – many receive bi-weekly payments.


                        </p>
                    </div>
                </li>
                
                <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-12" class="collapsed"
                        aria-expanded="false"><span class="s-size">12</span>What methods can I get paid?<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-12" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          Our standard method of payment is by check. In addition, we also offer Wire, ACH and PayPal payments.


                        </p>
                    </div>
                </li>
                
                 <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-13" class="collapsed"
                        aria-expanded="false"><span class="s-size">13</span>What is your minimum payment policy?<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-13" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          Payments will be sent when your account has reached a minimum of $50 in revenue, which includes a combination of both marketing commission and referral bonus money earned. Accounts with a balance of less than $50.00 will roll over to the next month(s) until the $50 threshold is met.
                        </p>
                    </div>
                </li>
                
                <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-14" class="collapsed"
                        aria-expanded="false"><span class="s-size">14</span>Do I need a W-9 or W-8 BEN Form to get paid?<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-14" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          All US affiliates are required to fill out and sign a W-9 Form in order to get paid, as per US Government regulations. Please make sure you sent your completed W-9 to your affiliate manager. You can download the form from your affiliate account. Foreign affiliates have to fill out a W8 BEN Form to get paid.
                        </p>
                    </div>
                </li>
                
                 <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-15" class="collapsed"
                        aria-expanded="false"><span class="s-size">15</span>What is the Referral Program, and how much can I make referring affiliates?<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-15" class="collapse" data-bs-parent=".faq-list">
                        <p>
                         The Referral Program rewards you for every affiliate you sign up with String Offers – for life! We pay you an amazing 5% bonus on ALL commissions generated by all of your referred affiliates. The bonus gets paid with your monthly check and you can check statistics on your bonus in the Reports->Referrals Reports. If you would like to refer someone to String Offers, please make sure to send them your unique referral tracking link which can be found in your personal account’s Snapshot zone.
                        </p>
                    </div>
                </li>
                
                 <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-16" class="collapsed"
                        aria-expanded="false"><span class="s-size">16</span>What types of media do you allow to promote offers on String Offers?<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-16" class="collapse" data-bs-parent=".faq-list">
                        <p>
                         String Offers optimizes all creative on our site so that we ensure the best performance for all of your campaigns. For any given offer, we allow e-mail, banner, search engine, social, pop up, contextual, incent and host and post marketing.
                        </p>
                    </div>
                </li>
                
                 <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-17" class="collapsed"
                        aria-expanded="false"><span class="s-size">17</span>How do I know which marketing methods are permitted for an offer?<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-17" class="collapse" data-bs-parent=".faq-list">
                        <p>
                       Each offer allows one or more methods of marketing, which is based on the media available for the offer. Additionally, specific instructions are clearly listed in the offer description. Please make sure you strictly adhere to the instructions for each offer, and if you should ever have any questions, always feel free to contact your affiliate manager.
                        </p>
                    </div>
                </li>
                
                <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-18" class="collapsed"
                        aria-expanded="false"><span class="s-size">18</span>What types of sites do you accept for promoting String Offers offers?<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-18" class="collapse" data-bs-parent=".faq-list">
                        <p>
                     Almost any site can be accepted into our network as long as they adhere to our terms and conditions. We do NOT permit adult or any other sites that are derogatory or vulgar in nature. Incentive sites are permitted, but must be specified via the check box on the application to become an affiliate so that we can target the proper campaigns. Only specified offers can be incentivized.
                        </p>
                    </div>
                </li>
                
                <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-19" class="collapsed"
                        aria-expanded="false"><span class="s-size">19</span>Can I promote String Offers offers on Social Networking and Job Listing sites?<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-19" class="collapse" data-bs-parent=".faq-list">
                        <p>
                     Most of String Offers offers can be promoted ONLY on your own profile or content page, or through media buys approved by such sites. But some offers are allowed to promote using any legal methods. If you are unsure about a campaign, please contact your Affiliate Manager for approval before proceeding.
                        </p>
                    </div>
                </li>
                
                 <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-20" class="collapsed"
                        aria-expanded="false"><span class="s-size">20</span>How do I pull my tracking link for a campaign?<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-20" class="collapse" data-bs-parent=".faq-list">
                        <p>
                     Each creative is uniquely coded with your tracking url. When you find an offer you like on the Offers page, you click through on that offer. Once at this Offer Details screen, you are provided with a suite of available creatives at the bottom, where you can click “Get Code” to get the HTML and your unique tracking url for the creative. We highly recommend that you always use the unique url with its associated creative, this way you can easily track which versions convert better for you.
                        </p>
                    </div>
                </li>
                
                <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-21" class="collapsed"
                        aria-expanded="false"><span class="s-size">21</span>How does String Offers prevent and handle fraud?<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-21" class="collapse" data-bs-parent=".faq-list">
                        <p>
                     Fraud is taken very seriously at String Offers, as we want to ensure only the best quality leads and sales for our advertisers. Our technology is being continually developed to detect and deal with fraud attempts such as suppression list abuse, duplicate and proxy IPs, bots, unusual conversion rates, click frequency and much more. If you feel that any kind of fraud is being conducted by an affiliate or advertiser, please report them immediately to support@stringoffers.com or to your Account Manager and the matter will be immediately investigated. Confirmed fraud results in removal from our affiliate network for life, and also turning over offenders to the advertiser, as well as Federal and State authorities.
                        </p>
                    </div>
                </li>
                
                
                 <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-22" class="collapsed"
                        aria-expanded="false"><span class="s-size">22</span>Forgot Your Password?<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-22" class="collapse" data-bs-parent=".faq-list">
                        <p>
                     Click of Forgot password link at the top of the page and our system will email your password to the email address associated with your account.
                        </p>
                    </div>
                </li>
                
                <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-23" class="collapsed"
                        aria-expanded="false"><span class="s-size">23</span>What kind of customer support do you offer?<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-23" class="collapse" data-bs-parent=".faq-list">
                        <p>
                   Customer service is our number one priority. We have dedicated Affiliate Management, Advertiser Services, Operations, Tech and Creative support for all of your needs. A dedicated and knowledgeable String Offers team member is always immediately available to take your calls, emails, and IMs on weekdays from 9:00AM to 6:00PM EST. We also have lighter coverage on weeknights and weekends, so it make take a little longer to receive your response during these off-hours.
                        </p>
                    </div>
                </li>
                
                 <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-24" class="collapsed"
                        aria-expanded="false"><span class="s-size">24</span>Who can I contact to become an Advertiser?<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-24" class="collapse" data-bs-parent=".faq-list">
                        <p>
                   You can fill out our application or send an email to support@stringoffers.com with your contact details and the offer details. Our Sales department will call you to discuss your offers and their potential in our network if we feel it is a good match for both you and String Offers. We have many opportunities to work with you, from affiliate, to email and search, from social media to coreg, from banner display to hosting landing pages and designing creative.
                        </p>
                    </div>
                </li>
                
                <li data-aos="fade-up" data-aos-delay="500" class="aos-init aos-animate">
                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-25" class="collapsed"
                        aria-expanded="false"><span class="s-size">25</span>How can I contact to become a Publisher?<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-25" class="collapse" data-bs-parent=".faq-list">
                        <p>
                   You can fill out our application or you can email support@stringoffers.com and we will review and get back to you within 2 business days.
                        </p>
                    </div>
                </li>

            </ul>
        </div>

    </div>
</section>

<div class="clearfix"></div>



<!-- =======  ======= -->
<section id="fsection">
    <div class="container" data-aos="fade-up">
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-12  portfolio-item filter-publisher">
                <div id="signup" class="signup">
                    <div class="container" data-aos="fade-up">
                        <div class="row filter-publisher">
                            <div class="col-lg-12 d-flex align-items-stretch">
                                <div class="row">
                                    <div class="">
                                        <h2 class="me-auto">Get in touch</h2>
                                      
                                    </div>
                                    <form action="faqs.php" method="post" role="form" class="php-email-form mt-5">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="text" name="name" class="form-control" id="name"
                                                    placeholder="Full Name" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="email" class="form-control" name="email_id" id="email"
                                                    placeholder="Email" required>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <input type="text" name="subject" class="form-control" id="subject"
                                                    placeholder="Subject" required>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <textarea class="form-control" name="message" rows="10"
                                                    required placeholder="Describe your problem here"></textarea>
                                            </div>
                                            <div class="form-group col-md-12 text-center">
                                                <input type="checkbox" id="checkbox" name="checkbox" value="I agree to the Terms & Conditions">
                                                <label for="vehicle1"> I agree to the <b>
                                                        <a data-toggle="modal" data-target="#privary">Privacy Policy.</a>
                                                </label><br>
                                            </div>
                                        </div>

                                        <div class="text-center buttonWrap">
                                           
                                         <div id="blocker"></div>
                                        <button class="btn-get-started scrollto" name="submit_f" id="submit_f" type="submit">Submit</button>
                                    
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
</section>




<!-- privary -->
<div class="modal fade" id="privary" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Privacy Policy</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint
                    commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit
                    fugiat iusto fuga praesentium optio, eaque rerum!
                    <br><br>
                    Provident similique accusantium nemo autem. Veritatis obcaecati tenetur iure eius earum ut molestias
                    architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat,
                    odit, tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit, quia.
                    <br><br>
                    Quo neque error repudiandae fuga? Ipsa laudantium molestias eos sapiente officiis modi at sunt
                    excepturi expedita sint? Sed quibusdam recusandae alias error harum maxime adipisci amet laborum.
                    <br><br>
                    Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit quibusdam sed
                    amet tempora. Sit laborum ab, eius fugit doloribus tenetur fugiat, temporibus enim commodi iusto
                    libero magni deleniti quod quam consequuntur!
                    <br><br>
                    Commodi minima excepturi repudiandae velit hic maxime doloremque. Quaerat provident commodi
                    consectetur veniam similique ad earum omnis ipsum saepe, voluptas, hic voluptates pariatur est
                    explicabo fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore suscipit quas?
                </p>
            </div>
            <div class="modal-footer text-center">
                <center>
                    <button type="submit" class="btn">Okay</button>
                </center>
            </div>
        </div>

    </div>
</div>


<?php 
   
include 'footer.php';
include 'f-important-link.php';

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



