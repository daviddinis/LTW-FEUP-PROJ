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
        <input id="searchbuttom" type="submit" value="Publish">
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


<?php function draw_roomPage($place)
{
    ?>
<div class="roomPage">
    <div class="roomInfo">
        <h2><?=$place['title']?><br></h2>
        <h3>Price per night:</h3> <?=$place['price']?><br>
        <form method="post" action="../pages/search.php" id=rentForm>
            <label>Number of guests</label>
            <!-- <input type="number" name="guests" placeholder="Nº of guets" required><br> -->
            <label>Check-in</label>
            <!-- <input type="date" name="checkin" placeholder="Check-in" required><br> -->
            <label>Check-out</label>
            <!-- <input type="date" name="checkout" placeholder="Check-out" required><br> -->
            <input id="rentButton" type="submit" value="Rent now!">
        </form>
    </div>
    <div class="imageGalery">
        <img src="../1334321.png" alt="Room picture" width="180px" height="180px"><!-- FIX WITH media queries-->
        <img src="../1334321.png" alt="Room picture" width="180px" height="180px">
        <img src="../1334321.png" alt="Room picture" width="180px" height="180px">
        <img src="../1334321.png" alt="Room picture" width="180px" height="180px">
    </div>
</div>
<?php
}?>