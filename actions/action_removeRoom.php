<?php 

include_once '../includes/session.php';
include_once '../database/db_upload.php';
include_once '../database/db_room.php';

$roomID = $_POST['id'];


removeRoom($roomID);

header('Location: ../pages/user.php');



?>