function validate(pForm) {
	let isValid = "";

	if (pForm.fname.value === "") {
		document.getElementById("frst").innerHTML = "*Please fill up the First name.";
		isValid = "Not Valid";
	}
	else
		document.getElementById("frst").innerHTML = "*";


	if (pForm.lname.value === "") {
		document.getElementById("lst").innerHTML = "*Please fill up the Last name.";
		isValid = "Not Valid";
	}
	else
		document.getElementById("lst").innerHTML = "*";

	if (document.getElementById("male").checked ==false && document.getElementById("female").checked ==false ) {
		document.getElementById("gndr").innerHTML = "*Please select your Gender.";
		isValid = "Not Valid";
	}
	else
		document.getElementById("gndr").innerHTML = "*";


	if (pForm.email.value === "") {
		document.getElementById("eml").innerHTML = "*Please fill up the email.";
		isValid = "Not Valid";
	}
	else
		document.getElementById("eml").innerHTML = "*";


if (pForm.mno.value === "") {
		document.getElementById("mbl").innerHTML = "*Please fill up the Mobile Number.";
		isValid = "Not Valid";
	}
	else
		document.getElementById("mbl").innerHTML = "*";

if (pForm.address.value === "") {
		document.getElementById("add").innerHTML = "*Please fill up the Address.";
		isValid = "Not Valid";
	}
	else
		document.getElementById("add").innerHTML = "*";


if (pForm.age.value === "") {
		document.getElementById("ages").innerHTML = "*Please write down your Age.";
		isValid = "Not Valid";
	}
	else
		document.getElementById("ages").innerHTML = "*";

if (pForm.nid.value === "") {
		document.getElementById("nids").innerHTML = "*Please upload your NID scanned copy.";
		isValid = "Not Valid";
	}
	else
		document.getElementById("nids").innerHTML = "*";

if (pForm.driving.value === "") {
		document.getElementById("drive").innerHTML = "*Please upload your Driving Licence scanned copy.";
		isValid = "Not Valid";
	}
	else
		document.getElementById("drive").innerHTML = "*";

if (pForm.cpassword.value === "") {
		document.getElementById("cpass").innerHTML = "*Please fill up the Confirm Password.";
		isValid = "Not Valid";
	}
	else
		document.getElementById("cpass").innerHTML = "*";


	if (pForm.username.value === "") {
		document.getElementById("user").innerHTML = "*Please fill up the username.";
		isValid = "Not Valid";
	}
	else
		document.getElementById("user").innerHTML = "*";
	if (pForm.password.value === "") {
		document.getElementById("pass").innerHTML = "*Please fill up the password";
		isValid = "Not Valid";
	}
	else
		document.getElementById("pass").innerHTML = "*";
	if (isValid === "") {
		return true;
	}
	else {
		return false;
	}
}