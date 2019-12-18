<?php
// include_once '../includes/database.php';
include_once('../includes/session.php');
include_once('../database/db_search.php');
include_once('../template/tpl_profile.php');
include_once('../actions/validation.php');


// Verify if user is logged in
if (!isset($_SESSION['username']))
  die(header('Location: ../pages/login.php'));

$location = test_input($_GET['location']);
$datein = $_GET['datein'];
$dateout = $_GET['dateout'];
$guests = $_GET['guests'];

