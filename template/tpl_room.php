<?php function draw_roomForm()
{
    ?>
<div class="roomForm">
    <h2>Create your room</h2>
    <form method="post" action="../actions/action_create_room.php" id=searchInput>
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
        <!-- <input type="file" name="fileToUpload" id="fileToUpload" multiple><br>  -->
        <input id="searchbuttom" type="submit" value="Search">
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


<?php function draw_roomPage($place, $datein, $dateout, $price, $guests)
{
    ?>
<div class="roomPage">
    <div class="roomInfo">
        <h2><?=$place['title']?><br></h2>
        <h3>Price per night:</h3> <?=$place['price']?><br>
        <!-- <form method="post" action="../actions/action_rent.php" id=rentForm>
            <label>Number of guests</label>
            <input type="number" name="guests" placeholder="Nº of guets" required value="<?=$place['id']?>"><br>
            <label>Check-in</label>
            <input type="date" name="checkin" placeholder="Check-in" required value=<?=$datein?>><br>
            <label>Check-out</label>
            <input type="date" name="checkout" placeholder="Check-out" required value=<?=$dateout?>><br>
            <input id="rentButton" type="submit" value="Rent now!">
        </form> -->

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
    <div class="imageGalery">
        <img src="../1334321.png" alt="Room picture" width="180px" height="180px"><!-- FIX WITH media queries-->
        <img src="../1334321.png" alt="Room picture" width="180px" height="180px">
        <img src="../1334321.png" alt="Room picture" width="180px" height="180px">
        <img src="../1334321.png" alt="Room picture" width="180px" height="180px">
    </div>
</div>
<?php
}?>