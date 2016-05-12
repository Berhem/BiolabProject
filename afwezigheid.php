<?php
    include('session.php');
    include_once('Database/CRUD/GebruikerDb.php');
    include_once('Database/CRUD/AfwezigheidDb.php');
    include('afwezig.php')
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
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/combodate.js"></script>

    <script>
        $(function(){
            $('#Vandatetime24').combodate({
                minYear :2010,
                maxYear: 2050
            });
            $('#Totdatetime24').combodate({
                minYear :2010,
                maxYear: 2050
            });
        });
    </script>
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
            <h1>Afwezigheid</h1>
            <p>Ben je afwezig? Meldt het dan hier.</p>
            <form name="" action="" method="post">
                <?php echo $error; ?>
            <table>
                <tr>
                    <td>
                        Van:
                    </td>
                    <td>
                        <input type="text" id="Vandatetime24" data-format="DD-MM-YYYY HH:mm" data-template="DD / MM / YYYY     HH : mm" name="datetimeVan" value="01-01-2016 00:00">
                    </td>
                </tr>
                <tr>
                    <td>
                        Tot:
                    </td>
                    <td>
                        <input type="text" id="Totdatetime24" data-format="DD-MM-YYYY HH:mm" data-template="DD / MM / YYYY     HH : mm" name="datetimeTot" value="01-01-2016 00:00">
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" name="submit">
                    </td>
                </tr>
            </table>
            </form>
        </div>

    </div>
</div>
</body>
</html>
