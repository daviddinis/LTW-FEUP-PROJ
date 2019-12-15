<?php
function draw_search_results($places)
{
    ?>
<div class="searchResults">
    <?php foreach ($places as $place) {
        draw_placeItem($place);
    }?>
</div>
<?php }

function draw_placeItem($place)
{
    ?>
<div class="roomDisplay">
    <div class="plaInfo" onclick="window.location.href='../pages/roomPage.php?id=<?=$place['id']?>'">
        <label>Title: </label><?=$place['title']?><br>
        <label>Price: </label><?=$place['price']?><br>
        <label>Location: </label><?=$place['location']?><br>
        <label>Type: </label><?=$place['type']?><br>
    </div>
</div>

<?php
}

function draw_searchbar($location, $datein, $dateout, $guests)
{
    ?>
<div class="searchbar">
    <h2>Search</h2>
    <form method="post" action="../pages/search.php" id=searchbar>
        <label>Location</label>
        <input type="text" name="location" placeholder="Where do you want to stay?" value="<?=$location?>" required>
        <label>Check-in</label>
        <input type="date" name="checkin" placeholder="Check-in" value="<?=$datein?>">
        <label>Check-out</label>
        <input type="date" name="checkout" placeholder="Check-out" value="<?=$dateout?>">
        <label>Guests</label>
        <input type="number" name="guests" placeholder="1" value="<?=$guests?>">

        <input id="searchbuttombar" type="submit" value="Search" href="search.php">
    </form>
</div>
<?php
}
?>