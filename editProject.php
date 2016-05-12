<?php
include('session.php');
include_once('Database/CRUD/ProjectDb.php');
include('updateProject.php');
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
            <h1>Project Beheer</h1>
            <form name="updatePform" method="post" action="">
                <?php
                echo '<h2>', $error,  '</h2> ';
                echo '<h2>', $error_message,  '</h2> ';
                ?>
                <?php
                if ($result = ProjectDb::getById($_GET['id'])){

                    $id = $_GET['id'];
                    $Titel = $result->Titel;
                    $Omschrijving = $result->Omschrijving;
                    $Verantwoordelijke = $result->Verantwoordelijke;
                    $Doelgroep = $result->Doelgroep;
                    $Technieken = $result->Technieken;
                    $Links = $result->Links;
                    $TitelEng = $result->TitelEng;
                    $OmschrijvingEng = $result->OmschrijvingEng;
                    $DoelgroepEng = $result->DoelgroepEng;
                    $TechniekenEng = $result->TechniekenEng;
                }
                ?>
                <table width="900px">
                    <tr>
                        <td valign="top">
                            <label for="titel">Titel :</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="titel" maxlength="50" size="30" value="<?php echo $Titel;?> ">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"">
                        <label for="omschrijving">Omschrijving :</label>
                        </td>
                        <td valign="top">
                            <textarea name="omschrijving" rows="20" cols="50"><?php echo $Omschrijving;?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="verantwoordelijke">Verantwoordelijke :</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="verantwoordelijke" maxlength="80" size="30" value="<?php echo $Verantwoordelijke;?>">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"">
                        <label for="doelgroep">Doelgroep :</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="doelgroep" maxlength="50" size="30" value="<?php echo $Doelgroep;?>">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="technieken">Technieken :</label>
                        </td>
                        <td valign="top">
                            <textarea name="technieken" rows="20" cols="50"><?php echo $Technieken;?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="links">Links :</label>
                        </td>
                        <td valign="top">
                            <textarea name="links" rows="20" cols="90"><?php echo $Links;?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="titelEng">Engelse Titel :</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="titelEng" maxlength="50" size="30" value="<?php echo $TitelEng;?>">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"">
                        <label for="omschrijvingEng">Engelse Omschrijving :</label>
                        </td>
                        <td valign="top">
                            <textarea name="omschrijvingEng" rows="20" cols="50"><?php echo $OmschrijvingEng;?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"">
                        <label for="doelgroepEng">Engelse Doelgroep :</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="doelgroepEng" maxlength="50" size="30" value="<?php echo $DoelgroepEng;?>">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="techniekenEng">Engelse Technieken :</label>
                        </td>
                        <td valign="top">
                            <textarea name="techniekenEng" rows="20" cols="50"><?php echo $TechniekenEng;?></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" style="text-align:center">
                            <input class="button" type="submit" value="Aanpassen" name="submit">
                        </td>
                    </tr>
                </table>
                </form>
        </div>

    </div>
</div>
</body>
</html>