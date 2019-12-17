function updateSlider() {
    // let minSlider = document.getElementById("minPrice");
    // let maxSlider = document.getElementById("maxPrice");

    // let minOutput = document.getElementById("valueMin");
    // let maxOutput = document.getElementById("valueMax");

    // if(minSlider.value > maxSlider.value ){
    //     minSlider.value = maxSlider.value -1;
    // }
    // console.log(minSlider.value)
    // console.log(maxSlider.value)
    // maxOutput.innerHTML = maxSlider.value;
    // minOutput.innerHTML = minSlider.value;
}

function checkDates() {

    let dateIn = new Date(document.getElementsByName("checkin")[0].value);
    let dateOut = new Date(document.getElementsByName("checkout")[0].value);
    
    if (dateIn > dateOut) {
        alert("You checkout must be after your checkin!");
        document.getElementsByName("checkout")[0].value = document.getElementsByName("checkin")[0].value;

    }
}
