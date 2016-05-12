<?php
include('session.php');
include_once('Database/CRUD/ProjectDb.php');
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
    <div class="body_container">

        <div id="breadcrumbs">
            <a href="dashboard.php" class="activeBreadcrumbs"><i class="icon-enter"></i> Ga terug naar Dashboard</a>
        </div>
        <div id="profile">
            <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
            <div class="dropdown">
                <button class="dropbtn"><i class="icon-cog"></i> Settings</button>
                <div class="dropdown-content">
                    <a href="addProject.php"><i class="icon-pencil"></i> Project Toevoegen</a>
                    <?php
                    if ($login_session == 'Admin@Admin.com'){
                        echo "<a href='gToevoegen.php'><i class='icon-user-plus'> Gebruiker Toevoegen </i>";
                    }
                    ?>
                    <a href="profielBeheren.php"><i class="icon-hammer"></i> Profiel Bijwerken</a>
                    <a href="afwezigheid.php"><i class="icon-clock"></i> Afwezigheid melden</a>
                    <a href="logout.php" id="logout"><i class="icon-exit"></i> Log out</a>
                </div>
            </div>
        </div>

        <div class="tital_Container">
            <?php

            if ($result = ProjectDb::getById($_GET['id'])){

                echo "<h1>", $result->Titel, "</h1>";
                echo "<p class=''>",$result->Omschrijving, "</p>";
                echo "<p class=''>",$result->Verantwoordelijke, "</p>";
                echo "<p class=''>",$result->Doelgroep, "</p>";
                echo "<p class=''>",$result->Technieken, "</p>";
                echo "<p class=''>",$result->Links, "</p>";
                echo "<h1>", $result->TitelEng, "</h1>";
                echo "<p class=''>",$result->Technieken, "</p>";
                echo "<p class=''>",$result->OmschrijvingEng, "</p>";
                echo "<p class=''>",$result->TechniekenEng, "</p>";

            }else{
                echo "<p> Something went wrong </p>";
            }

            ?>


        </div>

    </div>
</div>
</body>
</html>