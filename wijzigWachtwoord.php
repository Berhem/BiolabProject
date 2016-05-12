<?php
include('session.php');
include_once('Database/CRUD/GebruikerDb.php');
include('updateWachtwoord.php');
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
            <a href="profielBeheren.php" class="activeBreadcrumbs"><i class="icon-enter"></i> Ga terug naar vorige</a>
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
            <h1>Profiel Beheer</h1>
            <form name="updateWform" method="post" action="">
                <table width="900px">
                    <?php
                    echo '<h2>', $error,  '</h2> ';
                    echo '<h2>', $error_message,  '</h2> ';
                    ?>
                    <tr>
                        <td valign="top">
                            <label for="email">Huidge Wachtwoord :</label>
                        </td>
                        <td valign="top">
                            <input  type="password" name="Hpassword" maxlength="80" size="30" value="">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="email">Nieuwe Wachtwoord</label>
                        </td>
                        <td valign="top">
                            <input  type="password" name="Npassword" maxlength="80" size="30" value="">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" style="text-align:center">
                            <input class="button" type="submit" value="Aanpassen" name="submit">
                        </td>
                    </tr>
                </table>
        </div>

    </div>
</div>
</body>
</html>
