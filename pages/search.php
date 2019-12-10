<?php

include_once '../includes/session.php';
include_once '../template/tpl_common.php';
include_once '../template/tpl_auth.php';
include_once '../template/tpl_search.php';
include_once '../actions/action_search.php';

$location = $_POST['location'];
$datein = $_POST['checkin'];
$dateout = $_POST['checkout'];
$guests = $_POST['guests'];

$places = search_database($location, $datein, $dateout, $guests);
draw_header();
draw_login();
draw_signUp();
draw_searchbar($location, $datein, $dateout, $guests);
draw_search_results($places);
draw_footer();