<?php 

include_once '../includes/session.php';
include_once '../database/db_upload.php';
include_once '../database/db_room.php';

if ($_SESSION['csrf'] !== $_POST['csrf']) {
    $_SESSION['messages'][] = array('type' => 'error', 'content' => 'Invalid CSRF!');
    die(header('Location: ../pages/user.php'));
}

$roomID = $_POST['id'];


removeRoom($roomID);

header('Location: ../pages/user.php');



?>