<?php function draw_signedUp() { 
/**
 * Draws the login section.
 */ ?>
  <section id="login">
    
    <header><h2>Login</h2></header>

    <form method="post" action="../actions/action_login.php">
      <input type="text" name="username" placeholder="username" required>
      <input type="password" name="password" placeholder="password" required>
      <input type="submit" value="Login">
      <p>Already have an account? <a href="login.php">Login!</a></p>
    </form>

  </section>
<?php } ?>