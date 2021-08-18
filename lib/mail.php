<?php
if(!empty($_POST["submit"])) {
	$name = $_POST["sender_name"];
	$email = $_POST["sender_email"];
	$subject = $_POST["subject"];
	$content = $_POST["body"];

	$toEmail = "oratoreseiwi@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your message is received successfully.";
	    $type = "success";
	}
}
require_once "thank-you.php";
?>
