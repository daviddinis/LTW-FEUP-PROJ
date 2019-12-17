<?php function draw_roomForm()
{
    ?>
<div class="roomForm">
    <h2>Create your room</h2>
    <form method="post" action="../actions/action_create_room.php" id=searchInput enctype="multipart/form-data">
        <label>Title</label>
        <input type="text" name="title" placeholder="Simple title for your place" required>
        <label>Location</label>
        <input type="text" name="location" placeholder="Country,City,Street,HouseNº,PostalCode" required>
        <label>Price per night</label>
        <input type="number" name="price" step="0.1" placeholder="€€€" required>
        <label>Number of guests</label>
        <input type="number" name="maxGuests" placeholder="Nº of guets" required>
        <label>Type of room</label>
        <label>

            <input type="radio" name="type" value="House" checked> House
        </label>
        <label></label>
        <label>
            <input type="radio" name="type" value="Apartment"> Apartment
        </label>
        <label></label>
        <label>
            <input type="radio" name="type" value="other"> Other
        </label>
        <label>Description</label>
        <label></label>
        <textarea name="description" rows="4" cols="30">
        </textarea>
        <input type="file" name="files[]" multiple>
        <label></label>
        <input id="submit" type="submit" value="Publish">
    </form>
</div>
<?php
}?>


<?php function cenas($id)
{
    ?>
<h2><?=$id?><br></h2>

<?php
}?>

<?php function draw_editRoom($place)
{
    ?>
<div class="roomForm">
    <form action="../actions/action_editRoom.php" method="get">
        <label>Id: </label><?=$place['id']?><input type="hidden" name="id" value=<?=$place['id']?> /><br>
        <label>Title: </label><input type="text" name="title" value="<?=$place['title']?>"><br>
        <label>Price: </label><input type="number" name="price" value="<?=$place['price']?>"><br>
        <label>Guests: </label><input type="number" name="guests" value="<?=$place['max_guests']?>"><br>
        <label>Location: </label><?=$place['location']?><br>
        <label>Type: </label><?=$place['type']?><br>
        <textarea name="description" rows="4" cols="30" value="<?=$place['description']?>">
            </textarea><br>

        <?php draw_roomImages($place)?><br>
        <input id="submit" type="submit" value="Update">
    </form>
    <form action="../actions/action_removeRoom.php" method="post">
        <input type="hidden" name="id" value="<?=$place['id']?>">
        <button type="submit" class="buttonDelete"> <i class=" material-icons" type="submit">delete</i></button>
    </form>
</div>
<?php
}?>



<?php function draw_roomOwner($place)
{
    ?>
<div class="roomOwner">
    <div class="roomInfo">
        <h2><?=$place['title']?><br></h2>

        <label>Id: </label><?=$place['id']?><br>
        <label>Title: </label><?=$place['title']?><br>
        <label>Price: </label><?=$place['price']?><br>
        <label>Location: </label><?=$place['location']?><br>
        <label>Type: </label><?=$place['type']?><br>
        <label>Description: </label><?=$place['description']?><br>
        <?php draw_roomImages($place)?><br>
    </div>
    <i class="material-icons" onclick="window.location.href ='../pages/editRoom.php?id=<?=$place['id']?>'">&#xe8b8;</i>
</div>

<?php
}?> <?php function draw_roomPage($place, $datein, $dateout, $price, $guests)
{
    ?>
<div class="roomForm">
    <h2><?=$place['title']?><br></h2>

    <form action="../actions/action_rent.php" method="get">
        <label>Id: </label><?=$place['id']?><br>
        <label>Title: </label><?=$place['title']?><br>
        <label>Price: </label><?=$place['price']?><br>
        <label>Location: </label><?=$place['location']?><br>
        <label>Type: </label><?=$place['type']?><br>
        <label>Description: </label><?=$place['description']?><br>
        <label>Owner: </label><?=$place['owner_username']?><br>
        <label>datein: </label><input required="true" onchange="checkValidInfo(<?=$place['id']?>)" type="date"
            name="datein" value=<?=$datein?> /><br>
        <label>dateout: </label><input required="true" onchange="checkValidInfo(<?=$place['id']?>)" type="date"
            name="dateout" value=<?=$dateout?> /><br>
        <label>guests: </label><input type="number" min="1" max="<?=$place['max_guests']?>" name="guests"
            value=<?=$guests?> /><br>
        <input type="hidden" name="id" value=<?=$place['id']?> />
        <input type="hidden" name="price" value=<?=$place['price']?> />
        <?php draw_roomImages($place)?><br>
        <input type="submit" onclick="checkValidInfo()" id="submit" disabled="true" value="Send data">
    </form>
</div>
<?php
}?>

<?php

function draw_roomImages($place)
{

    $dir = "../imageDatabase/roomPics/" . $place['owner_username'] . "/" . $place['id'] . "/";

    $files = scandir($dir);

    for ($index = 2; $index < count($files); $index++) {
        echo "<img src=\"" . $dir . $files[$index] . "\" alt=\"Room Picture\" width=\"180px height=\"180px\">";
    }
}

?>