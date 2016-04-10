<?php

    include_once 'Database/CRUD/GebruikerDb.php';

    session_start(); // Starting Session
    $error=''; // Variable To Store Error Message

    if (isset($_POST['submit'])) {
        if (empty($_POST['email']) || empty($_POST['password'])) {
            $error = "Username or Password is invalid";
            echo "ddd";
        }
        else
        {
        // Define $username and $password
            $email=$_POST['email'];
            $password=$_POST['password'];


            if($result = GebruikerDb::getAllByEmail($email)){

                $_SESSION['login_user'] = $result->Email;
                header("location: http://localhost/BiolabProject/dashboard.php");
            }
            else {
                $error = "Email or Password is invalid";
                echo "ddd";
            }
         }
    }
?>
