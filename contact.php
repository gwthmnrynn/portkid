<?php 
$errors = '';
if(empty($_POST['email']))
{
    $errors .= "\n Error: all fields are required";
}
$username = $_POST['name']; 
$email_address = $_POST['email']; 
$sub = $_POST['subject']; 
$comments = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = 'gwthmnrynn@gmail.com';
	$email_subject = "Contact form submission from Portkid : $username";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $username \n Email: $email_address \n Subject : $sub \n Message \n $comments \n"; 
	
	$headers = "From: hello@portkid.com\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
} 
?>Thank you. We will get in touch with you soon.