function updateSlider() {
	let minSlider = document.getElementById("minPrice");
	let maxSlider = document.getElementById("maxPrice");
	let minOutput = document.getElementById("valueMin");
	let maxOutput = document.getElementById("valueMax");
	// if (minSlider.value > maxSlider.value) {
	// 	minSlider.value = maxSlider.value - 1;
	// }
	// console.log(minSlider.value);
	// console.log(maxSlider.value);
	maxOutput.innerHTML = maxSlider.value;
	minOutput.innerHTML = minSlider.value;
}

function checkDates() {
	let dateIn = new Date(document.getElementsByName("checkin")[0].value);
	let dateOut = new Date(document.getElementsByName("checkout")[0].value);

	if (dateIn > dateOut) {
		alert("You checkout must be after your checkin!");
		document.getElementsByName(
			"checkout"
		)[0].value = document.getElementsByName("checkin")[0].value;
	}
}

function checkValidInfo(placeId) {
	let dateIn = new Date(document.getElementsByName("datein")[0].value);
	let dateOut = new Date(document.getElementsByName("dateout")[0].value);

	if (
		Object.prototype.toString.call(dateOut) === "[object Date]" &&
		Object.prototype.toString.call(dateIn) === "[object Date]"
	) {
		// it is a date
		if (!isNaN(dateOut.getTime()) && !isNaN(dateIn.getTime())) {
			var today = Date.now();
			var newDateIn = dateIn.getTime() / 1000;
			var newDateOut = dateOut.getTime() / 1000;

			console.log(today);
			console.log(newDateIn);

			if (dateIn < today || dateOut < today) {
				alert("Chosen dates must be after the current date!");
				document.getElementById("submit").disabled = true;
			}
			if (dateIn < dateOut) {

				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (this.responseText.includes("1")) {
						document.getElementById("submit").disabled = false;
						console.log("Validated Submit!");
					} else if (this.responseText.includes("0")) {
						alert("Chosen dates are not available for this place");
						console.log("Submit Disabled");
					}
				};

				xmlhttp.open(
					"GET",
					"../actions/action_check_valid_dates.php?placeId=" +
						placeId +
						"&datein=" +
						newDateIn +
						"&dateout=" +
						newDateOut,
					true
				);
				xmlhttp.send();
			} else {
				alert("Check out date must be after check in date!");
				document.getElementsByName(
					"datein"
				)[0].value = document.getElementsByName("dateout")[0].value;
				document.getElementById("submit").disabled = true;
			}
		}
	}
}

function EnableSend() {
	document.getElementById("submit").disabled = false;
}
