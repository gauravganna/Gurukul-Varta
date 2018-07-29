<?php

session_start();

$target_dir = "image/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uplaodOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (isset($_POST["submit"])) {
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if ($check !== false) {
		$uplaodOk = 1; 
	}
	else{
		echo "File is not an image .";
		$uplaodOk = 0;
	}
}

if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. ";
	$uplaodOk = 0;
}

if ($uplaodOk == 0) {
	echo "Sorry, your file was not uploaded. ";
}
else {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "The file ". basename($_FILES["fileToUpload"]["name"])." has been uploaded. ";
		header('Location:upload_form.php');
	}
	else{
		echo "Sorry , there was an error in uploading your file. ";
	}
}
?>