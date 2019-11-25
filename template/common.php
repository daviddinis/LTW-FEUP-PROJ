<?php function draw_header()
{
  ?>
  <!-- DRAW HEADER -->
  <!DOCTYPE html>
  <html>

  <head>
    <title>Botino</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
      <div class="topnav">
        <header>
          <h1><a href=#HOMEPAGE></i> Botino</a></h1>
        </header>
        <p> Slogan muito bonitão</p>
      </div>
  <?php } ?>

  <?php function draw_search()
  {
    ?>
    <div class="searchbox">
      <h2>Search</h2>
      <form method="post" action="#SEARCHPHP"> <br>
        <label>Location</label>      
        <input type="text" name="location" placeholder="Where do you want to stay?" required><br>
        <label>Check-in</label> 
        <input type="date" name="checkin" placeholder="Check-in" required><br>
        <label>Check-out</label> 
        <input type="date" name="checkout" placeholder="Check-out" required><br>
        <label>Number of Guests</label> 
        <input type="number" name="guests" placeholder="1" required><br>

        <input type="submit" value="Search">
      </form>
    </div>



  <?php } ?>



  <?php function draw_footer()
  {
    ?>

    <!-- DRAW FOOTER -->

    <section id="footer">
      <a href="#BecomeAHost">Rent your space</a>
      |
      <a href="#about">About</a>
      |
      <a href="#contact">Contact</a>
    </section>
  </body>

  </html>

<?php } ?>