<?php

include_once '../includes/session.php';
include_once '../template/tpl_common.php';
include_once '../template/tpl_auth.php';
include_once '../template/tpl_room.php';
include_once '../template/tpl_search.php';
include_once '../actions/action_search.php';

$location = $_POST['location'];
$datein = $_POST['checkin'];
$dateout = $_POST['checkout'];
$guests = $_POST['guests'];
$minPrice = $_POST['minPrice'];
$maxPrice = $_POST['maxPrice'];


$places = getSearchResults($location, $datein, $dateout);

draw_header();
draw_login();
draw_signUp();
draw_searchbar($location, $datein, $dateout, $guests, $minPrice, $maxPrice);
draw_search_results($places, $guests, $datein, $dateout);
draw_footer();