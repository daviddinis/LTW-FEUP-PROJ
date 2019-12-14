<?php

include_once '../includes/session.php';
include_once '../template/tpl_common.php';
include_once '../template/tpl_auth.php';
include_once '../template/tpl_search.php';
include_once '../actions/action_search.php';

$searchArray['location'] = $_POST['location'];
$searchArray['checkin'] = $_POST['checkin'];
$searchArray['checkout'] = $_POST['checkout'];
$searchArray['guests'] = $_POST['guests'];

$places = search_database($searchArray);
draw_header();
draw_login();
draw_signUp();
draw_searchbar($searchArray);
draw_search_results($places);
draw_footer();