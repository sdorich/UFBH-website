<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $to_email = "sarah.dorich@yahoo.com";
    
    $subject = "[Adoption Form] " . $_POST["last-name"] . ", " . $_POST["first-name"];
    
    //biographical info.
    $last_name = $_POST["last-name"];
    $first_name = $_POST["first-name"];
    $middle_name = $_POST["middle-name"];
    $address = $_POST["address"];
    $address2 = $_POST["address2"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $home_phone = $_POST["home-phone"];
    $work_phone = $_POST["work-phone"];
    $cell_phone = $_POST["cell-phone"];
    $drivers_license = $_POST["drivers-license"];
    $email = $_POST["email"];
    
    //dog experience
    $dog_owner = $_POST["dog-owner"];
    $basset_owner = $_POST["basset-owner"];
    $nodog_explanation = $_POST["nodog-explanation"];
    $housetrain = $_POST["housetrain"];
    $will_housetrain = $_POST["will-housetrain"];
    $obedience_class = $_POST["obedience-class"];
    $obedience_school = $_POST["obedience-school"];
    $behavior_methods = $_POST["behavior-methods"];
    $pets = $_POST["pets"];
    $pet_count = $_POST["pet-count"];
    
    //current pet details
    $petName = $_POST["petName"];
    $breed = $_POST["breed"];
    $petAge = $_POST["petAge"];
    $gender = $_POST["gender"];
    $altered = $_POST["altered"];
    $ageAltered = $_POST["ageAltered"];
    
    //current pet list
    $allPets = $_POST["allPets"];
    
    $vet = $_POST["vet"];
    
    //physical home and basset accomodations
    $home_type = $_POST["home-type"];
    $other_details = $_POST["other-details"];
    $home_status = $_POST["home-status"];
    $rent_permission = $_POST["rent-permission"];
    $landlord_phone = $_POST["landlord-phone"];
    $fenced_yard = $_POST["fenced-yard"];
    $doggie_door = $_POST["doggie-door"];
    $pool = $_POST["pool"];
    $pool_fence = $_POST["pool-fence"];
    $basset_day = $_POST["basset-day"];
    $basset_night = $_POST["basset-night"];
    
    //lifestyle
    $children = $_POST["children"];
    $child_ages = $_POST["child-ages"];
    $ppl_count = $_POST["ppl-count"];
    $basset_alone = $_POST["basset-alone"];
    $alone_details = $_POST["alone-details"];
    $basset_reason = $_POST["basset-reason"];
    $leave_dog = $_POST["leave-dog"];
    $leave_dog_other = $_POST["leave-dog-other"];
    $expensive_vet = $_POST["expensive-vet"];
    $expensive_vet_other = $_POST["expensive-vet-other"];
    $basset_hesitant = $_POST["basset-hesitant"];
    $hesitant_details = $_POST["hesitant-details"];
    
    //preferences
    $gender_preference = $_POST["gender-preference"];
    $age_preference = $_POST["age-preference"];
    $trait_preferences = $_POST["trait-preferences"];
    $trait_dislikes = $_POST["trait-dislikes"];
    
    //additional comments and information
    $comments = $_POST["comments"];
    $ufbh_discovery = $_POST["ufbh-discovery"];
    $ufbh_contact = $_POST["ufbh-contact"];
    
    
    
    
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