<!DOCTYPE html>
<html>
<head>
<title>Registration Validation</title>
</head>
<body>
	<?php 
	$passwordErrMsg=$usernameErrMsg= "";
	$password=$username="";
	
	if ($_SERVER['REQUEST_METHOD'] === "POST") {

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		$password = test_input($_POST['password']);
		$username = test_input($_POST['username']);
	
	
		
		
		if(empty($password)){
			$passwordErrMsg = "Password is Empty";
		}
		
		
		if(empty($username)){
			$usernameErrMsg = "Username is Empty";
		}

			
	}

	echo $passwordErrMsg; echo "<br>";
	echo $usernameErrMsg; echo "<br>";

?>
</body>
</html>