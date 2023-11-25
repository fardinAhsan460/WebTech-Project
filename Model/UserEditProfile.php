<?php
session_start();

if(!isset($_SESSION["username"])){
	header("Location:UserLogin.php");
}
$Username=$_SESSION["username"];
$UserIndex=-1;
$errorcount=0;
$First_Name=$Last_Name=$Email=$Mobile_no=$SHR=$Gender=$Age="";
$firstnameErrMsg =$lastnameErrMsg = $genderErrMsg = $emailErrMsg = $mobileErrMsg = $address1ErrMsg = $ageErrMsg ="";
$InfoStatus="";
$uppercase=$lowercase=$number=$specialChars="";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Profile</title>
	<script src="js/UserProfileEditValid.js"></script>

<link rel="stylesheet" href="css/UserHeader.css">
<style>
    
    fieldset
{
background-color:#F1F1F1;
max-width:100%;
padding:16px;	
}</style>
    
	
	<style >
		
select,input[type=date]{
  width: 100%;
  padding: 8px 10px;
  margin: 3px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  align: center;
  border-radius: 10px;
  
}


	</style>
</head>
<body>
<?php
include 'header.php';
include 'UserHeader.php';
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
		if ($_SERVER['REQUEST_METHOD'] === "POST") {

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$First_Name = test_input($_POST['firstname']);
		$Last_Name = test_input($_POST['lastname']);
		$Mobile_no = test_input($_POST['mobile_no']);
		$SHR = test_input($_POST['address']);
		$Gender = isset($_POST['gender']) ? test_input($_POST['gender']):NULL;
		$Age=test_input($_POST['age']);
	
			if (!preg_match("/^[a-zA-Z-' ]*$/",$First_Name)) {
				$errorcount++;
				$firstnameErrMsg = "Only letters and spaces";
			}

			if (!preg_match("/^[a-zA-Z-' ]*$/",$Last_Name)) {
				$errorcount++;
				$lastnameErrMsg = "Only letters and spaces";
			}

		if($errorcount==0){
			$conn=connect();
			if($conn){
				$sql = "UPDATE `data` SET `firstname`='".$First_Name."',`lastname`='".$Last_Name."',`gender`='".$Gender."',`age`='".$Age."',`address`='".$SHR."',`mobile`='".$Mobile_no."' WHERE username = '" . $Username . "';";
				mysqli_query($conn, $sql);
			$InfoStatus="Changes saved successfully";
		}
	}
}
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"method="POST" novalidate onsubmit="return validate(this);">
<br><br>
	<fieldset>
		<legend>General Info</legend>
		<label for="fname"><b>First Name:</b></label>
		<input type="text" name="firstname" id="fname" value="<?php echo $First_Name;?>">
		<span id= "ferr" style="color: red">*
		<?php
			echo $firstnameErrMsg;
		?>
		</span>
		<br><br>
		<label for="lname"><b>Last Name:</b></label>
		<input type="text" name="lastname" id="lname" value="<?php echo $Last_Name;?>">
		<span  id= "lerr" style="color: red">*
		<?php
			echo $lastnameErrMsg;
		?>
		</span>
		<br><br>
		<label><b>Gender:</b></label>
		<input type="radio" id="male" name="gender" value="Male" <?php if($Gender=="Male"){echo "checked";}?> >
		<label for="male">Male</label>
		<input type="radio" id="female" name="gender" value="Female" <?php if($Gender=="Female"){echo "checked";}?> >
		<label for="female">Female</label>
		<span  id= "gerr" style="color: red">*
		<?php
			echo $genderErrMsg;
		?>
		</span>
		<br><br>
		<label for="age"><b>Age:</b></label>
		<input type="number" id="age" name="age"value="<?php echo $Age;?>">
	</fieldset>
<br><br>
	<fieldset>
		<legend>Contact Info</legend>
		<label for="mno"><b>Mobile No</b></label>
		<input type="number" name="mobile_no" id="mno"value="<?php echo $Mobile_no;?>">
		<span  id= "merr" style="color: red">*
		<?php
			echo $mobileErrMsg;
		?>
		</span>
	</fieldset>
<br><br>
	<fieldset>
		<legend>Address</legend>
		<label for="address"><b>Street/House/Road</b></label>
		<input type="text" name="address" id="address"value="<?php echo $SHR;?>">
		<span  id= "aerr" style="color: red">*
		<?php
			echo $address1ErrMsg;
		?>
		</span>
	</fieldset>
<br>
<button id="modify" type="submit">Save changes</button>
<center><h3><?php
			echo $InfoStatus;
?></h3></center>
</form>

</body>
</html>
<?php include 'footer.php';?>