<?php
session_start();
$Username=$_SESSION["username"];
if(!isset($_SESSION["username"])){
	header("Location:UserLogin.php");
}	
$count1=0;
?>
<!DOCTYPE html>
<html>
<head>
<title>HomePage</title>
  <link rel="stylesheet" href="css/UserHeader.css">
  <style>
  	
  	fieldset
{
  background-color:#F1F1F1;
  max-width:100%;
  padding:16px;	
}
  </style>
</head>
<body>
	
<?php
include 'header.php';
include 'UserHeader.php';

?>
<div style="=min-height: 500hv;">
<br><br>
<fieldset>
	<legend>Why SHORT TIME BIKE RENTAL SYSTEM?</legend>
<p>     1. SHORT TIME BIKE RENTAL SYSTEM is the first venture in Bangladesh to offer bikes on rental basis. All you need a valid NID & Driving license and few clicks on our website. <br><br>
        2. A Hassle free self-driven vehicle for everyone.<br><br>
        3. Tariff of SHORT TIME BIKE RENTAL SYSTEM is very much competitive. In fact our tariff is cheaper than the ride sharing service providers.<br><br>
        4. Segment variety: SHORT TIME BIKE RENTAL SYSTEM offers bundle of bike segments for riders according to their needs, personality and budget.<br><br>
        5. Priority: SHORT TIME BIKE RENTAL SYSTEM acknowledges and honors its user’s priority. As a result SHORT TIME BIKE RENTAL SYSTEM also has the priority based service for special needs at your special time. 
</p>
</fieldset>
<br><br>
<fieldset>
	<legend>OFFERS</legend>
<p>Looking for a Motorbike? It will keep you waiting; then bargain and finally waste of time. Why take hassle? Here is SHORT TIME BIKE RENTAL SYSTEM. Better choose it. A few clicks on our website and get your personal vehicle ready anywhere anytime you want. 
</p>
</fieldset>
<br><br>
<fieldset>
	<legend>DIRECT RENT</legend>
<p>SHORT TIME BIKE RENTAL SYSTEM is the first venture of Bangladesh to offer bike rental service at your disposal. SHORT TIME BIKE RENTAL SYSTEM provides bikes on hourly, daily, weekly or monthly basis in only Dhaka for now. We will soon start it in various places of our country. Now, anyone with a valid National ID Card & Driving license can book a bike through our website. Then you will get the freedom to roam around according to your desire.
</p>
</fieldset>
<br><br>
<fieldset>
	<legend>DAMAGE REPORTING</legend>
<p>SHORT TIME BIKE RENTAL SYSTEM strictly follows the safe and sensible derive policy. Even offer that every single ride is entirely on riders own risk. The users or riders are requested to report any accidental or other damage at once. As SHORT TIME BIKE RENTAL SYSTEM will not be responsible for any accident/incident.
</p>
</fieldset>
<br><br>
</div>
<br><br><br><br>
<?php include 'footer.php';?>
</body>
</html>
