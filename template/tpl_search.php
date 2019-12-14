<?php
function draw_search_results($places)
{
    ?>
<div class="search_results">
    <?php foreach ($places as &$place) {
        draw_placeItem($place);
    }?>
</div>
<?php }

function draw_placeItem($place)
{
    ?>
<div class="place">
    <div class="plaInfo">
        <label>Title: </label><?=$place['title']?><br>
        <label>Price: </label><?=$place['price']?><br>
        <label>Location: </label><?=$place['location']?><br>
        <label>Type: </label><?=$place['type']?><br>
        <label>Owner: </label><?=$place['owner']?><br>
    </div>
</div>


<?php
}

function draw_searchbar($searchArray)
{
    ?>
<div class="searchbar">
    <h2>Search</h2>
    <form method="post" action="../pages/search.php" id=searchbar>
        <label>Location</label>
        <input type="text" name="location" placeholder="Where do you want to stay?"
            value="<?=$searchArray['location']?>" required>
        <label>Check-in</label>
        <input type="date" name="checkin" placeholder="Check-in" value="<?=$searchArray['checkin']?>">
        <label>Check-out</label>
        <input type="date" name="checkout" placeholder="Check-out" value="<?=$searchArray['checkout']?>">
        <label>Guests</label>
        <input type="number" name="guests" placeholder="1" value="<?=$searchArray['guests']?>">

        <input id="searchbuttombar" type="submit" value="Search" href="search.php">
    </form>
</div>
<?php
}
?>