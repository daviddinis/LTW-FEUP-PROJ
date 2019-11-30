<?php

include_once ('../includes/session.php');
include_once ('../template/tpl_common.php');
include_once ('../template/tpl_auth.php');

draw_header();
draw_login();
draw_signUp();
draw_search();
draw_maintext();
draw_footer();

?>