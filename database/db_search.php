<?php

include_once '../includes/database.php';

function seach_place($placename, $begin, $end, $guests)
{
    $db = Database::instance()->db();

    $stmt = $db->prepare('SELECT * FROM place WHERE title = %?%');
    $stmt->execute(array($placename));

    $places = $stmt->fetch();

}