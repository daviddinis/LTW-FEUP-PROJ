<?php
include_once '../database/db_search.php';
include_once '../template/tpl_room.php';


$placeId = $_REQUEST["placeId"];
$datein = $_REQUEST["datein"];
$dateout = $_REQUEST["dateout"];

// cenas($placeId);
// cenas($datein);
// cenas($dateout);


if (sizeof(available_place($placeId, $datein, $dateout)) > 0) {
    echo "1";
} else {
    echo "0";
}
