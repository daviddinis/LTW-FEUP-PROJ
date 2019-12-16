<?php
// include_once '../includes/database.php';
include_once('../includes/session.php');
include_once('../database/db_search.php');
include_once('../template/tpl_profile.php');


// Verify if user is logged in
if (!isset($_SESSION['username']))
  die(header('Location: ../pages/login.php'));


$location = $_POST['location'];
$datein = $_POST['datein'];
$dateout = $_POST['dateout'];
$guests = $_POST['guests'];


function getSearchResults($location, $datein, $dateout) {
  return search_database($location, $datein, $dateout);
}

// function getPlace($id) {
//   return search_database($id);
// }

// header('Location: ../pages/search.php');
