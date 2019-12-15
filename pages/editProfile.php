<?php

include_once ('../includes/session.php');
include_once ('../template/tpl_common.php');
include_once ('../template/tpl_profile.php');

draw_header();
draw_editUser( getUser($_SESSION['username']));
draw_footer();

?>