<?php 

       $email_from = "zhuzefang12@gmail.com";
       $email_subject = "New Form submission";
       $email_body = "hahahaha";
       $to = "zhuzefang12@gmail.com";
       $headers = "from: $email_from \r\n";
       
       mail($to, $email_subject, $email_body, $headers);
<?php
}
?>