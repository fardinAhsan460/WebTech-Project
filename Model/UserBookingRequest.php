<?php 
session_start();
$Username=$_SESSION["username"];
$UserIndex=-1;
$Hub=$Pick_Date=$Pick_Time=$Drop_Date=$Drop_Time=$Bike="";
?>
<!DOCTYPE html>
<html>
<head>
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
	<title>View Booking Request</title>
</head>
<body>
<?php
if(!isset($_SESSION["username"])){
	header("Location:UserLogin.php");
}
include 'header.php';
include 'UserHeader.php';


?>

<?php
        
		$conn = connect();
		if ($conn) {
			$sql = "SELECT * FROM booking WHERE username = '" . $Username . "'";
			$res = mysqli_query($conn, $sql);
			while($row = $res->fetch_assoc()) {
		$Hub=$row["hub"];
		$Pick_Date=$row["pickDate"];
		$Pick_Time=$row["pickTime"];
		$Drop_Date=$row["dropOffDate"];
		$Drop_Time=$row["dropOffTime"];
		$Bike=$row["bike"];

}}
?>
<br><br>
	<fieldset>
		<legend>Booking Info</legend>
		<label><b>Hub:</b></label>
		<label><?php echo $Hub ?></label>
		<hr>
		<label><b>Pick Up Date:</b></label>
		<label><?php echo $Pick_Date ?></label>
		<hr>
		<label><b>Pick Up Time:</b></label>
		<label><?php echo $Pick_Time ?></label>
		<hr>
		<label><b>Drop Off Date:</b></label>
		<label><?php echo $Drop_Date ?></label>
        <hr>
        <label><b>Drop Off Time:</b></label>
		<label><?php echo $Drop_Time ?></label>
        <hr>
        <label><b>Selected Bike:</b></label>
		<label><?php echo $Bike ?></label>
	</fieldset>
<br><br><br>
</body>
</html>
<?php include 'footer.php';?>

