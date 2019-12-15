<?php
  include_once('../includes/database.php');




  /**
   * Inserts a new list into the database.
   */
  function insertPlace($title, $price, $location, $description, $type) {
    $db = Database::instance()->db();
    $stmt = $db->prepare('INSERT INTO place(title, price, location, description, type, owner_username) VALUES(?, ?, ?, ?, ?, ?)');
    $stmt->execute(array($title, $price, $location, $description, $type, $_SESSION['username']));

  }


  function getPlaceByTitle($title){
  $db = Database::instance()->db();
  $ret = $db->prepare('SELECT * FROM place where title = ?');
  $ret->execute(array($title));
  return $ret->fetchAll();
  }

  function getPlace($id) {
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * FROM place WHERE id = ?');
    $stmt->execute(array($id));
    return $stmt->fetchAll();
  }

  /**
   * Verifies if a user owns a list.
   */
//   function checkIsListOwner($username, $list_id) {
//     $db = Database::instance()->db();
//     $stmt = $db->prepare('SELECT * FROM list WHERE username = ? AND list_id = ?');
//     $stmt->execute(array($username, $list_id));
//     return $stmt->fetch()?true:false; // return true if a line exists
//   }


  /**
   * Returns a certain item from the database.
   */
  function getOwnerPlaces($owner_id) {
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * FROM place WHERE owner_username = ?');
    $stmt->execute(array($owner_id));
    return $stmt->fetchAll();
  }


  function getOwnerBookings($owner_id) {
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * FROM reservation WHERE buyer_username = ?');
    $stmt->execute(array($owner_id));
    return $stmt->fetchAll();
  }

  /**
   * Deletes a certain item from the database.
   */
//   function deleteItem($item_id) {
//     $db = Database::instance()->db();
//     $stmt = $db->prepare('DELETE FROM item WHERE item_id = ?');
//     $stmt->execute(array($item_id));
//   }

  /**
   * Toggles the done state of a certain item.
   */
//   function toggleItem($item_id) {
//     $db = Database::instance()->db();
//     $stmt = $db->prepare('UPDATE item SET item_done = 1 - item_done WHERE item_id = ?');
//     $stmt->execute(array($item_id));
//   }
?>