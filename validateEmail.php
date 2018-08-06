<?php
$servername = "localhost";
$username = "gv";
$password = "Iitgoa$$$777";
$db_name = "gurukulVarta";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db_name);

$email = $_GET['Email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo "OK";
	$query = "SELECT * FROM subscribers WHERE email = '" . $email . "'";
	$result = mysqli_query($conn,$query);
	$rowNo =  mysqli_num_rows($result);
	if($rowNo == 0) {
		$query = "INSERT INTO subscribers VALUES ('" . $email . "')";
		mysqli_query($conn,$query);
	}
}
else
	echo "NOT OK";
?>