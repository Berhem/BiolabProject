<?php

include_once('Database/CRUD/GebruikerDb.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>OpenBioLab Brussels</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="apple-touch-icon" href="images/favicon.png" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-2.2.2.js"></script>

</head>
<body>
<div class="container">
    <header class="header_container">
        <div class="logo_wrapper">
            <a class="logo" href="index.php"><img src="img/Logo.png" /></a>
        </div>
        <nav class="menu_wrapper">
            <ul>
                <li><a href="project.php" name="project">Projecten</a></li>
                <li class="active"><a href="team.php" name="team">Team</a></li>
                <li><a href="contact.php" name="contact">Contact</a></li>
                <li><a href="locatie.php" name="locatie">Locatie</a></li>
            </ul>
        </nav>
    </header>
    <div class="body_container">

        <div id="breadcrumbs">
            <a href="index.php">home</a> > <a href="team.php">team > <?php if($result = GebruikerDb::getById($_GET['id'])){ $naam = $result->Naam;
                $voornaam = $result->Voornaam; echo "<a class='activeBreadcrumbs'>"; echo $voornaam; echo " "; echo $naam; echo "</a>";}?></a>
        </div>
        <div>
            <?php

            if ($result = GebruikerDb::getById($_GET['id'])){
                echo "<h1>", $result->Voornaam, " ", $result->Naam, "</h1>";
                echo "<div class='img' >";
                //echo "<img src=' ", $result->Afbeelding, "' />";
                echo "</div>";
                echo "<p class=''>",$result->Functie, "</p>";
                echo "<p class=''>",$result->Bio, "</p>";

            }else{
                echo "<p> Something went wrong </p>";
            }
            ?>
        </div>

     </div>
<div class="footer_container">

    <div class="footer_wrapper">
        <div class="footer_section">
            <h2>Navigatie</h2>
            <ul>
                <li><a href="index.php" >Home</a></li>
                <li><a href="project.php" >Projecten</a></li>
                <li><a href="team.php" >Team</a></li>
                <li><a href="contact.php" >Contact</a></li>
                <li><a href="locatie.php" >Locatie</a></li>
            </ul>
        </div>
        <div class="footer_section">
            <h2>Login</h2>
            <a href="login.php" >Login</a>
        </div>
    </div>
</div>

</div>
</body>
</html>