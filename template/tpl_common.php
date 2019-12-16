<?php    include_once('../database/db_user.php');

function draw_header()
{
    ?>
<!-- DRAW HEADER -->
<!DOCTYPE html>
<html>
<script src="../js/form.js"></script>

<head>
    <title>Botino</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <div class="wrapper">
        <div class="topnav-wrapper">
            <div class="topnav">
                <header>
                    <h1><a href="../index.php"></i> Botino</a></h1>
                </header>
                <p> Slogan muito bonitão</p>
                <hr>
                <?php if(!isset($_SESSION['username'])){ ?>
                <button class="open-button" onclick="openLoginForm()">Login</button>
                <!--TODO: Display Profiel if loged in-->
                <?php } else {?>
                <div class="profilePreview" onclick="location.href ='../pages/user.php'" onmouseover="openDropDown()"
                    onmouseout="closeDropDown()">
                    <h3><?php echo $_SESSION['username']?></h3>
                    <img src=<?php echo getUserPhoto($_SESSION['username'])?> alt="Profile picture" />
                    <div class="dropDown">
                        <a href='../actions/action_logout.php'>Logout</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php
}?>

        <?php function draw_mainPage()
{
    ?>
        <div class="mainPage">
            <div class="searchbox">
                <h2>Search</h2>
                <form method="post" action="../pages/search.php" id=searchInput>
                    <label>Location</label>
                    <input type="text" name="location" placeholder="Where do you want to stay?" required>
                    <label>Check-in</label>
                    <input type="date" name="checkin" placeholder="Check-in">
                    <label>Check-out</label>
                    <input type="date" name="checkout" placeholder="Check-out">
                    <label>Number of Guests</label>
                    <input type="number" name="guests" value="1" placeholder="1">

                    <input id="searchbuttom" type="submit" value="Search">
                </form>
            </div>
            <div class="descrip">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae lacus tristique tortor semper
                    porta. Phasellus vitae nulla vitae ex varius maximus. Mauris at pretium nulla. Vestibulum volutpat,
                    ex
                    et pretium aliquet, dui ex sodales dui, faucibus lobortis mauris neque eget lectus. Ut elementum
                    ante
                    massa. Nam ultrices fermentum lacus id pharetra. Nulla a purus at nibh viverra tempor. Mauris id
                    sollicitudin tortor. Nullam aliquam ligula eu velit lacinia, vitae ullamcorper quam accumsan. </p>
            </div>
        </div>
        <?php
}?>



        <?php function draw_footer()
{
    ?>
    </div>
    <!--Close Wrapper-->
    <!-- DRAW FOOTER -->
    <div class="footer">
        <hr>
        <div class="footerinfo">
            <a href="#BecomeAHost">Rent your space</a>
            |
            <a href="#about">About</a>
            |
            <a href="../pages/createRoom.php">Create a Room</a>
            |
            <a href="../pages/roomPage.php">Check a room</a>
        </div>
    </div>
</body>

</html>

<?php
}?>