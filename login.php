<?php
include('checklogin.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
    header("Location: http://localhost/BiolabProject/dashboard.php");
    //header("Location: http://dtsl.ehb.be/~berhem.isik/BiolabProject/dashboard.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
    <link rel="apple-touch-icon" href="img/favicon.png" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-2.2.2.js"></script>
</head>
<body>
<div id="breadcrumbs">
    <a href="index.php">home</a> > <a class="activeBreadcrumbs" href="login.php">Login</a>
</div>
<div class="login-page">
    <div class="form">
        <div class="logo_wrapper">
            <a class="logo" href="index.php"><img src="img/Logo.png" /></a>
        </div>
        <span><?php echo $error; ?></span>
        <form class="login-form" method="post" action="">
            <input type="text" placeholder="Email" id="email" name="email" />
            <input type="password" placeholder="wachtwoord" id="password" name="password"/>
            <input type="submit" name="submit" value="LOGIN">
        </form>
    </div>
</div>
</body>
</html>