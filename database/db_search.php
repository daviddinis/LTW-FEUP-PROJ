<?php
include_once '../includes/database.php';
include_once '../template/tpl_room.php';
include_once '../includes/session.php';

function search_database($location, $datein, $dateout, $guests, $min_price, $max_price)
{

    $db = Database::instance()->db();

    $in = strtotime($datein);
    $out = strtotime($dateout);


    $query_location = '%' . $location . '%';

    $stmt = $db->prepare('SELECT id, title, price, location, description, type, owner_username FROM place WHERE
      location LIKE ? AND owner_username != ? AND max_guests >= ? AND price <= ? AND price >= ? EXCEPT 
      SELECT id, title, price, location, description, type, owner_username FROM reservation, place where placeID=id and ? BETWEEN checkIn and checkOut or ? BETWEEN checkIn and checkOut or ? <= checkIn and ? >= checkOut');


    $stmt->execute(array($query_location, $_SESSION['username'], $guests, $max_price, $min_price, $in, $out, $in, $out));

    return $stmt->fetchAll();
}

function available_place($placeId, $datein, $dateout)
{

    $db = Database::instance()->db();

    // cenas($datein);

    $in = $datein;
    $out = $dateout;

    $stmt = $db->prepare('SELECT id, title, price, location, description, type, owner_username FROM place WHERE
      id = ? EXCEPT 
      SELECT id, title, price, location, description, type, owner_username FROM reservation, place where placeID=id and id= ? and ? BETWEEN checkIn and checkOut or ? BETWEEN checkIn and checkOut or ? <= checkIn and ? >= checkOut');

    // $stmt = $db->prepare('SELECT * FROM place');

    $stmt->execute(array($placeId, $placeId, $in, $out, $in, $out));
    
    // $stmt->execute();
    
    $ret = $stmt->fetchAll();

    cenas($ret[0]['id']);
    return $ret;
}

// function convertToDate($unix) {
//   return new DateTime($unix);
// }