<?php function draw_roomForm()
{
    ?>
<div class="roomForm">
    <h2>Create your room</h2>
    <form method="post" action="#CREATEROOM" id=roomForm>
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
        <label>Description</label><br>
        <textarea name="message" rows="4" cols="30"></textarea><br>
        <input type="file" name="fileToUpload" id="fileToUpload" multiple><br> 
        <input id="searchbuttom" type="submit" value="Search">
    </form>
</div>
<?php
}?>