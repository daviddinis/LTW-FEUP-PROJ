<?php function draw_profile($username, $places, $bookings)
{?>
<div class="profile">
    <img src=<?php echo getUserPhoto($_SESSION['username']) ?> alt="Profile picture" width="180px">
    <i class=" material-icons" onclick="location.href ='../pages/editProfile.php'">&#xe8b8;</i>
        <div class="userInfo">
            <h2>Name</h2>
            <label><?=getUser($username)['name']?></label>
            <h2>Username</h2>
            <label><?=$username?></label><br>
            <h2 class="inline" onclick="switchToBookingsView()">My Bookings </h2>&nbsp;&nbsp;<h2 class="inline"
                onclick="switchToPlacesView()">My Places</h2>
            <?php draw_places($places)?>
            <?php draw_bookings($bookings)?>

        </div>
    </div>
    <?php }?>


    <?php function draw_place($place)
{?>
    <div class="reservation" >
    <?php $dir = "../imageDatabase/roomPics/" . $place['owner_username'] . "/" . $place['id'] . "/";
        
        $files = scandir($dir);
        echo "<img src=\"" . $dir . $files[2] . "\" alt=\"Room Picture\" width=\"115ppx\" height=\"115ppx\">";
    ?>
        <div class="reservationInfo">
            <label>Title </label><?=$place['title']?><br>
            <label>Location </label><?=$place['location']?><br>
            <label>Price </label><?=$place['price']?><br>
        </div>
        <a class="material-icons" onclick="window.location.href='../pages/userRoom.php?id=<?=$place['id']?>'">&#xe8b8;</a>
    </div>
    <?php
}?>


    <?php function draw_places($places)
{?>
    <div class="profileList" id="placesList">

        <div class="reservationsInfo">
            <?php if (count($places) == 0) {?>
            <label onclick="window.location.href='../pages/createRoom.php'">You own no rooms. Start renting now!</label>
            <?php }
    foreach ($places as $place) {
        draw_place($place);
    }

    ?>
        </div>
    </div>
    <?php }?>

    <?php function draw_booking($booking)
{
    $place = getPlace($booking['placeID']);
    ?>
    <!-- ADD SECURITY -->
    <div class="reservation" onclick="window.location.href='../pages/roomPage.php?id=<?=urlencode($place[0]['id'])?>'">
    <?php $dir = "../imageDatabase/roomPics/" . $place[0]['owner_username'] . "/" . $place[0]['id'] . "/";
        $files = scandir($dir);
        echo "<img src=\"" . $dir . $files[2] . "\" alt=\"Room Picture\" width=\"115px\" height=\"115px\">";
    ?>
        <div class="reservationInfo">
            <label>Title </label><?= $place[0]['title'] ?><br>
            <label>Location </label><?= $place[0]['location'] ?><br>
            <label>Price </label><?= $booking['cost'] ?><br>
            <label>Date in </label><?= gmdate("M d, Y", $booking['checkIn']) ?><br>
            <label>Date out </label><?= gmdate("M d, Y", $booking['checkOut']) ?><br>
        </div>
    </div>
    <?php }?>


    <?php function draw_bookings($bookings)
{?>
    <div class="profileList" id="bookingsList">
        <div class="reservationsInfo">
            <?php if (count($bookings) == 0) {
                    if(strcmp($_SERVER['PHP_SELF'],"pages/placeReservations.php") == 0 ){?>
            <label onclick="window.location.href='../pages/login.php'">You have reservations. Plan your trip now!</label>
                    <?php } else{ ?>
            <label >Oops! This room has no reservations.</label><?php }
            }
    foreach ($bookings as $booking) {
        draw_booking($booking);
    }

    ?>
        </div>
    </div>
    <?php }?>




    <?php function draw_editUser($userA)
{?>
    <div class="profile">
        <img src=<?php echo getUserPhoto($_SESSION['username']) ?> alt="Profile picture" width="180px" height="180px">
        <form method="post" action="../actions/action_editProfile.php" id="editForm" enctype="multipart/form-data">
            <h2>Change profile photo</h2>
            <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*">
            <div class="userInfo">
                <h2>Name</h2>
                <input type="text" name="name" value=<?php echo $userA['name'] ?> required>
                <h2>Username</h2>
                <label></label><?php echo $userA['username'] ?> </label><br>
                <input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>">
                <input id="editbutton" type="submit" value="Save" href="user.php">
        </form>
    </div>
    <?php }?>