<?php
include_once '../includes/database.php';

/**
 * Inserts a new list into the database.
 */
function insertPlace($title, $price, $location, $description, $type, $maxGuests)
{
    $db = Database::instance()->db();
    $stmt = $db->prepare('INSERT INTO place(title, price, location, description, type, owner_username, max_guests) VALUES(?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute(array($title, $price, $location, $description, $type, $_SESSION['username'], $maxGuests));

}

function getPlaceByTitle($title)
{
    $db = Database::instance()->db();
    $ret = $db->prepare('SELECT * FROM place where title = ?');
    $ret->execute(array($title));
    return $ret->fetchAll();
}

function getPlace($id)
{
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * FROM place WHERE id = ?');
    $stmt->execute(array($id));
    return $stmt->fetchAll();
}

function getOwnerPlaces($owner_id)
{
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * FROM place WHERE owner_username = ?');
    $stmt->execute(array($owner_id));
    return $stmt->fetchAll();
}

function getOwnerBookings($owner_id)
{
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * FROM reservation WHERE buyer_username = ?');
    $stmt->execute(array($owner_id));
    return $stmt->fetchAll();
}

function getRoomBookings($RoomID)
{
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * FROM reservation WHERE placeID = ?');
    $stmt->execute(array($RoomID));
    return $stmt->fetchAll();
}


function updateRoom($room)
{
    $db = Database::instance()->db();
    $stmt = $db->prepare(' UPDATE place SET title = ?, max_guests = ?, price = ?, description = ?  WHERE id = ?');
    $stmt->execute(array($room['title'], $room['guests'], $room['price'], $room['description'], $room['id']));

}

function removeRoom($roomID)
{
    $db = Database::instance()->db();
    $stmt = $db->prepare(' DELETE from place WHERE id = ?');
    $stmt->execute(array($roomID));
}
