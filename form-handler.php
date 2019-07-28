<?php
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $topic = $_POST['topic'];
    $message = $_POST['message'];

    $email_from = "babt1087@yahoo.com";

    $email_subject = "New Form Submission";

    $email_body = "User Name: $fname $lname.\n".
                    "User Email: $email.\n".
                        "User Topic: $topic.\n".
                            "User Message: $message.\n";

    $to = "baproductions1087@yahoo.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");

 ?>   