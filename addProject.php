<?php
    include('session.php');
    include_once('Database/CRUD/ProjectDb.php');
    include('add.php');
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
            <h1>Project Toevoegen</h1>
            <form name="gToevogenform" method="post" action="">
                <table width="900px">
                    <?php
                    echo '<h2>', $error,  '</h1> ';
                    echo '<h2>', $error_message,  '</h1> ';
                    ?>
                    <tr>
                        <td valign="top">
                            <label for="titel">Titel :</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="titel" maxlength="50" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"">
                        <label for="omschrijving">Omschrijving :</label>
                        </td>
                        <td valign="top">
                            <textarea  type="text" name="omschrijving" cols="40" rows="10" ></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"">
                        <label for="verantwoordelijke">Verantwoordelijke :</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="verantwoordelijke" maxlength="50" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="doelgroep">Doelgroep :</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="doelgroep" maxlength="80" size="50">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="Technieken">Technieken :</label>
                        </td>
                        <td valign="top">
                            <textarea  type="text" name="technieken" cols="40" rows="10" ></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="links">Links :</label>
                        </td>
                        <td valign="top">
                            <textarea  type="text" name="links" cols="40" rows="10" ></textarea>
                        </td>
                    </tr>
                </table>
                <h1>Add English</h1>
                <table width="900px">
                    <?php
                    echo '<h2>', $error,  '</h1> ';
                    echo '<h2>', $error_message,  '</h1> ';
                    ?>
                    <tr>
                        <td valign="top">
                            <label for="titel">Titel :</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="titelENG" maxlength="50" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"">
                        <label for="Description">Description :</label>
                        </td>
                        <td valign="top">
                            <textarea  type="text" name="descriptionENG" cols="40" rows="10" ></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="targetaudience">Target audience:</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="targetaudienceENG" maxlength="80" size="50">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="techniques">Techniques :</label>
                        </td>
                        <td valign="top">
                            <textarea  type="text" name="techniquesENG" cols="40" rows="10" ></textarea>
                        </td>
                    </tr>


                    <tr>
                        <td colspan="2" style="text-align:center">
                            <input class="button" type="submit" value="Toevoegen" name="submit"/>
                        </td>
                    </tr>
                </table>

        </div>

    </div>
</div>
</body>
</html>