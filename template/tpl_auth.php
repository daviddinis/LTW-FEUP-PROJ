<?php function draw_login()
{
    /**
     * Draws the login section.
     */?>

<div class="auth-popup" id="login">

    <form method="post" action="../actions/action_login.php" class="form-container">
        <h2>Login</h2>

        <input type="text" name="username" placeholder="username" required>
        <input type="password" name="password" placeholder="password" required>
        <button type="submit" class="btn">Login</button>
        <p>Don't have an account? <a onclick="closeForm(); openSignUpForm();"">Signup!</a></p>
    </form>

</div>
<div class=" overlay" id="overlay">
</div>
<?php
}?>


<?php function draw_signUp()
{
/**
 * Draws the login section.
 */?>

<div class="auth-popup" id="signup">

    <form method="post" action="../actions/action_signup.php" class="form-container">
        <h2>Register</h2>
        <input type="text" name="name" placeholder="name" required>
        <input type="text" name="username" placeholder="username" onkeyup="testeUsername(this.value);" required>
        <span style="" id="userCheck"></span>
        <input type="password" name="password" placeholder="password" required>
        <button type="submit" class="btn">Register</button>
        <p>Already have an account? <a onclick="closeForm(); openLoginForm();">Login!</a></p>
    </form>
</div>


<?php }
?>