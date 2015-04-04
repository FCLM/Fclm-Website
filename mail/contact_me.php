<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['message'])
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'apps@mononz.net'; // *REPLACE WITH THE EMAIL ADDRESS YOU WANT THE FORM TO SEND MAIL TO*
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nMessage:\n$message";
$headers = "From: website@fifthcolumngaming.com\n"; // *REPLACE WITH THE EMAIL ADDRESS YOU WANT THE MESSAGE TO BE FROM*
mail($to,$email_subject,$email_body,$headers);
return true;			
?>