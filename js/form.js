function openLoginForm() {
	let form = document.getElementsByClassName("auth-popup");
	form[0].style.display = "block";
	document.getElementById("overlay").style.display = "block";
}

function openSignUpForm() {
	let form = document.getElementsByClassName("auth-popup");
	form[1].style.display = "block";
	document.getElementById("overlay").style.display = "block";
}

function closeForm() {
    let form = document.getElementsByClassName("auth-popup");
    if (form[0] != null) {
        form[0].style.display = "none";
        form[1].style.display = "none";
        document.getElementById("overlay").style.display = "none";
    }
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

function openDropDown() {
	let dropDown = document.getElementsByClassName("dropDown");
	dropDown[0].style.display = "block";
	let profile = document.getElementsByClassName("profilePreview");
	profile[0].style.height = "8em";
}

function closeDropDown() {
	let form = document.getElementsByClassName("dropDown");
	form[0].style.display = "none";
	let profile = document.getElementsByClassName("profilePreview");
	profile[0].style.height = "auto";
}

function testeUsername(usrName) {
    if (usrName.length < 3) {
        document.getElementById("userCheck").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("userCheck").innerHTML = this.responseText;
            }
            let authButtons = document.getElementById("btn-signup");
            if (this.responseText != "valid username") {
                authButtons.type = 'button';
                console.log("button disabled");
            } else {
                authButtons.type = 'submit';
                console.log("button enabled");
            }
        };
        xmlhttp.open("GET", "../actions/action_check_user.php?user=" + usrName, true);
        xmlhttp.send();
    }
}