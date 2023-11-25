<!DOCTYPE html>
<html>
<head>
    
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
   <link rel="stylesheet" href="..css/UserHeader.css">
</head>
<body>
<?php
require 'UserData.php';
$Username=$_SESSION["username"];
$UserIndex=-1;


echo'<div class="menu">';
echo	"<center><img src="."../images/DefaultUser.png"." height="."60" ."width="."60"."><br></center>";
echo " <center><b> &nbsp  Welcome " . $Username."&nbsp&nbsp</b></center>";

echo'<br><br>
	<ul>
	<li><a href="UserHomePage.php">Home</a></li>
	<li><a href="UserBooking.php">Booking</a></li>
	<li><a href="USerBookingRequest.php">Booking Requests</a></li>
	<li><a href="UserProfile.php">View Profile</a></li>
	<li><a href="UserEditProfile.php">Edit Profile</a></li>
	<li><a href="UserChangePass.php">Change Password</a></li>
	<li style="float:right"><a href="UserLogout.php">Logout</a></li>
	<ul>
	</div>'
	
?>
</body>
</html>

