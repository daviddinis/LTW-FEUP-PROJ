<?php
include_once '../includes/session.php';
include_once '../database/db_upload.php';
include_once '../database/db_room.php';

$newRoom['id'] = $_GET['id'];
$newRoom['title'] = $_GETz['title'];
$newRoom['price'] = $_GET['price'];
$newRoom['guests'] = $_GET['guests'];
$newRoom['description'] = $_GET['description'];
print_r($newRoom);

updateRoom($newRoom);

header('Location: ../pages/user.php');