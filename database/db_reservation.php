<?php
  include_once('../includes/database.php');

  function add_reservation($placeID, $checkin, $checkout, $guests, $total_cost) {

    $datein = strtotime($checkin);
    $dateout = strtotime($checkout);

    $db = Database::instance()->db();
    $stmt = $db->prepare('INSERT INTO reservation(checkIn, checkOut, guests, cost, placeID, buyer_username) VALUES(?, ?, ?, ?, ?, ?)');
    $stmt->execute(array($datein, $dateout, $guests, $total_cost, $placeID, $_SESSION['username']));
  }

?>