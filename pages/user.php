<?php

include_once '../includes/session.php';
include_once '../template/tpl_common.php';
include_once '../template/tpl_auth.php';
include_once '../template/tpl_profile.php';
include_once '../database/db_room.php';

$username = $_SESSION['username'];
$name = getUser($username)['name'];
$places = getOwnerPlaces($username);

draw_header();
draw_login();
draw_signUp();
draw_profile($username, $name, $places);
draw_footer();

?>