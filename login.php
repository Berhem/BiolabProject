<?php
include('http://localhost/BiolabProject/checklogin.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
    header("location: http://localhost/BiolabProject/dashboard.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
    <tr>
        <form method="post" action="">
            <td>
                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                    <tr>
                        <td colspan="3"><strong>Gebruiker Login </strong></td>
                    </tr>
                    <tr>
                        <td width="78">Email</td>
                        <td width="6">:</td>
                        <td width="294"><input name="email" type="text" id="email" placeholder="Email"></td>
                    </tr>
                    <tr>
                        <td>Wachtwoord</td>
                        <td>:</td>
                        <td><input name="password" type="text" id="password" placeholder="**********"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="Submit" value="Login"></td>
                    </tr>
                    <span><?php echo $error; ?></span>
                </table>
            </td>
        </form>
    </tr>
</table>
</body>
</html>