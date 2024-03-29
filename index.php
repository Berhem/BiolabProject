<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Open Biolab Brussels </title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
    <link rel="apple-touch-icon" href="img/favicon.png" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-2.2.2.js"></script>
   <!-- <script type="text/javascript" src="js/paper.js"></script>
    <script type="text/javascript" src="js/voronai.js"></script>
    <script type="text/paperscript" canvas="canvas" src="js/canvasInt.js"></script>-->
    <script type="text/javascript">
        $(function(){
            $('#video').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });

            $(window).resize(function(){
                $('#video').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });
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
                <li><a href="project.php" name="project">Projecten</a></li>
                <li><a href="team.php" name="team">Team</a></li>
                <li><a href="contact.php" name="contact">Contact</a></li>
                <li><a href="locatie.php" name="locatie">Locatie</a></li>
            </ul>
        </nav>
    </header>
    <div>

        <!--<canvas id="canvas" resize ></canvas>-->
        <iframe id="video" src="https://www.youtube.com/embed/mlOiXMvMaZo?autoplay=1&loop=1&playlist=mlOiXMvMaZo" frameborder="0" allowfullscreen></iframe>

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
