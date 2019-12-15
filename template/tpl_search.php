<?php
function draw_search_results($places)
{
    ?>
<div class="search_results">
    <?php foreach ($places as $place) {
        draw_placeItem($place);
    }?>
</div>
<?php }

function draw_placeItem($place)
{
    ?>
<div class="reservation">
    <div class="plaInfo">
    <form action="../pages/roomPage.php" method="get">
        <label>Id: </label><?=$place['id']?><br>
        <label>Title: </label><?=$place['title']?><br>
        <label>Price: </label><?=$place['price']?><br>
        <label>Location: </label><?=$place['location']?><br>
        <label>Type: </label><?=$place['type']?><br>
        <label>Owner: </label><?=$place['owner']?><br>
        <!-- <input type="text" name="username" placeholder="username" required> -->

        <button name="id" type="submit" value= <?=$place['id']?> >Submit</button>
</form>


        <!-- <button type="submit" class="btn">Check out this room</button> -->
    </form>

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