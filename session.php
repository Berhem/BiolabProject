<?php

    include_once 'Database/CRUD/GebruikerDb.php';

    session_start();// Starting Session
    // Storing Session
    $user_check = $_SESSION['login_user'];

    if($result = GebruikerDb::getAllByEmail($user_check)) {

        $login_session = $result->Voornaam;
    }
    if(!isset($login_session)){
        header('Location: http://localhost/BiolabProject/index.php'); // Redirecting To Home Page
    }
?>