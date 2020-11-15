<?php
    $name =$_POST['name'];
    $email =$_POST['email'];
    $message =$_POST['message'];

    $email_from ="abc@gmail.com";
    $email_subject ="New form submission";
    $email_body ="User Name:$name.\n".
                 "User Email: $email.\n".
                 "User Message: $message.\n";

    $to ="randiayeshani@gmail.com";

    $headers ="From: $email_from\r\n";
    $headers .="Replay to : $email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("location: index.html");


?>

