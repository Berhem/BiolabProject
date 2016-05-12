<?php
    include('session.php');
    include_once('Database/CRUD/GebruikerDb.php');
    include('update.php');
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
            <h1>Profiel Beheer</h1>
            <form name="updateform" method="post" action="">
                <?php
                    foreach (GebruikerDb::getAllByEmail($login_session) as $result){

                        $naam = $result->Naam;
                        $voornaam = $result->Voornaam;
                        $email = $result->Email;
                        $ww = $result->Wachtwoord;
                        $afbeelding = $result->Afbeelding;
                        $functie = $result->Functie;
                        $bio = $result->Bio;
                    }
                ?>
                <img class="image_medium" src="uploads/<?php echo $afbeelding?>">
                <table width="900px">
                    <tr>
                        <td valign="top">
                            <label for="voornaam">Voornaam :</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="voornaam" maxlength="50" size="30" value="<?php echo $voornaam;?> " disabled>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"">
                        <label for="naam">Naam :</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="naam" maxlength="50" size="30" value="<?php echo $naam;?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="email">Email :</label>
                        </td>
                        <td valign="top">
                            <input  type="email" name="email" maxlength="80" size="30" value="<?php echo $email;?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"">
                        <label for="Functie">Functie :</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="functie" maxlength="50" size="30" value="<?php echo $functie;?>" >
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="email">Wachtwoord :</label>
                        </td>
                        <td valign="top">
                            <a class="activeBreadcrumbs" href='wijzigWachtwoord.php'>Wachtwoord wijzigen</a>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="fileToUpload">Selecteer een afbeelding  :</label>
                        </td>
                        <td>
                            <a class="activeBreadcrumbs" href='uploadImageform.php'> Upload Image</a>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="Bio">Bio :</label>
                        </td>
                        <td valign="top">
                            <textarea name="bio" rows="20" cols="50"><?php echo $functie;?></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" style="text-align:center">
                            <input class="button" type="submit" value="Aanpassen" name="submit">
                        </td>
                    </tr>
                </table>
                <?php
                    echo '<h2>', $error,  '</h2> ';
                    echo '<h2>', $error_message,  '</h2> ';
                ?>
        </div>

    </div>
</div>
</body>
</html>