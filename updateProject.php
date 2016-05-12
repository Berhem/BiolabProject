<?php
$error ='';

if (isset($_POST['submit'])) {
    if (empty($_POST['titel']) || empty($_POST['omschrijving']) || empty($_POST['verantwoordelijke']) || empty($_POST['doelgroep']) || empty($_POST['technieken']) || empty($_POST['links'])
                            || empty($_POST['titelENG'])|| empty($_POST['omschrijvingENG']) || empty($_POST['doelgroepEng']) || empty($_POST['techniekenEng'])) {

        $error = "De velden kunnen niet leeg staan ";


    } else {

        $Titel = $_POST['titel'];
        $Omschrijving = $_POST['omschrijving'];
        $Verantwoordelijke = $_POST['verantwoordelijke'];
        $Doelgroep = $_POST['doelgroep'];
        $Technieken = $_POST['technieken'];
        $Links = $_POST['links'];
        $TitelEng = $_POST['titelENG'];
        $OmschrijvingEng = $_POST['omschrijvingENG'];
        $DoelgroepEng = $_POST['doelgroepEng'];
        $TechniekenEng = $_POST['techniekenEng'];




            if (ProjectDb::update(new Project($id, $Titel,$Omschrijving, $Verantwoordelijke, $Doelgroep, $Technieken, $Links, $TitelEng, $OmschrijvingEng, $DoelgroepEng, $TechniekenEng ))) {

                header("Location: http://localhost/BiolabProject/dashboard.php");
                //header("Location: http://dtsl.ehb.be/~berhem.isik/BiolabProject/dashboard.php");
            } else {

                $error = "Something went wrong";
            }


    }
}
