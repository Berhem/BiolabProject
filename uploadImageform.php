<?php
    include('session.php');
    include ('uploadImage.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Files using normal form and PHP</title>
</head>
<body>

<form enctype="multipart/form-data" method="post" action="">
    <div class="row">
        <label for="fileToUpload">Select a File to Upload</label><br />
        <input type="file" name="fileToUpload" id="fileToUpload" />
    </div>
    <div class="row">
        <input type="submit" value="Upload" name="uploadImage" />
    </div>
</form>
</body>
</html>