function validate(pForm) {
	let isValid = "";

	if (pForm.username.value === "") {
		document.getElementById("uerr").innerHTML = "*Please fill up the username.";
		isValid = "Not Valid";
	}
	else
		document.getElementById("uerr").innerHTML = "*";
	if (pForm.password.value === "") {
		document.getElementById("perr").innerHTML = "*Please fill up the password";
		isValid = "Not Valid";
	}
	else
		document.getElementById("perr").innerHTML = "*";
	if (isValid === "") {
		return true;
	}
	else {
		return false;
	}
}