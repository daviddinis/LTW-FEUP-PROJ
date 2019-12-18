<?php
include_once '../includes/session.php';
include_once '../database/db_upload.php';
include_once '../database/db_room.php';
include_once('../actions/validation.php');


if ($_SESSION['csrf'] !== $_GET['csrf']) {
    $_SESSION['messages'][] = array('type' => 'error', 'content' => 'Invalid CSRF!');
    die(header('Location: ../pages/user.php'));
}

$newRoom['id'] = test_input($_GET['id']);
$newRoom['title'] = test_input($_GET['title']);
$newRoom['price'] = test_input($_GET['price']);
$newRoom['guests'] = test_input($_GET['guests']);
$newRoom['description'] = test_input($_GET['description']);

updateRoom($newRoom);

header('Location: ../pages/user.php');