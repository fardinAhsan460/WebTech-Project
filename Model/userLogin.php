<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="css/Login.css">
<script src="js/loginValidation.js"></script>
</head>
<body background="../images/user.jpg">
<div style="min-height: 91vh;">
	<?php
	include 'header.php';
	require'UserData.php';
		if(isset($_SESSION["username"])){
		header("Location:UserHomepage.php");
		}
		else{
			$passwordErrMsg=$usernameErrMsg="";
		$Password=$Username=$Remember=$Remembered="";
		$loginStatus="";
		$cookie_name = "user";
		$count1=0;
			$errorcount=0;
			if ($_SERVER['REQUEST_METHOD'] === "POST"){
			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
			$Password = test_input($_POST['password']);
			$Username = test_input($_POST['username']);
			$Remember = isset($_POST['Remember']) ? test_input($_POST['Remember']):NULL;
			if(empty($Password)){
				$passwordErrMsg = "Password is Empty";
				$errorcount++;
			}
			if(empty($Username)){
				$usernameErrMsg = "Username is Empty";
				$errorcount++;
			}	
			}
			if($errorcount==0 and $Username!="" and $Password!=""){
				$isvalid=validate($Username,$Password);
						if($isvalid){
							$_SESSION["username"] = $Username;
							Header("Location:UserHomepage.php");
							if($Remember==="Remember me"){
								$cookie_value =$Username;
								setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
							}
							else
							{
								setcookie($cookie_name, "", time() - 3600);
							}
						}
						else{
							$loginStatus="Login Failed";
							$passwordErrMsg = "Wrong Password";
						}	
				}				
			}
			
		if(isset($_COOKIE[$cookie_name])) {
		  $Remembered = $_COOKIE[$cookie_name];
		} 
					
	?>


<form id="main" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"method="POST" novalidate onsubmit="return validate(this);">

		<div class="container" style="background-color:#f1f1f1">
		<label for="username"><b>Username</label>
		<input type="text" name="username" placeholder="Enter Username" id="username" value="<?php echo $Remembered; ?>">
		<span id="uerr" style="color: red">*
		<?php
			echo $usernameErrMsg;
		?>
		</span>
		<br><br>
		<label for="password">Password</label>
		<input type="password" name="password" id="password" placeholder="Enter Password">
		<span id="perr" style="color: red">*
		<?php
			echo $passwordErrMsg;
		?>
		</span>
		<br><br>
		<input type="checkbox" id="Remember" name="Remember" value="Remember me">
		<label for="Remember"> Remember me</label>
		<a href="userReg.php">Create New Account</a>
		<br>
		<button type="submit">Login</button>
		</div>
</form>
</form>
</div>
<?php include 'footer.php';?>
</body>
</html>
