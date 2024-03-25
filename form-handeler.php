<?php
$name =$_POST[''];
$visitor_email =$_POST[''];
$subject =$_POST[''];
$message =$_POST[''];


$email_from='jv123@gmail.com'
$email_subject='New From Submission';
$email_body="user Name : $name.\n".
            "user Email : $visitor_email .\n".
            "subject: $subject .\n". 
            "user message: $message .\n".   
            
$to='gunalanjeevitha963@gmail.com';
$headers ="form  $email_form  \r\n";
$headers .="reply-to: $visitor_email \r\n'";
mail($to,$email_subject,$email_body,$headers);
header("Location : contact.html");
?>