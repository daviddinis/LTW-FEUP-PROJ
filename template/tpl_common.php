<?php include_once('../database/db_user.php');

function draw_header()
{ ?>
    <!-- DRAW HEADER -->
    <!DOCTYPE html>
    <html>
    <script src="../js/form.js"></script>
    <script src="../js/slider.js"></script>

    <head>
        <title>Botino</title>
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
                    <p>We just misspelled "Bonito"</p>
                    <hr>
                    <?php if (!isset($_SESSION['username'])) { ?>
                        <button class="open-button" onclick="openLoginForm()">Login</button>
                    <?php } else { ?>
                        <div class="profilePreview" onclick="window.location.href ='../pages/user.php'" onmouseover="openDropDown()" onmouseout="closeDropDown()">
                            <h3><?php echo $_SESSION['username'] ?></h3>
                            <img src=<?php echo getUserPhoto($_SESSION['username']) ?> alt="Profile picture" />
                            <div class="dropDown">
                                <div class="dropDown-content">
                                    <a href="../pages/createRoom.php">New Room</a><br>
                                    <a href='../actions/action_logout.php'>Logout</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php
                                } ?>

        <?php function draw_mainPage()
                                {
        ?>
            <div class="mainPage">
                <div class="searchbox">
                    <h2>Search</h2>
                    <form method="get" action="../pages/search.php" id=searchInput>
                        <label>Location</label>
                        <input type="text" name="location" placeholder="Where do you want to stay?" required>
                        <label>Check-in</label>
                        <input type="date" name="checkin">
                        <label>Check-out</label>
                        <input type="date" name="checkout" onchange="checkDates()">
                        <label>Number of Guests</label>
                        <input type="number" name="guests" value="1" placeholder="1">
                        <label>Min price <span id="valueMin">1</span></label>
                        <input type="range" min="1" max="100" value="1" class="slider" name="minPrice" id="minPrice" oninput="updateSlider()">
                        <label>Max price <span id="valueMax">100</span></label>
                        <input type="range" min="1" max="100" value="100" class="slider" name="maxPrice" id="maxPrice" oninput="updateSlider()">
                        <input id="searchbuttom" type="submit" value="Search">
                    </form>
                </div>
                <div class="descrip">
                    <h3>Who are we?</h3>
                    <p>We, at Botino, focus on giving you the confort you want and DESERVE when going out of town. No more hours of looking around for a place to sleep. With Botino you can spend more time planning you trip and less time searching for a bed.</p>
                </div>
            </div>
        <?php
                                } ?>



        <?php function draw_footer()
                                {
        ?>
        </div>
        <!--Close Wrapper-->
        <!-- DRAW FOOTER -->
        <div class="footer">
            <hr>

        </div>
    </body>

    </html>

<?php
                                } ?>