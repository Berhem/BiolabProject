<?php
$error ='';

if (isset($_POST['submit'])) {
    if (!empty($_POST['Functie']) || !empty($_POST['Bio'])) {

        $error = "De velden kunnen niet leeg staan ";


    } else {

        $image = $_POST['userfile'];
        $bio = $_POST['bio'];
        $functie = $_POST['functie'];
        
        if($result = GebruikerDb::getAllByEmail($login_session)){

            $wachtwoord = $result->Wachtwoord;
            $id = $result->Id;

            if (GebruikerDb::update(new Gebruiker($id, $result->Naam, $result->Voornaam, $result->Email, $wachtwoord, $result->Afbeelding, $functie, $bio ))) {

                header("Location: http://localhost/BiolabProject/dashboard.php");
                //header("Location: http://dtsl.ehb.be/~berhem.isik/BiolabProject/dashboard.php");
            } else {

                $error = "Something went wrong";
            }


        }
        else{
            $error ="dd";
        }


    }
}
