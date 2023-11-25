<?php

	require 'connect.php';
	
	function validate($username, $password) {
		$conn = connect();
		if ($conn) {

			$sql = "SELECT id FROM data WHERE username = '" . $username . "' and password = '" . $password . "'";

			$res = mysqli_query($conn, $sql);

			if ($res->num_rows === 1)
				return true;
			else
				return false;
		}
	}

?>