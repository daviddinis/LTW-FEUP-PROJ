function updateSlider(sliderID, value) {
    let slider = document.getElementById(sliderID);
    let output = document.getElementById(value);
    output.innerHTML = slider.value;
}

function checkDates() {

    let dateIn = new Date(document.getElementsByName("checkin")[0].value);
    let dateOut = new Date(document.getElementsByName("checkout")[0].value);
    
    if (dateIn > dateOut) {
        alert("You checkout must be after your checkin!");
        document.getElementsByName("checkout")[0].value = document.getElementsByName("checkin")[0].value;

    }
}
