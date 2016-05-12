<?php

    include_once('Database/CRUD/GebruikerDb.php');

    session_start(); // Starting Session
    $error=''; // Variable To Store Error Message

    if (isset($_POST['submit'])) {
        if (empty($_POST['email']) || empty($_POST['password'])) {
            $error = "Username or Password is invalid";
            echo "";
        }
        else
        {
        // Define $username and $password
            $email=$_POST['email'];
            $password= md5($_POST['password']);

            if($result = GebruikerDb::checkLogin($email,$password)){

                $em = $result[0]->Email;
                $_SESSION['login_user'] = $em;
                header("Location: http://localhost/BiolabProject/dashboard.php");
                //header("Location: http://dtsl.ehb.be/~berhem.isik/BiolabProject/dashboard.php");
            }
            else {
                $error = "Email or Password is invalidd";
            }
         }
    }
?>
