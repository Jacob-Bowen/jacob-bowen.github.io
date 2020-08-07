<?php
    $name = $_POST['name'];
    $vistor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'jakebowen425@gmail.com';

    $email_subject = 'New Form Submission';

    $email_body = "User Name: $name.\n".
                   "User Email: $vistor_email.\n".
                    "User Subject: $subject.\n".
                     "User Message: $message.\n";

    $to = "jakebowen37@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

?>