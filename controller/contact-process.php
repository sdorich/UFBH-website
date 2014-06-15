<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $to_email = "sarah.dorich@yahoo.com";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $subject = "[Contact Form] " . $_POST["subject"];
    
    /*$email_body = "";
    $email_body = $email_body . "Name: " . $name . "\n";
    $email_body = $email_body . "Email: " . $email . "\n";
    $email_body = $email_body . "Subject: " . $subject . "\n";
    $email_body = $email_body . "Message: " . $message;*/


    function isValidEmail($email) {
        return strpos($email, "@") !== false;
    }

    if($name != "" && $email != "" && $message != "" && isValidEmail($email)) {
        $full_message = "Name : ". $name . "\n";
        $full_message .= "Email : ". $email . "\n";
        $full_message .= "Message :\n\n". $message . "\n";

        mail($to_email, $subject, $full_message);
        header("location: ../contact.php?status=thanks");
        exit();
}

die("Your data is invalid.");

exit;
    
}

?>