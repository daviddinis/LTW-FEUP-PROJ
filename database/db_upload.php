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

function uploadRoomImages($path)
{
    if (isset($_POST["submit"])) {

        foreach ($_FILES['files']['name'] as $key => $val) {
            print(2);

            $uploadOk = 1;
            $fileName = basename($_FILES['files']['name'][$key]);
            $target_file = $path . $_SESSION['username'] . "/" . $fileName;
            
            $imageFileType = strtolower(pathinfo(basename($_FILES["files"]["name"]), PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["files"]["name"][$key]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["files"]["size"] > 500000) {
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
                if (move_uploaded_file($_FILES["files"]["name"][$key], $target_file)) { }
            }
        }
    }
}
