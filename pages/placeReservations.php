<?php

include_once '../includes/session.php';
include_once '../template/tpl_common.php';
include_once '../template/tpl_room.php';
include_once '../database/db_room.php';
include_once '../template/tpl_profile.php';

$id = $_GET['id'];
$bookings = getOwnerBookings($id);
print_r($bookings);
draw_header();
draw_bookings($bookings);
draw_footer();