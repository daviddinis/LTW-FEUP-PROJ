function openForm() {
    document.getElementById("auth").style.display = "block";
    document.getElementById("overlay").style.display = "block";
}

function closeForm() {
    document.getElementById("auth").style.display = "none";
    document.getElementById("overlay").style.display = "none";
}
var box = document.querySelector(".form-container");

// Detect all clicks on the document
document.addEventListener("click", function (event) {
    // If user clicks inside the element, do nothing
    if (event.target.closest(".form-container")) return;
    if (event.target.closest(".open-button")) return;
    // If user clicks outside the element, hide it!
    closeForm();
});