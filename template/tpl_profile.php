<?php function draw_profile($username, $name, $reservations) //get_user(id) do url
{?>
<div class="profile">
    <img src="../generic-profile-pic.png" alt="Profile picture" width="180px" height="180px">
    <i class="material-icons">&#xe8b8;</i>
    <div class="userInfo">
        <h2>Name</h2>
        <label><?=$name?></label>
        <h2>Username</h2>
        <label><?=$username?></label>
        <!-- <h2>Contacts</h2>
        <label>Email: </label>antonio89@email.com<br>
        <label>Phone: </label>999-999-999<br> -->

        <h2>Reservation List</h2>
        <?php draw_reservations($reservations)?><br>
    </div>
</div>
<?php
}?>


<?php function draw_reservation($reservation) //get_reservation($res) 
{?>
<div class="reservation">
    <img src="../1334321.png" alt="Room photo" width="80" height="80">
    <div class="reservationInfo">
        <label>Title </label><?=$reservation['title']?><br>
        <label>Date</label> 23 Dez - 24 Dez<br>
        <label>Number of guests</label> 3<br>
    </div>
</div>
<?php
}?>


<?php function draw_reservations($reservations) //get_reservation($res) 
{?>
<div class="reservations">
    <!-- <img src="../1334321.png" alt="Room photo" width="80" height="80"> -->
    <div class="reservationInfo">
        <!-- <label>Quarto Bonito</label><br>
        <label>Date</label> 23 Dez - 24 Dez<br>
        <label>Number of guests</label> 3<br> -->
        <?php
         foreach($reservations as $reservation)
                draw_reservation($reservation); 
        ?>
    </div>
</div>
<?php
}?>