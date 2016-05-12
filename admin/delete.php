<?php

    $errorDelete ='';

if(isset($_POST['deleteItem']) and is_numeric($_POST['deleteItem'])) {

    $id = $_POST['deleteItem'];
    //Zoek Database Gebruiker op basic van ID
    if (GebruikerDb::deleteById($id)) {
        header("Location: http://localhost/BiolabProject/dashboard.php");
        //header("Location: http://dtsl.ehb.be/~berhem.isik/BiolabProject/Login/dashboard.php");
        $errorDelete = "Gebruiker is verwijderd";
        echo $errorDelete;

    } else {
        $errorDelete = "Er is iets fouts gegaan. Probeer nog eens";
        echo $errorDelete;
    }
}
?>