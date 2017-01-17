<?php

if(isset($_POST['email'])) {
    function died($error) {
 
        echo "We are sorry, but it seems there were error with the form you submitted. <br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
    if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted. You have to fill out all thress fields!');       
    }
    //My information
    $email_to = "prattegr@gmail.com";
    $email_subject = "A message from my website!";
    //Sender information
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $message=$_POST['message'];
 
     

    $error_message = "";
 	//Email check
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  	if(!preg_match($email_exp,$email_from)) {
    	$error_message .= 'Please enter the correct email.<br />';
  	}
 	
 	//Name check
    $string_exp = "/^[A-Za-z .'-]+$/";
  	
  	//Message check
  	if(strlen($message) < 2) {
	    $error_message .= 'Your message should be longer!<br />';

 	}
 
 	if(strlen($error_message) > 0) {
 		died($error_message);
 	}
 
    $email_message = "Form details below.\n\n";
 
    function clean_string($string) {
    	$bad = array("content-type","bcc:","to:","cc:","href");
    	return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Message: ".clean_string($message)."\n";
	
	// create email headers
 	$headers = 'From: '.$email_from."\r\n".
 	'Reply-To: '.$email_from."\r\n" .
 	'X-Mailer: PHP/' . phpversion();
 	@mail($email_to, $email_subject, $email_message, $headers);  
 
}
?>
