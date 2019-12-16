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
    <div class="roomDisplay" onclick="window.location.href='../pages/roomPage.php?id=<?= $place['id'] ?>&datein=<?=$datein?>&dateout=<?=$dateout?>&guests=<?=$guests?>'">
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
    <form method="post" action="../pages/search.php" id=searchbar>
    <label>Location</label>
        <input type="text" name="location" placeholder="Where do you want to stay?" value="<?=$location?>" required>
        <label>Check-in</label>
        <input type="date" name="checkin" placeholder="Check-in" value="<?=$datein?>">
        <label>Check-out</label>
        <input type="date" name="checkout" placeholder="Check-out" value="<?=$dateout?>">
        <label>Guests</label>
        <input type="number" name="guests" placeholder="1" value="<?=$guests?>">
        <div class="slidecontainer">
            <label>Min price</label>
            <input type="range" min="1" max="100" value="<?=$minPrice?>" class="slider" id="minPrice">
            <p>Value: <span id="valueMin"></span></p>
            <label>Max price</label>
            <input type="range" min="1" max="100" value="<?=$maxPrice?>" class="slider" id="maxPrice">
            
            <p>Value: <span id="valueMax"></span></p>
        </div>
        <script>
            var sliderMin = document.getElementById("minPrice");
            var sliderMax = document.getElementById("maxPrice");
            var outputMin = document.getElementById("valueMin");
            var outputMax = document.getElementById("valueMax");
            outputMin.innerHTML = sliderMin.value;
            outputMax.innerHTML = sliderMax.value;

            sliderMin.oninput = function() {
            outputMin.innerHTML = this.value;
            }

            sliderMax.oninput = function() {
            outputMax.innerHTML = this.value;
            }
        </script>


        <input id="searchbuttombar" type="submit" value="Search">
    </form>
</div>
<?php
}
?>