<?php

if(isset($_POST['Email'])) {     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "zhuzefang12@gmail.com";
    $email_subject = "Your email subject line";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
    // validation expected data exists
    if(!isset($_POST['Name']) ||
        !isset($_POST['Email']) ||
        !isset($_POST['Message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }

    $Name = $_POST['Name']; // required
    $Email = $_POST['Email']; // required
    $Message = $_POST['Message']; // required
 
    $email_message = "Form details below.\n\n";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string); 
    } 
 
    $email_message .= "Name: ".clean_string($Name)."\n";
    $email_message .= "Email: ".clean_string($Email)."\n";
    $email_message .= "Message: ".clean_string($Message)."\n";
 
// create email headers
$headers = 'From: '.$Email."\r\n".
'Reply-To: '.$Email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $Email, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
Thank you for contacting us. We will be in touch with you very soon.

<?php
}
?>