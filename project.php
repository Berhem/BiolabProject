<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>WebShop Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="apple-touch-icon" href="images/favicon.png" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-2.2.2.js"></script>

    <script type="text/javascript">
        $(function() {
            $(".projectItem").each(function () {
                // /var hue = 'rgb(' + (Math.floor((256-199)*Math.random()) + 200) + ',' + (Math.floor((256-199)*Math.random()) + 200) + ',' + (Math.floor((256-199)*Math.random()) + 200) + ')';
                var color = '#'; // hexadecimal starting symbol
                var letters = ['588C7E', 'F2E394', 'F2AE72', 'D96459', '8C4646', '00585F', '009393', 'FF3800','7E8F7C','C63D0F','3B3738']; //Set your colors here
                color += letters[Math.floor(Math.random() * letters.length)];
                $(this).css("background", color);
            });

        });

    </script>

</head>
<body>
<div class="container">
    <header class="header_container">
        <div class="logo_wrapper">
            <a class="logo" href="index.php"><img src="img/Logo.png" /></a>
        </div>
        <nav class="menu_wrapper">
            <ul>
                <li class="active"><a href="project.php" name="project">Projecten</a></li>
                <li><a href="team.php" name="team">Team</a></li>
                <li><a href="contact.php" name="contact">Contact</a></li>
                <li><a href="locatie.php" name="locatie">Locatie</a></li>
            </ul>
        </nav>
        <div class="languageWrapper"></div>
    </header>
    <div class="body_container">

        <div id="breadcrumbs">
            <a href="index.php">home</a> > <a class="activeBreadcrumbs" href="project.php">projecten</a>
        </div>

        <div class="tital_Container">
            <h1>Projecten</h1>
            <div class="project_wrapper">
            <?php
                include_once 'Database/CRUD/ProjectDb.php';

                foreach (ProjectDb::getAll() as $item){

                    $id = $item->Id;
                        echo "<div class='projectItem'>";
                            echo "<div class='projectText'>";
                             echo "<a href='projectContent.php?id=$id' ><h2>", $item->Titel, "</h2></a>";
                            echo "</div>";
                        echo "</div>";

                }
            ?>
            </div>

        </div>

        <div class="tital_Container">
            <h1>Apparatuur</h1>
            <ul>
                <li>PH-Meter</li>
            </ul>
        </div>

    </div>
    <div class="footer_container">

        <div class="footer_wrapper">
            <div class="footer_section">
                <h2>Navigatie</h2>
                <ul>
                    <li><a href="index.php" >Home</a></li>
                    <li><a href="project.php" >Projecten</a></li>
                    <li><a href="team.php" >Team</a></li>
                    <li><a href="contact.php" >Contact</a></li>
                    <li><a href="locatie.php" >Locatie</a></li>
                </ul>
            </div>
            <div class="footer_section">
                <h2>Login</h2>
                <a href="login.php" >Login</a>
            </div>
        </div>
    </div>

</div>
</body>
</html>