<?php function draw_roomForm()
{
    ?>
<div class="roomForm">
    <h2>Create your room</h2>
    <form method="post" action="../actions/action_create_room.php" id=searchInput>
        <label>Title</label>
        <input type="text" name="title" placeholder="Simple title for your place" required>
        <label>Location</label>
        <input type="text" name="location" placeholder="Country,City,Street,HouseNº,PostalCode" required>
        <label>Price per night</label>
        <input type="number" name="price" placeholder="€€€" required>
        <label>Type of room</label>
        <input type="radio" name="type" value="House" checked> House
        <input type="radio" name="type" value="Apartment"> Apartment
        <input type="radio" name="type" value="other"> Other<br>
        <label>Description</label>
        <textarea name="description" rows="4" cols="30"> 
        </textarea><br>
        <input type="file" name="fileToUpload" id="fileToUpload" multiple><br> 
        <input id="searchbuttom" type="submit" value="Search">
    </form>
</div>
<?php
}?>