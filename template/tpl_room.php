<?php function draw_roomForm()
{
    ?>
    <div class="roomForm">
        <h2>Create your room</h2>
        <form method="post" action="../actions/action_create_room.php" id=searchInput enctype="multipart/form-data">
            <label>Title</label>
            <input type="text" name="title" placeholder="Simple title for your place" required><br>
            <label>Location</label>
            <input type="text" name="location" placeholder="Country,City,Street,HouseNº,PostalCode" required> <br>
            <label>Price per night</label>
            <input type="number" name="price" step="0.1" placeholder="€€€" required><br>
            <label>Number of guests</label>
            <input type="number" name="guests" placeholder="Nº of guets" required><br>
            <label>Type of room</label>
            <input type="radio" name="type" value="House" checked> House
            <input type="radio" name="type" value="Apartment"> Apartment
            <input type="radio" name="type" value="other"> Other<br>
            <label>Description</label>
            <textarea name="description" rows="4" cols="30">
        </textarea><br>
            <input type="file" name="files[]" multiple><br>
            <input id="submit" type="submit" value="Publish">
        </form>
    </div>
<?php
} ?>


<?php function cenas($id)
{
    ?>
    <h2><?= $id ?><br></h2>

<?php
} ?>


<?php function draw_roomPage($place, $datein, $dateout, $price, $guests)
{
    ?>
<div class="roomPage">
    <div class="roomInfo">
        <h2><?=$place['title']?><br></h2>

        <form action="../actions/action_rent.php" method="get">
        <label>Id: </label><?=$place['id']?><br>
        <label>Title: </label><?=$place['title']?><br>
        <label>Price: </label><?=$place['price']?><br>
        <label>Location: </label><?=$place['location']?><br>
        <label>Type: </label><?=$place['type']?><br>
        <label>Owner: </label><?=$place['owner_username']?><br>
        <label>datein: </label><?=$datein?><br>
        <label>dateout: </label><?=$dateout?><br>
        <label>guests: </label><?=$guests?><br>
        <input type="hidden" name="id" value= <?=$place['id']?> />
        <input type="hidden" name="datein" value= <?=$datein?> />
        <input type="hidden" name="dateout" value= <?=$dateout?> />
        <input type="hidden" name="guests" value= <?=$guests?> />
        <input type="hidden" name="price" value= <?=$place['price']?> />
        <input type="submit" value="Send data">

    </div>
<?php
} ?>

<?php

function draw_roomImages($place)
{

    $dir = "../imageDatabase/roomPics/" . $place['owner_username'] . "/" . $place['id'] . "/";

    $files = scandir($dir);
    // cenas($files[2]);

    for($index = 2; $index < count($files); $index++){
        echo "<img src=\"" . $dir . $files[$index] . "\" alt=\"Room Picture\" width=\"180px height=\"180px\">";
    }
}

?>