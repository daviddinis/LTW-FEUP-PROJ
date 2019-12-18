<?php

include_once '../includes/session.php';
include_once '../template/tpl_common.php';
include_once '../template/tpl_room.php';
include_once '../database/db_room.php';
include_once '../template/tpl_profile.php';

$id = $_GET['id'];
$bookings = getRoomBookings($id);
$place = getPlace($_GET['id']);
draw_header();
?>
<div class="roomForm">
<h2><?=$place[0]['title'] ?></h2>
<?php
draw_bookings($bookings); ?>
</div>
<?php
draw_footer(); ?>