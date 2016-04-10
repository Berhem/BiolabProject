<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>OpenBioLab Brussels</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="apple-touch-icon" href="images/favicon.png" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/fullcalendar.min.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="js/jquery-2.2.2.js"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/fullcalendar.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9DWWLacmB1HUJ69N2g_fPLUPI7gu-Uq4&callback=initMap" async defer></script>
    <script>
        function initMap() {

            var myLatLng = {lat: 50.884471, lng: 4.306146};


            var mapDiv = document.getElementById('map');
            var map = new google.maps.Map(mapDiv, {
                center: myLatLng,
                zoom: 16
            });

            // Create a marker and set its position.
            var marker = new google.maps.Marker({
                map: map,
                position: myLatLng
            });
        }
    </script>
    <script>
        $(document).ready(function() {

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                defaultDate: '2016-01-12',
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [
                    {
                        title: 'All Day Event',
                        start: '2016-01-01'
                    },
                    {
                        title: 'Long Event',
                        start: '2016-01-07',
                        end: '2016-01-10'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2016-01-09T16:00:00'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2016-01-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2016-01-11',
                        end: '2016-01-13'
                    },
                    {
                        title: 'Meeting',
                        start: '2016-01-12T10:30:00',
                        end: '2016-01-12T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: '2016-01-12T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: '2016-01-12T14:30:00'
                    },
                    {
                        title: 'Happy Hour',
                        start: '2016-01-12T17:30:00'
                    },
                    {
                        title: 'Dinner',
                        start: '2016-01-12T20:00:00'
                    },
                    {
                        title: 'Birthday Party',
                        start: '2016-01-13T07:00:00'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2016-01-28'
                    }
                ]
            });

        });

    </script>

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
                <li><a href="contact.php" name="contact">Contact</a></li>
                <li class="active"><a href="locatie.php" name="locatie">Locatie</a></li>
            </ul>
        </nav>
    </header>
    <div class="body_container">

        <div id="breadcrumbs">
            <a href="index.php">home</a> > <a class="activeBreadcrumbs" href="locatie.php.php">locatie</a>
        </div>

        <div class="tital_Container">
            <h1>Calender</h1>
            <div id="calendar">
        </div>
        <div class="tital_Container">
            <h1>Locatie</h1>
            <div id="map"> </div>
            <div class="l_text">
                <p style="float: right">Gebruik Google Maps om directions te krijgen</p>
                <p>Biolab Brussels vindt je op </br>Campus Jette </br>Avenue du Learbeek </br>1090 Jette</p>
            </div>
            </div>
        </div>
    </div>
    <div class="footer_container">

    </div>

</div>
</body>
</html>