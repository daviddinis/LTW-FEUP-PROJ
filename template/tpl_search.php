<?php
function draw_search_results($places, $guests, $datein, $dateout)
{
    ?>
<div class="searchResults">
    <?php foreach ($places as $place) {
        draw_placeItem($place, $guests, $datein, $dateout);
    }?>
</div>
<?php }

function draw_placeItem($place, $guests, $datein, $dateout)
{
    ?>
<div class="roomDisplay"
    onclick="window.location.href='../pages/roomPage.php?id=<?= $place['id'] ?>&datein=<?=$datein?>&dateout=<?=$dateout?>&guests=<?=$guests?>'">
    <h3><?= $place['title'] ?></h3>
    <label>Price: </label><?= $place['price'] ?><br>
    <label>Location: </label><?= $place['location'] ?><br>
    <label>Type: </label><?= $place['type'] ?><br>

    <?php $dir = "../imageDatabase/roomPics/" . $place['owner_username'] . "/" . $place['id'] . "/";

            $files = scandir($dir);
            
                echo "<img src=\"" . $dir . $files[2] . "\" alt=\"Room Picture\" width=\"90px\" height=\"90px\">";
            
            ?>
</div>

<?php
}

function draw_searchbar($location, $datein, $dateout, $guests, $minPrice, $maxPrice)
{
    ?>
<div class="searchbar">
    <form method="get" action="../pages/search.php" id=searchbar>
        <label>Location</label>
        <input type="text" name="location" placeholder="Where do you want to stay?" value="<?=$location?>" required>
        <label>Check-in</label>
        <input type="date" name="checkin" placeholder="Check-in" value="<?=$datein?>">
        <label>Check-out</label>
        <input type="date" name="checkout" onchange="checkDates()" placeholder="Check-out" value="<?=$dateout?>">
        <label>Guests</label>
        <input type="number" name="guests" placeholder="1" min="1" value="<?=$guests?>">
        <div class="slidecontainer">
            <label>Min price</label>
<<<<<<< HEAD
            <input type="range" min="1" max="101" value="<?=$minPrice?>" name="minPrice" class="slider" id="minPrice" onchange="updateSlider()">
            <p>Value: <span id="valueMin"><?=$minPrice?></span></p>
            <label>Max price</label>
            <input  type="range" min="1" max="101" value="<?=$maxPrice?>" name="maxPrice" class="slider" id="maxPrice" onchange="updateSlider()">
            
=======
            <input type="range" min="1" max="100" value="<?=$minPrice?>" name="minPrice" class="slider" id="minPrice"
                oninput="updateSlider('minPrice','valueMin')">
            <p>Value: <span id="valueMin"><?=$minPrice?></span></p>
            <label>Max price</label>
            <input type="range" min="1" max="100" value="<?=$maxPrice?>" name="maxPrice" class="slider" id="maxPrice"
                oninput="updateSlider('maxPrice','valueMax')">
>>>>>>> de64f6a9a03ea60d3ef52f7915b62f23432b6353
            <p>Value: <span id="valueMax"><?=$maxPrice?></span></p>
        </div>
        <input id="searchbuttombar" type="submit" value="Search">
    </form>
</div>
<?php
}
?>