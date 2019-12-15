<?php function draw_profile($username, $name, $places) //get_user(id) do url
{?>
<div class="profile">
    <div id="imageWrapper">
        <img src=<?php echo getUserPhoto($_SESSION['username'])?> alt="Profile picture"">
    </div>
    <i class="material-icons" onclick="location.href ='../pages/editProfile.php'">&#xe8b8;</i>
    <div class="userInfo">
        <h2>Name</h2>
        <label><?=$name?></label>
        <h2>Username</h2>
        <label><?=$username?></label>
        <!-- <h2>Contacts</h2>
        <label>Email: </label>antonio89@email.com<br>
        <label>Phone: </label>999-999-999<br> -->

        <h2>My Places</h2>
        <?php draw_places($places)?><br>
    </div>
</div>
<?php
}?>


<?php function draw_place($place) //get_reservation($res) 
{?>
<div class="reservation">
    <img src="../1334321.png" alt="Room photo" width="80" height="80">
    <div class="reservationInfo">
        <label>Title </label><?=$place['title']?><br>
        <label>Location </label><?=$place['location']?><br>
        <label>Price </label><?=$place['price']?><br>
    </div>
</div>
<?php
}?>


<?php function draw_places($places) //get_reservation($res) 
{?>
<div class="reservations">
    <!-- <img src="../1334321.png" alt="Room photo" width="80" height="80"> -->
    <div class="reservationInfo">
        <?php
         foreach($places as $place)
                draw_place($place); 
        ?>
    </div>
</div>
<?php
}?>




<?php function draw_editUser($user) 
{?>
<div class="profile">
    <img src=<?php echo getUserPhoto($_SESSION['username'])?> alt="Profile picture" width="180px" height="180px">
    <form method="post" action="../actions/action_editProfile.php" id="editForm" enctype="multipart/form-data">
        <h2>Change profile photo</h2>
        <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*">
        <div class="userInfo">
            <h2>Name</h2>
            <input type="text" name="name" value=<?php echo $user['name']?> required>
            <h2>Username</h2>
            <label></label><?php echo $user['username']?> </label><br>
            <input id="editbutton" type="submit" value="Save" href="user.php"> <!-- CHANGE DB-->
    </form>
</div>
<?php
}?>