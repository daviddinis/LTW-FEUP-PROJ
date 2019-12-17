<?php

include_once '../includes/session.php';
include_once '../template/tpl_common.php';
include_once '../template/tpl_room.php';
include_once '../actions/action_search.php';
include_once '../database/db_room.php';

$id = $_GET['id'];
$placeArray = getPlace($id);

draw_header();
draw_editRoom($placeArray[0]);
draw_footer();