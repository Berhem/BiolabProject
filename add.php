<?php

$error ='';

if (isset($_POST['submit'])) {
    if (empty($_POST['titel']) || empty($_POST['omschrijving']) || empty($_POST['verantwoordelijke']) || empty($_POST['doelgroep']) || empty($_POST['technieken']) || empty($_POST['links']) || empty($_POST['titelENG'])
            || empty($_POST['descriptionENG']) || empty($_POST['targetaudienceENG']) || empty($_POST['techniquesENG']) ) {

        $error = "De velden moeten ingevuld worden";


    } else {
        //died($error);

        $titel = $_POST['titel']; // required
        $omschrijving = $_POST['omschrijving']; // required
        $verantwoordelijke = $_POST['verantwoordelijke']; // required
        $doelgroep = $_POST['doelgroep']; //required
        $technieken = $_POST['technieken']; //required
        $links = $_POST['links'];
        $titelENG = $_POST['titelENG'];
        $targetaudienceENG = $_POST['targetaudienceENG'];
        $techniquesENG = $_POST['techniquesENG'];
        $descriptionENG = $_POST['descriptionENG'];
        /*
        $string_exp = "/^[A-Za-z .'-]+$/";

        if(!preg_match($string_exp,$titel)) {

            $error_message .= 'The First Name you entered does not appear to be valid.<br />';

        }
        if(!preg_match($string_exp,$omschrijving)) {

            $error_message .= 'The First Name you entered does not appear to be valid.<br />';

        }
        if(!preg_match($string_exp,$verantwoordelijke)) {

            $error_message .= 'The First Name you entered does not appear to be valid.<br />';

        }
        if(!preg_match($string_exp,$doelgroep)) {

            $error_message .= 'The First Name you entered does not appear to be valid.<br />';

        }
        if(!preg_match($string_exp,$technieken)) {

            $error_message .= 'The First Name you entered does not appear to be valid.<br />';

        }
        if(!preg_match($string_exp,$links)) {

            $error_message .= 'The First Name you entered does not appear to be valid.<br />';

        }
        if(!preg_match($string_exp,$titelENG)) {

            $error_message .= 'The First Name you entered does not appear to be valid.<br />';

        }
        if(!preg_match($string_exp,$targetaudienceENG)) {

            $error_message .= 'The First Name you entered does not appear to be valid.<br />';

        }
        if(!preg_match($string_exp,$techniquesENG)) {

            $error_message .= 'The First Name you entered does not appear to be valid.<br />';

        }
        if(!preg_match($string_exp,$descriptionENG)) {

            $error_message .= 'The First Name you entered does not appear to be valid.<br />';

        }

        if(strlen($error_message) > 0) {

            died($error_message);

        }
*/
            
            if (ProjectDb::insert(new Project(0, $titel, $omschrijving, $verantwoordelijke, $doelgroep, $technieken, $links, $titelENG, $descriptionENG, $targetaudienceENG, $techniquesENG))) {

                header("Location: http://localhost/BiolabProject/dashboard.php");
                //header("Location: http://dtsl.ehb.be/~berhem.isik/BiolabProject/dashboard.php");
            } else {

                $error = "Something went wrong";
            }
        

    }
    
}
