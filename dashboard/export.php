<?php
include '../database.php';



if(isset($_POST['publishers'])){
        $signup_query = "SELECT * FROM signup";
        $signup_result = mysqli_query($conn, $signup_query);
        $html ="<table><tr></tr><td>Name</td><td>EmailId</td><td>LegalEntityType</td><td>Zip/Postal Code</td><td>Country</td><td>City</td><td>Country</td><td>PhoneNo.</td><td>Skype Id</td><td>Linkedinurl</td><td>Linkedinurl</td>";
        while($signup = mysqli_fetch_array($signup_result)){
              $html.='<tr><td>'.$signup['first_name'].'</td><td>'.$signup['email_id'].'</td><td>'.$signup['legal_entity_type'].'</td><td>'.$signup['company_name'].'</td><td>'.$signup['address_line_1'].'</td><td>'.$signup['address_line_2'].'</td><td>'.$signup['postal_code'].'</td><td>'.$signup['country'].'</td><td>'.$signup['city'].'</td><td>'.$signup['phone'].'</td><td>'.$signup['skype_id'].'</td><td>'.$signup['linkedin_url'].'</td><td>'.$signup['linkedin_url'].'</td></tr>';
        }
        $html.='</table>';
        header('content-Type:application/xls');
        header('content-Disposition:attachment;filename=publishers.xls');
        echo $html;
    }
    
    
    if(isset($_POST['advertiser'])){
        $signup_a_query = "SELECT * FROM signup_a";
        $signup_a_result = mysqli_query($conn, $signup_a_query);
        $html ="<table><tr></tr><td>FullName</td><td>EmailId</td><td>SkypeId</td><td>CompanyType</td><td>ModelId</td>";
        while($signup_a = mysqli_fetch_array($signup_a_result)){
              $html.='<tr><td>'.$signup_a['full_name'].'</td><td>'.$signup_a['email_id'].'</td><td>'.$signup_a['skype_id'].'</td><td>'.$signup_a['company_type'].'</td><td>'.$signup_a['model_id'].'</td></tr>';
        }
        $html.='</table>';
        header('content-Type:application/xls');
        header('content-Disposition:attachment;filename=advertiser.xls');
        echo $html;
    }
    
    
    
    if(isset($_POST['contact_form test'])){
        $contact_form_query = "SELECT * FROM contact_form";
        $contact_form_result = mysqli_query($conn, $contact_form_query);
        $html ="<table><tr></tr><td>FullName</td><td>EmailId</td><td>Subject</td><td>Message</td>";
        while($contact_form = mysqli_fetch_array($contact_form_result)){
              $html.='<tr><td>'.$contact_form['name'].'</td><td>'.$contact_form['email_id'].'</td><td>'.$contact_form['subject'].'</td><td>'.$contact_form['message'].'</td></tr>';
        }
        $html.='</table>';
        header('content-Type:application/xls');
        header('content-Disposition:attachment;filename=contact_form.xls');
        echo $html;
    }
    
    if(isset($_POST['faqs_enquiry test'])){
        $faqs_enquiry_query = "SELECT * FROM faqs_enquiry";
        $faqs_enquiry_result = mysqli_query($conn, $faqs_enquiry_query);
        $html ="<table><tr></tr><td>FullName</td><td>EmailId</td><td>Subject</td><td>Message</td>";
        while($faqs_enquiry = mysqli_fetch_array($faqs_enquiry_result)){
              $html.='<tr><td>'.$faqs_enquiry['name'].'</td><td>'.$faqs_enquiry['email_id'].'</td><td>'.$faqs_enquiry['subject'].'</td><td>'.$faqs_enquiry['message'].'</td></tr>';
        }
        $html.='</table>';
        header('content-Type:application/xls');
        header('content-Disposition:attachment;filename=faqs_enquiry.xls');
        echo $html;
    }
     


        // $signup_query = "SELECT * FROM signup";
        // $signup_result = mysqli_query($conn, $signup_query);
        // $html ="<table><tr></tr><td>Name</td><td>EmailId</td><td>LegalEntityType</td><td>Zip/Postal Code</td><td>Country</td><td>City</td><td>Country</td><td>PhoneNo.</td><td>Skype Id</td><td>Linkedinurl</td><td>Linkedinurl</td>";
        // while($signup = mysqli_fetch_array($signup_result)){
        //       $html.='<tr><td>'.$signup['first_name'].'</td><td>'.$signup['email_id'].'</td><td>'.$signup['legal_entity_type'].'</td><td>'.$signup['company_name'].'</td><td>'.$signup['address_line_1'].'</td><td>'.$signup['address_line_2'].'</td><td>'.$signup['postal_code'].'</td><td>'.$signup['country'].'</td><td>'.$signup['city'].'</td><td>'.$signup['phone'].'</td><td>'.$signup['skype_id'].'</td><td>'.$signup['linkedin_url'].'</td><td>'.$signup['linkedin_url'].'</td></tr>';
        // }
        // $html.='</table>';
        // header('content-Type:application/xls');
        // header('content-Disposition:attachment;filename=publishers.xls');
        // echo $html;

?>