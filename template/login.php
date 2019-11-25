<?php function draw_login() { 
/**
 * Draws the login section.
 */ ?>

  <button class="open-button" onclick="openForm()">Login</button>
  <div class="login-popup" id="login">
  
    <form action="../actions/action_login.php" class="form-container">
      <h2>Login</h2>
      
      <input type="text" name="username" placeholder="username" required>
      <input type="password" name="password" placeholder="password" required>
      <button type="submit" class="btn">Login</button>
      <button type="submit" class="btn cancel" onclick="closeForm()">Close</button>
      <p>Don't have an account? <a href="#SIGNUP">Signup!</a></p>
    </form>

  </div>
  <script>
    function openForm() {
      document.getElementById("login").style.display = "block";
    }

    function closeForm() {
      document.getElementById("login").style.display = "none";
    }
  </script>

<?php } ?>