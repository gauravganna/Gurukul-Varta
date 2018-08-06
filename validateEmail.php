<?php

$email = $_GET['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo "OK";
	$query = "INSERT INTO subscribers VALUES ('" . $email . "')";
	mysqli_query($conn,$query);
}
else
	echo "NOT OK";
?>