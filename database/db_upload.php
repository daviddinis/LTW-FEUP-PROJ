<?php 

function uploadToPath($path){

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_EXTENSION));
    $target_file = $path . $_SESSION['username'] .".". $imageFileType;

    $pathToDelete = glob($path . $_SESSION['username'] . ".*" );
    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
    }
    
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        $uploadOk = 0;
    }
    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 1) {

        if(count($pathToDelete))
        unlink($pathToDelete[0]);
        
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        } 
    }
}
