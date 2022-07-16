<?php
//get data from form  
$name = $_POST['name'];
$visitor_email= $_POST['email'];
$message= $_POST['message'];

$email_from = "bradula.s678@gmail.com";

$email_subject = "New form for contect";

$email_body= "User Name: $name.\n" . 
                "User Email: $visitor_email.\n" .
                    "User Message: $message.\n";

$to = "bradula.s6@mail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");
?>