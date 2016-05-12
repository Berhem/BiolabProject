<?php
$errorImage ='';
// include ImageManipulator class
require_once('ImageManipulator.php');


if (isset($_POST['uploadImage'])) {

    if ($_FILES['fileToUpload']['error'] > 0) {
        echo "Error: " . $_FILES['fileToUpload']['error'] . "<br />";
    } else {
        // array of valid extensions
        $validExtensions = array('.jpg', '.jpeg', '.gif', '.png');
        // get extension of the uploaded file
        $fileExtension = strrchr($_FILES['fileToUpload']['name'], ".");
        // check if file Extension is on the list of allowed ones
        if (in_array($fileExtension, $validExtensions)) {
            $newNamePrefix = time() . '_';
            $manipulator = new ImageManipulator($_FILES['fileToUpload']['tmp_name']);
            $width  = $manipulator->getWidth();
            $height = $manipulator->getHeight();
            $centreX = round($width / 2);
            $centreY = round($height / 2);
            // our dimensions will be 500X500
            $x1 = $centreX - 250; // 500 / 2
            $y1 = $centreY - 250; // 500 / 2

            $x2 = $centreX + 250; // 500 / 2
            $y2 = $centreY + 250; // 500 / 2

            // center cropping to 200x130
            $newImage = $manipulator->crop($x1, $y1, $x2, $y2);
            // saving file to uploads folder
            $manipulator->save('uploads/' . $newNamePrefix . $_FILES['fileToUpload']['name']);
            echo 'Done ...';
            $newName = $newNamePrefix . $_FILES['fileToUpload']['name'];
                if(GebruikerDb::updateAfbeelding($newName, $login_session_ID)) {


                    header("Location: http://localhost/BiolabProject/profielBeheren.php");
                    //header("Location: http://dtsl.ehb.be/~berhem.isik/BiolabProject/dashboard.php");
                }
                else{
                    echo 'something';
                }
        } else {
            echo 'You must upload an image...';
        }
    }
}else{
    $errorImage = 'Selected Images is empty';
}