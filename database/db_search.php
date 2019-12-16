<?php
  include_once('../includes/database.php');
  include_once('../template/tpl_room.php');


function search_database($location, $datein, $dateout) {

    $db = Database::instance()->db();

    $in = strtotime($datein);
    $out = strtotime($dateout);

    // cenas($datein);   
    // cenas($dateout);

    // $stmt = $db->prepare('SELECT * FROM reservation, place WHERE location = ? and placeID=id EXCEPT SELECT * FROM reservation, place where (checkIn >= ? and checkOut <= ?) or (checkIn <= ? and checkOut >= ?)');
 
 
    $stmt = $db->prepare('SELECT * FROM reservation, place WHERE location = ? and placeID=id EXCEPT SELECT * FROM reservation, place where ? BETWEEN checkIn and checkOut or ? BETWEEN checkIn and checkOut or ? <= checkIn and ? >= checkOut');
    

    $stmt->execute(array($location, $in, $out, $in, $out));
    return $stmt->fetchAll();
}

?>