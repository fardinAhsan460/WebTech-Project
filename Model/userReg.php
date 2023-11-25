<?php include 'header.php';

session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" type ="text/css" href="css/Registration.css">
<script src="js/regValidation.js"></script>
</head>
<body >


<form action="../control/User_Registration_Validation.php"method="POST" novalidate onsubmit="return validate(this);">
	<div class="container" style="background-color:#f1f1f1">
	<h1 align="center"><font color = "green" size="6"> Register Here</font></h1>

	<label for="username">Username</label>
		<input type="text" name="username" id="username" placeholder ="Write Username">
		<span  id="user" style="color: red">*
		<?php
		if(isset($_SESSION['usernameErrMsg']) and !empty($_SESSION['usernameErrMsg'])){
			echo $_SESSION['usernameErrMsg'];
		}
		?>
		</span>
		<br><br>
		<label for="password">New password</label>
		<input type="password" name="password" id="password" placeholder ="Choose Password">
		<span  id="pass" style="color: red">*
		<?php if(isset($_SESSION['passwordErrMsg']) and !empty($_SESSION['passwordErrMsg'])){
			echo $_SESSION['passwordErrMsg'];
		}
		?>
		</span>
		</span>
		<br><br>
		<label for="cpassword">Confirm password</label>
		<input type="password" name="cpassword" id="cpassword" placeholder ="Retype the Password">
		<span  id="cpass" style="color: red">*
		<?php
		if(isset($_SESSION['cpasswordErrMsg']) and !empty($_SESSION['cpasswordErrMsg'])){
			echo $_SESSION['cpasswordErrMsg'];
		}
		?>
		</span>
		<br><br>
	
	<label for="fname"><b>First Name:</label>
		<input type="text" name="firstname" id="fname" placeholder ="Enter Your First Name">
		<span id="frst" style="color: red">*
		<?php
		if(isset($_SESSION['firstnameErrMsg']) and !empty($_SESSION['firstnameErrMsg'])) {
			echo $_SESSION['firstnameErrMsg'];
		}
		?>
		</span>
		<br><br>
		<label for="lname">Last Name:</label>
		<input type="text" name="lastname" id="lname" placeholder ="Enter Your Last Name">
		<span id="lst" style="color: red">*
		<?php
		if(isset($_SESSION['lastnameErrMsg']) and !empty($_SESSION['lastnameErrMsg'])) {
			echo $_SESSION['lastnameErrMsg'];
		}
		?>
		</span>
		<br><br>
		<label>Gender</label>
		<input type="radio" id="male" name="gender" value="Male">
		<label for="male">Male</label>
		<input type="radio" id="female" name="gender" value="Female" >
		<label for="female">Female</label>
		<br><br>
		<span  id="gndr" style="color: red">*
		<?php
		if(isset($_SESSION['genderErrMsg']) and !empty($_SESSION['genderErrMsg'])){
			echo $_SESSION['genderErrMsg'];
		}
		?>
		</span>
		<br><br>

        <label for="age">Age</label>
		<input type="number" name="age" id="age" placeholder ="Enter Your Age">
		<span  id="ages" style="color: red">*
		<?php
		if(isset($_SESSION['ageErrMsg']) and !empty($_SESSION['ageErrMsg'])){
			echo $_SESSION['ageErrMsg'];
		}
		?>
		</span>
		<br><br>

		<label for="address">Address</label>
		<input type="text" name="address" id="address" placeholder ="Enter Current Address">
		<span  id="add" style="color: red">*
		<?php
		if(isset($_SESSION['address1ErrMsg']) and !empty($_SESSION['address1ErrMsg'])){
			echo $_SESSION['address1ErrMsg'];
		}
		?>
		</span>
		<br><br>

		<label for="mno">Mobile No</label>
		<input type="number" name="mobile_no" id="mno" placeholder ="Enter Your Mobile Number">
		<span  id="mbl" style="color: red">*
		<?php
		if(isset($_SESSION['mobileErrMsg']) and !empty($_SESSION['mobileErrMsg'])){
			echo $_SESSION['mobileErrMsg'];
		}
		?>
		</span>
		<br><br>

		<label for="email">Email</label>
		<input type="text" name="email" id="email" placeholder ="Enter Your Email Address">
		<span  id="eml" style="color: red">*
		<?php
		if(isset($_SESSION['emailErrMsg']) and !empty($_SESSION['emailErrMsg'])){
			echo $_SESSION['emailErrMsg'];
		}
		?>
		</span>
		<br><br>

		<label for="nid">Upload NID Scanned Copy</label>
		<input type="file" name="nid" id="nid" >
		<span  id="nids" style="color: red">*
		<?php
		if(isset($_SESSION['nidErrMsg']) and !empty($_SESSION['nidErrMsg'])){
			echo $_SESSION['nidErrMsg'];
		}
		?>
		</span>
		<br><br><br>

		<label for="driving">Upload Driving Licence Scanned Copy </label>
		<input type="file" name="driving" id="driving" >
		<span  id="drive" style="color: red">*
		<?php
		if(isset($_SESSION['drivingErrMsg']) and !empty($_SESSION['drivingErrMsg'])){
			echo $_SESSION['drivingErrMsg'];
		}
		?>
		</span>
		<br><br>
		
		
		
		
	<br>
	<button type="Submit" > Submit </button>
	Already have an account?  <a href="userLogin.php">Login Here</a>
</form>
<h3><?php if(isset($_SESSION['registrationStatus']) and !empty($_SESSION['registrationStatus'])){
			echo $_SESSION['registrationStatus'];
		};?>
</div>

</body>
</html>
<?php 
if(isset($_SESSION['registrationStatus']) and !empty($_SESSION['registrationStatus']) and $_SESSION['registrationStatus']=="Registration Successfull"){
	 		session_destroy();
		}
$_SESSION['firstnameErrMsg']="";
$_SESSION['lastnameErrMsg']="";
$_SESSION['genderErrMsg']="";
$_SESSION['emailErrMsg']="";
$_SESSION['mobileErrMsg']="";
$_SESSION['address1ErrMsg']="";
$_SESSION['nidErrMsg']="";
$_SESSION['drivingErrMsg']="";
$_SESSION['usernameErrMsg']="";
$_SESSION['passwordErrMsg']="";
$_SESSION['cpasswordErrMsg']="";
$_SESSION['registrationStatus']="";

 include 'footer.php';?>
</body>
</html>