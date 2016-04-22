<?php

    session_start();
    if (session_destroy()){

        header("Location: http://localhost/BiolabProject/index.php");
        //header("Location: http://dtsl.ehb.be/~berhem.isik/BiolabProject/index.php");
    }

?>