<?php function draw_login() { 
/**
 * Draws the login section.
 */ ?>
<script>
function openForm() {
    document.getElementById("login").style.display = "block";
    document.getElementById("overlay").style.display = "block";
}

function closeForm() {
    document.getElementById("login").style.display = "none";
    document.getElementById("overlay").style.display = "none";
}
var box = document.querySelector(".form-container");

// Detect all clicks on the document
document.addEventListener("click", function(event) {
    // If user clicks inside the element, do nothing
    if (event.target.closest(".form-container")) return;
    if (event.target.closest(".open-button")) return;
    // If user clicks outside the element, hide it!
    closeForm();
});
</script>

<button class="open-button" onclick="openForm()">Login</button>

<div class="login-popup" id="login">

    <form action="../actions/action_login.php" class="form-container">
        <h2>Login</h2>

        <input type="text" name="username" placeholder="username" required>
        <input type="password" name="password" placeholder="password" required>
        <button type="submit" class="btn">Login</button>
        <p>Don't have an account? <a href="#SIGNUP">Signup!</a></p>
    </form>

</div>
<div class="overlay" id="overlay">
</div>



<?php } ?>