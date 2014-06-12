<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $to_email = "sarah.dorich@yahoo.com";

    $name = $_POST["name"];
    $address = $_POST["address"];
    $city_state = $_POST["city_state"];
    $zip = $_POST["zip"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $hounds = $_POST["hounds"];
    $waddle_shirts = $_POST["waddle_shirts"];

    $subject = "[Wasatch Waddle Registration] " . $name;
    
    /*$email_body = "";
    $email_body = $email_body . "Name: " . $name . "\n";
    $email_body = $email_body . "Email: " . $email . "\n";
    $email_body = $email_body . "Subject: " . $subject . "\n";
    $email_body = $email_body . "Message: " . $message;*/


    function isValidEmail($email) {
        return strpos($email, "@") !== false;
    }

    if($name != "" && $email != "" && hounds != "" && $waddle_shirts != "" && isValidEmail($email)) {
        $full_message = "Name : ". $name . "\n";
        $full_message .= "Address : ". $address . "\n";
        $full_message .= "City/State : ". $city_state . "\n";
        $full_message .= "Zip : ". $zip . "\n";
        $full_message .= "Phone number : ". $phone . "\n";
        $full_message .= "Email : ". $email . "\n";
        $full_message .= "Hounds :\n\n". $hounds . "\n";
        $full_message .= "Waddle Tee Shirts (quantity and sizes) :\n\n". $waddle_shirts . "\n";

        mail($to_email, $name, $full_message);
        header("location: ../waddleRegistration.php?status=thanks");
        exit();
}

die("Your data is invalid.");

exit;
    
}

?>