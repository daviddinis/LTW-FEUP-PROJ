<?php
include_once '../includes/database.php';

function search_database($searchArray)
{

    $db = Database::instance()->db();

    $stmt = $db->prepare('SELECT title, price, location, type, owner FROM place, reservation WHERE
     NOT EXISTS (SELECT resNO FROM place, reservation WHERE checkIn < :checkout, checkOut > :checkin)'
    );
    $stmt->execute($searchArray);

    $places = $stmt->fetchAll();
//print_r($places);
    return $places;
}