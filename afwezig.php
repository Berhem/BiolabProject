<?php
$error ='';

if (isset($_POST['submit'])) {
    if (empty($_POST['datetimeVan']) || empty($_POST['datetimeTot'])  ) {

        $error = "De velden moeten ingevuld worden";


    } else {
        $result = GebruikerDb::getById($login_session_ID);
        $naam = $result->Naam;
        $voornaam = $result->Voornaam;
        $Afwezige = $voornaam + $naam;
        $StartDatum = $_POST['datetimeVan']; // required
        $EindDatum = $_POST['datetimeTot']; //required

        if (AfwezigheidDb::insert(new Afwezigheid(0, $Afwezige, $StartDatum, $EindDatum)) ) {

            header("Location: http://localhost/BiolabProject/dashboard.php");
            //header("Location: http://dtsl.ehb.be/~berhem.isik/BiolabProject/dashboard.php");
        } else {

            $error = "Something went wrong";
        }


    }

}
