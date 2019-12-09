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

<?php function draw_roomPage()
{
    ?>
<div class="roomPage">
    <div class="roomInfo">
        <h2>Quarto muito botino</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae lacus tristique tortor semper
            porta. Phasellus vitae nulla vitae ex varius maximus. Mauris at pretium nulla. Vestibulum volutpat,
            ex
            et pretium aliquet, dui ex sodales dui, faucibus lobortis mauris neque eget lectus. Ut elementum
            ante
            massa. Nam ultrices fermentum lacus id pharetra. Nulla a purus at nibh viverra tempor. Mauris id
            sollicitudin tortor. Nullam aliquam ligula eu velit lacinia, vitae ullamcorper quam accumsan.</p>
        <label>Price per night:</label> 16€
        <form method="post" action="#CREATEROOM" id=rentForm>
            <label>Number of guests</label>
            <input type="number" name="guests" placeholder="Nº of guets" required><br>
            <label>Check-in</label>
            <input type="date" name="checkin" placeholder="Check-in" required><br>
            <label>Check-out</label>
            <input type="date" name="checkout" placeholder="Check-out" required><br>
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