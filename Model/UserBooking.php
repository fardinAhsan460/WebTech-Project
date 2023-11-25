<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Booking</title>
<script src="js/UserBookingValid.js"></script>
<link rel="stylesheet" href="css/UserHeader.css">
<style>
    
    fieldset
{
background-color:#F1F1F1;
max-width:100%;
padding:16px;	
}
</style>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Booking</title>

</head>
<body >
<?php
if(!isset($_SESSION["username"])){
	header("Location:UserLogin.php");
}
include 'header.php';
include 'UserHeader.php';
?>
<form action="../control/UserBookingValid.php"method="POST" novalidate onsubmit="return validate(this);">
	
	<h1 align="center"><font color = "green" size="6"> Book Here</font></h1>
    <fieldset>
	<label for="hub"><b>Select Hub</b></label>
    <select id="hub" name="hub">
    <option value="Mirpur">Mirpur</option>
    <option value="Uttara">Uttara</option>
    <option value="Dhanmondi">Dhanmondi</option>
    <option value="Gulistan">Gulistan</option>
    <option value="Gulshan">Gulshan</option>
    </select>
		<span  id="hubb" style="color: red">*
		<?php
		if(isset($_SESSION['hubErrMsg']) and !empty($_SESSION['hubErrMsg'])){
			echo $_SESSION['hubErrMsg'];
		}
		?>
		</span>
		<br><br>
		<label for="pickupdate"><b>Pick Up Date:</b></label>
		<input type="date" name="pickupdate" id="pickupdate">
		<span  id="pickdate" style="color: red">*
		<?php
		if(isset($_SESSION['pickdateErrMsg']) and !empty($_SESSION['pickdateErrMsg'])){
			echo $_SESSION['pickdateErrMsg'];
		}
		?>
		</span>
		<br><br>
	
	<label for="pickuptime"><b>Pick Up Time:</label>
		<input type="time" name="pickuptime" id="pickuptime">
		<span id="picktime" style="color: red">*
		<?php
		if(isset($_SESSION['picktimeErrMsg']) and !empty($_SESSION['picktimeErrMsg'])) {
			echo $_SESSION['picktimeErrMsg'];
		}
		?>
		</span>
		<br><br>
		<label for="dropoffdate">Drop Off Date:</label>
		<input type="date" name="dropoffdate" id="dropoffdate">
		<span id="dropdate" style="color: red">*
		<?php
		if(isset($_SESSION['dropdateErrMsg']) and !empty($_SESSION['dropdateErrMsg'])) {
			echo $_SESSION['dropdateErrMsg'];
		}
		?>
		</span>
        <br><br>
		<label for="dropofftime">Drop Off Time:</label>
		<input type="time" name="dropofftime" id="dropofftime">
		<span id="droptime" style="color: red">*
		<?php
		if(isset($_SESSION['droptimeErrMsg']) and !empty($_SESSION['droptimeErrMsg'])) {
			echo $_SESSION['droptimeErrMsg'];
		}
		?>
		</span>
		<br><br>
        <label for="bike">Select Bike</label>
    <select id="bike" name="bike">
    <option value="Yamaha R15">Yamaha R15</option>
    <option value="Yamaha MT15">Yamaha MT15</option>
    <option value="Bajaj Discover">Bajaj Discover</option>
    <option value="Pulser NS 160">Pulser NS 160</option>
    </select>
		<span  id="bikes" style="color: red">*
		<?php
		if(isset($_SESSION['bikeErrMsg']) and !empty($_SESSION['bikeErrMsg'])){
			echo $_SESSION['bikeErrMsg'];
		}
		?>
		</span>

		<br><br>

	<button type="Submit" > Request </button>
    <h3><?php if(isset($_SESSION['requestStatus']) and !empty($_SESSION['requestStatus'])){
			echo $_SESSION['requestStatus'];
		};?>
    </fieldset>
</form>



</body>
</html>
<?php 

$_SESSION['hubErrMsg']="";
$_SESSION['pickdateErrMsg']="";
$_SESSION['picktimeErrMsg']="";
$_SESSION['dropdateErrMsg']="";
$_SESSION['droptimeErrMsg']="";
$_SESSION['bikeErrMsg']="";
$_SESSION['requestStatus']="";

 include 'footer.php';?>
</body>
</html>