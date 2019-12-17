<?php
include_once '../includes/session.php';
include_once '../database/db_reservation.php';
include_once '../template/tpl_room.php';

// Verify if user is logged in
if (!isset($_SESSION['username'])) {
    die(header('Location: ../pages/login.php'));
}

$placeID = $_GET['id'];
$checkin = $_GET['datein'];
$checkout = $_GET['dateout'];
$guests = $_GET['guests'];
$total_cost = $_GET['price'];

// cenas($placeID);
// cenas($checkin);
// cenas($checkout);

add_reservation($placeID, $checkin, $checkout, $guests, $total_cost);

header('Location: ../pages/login.php');