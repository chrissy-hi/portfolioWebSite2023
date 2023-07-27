<?php
//This file will be used to send the message that is entered into the Contact form
//Send will not work if the server is not live


// form data collected
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

//I will be the email recipient
$emailRecipient = "TestEmail@gmail.com";

// build the content of the message
$messageContent ="Name = ". $name . "\r\n Email = "
	. $email . "\r\n Message =" . $message;

if($email != NULL) {
	//mail to the emailRecipient the message content and redirect to headers location
	mail($emailRecipient, $messageContent, $headers);
}
//redirect to last html page
header("Location:last.html");
?>
