<?php

include_once '../includes/session.php';
include_once '../template/tpl_common.php';
include_once '../template/tpl_auth.php';
include_once '../template/tpl_profile.php';

$username = $_SESSION['username'];
$name = $_SESSION['name'];

draw_header();
draw_login();
draw_signUp();
draw_profile($username, $name);
draw_footer();

?>