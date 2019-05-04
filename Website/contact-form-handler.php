<?php
    $name = $_PoST ['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];


    $email_from = 'lemmuelalmudin@gmail.com';

    $email_subject = "New Form Submission";

    $emal_body = "User Name $name.\n".
                    "User Email: $visitor_email.\n";
                      "User Message: $message.\n";

    $to = "qwertymisdirect@gmail.com"

    $headers = "from: $email_from \r\n";

    $shaders .= "Reply=to: $visitor_email\r\n";

    mail($to,$email_subject,email_body,$headers);

    header("Location: Limisen.html");

 ?>
