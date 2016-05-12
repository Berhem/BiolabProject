<?php

$error ='';

if (isset($_POST['submit'])) {
    if (empty($_POST['voornaam']) || empty($_POST['naam']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['passwordbev']) || empty($_POST['functie']) || empty($_POST['bio']) ) {

        $error = "De velden moeten ingevuld worden";


    } else {
        //died($error);

        $first_name = $_POST['voornaam']; // required
        $last_name = $_POST['naam']; // required
        $email = $_POST['email']; // required
        $wachtwoord = $_POST['password']; //required
        $wachtwoordBev = $_POST['passwordbev']; //required
        $functie = $_POST['functie'];
        $bio = $_POST['bio'];

        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
        $string_exp = "/^[A-Za-z .'-]+$/";

        if(!preg_match($email_exp,$email)) {

            $error_message .= 'The Email Address you entered does not appear to be valid.<br />';

        }

        if(!preg_match($string_exp,$first_name)) {

            $error_message .= 'The First Name you entered does not appear to be valid.<br />';

        }

        if(!preg_match($string_exp,$last_name)) {

            $error_message .= 'The First Name you entered does not appear to be valid.<br />';

        }

        if(strlen($error_message) > 0) {

            died($error_message);

        }
        
        if($wachtwoord == $wachtwoordBev){

            if(GebruikerDb::getAllByEmail($email)){

                $error ="Email adres bestaat al in onze database.";
            }else {

                if (GebruikerDb::insert(new Gebruiker(0, $last_name, $first_name, $email, md5($wachtwoord), "areplace.jpg", $functie, $bio))) {

                   header("Location: http://localhost/BiolabProject/dashboard.php");
                    //header("Location: http://dtsl.ehb.be/~berhem.isik/BiolabProject/dashboard.php");
                } else {

                    $error = "Something went wrong";
                }
            }
        }else{
            $error = "Wachtwoorden zijn niet gelijk.";
            
        }


    }
}
