<?php function draw_header()
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
        <div class="topnav">
            <header>
                <h1><a href="../index.php"></i> Botino</a></h1>
            </header>
            <p> Slogan muito bonitão</p>
            <hr>
        </div>
        <?php
}?>

        <?php function draw_maintext()
{
    ?>
        <div class="descrip">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae lacus tristique tortor semper
                porta. Phasellus vitae nulla vitae ex varius maximus. Mauris at pretium nulla. Vestibulum volutpat, ex
                et pretium aliquet, dui ex sodales dui, faucibus lobortis mauris neque eget lectus. Ut elementum ante
                massa. Nam ultrices fermentum lacus id pharetra. Nulla a purus at nibh viverra tempor. Mauris id
                sollicitudin tortor. Nullam aliquam ligula eu velit lacinia, vitae ullamcorper quam accumsan. </p>
            </form>
        </div>



        <?php
}?>



        <?php function draw_search()
{
    ?>
        <div class="searchbox">
            <h2>Search</h2>
            <form method="post" action="#SEARCHPHP" id=searchInput>
                <label>Location</label>
                <input type="text" name="location" placeholder="Where do you want to stay?" required>
                <label>Check-in</label>
                <input type="date" name="checkin" placeholder="Check-in" required>
                <label>Check-out</label>
                <input type="date" name="checkout" placeholder="Check-out" required>
                <label>Number of Guests</label>
                <input type="number" name="guests" placeholder="1" required>

                <input id="searchbuttom" type="submit" value="Search">
            </form>
        </div>
        <?php
}?>



        <?php function draw_footer()
{
    ?>

        <!-- DRAW FOOTER -->
    </div>
    <section id="footer">
        <a href="#BecomeAHost">Rent your space</a>
        |
        <a href="#about">About</a>
        |
        <a href="#contact">Contact</a>
    </section>
</body>

</html>

<?php
}?>