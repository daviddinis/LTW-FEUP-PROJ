<?php function draw_profile($username, $places, $bookings){ ?>
<div class="profile">
    <div id="imageWrapper">
        <img src=<?php echo getUserPhoto($_SESSION['username']) ?> alt="Profile picture"">
    </div>
    <i class=" material-icons" onclick="location.href ='../pages/editProfile.php'">&#xe8b8;</i>
        <div class="userInfo">
            <h2>Name</h2>
            <label><?= getUser($username)['name'] ?></label>
            <h2>Username</h2>
            <label><?= $username ?></label><br>
            <!-- <h2>Contacts</h2>
        <label>Email: </label>antonio89@email.com<br>
        <label>Phone: </label>999-999-999<br> -->
            <h2 class="inline" onclick="switchToBookingsView()">My Bookings </h2>&nbsp;&nbsp;<h2 class="inline"
                onclick="switchToPlacesView()">My Places</h2>
            <?php draw_places($places) ?>
            <?php draw_bookings($bookings) ?>

        </div>
    </div>
    <?php } ?>


    <?php function draw_place($place){ ?>
    <div class="reservation" onclick="window.location.href='../pages/roomPage.php?id=<?= $place['id'] ?>'">
        <img src="../1334321.png" alt="Room photo" width="80" height="80">
        <div class="reservationInfo">
            <label>Title </label><?= $place['title'] ?><br>
            <label>Location </label><?= $place['location'] ?><br>
            <label>Price </label><?= $place['price'] ?><br>
        </div>
    </div>
    <?php
} ?>


    <?php function draw_places($places){ ?>
    <div class="profileList" id="placesList">

        <div class="reservationsInfo">
            <?php if (count($places) == 0) { ?>
            <label onclick="window.location.href='../pages/createRoom.php'">You own no rooms. Start renting now!</label>
            <?php } foreach ($places as $place)
            draw_place($place);
                ?>
        </div>
    </div>
    <?php } ?>

    <?php function draw_booking($booking)   {
    $place = getPlace($booking['placeID']);
    ?>
    <div class="reservation" onclick="window.location.href='../pages/roomPage.php?id=<?= $place[0]['id'] ?>'">
        <img src="../1334321.png" alt="Room photo" width="80" height="80">
        <div class="reservationInfo">
            <label>Title </label><?= $place[0]['title'] ?><br>
            <label>Location </label><?= $place[0]['location'] ?><br>
            <label>Price </label><?= $booking['cost'] ?><br>
            <label>Date in </label><?= $booking['checkIn'] ?><br>
            <label>Date out </label><?= $booking['checkOut'] ?><br>
        </div>
    </div>
    <?php } ?>


    <?php function draw_bookings($bookings){ ?>
    <div class="profileList" id="bookingsList">
        <div class="reservationsInfo">
            <?php if (count($bookings) == 0) { ?>
            <label onclick="window.location.href='../pages/login.php'">You have reservations. Plan your trip
                now!</label>
            <?php } foreach ($bookings as $booking)
                    draw_booking($booking);
                ?>
        </div>
    </div>
    <?php } ?>




    <?php function draw_editUser($user) { ?>
    <div class="profile">
        <img src=<?php echo getUserPhoto($_SESSION['username']) ?> alt="Profile picture" width="180px" height="180px">
        <form method="post" action="../actions/action_editProfile.php" id="editForm" enctype="multipart/form-data">
            <h2>Change profile photo</h2>
            <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*">
            <div class="userInfo">
                <h2>Name</h2>
                <input type="text" name="name" value=<?php echo $user['name'] ?> required>
                <h2>Username</h2>
                <label></label><?php echo $user['username'] ?> </label><br>
                <input id="editbutton" type="submit" value="Save" href="user.php">
        </form>
    </div>
    <?php } ?>