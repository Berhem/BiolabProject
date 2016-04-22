<?php
    include('session.php');
    include('admin/add.php');
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
            <a href="dashboard.php" class="activeBreadcrumbs"><i class="icon-enter"></i> Ga terug naar Dashboard</a>
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
                    <a href="profielBeheren.php"><i class="icon-hammer"></i> Profiel Bijwerken</a>
                    <a href="afwezigheid.php"><i class="icon-clock"></i> Afwezigheid melden</a>
                    <a href="logout.php" id="logout"><i class="icon-exit"></i> Log out</a>
                </div>
            </div>
        </div>

        <div class="tital_Container">
            <h1>Gebruiker Toevoegen</h1>
            <form name="gToevogenform" method="post" action="">
                <table width="900px">
                    <tr>
                        <td valign="top">
                            <label for="voornaam">Voornaam :</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="voornaam" maxlength="50" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"">
                        <label for="naam">Naam :</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="naam" maxlength="50" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="email">Email :</label>
                        </td>
                        <td valign="top">
                            <input  type="email" name="email" maxlength="80" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="email">Wachtwoord :</label>
                        </td>
                        <td valign="top">
                            <input  type="password" name="password" maxlength="80" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="email">Wachtwoord Bevestigen :</label>
                        </td>
                        <td valign="top">
                            <input  type="password" name="passwordbev" maxlength="80" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="email">Afbeelding :</label>
                        </td>
                        <td valign="top">
                            <input name="userfile" type="file" />
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" style="text-align:center">
                            <input class="button" type="submit" value="Aanmaken" name="submit">
                        </td>
                    </tr>
                </table>
                <?php
                    echo '<h2>', $error,  '</h1> ';
                    echo '<h2>', $error_message,  '</h1> ';
                ?>
        </div>

    </div>
</div>
</body>
</html>