<?php

    include_once 'Database/CRUD/GebruikerDb.php';

    session_start();// Starting Session
    // Storing Session
    $user_check = $_SESSION['login_user'];

    if($result=GebruikerDb::getAllByEmail($user_check)) {

        $login_session = $user_check;
        $login_session_ID = $result[0]->Id;

    }
    if(!isset($login_session)){
        header('Location: http://localhost/BiolabProject/index.php'); // Redirecting To Home Page
        //header("Location: http://dtsl.ehb.be/~berhem.isik/BiolabProject/index.php");
    }
?>