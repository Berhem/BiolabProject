<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>OpenBioLab Brussels</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="apple-touch-icon" href="images/favicon.png" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-2.2.2.js"></script>
    <script type="text/javascript">
        $(function() {
            $(".teamItem").each(function () {
                // /var hue = 'rgb(' + (Math.floor((256-199)*Math.random()) + 200) + ',' + (Math.floor((256-199)*Math.random()) + 200) + ',' + (Math.floor((256-199)*Math.random()) + 200) + ')';
                var color = '#'; // hexadecimal starting symbol
                var letters = ['588C7E', 'F2E394', 'F2AE72', 'D96459', '8C4646', '00585F', '009393', 'FF3800','7E8F7C','C63D0F','3B3738']; //Set your colors here
                color += letters[Math.floor((Math.random()*0.5) * letters.length)];
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
                <li><a href="project.php" name="project">Projecten</a></li>
                <li class="active"><a href="team.php" name="team">Team</a></li>
                <li><a href="contact.php" name="contact">Contact</a></li>
                <li><a href="locatie.php" name="locatie">Locatie</a></li>
            </ul>
        </nav>
    </header>
    <div class="body_container">

        <div id="breadcrumbs">
            <a href="index.php">home</a> > <a class="activeBreadcrumbs" href="team.php">team</a>
        </div>

        <div class="info_About_Container">
            <div class="info_About_Wrapper styleOne">
                <div class="image_Wrapper">
                    <img class="infoAboutImage" src="img/Labo-30.jpg">
                </div>
                <div class="infoAboutText">
                    <h2>Wie zijn wij?</h2>
                    <p>Biolab Brussels is een initiatief van de opleiding
                        Biomedische laboratoriumtechnollogie van de Erasmushogeschool Brussel
                        dat wordt opgestart vanaf september 2016 door 2 lectoren en een senior
                        onderzoeker die bovenop een naast hun opdracht interessante
                        wettenschapsprojecten zullen (bege) leiden.
                    </p>
                </div>
            </div>

            <div class="info_About_Wrapper styleTwo">
                <div class="infoAboutText">
                    <h2>Wat is een open biolab?</h2>
                    <p>Een open biolab is een laboratorium dat open toegang biedt tot toestellen
                        en materiaal tijdens vaste openingsuren waardoor ‘iedereen’ met interesse in
                        biowetenschappen de kans krijgt aan onderzoek te doen.
                    </p>
                    <p>
                        De iniatiefnemer werden hiervoor geïnspireerd door talrijke Europese en
                        internationale ‘do-it-yourself biology’ labo’s (DIYbio). DIYbio is een
                        wereldwijde beweging van wetenschappers, kunstenaars en burgers
                        die biowetenschappen toegankelijker willen maken voor een breder publiek.
                        Dit multidisiplineair netwerkis rijk aan kennis over biowetenschappen.
                    </p>
                </div>
                <div class="image_Wrapper">
                    <img class="infoAboutImage" src="img/Labo-35.jpg">
                </div>
            </div>

            <div class="info_About_Wrapper styleOne">
                <div class="image_Wrapper">
                    <img class="infoAboutImage" src="img/Labo-48.jpg">
                </div>
                <div class="infoAboutText">
                    <h2>Missie</h2>
                    <p>
                        1. a.d.h.v. interessante wetenschappen projecten een biolabo toegangelijk
                        maken voor allle geïteresseeerden (vanaf 17+) in Biowetenschappen.
                    </p>
                    <p>
                        2. Open staan voor alle mogelijke (onderzoeks) vragen m.b.t. biowetencahppen
                        en met onze expertise hulp/begeleiding bieden om een antwoord te zoeken
                        op deze vragen.
                    </p>
                </div>
            </div>

            <div class="info_About_Wrapper styleTwo">
                <div class="infoAboutText">
                    <h2>Doelgroepen</h2>

                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut
                        </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut
                        </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut
                        </li>
                    </ul>
                </div>
                <div class="image_Wrapper">
                    <img class="infoAboutImage" src="img/Labo-56.jpg">
                </div>
            </div>

            <div class="info_About_Wrapper styleOne">
                <div class="image_Wrapper">
                    <img class="infoAboutImage" src="img/Labo-53.jpg">
                </div>
                <div class="infoAboutText">
                    <h2>Positionering</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in r
                        eprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        r. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                        s error sit voluptatem accusantium doloremque laudantium, totam re
                        m aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archit
                        ecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptate

                    </p>
                </div>
            </div>

        </div>

        <div class="tital_Container">
            <h1>Team</h1>
            <div class="team_wrapper">
                <?php

                    include_once 'Database/CRUD/GebruikerDb.php';
                    foreach (GebruikerDb::getAll() as $item){
                        $id = $item->Id;
                        echo "<div class='teamItem'>";
                        echo "<a href='teamContent.php?id=$id'>";
                        echo "<div class='profileImg'> <img src='uploads/$item->Afbeelding'/> </div>";
                        //echo "<div>","<img src='", $item->Afbeelding,"' />", "</div>";
                        echo "<div class='profileText'>";
                        echo "<h2>", $item->Voornaam, " ", $item->Naam, "</h2>";
                        echo "<h3>", $item->Functie, "</h3>";
                        echo "</a>";
                        echo "</div>";
                        echo "</div>";
                    }

                ?>
            </div>
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