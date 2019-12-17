<?php
  include_once('../includes/session.php');
  include_once('../database/db_upload.php');
  include_once('../database/db_room.php');
  include_once('../actions/validation.php');

  // Verify if user is logged in
  if (!isset($_SESSION['username']))
    die(header('Location: ../pages/login.php'));

  $title = test_input($_POST['title']);
  $location =  test_input($_POST['location']);
  $price =  test_input($_POST['price']);
  $type =  test_input($_POST['type']);
  $description =  test_input($_POST['description']);
  $maxGuests =  test_input($_POST['maxGuests']);

  //Verify if user owns the list
  //if (!checkIsListOwner($_SESSION['username'], $list_id))
  //   die(header('Location: ../pages/list.php'));

  insertPlace($title, $price, $location,  $description, $type, $maxGuests);

  $id = getPlaceByTitle($title);

  uploadRoomImages("../imageDatabase/roomPics/", $id[0]);

  header('Location: ../pages/user.php');
?>