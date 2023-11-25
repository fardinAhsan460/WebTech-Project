<?php
session_start();
if(!isset($_SESSION["username"])){
	header("Location:UserLogin.php");
}
$ppp="";
$Username=$_SESSION["username"];
$passwordErrMsg=$cpasswordErrMsg=$CurentPassErrMsg="";
$Password=$CPassword=$CurentPass="";
$ChangeStatus="";
$count1=0;
$errorcount=0;
$uppercase=$lowercase=$number=$specialChars="";
$userindexD=-1;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change Password</title>
	<script src="js/changePassValidation.js"></script>

    <link rel="stylesheet" href="css/UserHeader.css">
<style>
    
    fieldset
{
background-color:#F1F1F1;
max-width:100%;
padding:16px;	
}</style>
</head>
<body>
<?php
	include 'header.php';
    include 'UserHeader.php';
	if ($_SERVER['REQUEST_METHOD'] === "POST"){
			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
			$Password = test_input($_POST['password']);
			$CPassword = test_input($_POST['cpassword']);
			$CurentPass = test_input($_POST['CurentPass']);
			
			if(empty($Password)){
				$passwordErrMsg = "New password is Empty";
				$errorcount++;
			}
			if(empty($CPassword)){
				$cpasswordErrMsg = "Confirmed password is Empty";
				$errorcount++;
			}
			if(empty($CurentPass)){
				$CurentPassErrMsg = "Current password is Empty";
				$errorcount++;
			}
			else {

			$conn = connect();
			if ($conn) {

			$sql = "SELECT password FROM data WHERE username = '" . $Username . "'";

			$res = mysqli_query($conn, $sql);

			while($row = $res->fetch_assoc()) {
				$ppp=$row["password"];
			}

			}
				if($ppp!=$CurentPass){
				$CurentPassErrMsg = "Current password is Wrong";
				$errorcount++;
			}
			}
			if($Password!=""and $CPassword!=""and $Password!=$CPassword)	{
				$cpasswordErrMsg="Confirmed password is not same";
				$errorcount++;
			}
			if(!empty($Password)and!empty($CPassword)and $CPassword==$Password){
			$uppercase = preg_match('@[A-Z]@', $Password);
			$lowercase = preg_match('@[a-z]@', $Password);
			$number    = preg_match('@[0-9]@', $Password);
			$specialChars = preg_match('@[^\w]@', $Password);
				if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($Password) < 8) {
    					$passwordErrMsg="Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
    						$errorcount++;
						}
			}

			if($errorcount==0){
				$conn = connect();
				if ($conn) {
				$sql = "UPDATE `data` SET `password` = '".$Password."' WHERE `data`.`username` = '".$Username."';";
				mysqli_query($conn, $sql);

				$ChangeStatus="Password Changed Successfully";

				}
			}
}

?>	<br><br>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"method="POST" novalidate onsubmit="return validate(this);">
<fieldset>
		<legend> Change Password</legend>
		<label for="CurentPass">Current Password</label>
		<input type="password" name="CurentPass" id="CurentPass"value="<?php if($ChangeStatus!="Password Changed Successfully"){echo $CurentPass;}?>">
		<span id="cuerr" style="color: red">*
		<?php
			echo $CurentPassErrMsg;
		?>
		</span>
			<br><br>
		<label for="password">New Password</label>
		<input type="password" name="password" id="password"value="<?php if($ChangeStatus!="Password Changed Successfully"){echo $Password;}?>">
		<span id="perr" style="color: red">*
		<?php
			echo $passwordErrMsg;
		?>
		</span>
		<br><br>
		<label for="cpassword">Confirm Password</label>
		<input type="password" name="cpassword" id="cpassword"value="<?php if($ChangeStatus!="Password Changed Successfully"){echo $CPassword;}?>">
		<span id="cerr"  style="color: red">*
		<?php
			echo $cpasswordErrMsg;
		?>
		</span>
	
</fieldset>
<br>
<button id ="modify" type="submit">Save changes</button>

<center><h3><?php
			echo $ChangeStatus;
?></h3></center>

</form>


<br><br><br><br><br><br><br><br><br>
</body>
</html>
<?php include 'footer.php';?>
