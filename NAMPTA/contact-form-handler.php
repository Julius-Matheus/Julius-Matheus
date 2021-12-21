<?php
 $name = $_POST['name'];
 $visitor_email = $_POST['email'];
 $massage = $_POST['massage'];

 $emai_from ='julius@omalaetiit.com'
 $email_subject="new form subit"

 $email_body="User Name: $name.\n".
 "User Email: $vistor_email.\n".
    "User Massage: $massage.\n"; 


    $to = "tangenicoachlam@gmai.com";
    $headers= "From: $emai_from\r\n";
    $headers .= "Reply-To: $visitor_email\r\n";

    mail($to, $email_subject, $email_body,$headers);
    header("Location:index.html");

	?>