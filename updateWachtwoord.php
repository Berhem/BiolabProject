<?php

$error ='';

if (isset($_POST['submit'])) {
    if (empty($_POST['Hpassword']) || empty($_POST['Npassword'])) {

        $error = "De velden kunnen niet leeg staan ";


    } else {

        $Hwachtwoord = md5($_POST['Hpassword']); //required
        $Nwachtwoord = md5($_POST['Npassword']); //required
        $image = $_POST['userfile'];
        $bio = $_POST['bio'];
        $functie = $_POST['functie'];


        if($result = GebruikerDb::getAllByEmail($login_session)){

            $wachtwoord = $result->Wachtwoord;
            $id = $result->Id;
            
            if($wachtwoord == $Hwachtwoord){
                
                $error ="Het wachtwoord die je hebt opgegeven klopt niet";
                
            }else{

                if($Hwachtwoord == $Nwachtwoord){
                    $error = "De huige als de nieuwe wachtwoord is gelijk.";
                }
                else {


                    if (GebruikerDb::update(new Gebruiker($id, $result->Naam, $result->Voornaam, $result->Email, $Nwachtwoord, $result->Afbeelding, $result->Functie, $result->Bio ))) {

                        header("Location: http://localhost/BiolabProject/dashboard.php");
                        //header("Location: http://dtsl.ehb.be/~berhem.isik/BiolabProject/dashboard.php");
                    } else {

                        $error = "Something went wrong";
                    }
                }
            }
        }
        else{
            $error ="dd";
        }


    }
}
