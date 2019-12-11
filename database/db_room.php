<?php
  include_once('../includes/database.php');




  /**
   * Inserts a new list into the database.
   */
  function insertPlace($title, $price, $location, $description, $type, $file) {
    $db = Database::instance()->db();
    $stmt = $db->prepare('INSERT INTO place(title, price, location, description, type, photoURLlist, owner_username) VALUES(?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute(array($title, $price, $location, $description, $type, $file, $_SESSION['username']));
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