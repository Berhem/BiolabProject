<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
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
            <a class="logo" href="index.php"><img src="img/Logo2.png" /></a>
        </div>
        <nav class="menu_wrapper">
            <ul>
                <li><a href="project.php" name="project">Projecten</a></li>
                <li><a href="team.php" name="team">Team</a></li>
                <li class="active"><a href="contact.php" name="contact">Contact</a></li>
                <li><a href="locatie.php" name="locatie">Locatie</a></li>
            </ul>
        </nav>
    </header>
    <div class="body_container">

        <div id="breadcrumbs">
            <a href="index.php">home</a> > <a class="activeBreadcrumbs" href="contact.php">contact</a>
        </div>

        <div class="image_Banner_Container">
            <div class="image_Banner_Wrapper">
                <img src="img/Labo-7.jpg">
                <h1>Elke Donderdag van 18u tot 21u tijdens de lesweken</h1>
            </div>
        </div>

        <div class="tital_Container">
            <h1>Info</h1>
            <ul>
                <li>Inschrijvingen kan gebeuren hier onderaan of per mail naar <a class="activeBreadcrumbs" href="">tom.peeters@ehb.be</a>
                    voor (gratis) eerste kennismakkingsbezoek
                </li>
                <li>Indien je bij de eerste bezoek beslist om deel te nemen aan een EHB-project kost inschrijving 25 Euro/Per Jaar (voor verzekeringskosten) </li>
                <li>inschrijven is niet verplicht</li>
            </ul>
        </div>

        <div class="tital_Container">
            <h1>Aanmelding</h1>
            <form name="contactform" method="post" action="send_form_email.php">
                <table width="900px">
                    <tr>
                        <td valign="top">
                            <label for="voornaam">Voornaam* :</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="voornaam" maxlength="50" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"">
                        <label for="achternaam">AchterNaam* :</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="achternaam" maxlength="50" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="email">Email* :</label>
                        </td>
                        <td valign="top">
                            <input  type="email" name="email" maxlength="80" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="boodschap">Boodschap</label>
                        </td>
                        <td valign="top">
                            <textarea  name="boodschap" maxlength="1000" cols="25" rows="6"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:center">
                            <input class="button" type="submit" value="Verstuur">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div class="footer_container">

    </div>

</div>
</body>
</html>