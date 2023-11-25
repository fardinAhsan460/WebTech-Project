function validate(pForm) {
	let isValid = "";

	if (pForm.hub.value === "") {
		document.getElementById("hubb").innerHTML = "*Please Choose a hub.";
		isValid = "Not Valid";
	}
	else
		document.getElementById("hubb").innerHTML = "*";


	if (pForm.pickupdate.value === "") {
		document.getElementById("pickdate").innerHTML = "*Please Choose a date.";
		isValid = "Not Valid";
	}
	else
		document.getElementById("pickdate").innerHTML = "*";

	if (pForm.pickuptime.value === "") {
		document.getElementById("picktime").innerHTML = "*Please Choose a time.";
		isValid = "Not Valid";
	}
	else
		document.getElementById("picktime").innerHTML = "*";


if (pForm.dropoffdate.value === "") {
		document.getElementById("dropdate").innerHTML = "*Please Choose a date.";
		isValid = "Not Valid";
	}
	else
		document.getElementById("dropdate").innerHTML = "*";

if (pForm.dropofftime.value === "") {
		document.getElementById("droptime").innerHTML = "*Please Choose a time.";
		isValid = "Not Valid";
	}
	else
		document.getElementById("droptime").innerHTML = "*";


if (pForm.bike.value === "") {
		document.getElementById("bikes").innerHTML = "*Please Choose a bike.";
		isValid = "Not Valid";
	}
	else
		document.getElementById("bikes").innerHTML = "*";

	if (isValid === "") {
		return true;
	}
	else {
		return false;
	}
}