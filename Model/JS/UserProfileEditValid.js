function validate(pForm) {
	let isValid = "";

	if (pForm.fname.value === "") {
		document.getElementById("ferr").innerHTML = "*Please fill up the firstname.";
		isValid = "Not Valid";
	}
	else
		document.getElementById("ferr").innerHTML = "*";
	if (pForm.lnam.value === "") {
		document.getElementById("lerr").innerHTML = "*Please fill up the lastname";
		isValid = "Not Valid";
	}
	else
		document.getElementById("lerr").innerHTML = "*";

	if (pForm.gender.value === "") {
		document.getElementById("gerr").innerHTML = "*Please fill up the gender";
		isValid = "Not Valid";
	}
	else
		document.getElementById("gerr").innerHTML = "*";

if (pForm.mobile_no.value === "") {
		document.getElementById("merr").innerHTML = "*Please fill up the mobile no";
		isValid = "Not Valid";
	}
	else
		document.getElementById("merr").innerHTML = "*";

	if (pForm.address.value === "") {
		document.getElementById("aerr").innerHTML = "*Please fill up the address";
		isValid = "Not Valid";
	}
	else
		document.getElementById("aerr").innerHTML = "*";

    if (pForm.age.value === "") {
		document.getElementById("ages").innerHTML = "*Please fill up the age";
		isValid = "Not Valid";
	}
	else
		document.getElementById("ages").innerHTML = "*";
    

	if (isValid === "") {
		return true;
	}
	else {
		return false;
	}
}