<?php

	session_start();
	require_once 'inf.php';

$con = mysqli_connect($db_hostname, $db_user, $db_password, $db_database);
 
/* if($con){
 	echo "<p> connection successful </p>";
 }
 else{
 	echo "<p> not connected </p>";
 }*/
 
 $name = $_POST['uname'];
 $pass = $_POST['psw'];

 $q = " select * from signin where username = '$name' && password = '$pass' ";
$query1 = " select name from signin where username = '$name' && password = '$pass' ";
 $result = mysqli_query($con, $q);

 $num = mysqli_num_rows($result);

 $_SESSION['options'] = "";

 if($num == 1){ 
 	$_SESSION['usrname'] = $result;

 	while ($row2 = mysqli_fetch_array($result)) {
	 	$_SESSION['options'] = $_SESSION['options']."$row2[1]";
	 }

 	header('Location:home.php');
 }
 else{
 	echo '<script> alert( "Enter credentials are not correct . Login Again !!! " ) </script>';
 	echo '<head> <meta http-equiv="refresh" content="0;url=index.html"> </head>';
 }
 
?>