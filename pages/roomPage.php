<?php

include_once ('../includes/session.php');
include_once ('../template/tpl_common.php');
include_once ('../template/tpl_room.php');
include_once ('../actions/action_search.php');
include_once ('../database/db_room.php');

$id = $_GET['id'];
$datein = $_GET['datein'];
$dateout = $_GET['dateout'];
$guests = $_GET['guests'];

$placeArray = getPlace($id);


draw_header();
draw_roomPage($placeArray[0], $datein, $dateout, $placeArray[2], $guests);
draw_footer();

?>