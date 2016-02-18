<?php

$to = "zhuzefang12@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "z57zhu@uwaterloo.ca";
$headers = "From: $from";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";

?>