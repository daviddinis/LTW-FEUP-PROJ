<?php
include_once '../includes/database.php';

function search_database($location, $datein, $dateout, $guests)
{

    $db = Database::instance()->db();

    $stmt = $db->prepare('SELECT title, price, location, type, owner FROM place WHERE location = ?');
    $stmt->execute(array($location));

    $places = $stmt->fetchAll();
//print_r($places);
    return $places;
}