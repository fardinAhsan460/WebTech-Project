<?php 
session_start();
    require '../control/connect.php';
	$First_Name=$Last_Name=$Email=$Mobile_no=$SHR=$Gender=$Age=$Password=$Username=$CPassword=$Driving=$NID="";
	$registrationStatus="";
	$errorcount=0;
	$count=0;
	$Image="../images/DefaultUser.png";
	$uppercase=$lowercase=$number=$specialChars="";
	$conn="";
	
	if ($_SERVER['REQUEST_METHOD'] === "POST") {

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		$First_Name = test_input($_POST['firstname']);
		$Last_Name = test_input($_POST['lastname']);
		$Email = test_input($_POST['email']);
		$Mobile_no = test_input($_POST['mobile_no']);
		$Age = test_input($_POST['age']);
		$NID = test_input($_POST['nid']);
		$Driving = test_input($_POST['driving']);
		$SHR = test_input($_POST['address']);
		$Gender = isset($_POST['gender']) ? test_input($_POST['gender']):NULL;
		$Password = test_input($_POST['password']);
		$Username = test_input($_POST['username']);
		$CPassword = test_input($_POST['cpassword']);

			if (!preg_match("/^[a-zA-Z-' ]*$/",$First_Name)) {
				$errorcount++;
				$_SESSION['firstnameErrMsg']  = "Only letters and spaces";
			}
			else{
				$_SESSION['firstnameErrMsg']="";
				$_SESSION['First_Name']=$First_Name;
			}
				
		

			if (!preg_match("/^[a-zA-Z-' ]*$/",$Last_Name)) {
				$errorcount++;
				$_SESSION['lastnameErrMsg'] = "Only letters and spaces";
			}
			else{
				$_SESSION['lastnameErrMsg'] = "";
				$_SESSION['Last_Name']=$Last_Name;
			}
				
		
			if(!empty($Password)and $CPassword==$Password){
				$uppercase = preg_match('@[A-Z]@', $Password);
				$lowercase = preg_match('@[a-z]@', $Password);
				$number    = preg_match('@[0-9]@', $Password);
				$specialChars = preg_match('@[^\w]@', $Password);
					if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($Password) < 8) {
							$_SESSION['passwordErrMsg'] = "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
								$errorcount++;
							}
							else{
								$_SESSION['passwordErrMsg'] = "";
							}
								
			}

	    if($CPassword!=$Password){
			$_SESSION['cpasswordErrMsg'] = "Confirmed Password not same";
			$errorcount++;
		}
		else{
			$_SESSION['cpasswordErrMsg'] = "";
			$_SESSION['CPassword']=$CPassword;
		}
			
		

	
			if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
				$_SESSION['emailErrMsg'] = "Please enter a valid email";
				$errorcount++;
			}
				else{
					$_SESSION['emailErrMsg'] = "";
					$_SESSION['Email']=$Email;
				}
						

	

				if($errorcount==0){
			
					$conn=connect();
					if($conn){
						$sql = "INSERT INTO `data` (`id`, `username`, `password`, `firstname`, `lastname`, `gender`, `age`, `address`, `mobile`, `email`, `nid`, `driving`) VALUES (NULL, '" . $Username . "', '" . $Password . "', '" . $First_Name . "', '" . $Last_Name . "', '" . $Gender . "', '" . $Age . "', '" . $SHR . "', '" . $Mobile_no . "', '" . $Email . "', '" . $NID . "','" . $Driving . "')";
						$res = mysqli_query($conn, $sql);
						if($res==true){
		
							$_SESSION['registrationStatus']="Registration Successfull";
						}
						else
							$_SESSION['registrationStatus']="Registration failed";
						}
					}
				else{
					$_SESSION['registrationStatus']="Registration failed";
				}	
				
		
	}

	header("Location: ../model/userReg.php");		
?>