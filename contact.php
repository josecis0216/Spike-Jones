<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];



$email_from = 'brooklynekc@gmail.com';
$email_subject = 'New Message From Styles Contact';
$email_body = "Name: $name.\n".
              "Email: $email.\n".  
              "Message: $message.\n";
              

$to = "brooklynekc@gmail.com";
$headers = "From: $email_from \r\n"; 
$headers = "Reply-To: $email \r\n"; 
         


main($to,$email_subject,$email_body,$headers);

header("location: contact.html");


?>