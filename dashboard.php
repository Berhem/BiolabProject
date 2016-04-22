<?php
    include('session.php');
    include_once('admin/delete.php');
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
    <div class="body_container">

        <div id="breadcrumbs">
            <a href="index.php" class="activeBreadcrumbs"><i class="icon-home"></i> Go back home</a>
        </div>
        <div id="profile">
            <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
            <div class="dropdown">
                <button class="dropbtn"><i class="icon-cog"></i> Settings</button>
                <div class="dropdown-content">
                    <?php
                    if ($login_session == 'Admin@Admin.com'){
                        echo "<a href='gToevoegen.php'><i class='icon-user-plus'> Gebruiker Toevoegen </i>";
                    }
                    ?>
                    <a href="profielBeheren.php"><i class="icon-hammer icon-"></i> Profiel Bijwerken</a>
                    <a href="afwezigheid.php"><i class="icon-clock"></i> Afwezigheid melden</a>
                    <a href="logout.php" id="logout"><i class="icon-exit"></i> Log out</a>
                </div>
            </div>
        </div>

        <div class="tital_Container">
            <h1>TEAM</h1>
            <h2><?php echo $errorDelete; ?></h2>
            <div class="tabel_wrapper">
                <form name="" method="post" action="">
                <table class="tabel tablesorter" id="myTable">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Naam</th>
                        <th>Voornaam</th>
                        <th>Email</th>
                        <th>Meer</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    foreach (GebruikerDb::getAll() as $gebruiker) {
                        $id = $gebruiker->Id;
                        echo "<tr>";
                        echo "<td>";
                        echo  $id;
                        echo "</td>";
                        echo "<td>";
                        echo $gebruiker->Naam;
                        echo "</td>";
                        echo "<td>";
                        echo $gebruiker->Voornaam;
                        echo "</td>";
                        echo "<td>";
                        echo $gebruiker->Email;
                        echo "<td>";
                        echo "<a href='detail.php?id=$id' class='detailBtn'><i class='icon-file-text2'></i> Detail</a>";
                        if ($login_session == 'Admin@Admin.com'){
                            //echo "<a href='admin/delete.php?id=$id' class='deleteBtn'><i class='icon-profile'> Delete</i>";
                            echo '<a class=""> <input class="deletebtn" type="submit" name="deleteItem" value="'.$id.'"/></a>';
                        }

                        echo "</td>";
                        echo "</tr>";
                    }

                    ?>
                    </tbody>
                </table>
            </div>

            <div class="tital_Container">
                <h1>Project</h1>
                <div class="tabel_wrapper">
                    <table class="tabel tablesorter" id="myTable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titel</th>
                            <th>Voornaam</th>
                            <th>Email</th>
                            <th>Meer</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        include_once 'Database/CRUD/ProjectDb.php';

                        foreach (ProjectDb::getAll() as $project) {
                            $id = $project->Id;
                            echo "<tr>";
                            echo "<td>";
                            echo $id;
                            echo "</td>";
                            echo "<td>";
                            echo $project->Naam;
                            echo "</td>";
                            echo "<td>";
                            echo $project->Voornaam;
                            echo "</td>";
                            echo "<td>";
                            echo $project->Email;
                            echo "<td>";
                            echo "<a href='Login/admin/detailProject.php?id=$id' class='detailBtn'>Detail</a>";
                            echo "</td>";
                            echo "</tr>";
                        }


                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</body>
</html>