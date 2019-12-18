<?php

include_once '../includes/session.php';
include_once '../template/tpl_common.php';
include_once '../template/tpl_auth.php';
include_once '../template/tpl_room.php';
include_once '../template/tpl_search.php';
include_once('../database/db_search.php');

$location = $_GET['location'];
$datein = $_GET['checkin'];
$dateout = $_GET['checkout'];
$guests = $_GET['guests'];
$minPrice = $_GET['minPrice'];
$maxPrice = $_GET['maxPrice'];

$places = getSearchResults($location, $datein, $dateout, $guests, $minPrice, $maxPrice);

draw_header();
draw_login();
draw_signUp();
draw_searchbar($location, $datein, $dateout, $guests, $minPrice, $maxPrice);
draw_search_results($places, $guests, $datein, $dateout);
draw_footer();