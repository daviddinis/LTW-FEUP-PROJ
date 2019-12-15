<?php
function draw_search_results($places, $guests, $datein, $dateout)
{
    ?>
<div class="search_results">
    <?php foreach ($places as $place) {
        draw_placeItem($place, $guests, $datein, $dateout);
    }?>
</div>
<?php }

function draw_placeItem($place, $guests, $datein, $dateout)
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
        <!-- <button name="id" type="submit" value= <?=$place['id']?> >Submit</button> -->
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
        <input type="text" name="location" placeholder="Where do you want to stay?" value="<?=$location?>" required>
        <label>Check-in</label>
        <input type="date" name="checkin" placeholder="Check-in" value="<?=$datein?>">
        <label>Check-out</label>
        <input type="date" name="checkout" placeholder="Check-out" value="<?=$dateout?>">
        <label>Guests</label>
        <input type="number" name="guests" placeholder="1" value="<?=$guests?>">
        <label>Location</label>

        <input id="searchbuttombar" type="submit" value="Search">
    </form>
</div>
<?php
}
?>