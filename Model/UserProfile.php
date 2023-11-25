<?php 
session_start();
$Username=$_SESSION["username"];
$UserIndex=-1;
$First_Name=$Last_Name=$Email=$Mobile_no=$SHR=$Gender=$Age="";
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
	<title>View Profile</title>
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
			$sql = "SELECT * FROM data WHERE username = '" . $Username . "'";
			$res = mysqli_query($conn, $sql);
			while($row = $res->fetch_assoc()) {
		$First_Name=$row["firstname"];
		$Last_Name=$row["lastname"];
		$Gender=$row["gender"];
		$Email=$row["email"];
		$Mobile_no=$row["mobile"];
		$SHR=$row["address"];
		
		$Age=$row["age"];

}}
?>
<br><br>
<fieldset>
	<legend>Profile Photo</legend>
	<center> <img src="../images/DefaultUser.png" height = "100" width="100" alt="Profile Picture"></center>

</fieldset>
<br><br>
	<fieldset>
		<legend>General Info</legend>
		<label><b>First Name:</b></label>
		<label><?php echo $First_Name ?></label>
		<hr>
		<label><b>Last Name:</b></label>
		<label><?php echo $Last_Name ?></label>
		<hr>
		<label><b>Gender:</b></label>
		<label><?php echo $Gender ?></label>
		<hr>
		<label><b>Age:</b></label>
		<label><?php echo $Age ?></label>
	</fieldset>
<br>
	<fieldset>
		<legend>Contact Info</legend>
		<label><b>Email:</b></label>
		<label><?php echo $Email ?></label>
		<hr>
		<label><b>Mobile No:</b></label>
		<label><?php echo $Mobile_no ?></label>
	</fieldset>
<br>
	<fieldset>
		<legend>Address</legend>
		<label><b>Address:</b></label>
		<label><?php echo $SHR ?></label>
	</fieldset>
<br><br><br>
</body>
</html>
<?php include 'footer.php';?>

