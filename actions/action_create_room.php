<?php
  include_once('../includes/session.php');
  include_once('../database/db_upload.php');
  include_once('../database/db_room.php');

  // Verify if user is logged in
  if (!isset($_SESSION['username']))
    die(header('Location: ../pages/login.php'));

  $title = $_POST['title'];
  $location = $_POST['location'];
  $price = $_POST['price'];
  $type = $_POST['type'];
  $description = $_POST['description'];
  $maxGuests = $_POST['maxGuests'];

  //Verify if user owns the list
  //if (!checkIsListOwner($_SESSION['username'], $list_id))
  //   die(header('Location: ../pages/list.php'));

  insertPlace($title, $price, $location,  $description, $type, $maxGuests);

  $id = getPlaceByTitle($title);

  uploadRoomImages("../imageDatabase/roomPics/", $id[0]);

  header('Location: ../pages/user.php');
?>