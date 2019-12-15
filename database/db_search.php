<?php
  include_once('../includes/database.php');


function search_database($location) {

    $db = Database::instance()->db();

    $stmt = $db->prepare('SELECT * FROM place WHERE location = ?');
    $stmt->execute(array($location));
    return $stmt->fetchAll();
}

?>