<?php 
	function connect() {
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "database";

		$conn = mysqli_connect($hostname, $username, $password, $dbname);
		return $conn;
	}
?>