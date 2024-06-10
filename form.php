<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$phone = $_POST['phone number'];
$message = $_POST['message'];

$email_form = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                 "Phone number: $phone.\n".
                    "User Message: $message .\n";

$to = 'abh7186@gmail.com';

$headers = "Form: $email_form \r\n";

$headers .= "Replay-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: form.html");



?>