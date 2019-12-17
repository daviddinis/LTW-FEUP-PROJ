function updateSlider(sliderID, value) {
    let slider = document.getElementById(sliderID);
    let output = document.getElementById(value);
    output.innerHTML = slider.value;
}
