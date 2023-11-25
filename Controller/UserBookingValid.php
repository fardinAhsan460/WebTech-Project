<?php 
session_start();
    require '../control/connect.php';
	$Hub=$Pick_Date=$Pick_Time=$Drop_Date=$Drop_Time=$Bike="";
	$requestStatus="";
    $Username=$_SESSION["username"];
	$errorcount=0;
	$count=0;
	$uppercase=$lowercase=$number=$specialChars="";
	$conn="";
	
	if ($_SERVER['REQUEST_METHOD'] === "POST") {

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		$Hub = test_input($_POST['hub']);
		$Pick_Date = test_input($_POST['pickupdate']);
		$Pick_Time = test_input($_POST['pickuptime']);
		$Drop_Date = test_input($_POST['dropoffdate']);
		$Drop_Time = test_input($_POST['dropofftime']);
		$Bike = test_input($_POST['bike']);

				if($errorcount==0){
			
					$conn=connect();
					if($conn){
						$sql = "INSERT INTO `booking` (`id`, `hub`, `pickDate`, `pickTime`, `dropOffDate`, `dropOffTime`, `bike`, `username`) VALUES (NULL, '" . $Hub . "', '" . $Pick_Date . "', '" . $Pick_Time . "', '" . $Drop_Date . "', '" . $Drop_Time . "', '" . $Bike . "', '" . $Username . "')";
						$res = mysqli_query($conn, $sql);
						if($res==true){
		
							$_SESSION['requestStatus']="Booking Requested Successfully";
						}
						else
							$_SESSION['requestStatus']="Booking failed";
						}
					}
				else{
					$_SESSION['requestStatus']="Booking failed";
				}	
				
		
	}

	header("Location: ../model/UserBooking.php");		
?>