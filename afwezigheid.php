<?php
    include('session.php');
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
            <h1>Afwezigheid</h1>
            <p>Ben je afwezig? Meldt het dan hier.</p>

        </div>

    </div>
</div>
</body>
</html>
