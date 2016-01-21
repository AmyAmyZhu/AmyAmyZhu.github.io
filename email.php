<?php
       // from the form
       if(!isset($_POST['submit'])) {
           echo "Sorry, you need to hit Submit button!";
       }
       
       $name = $_POST['name'];
       $visitor_email = $_POST['email'];
       $message = $_POST['message'];
       
       if(empty($name)||empty($visitor_email)){
           echo "Name and email are mandatory!";
           exit;
       }
       
       $email_from = "zhuzefang12@gmail.com";
       $email_subject = "New Form submission";
       $email_body = "email address: $visitor_email\nHere is the message:\n $message";
       $to = "zhuzefang12@gmail.com";
       $headers = "from: $email_from \r\n";
       
       mail($to, $email_subject, $email_body, $headers);
       
       $name = trim(strip_tags($_POST['name']));
       $email = trim(strip_tags($_POST['email']));
       $message = htmlentities($_POST['message']);
?>
