<?php

if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if(isset($_POST['submit']))
{
$email_from = 'info@mahehelp.com';
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                  "Subject: $subject.\n".
                  "User Message: $message .\n";
$to_add = "shreenmohanty2002@gmail.com"; 
$subject = "New Form Submission";
$message = "Name:$name \n Sites: $submit_links";

$headers = 'From: shreenmohanty2002@gmail.com' . "\r\n" .
'Reply-To: ' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

if(mail($to_add,$subject,$message,$headers)) 
{
    $msg = "Mail sent";

echo $msg;

} 
}

print "<p>Thanks $name</p>" ;


// $email_from = 'info@mahehelp.com';

// $email_subject = 'New Form Submission';

// $email_body = "User Name: $name.\n".
//                 "User Email: $visitor_email.\n".
//                   "Subject: $subject.\n".
//                   "User Message: $message .\n";


// $to = 'shreenmohanty2002@gmail.com';

// $headers = "From: $email_from \r\n";

// $headers .= "Reply-To: $visitor_email \r\n";

// mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");


                 

?>