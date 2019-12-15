<?php

function uploadToPath($path)
{

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_EXTENSION));
    $target_file = $path . $_SESSION['username'] . "." . $imageFileType;

    $pathToDelete = glob($path . $_SESSION['username'] . ".*");
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

        if (count($pathToDelete))
            unlink($pathToDelete[0]);

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { }
    }
}

function uploadRoomImages($path, $id)
{
   // if (isset($_POST["submit"])) {
        echo "<script> console.log(\"set\")</script>";

        $targetDir = $path . $_SESSION['username'] . "/" . $id['id'] . "/" ;
        $allowTypes = array('jpg','png','jpeg','gif');

        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
        if(!empty(array_filter($_FILES['files']['name']))){
            foreach($_FILES['files']['name'] as $key=>$val){
                // File upload path
                $fileName = basename($_FILES['files']['name'][$key]);
                $targetFilePath = $targetDir . $fileName;
                
                // Check whether file type is valid
                $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                if(in_array($fileType, $allowTypes))
                    move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath);
            
            }
        }
  //  }
}
