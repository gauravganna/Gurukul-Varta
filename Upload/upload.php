<?php

session_start();

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
if($uploadOk == 0){
	echo "Sorry, your file was not uploaded.";
}
else{
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "The file ". basename( $_FILES["fileToUpload"]["name"]). "has been uploaded.";

		$myfile = fopen("logs.txt", "a") or die("Unable to open file!");
		fwrite($myfile, "File Uploaded by : ");
		fwrite($myfile, $_SESSION['options']);
		fwrite($myfile, PHP_EOL);
		fwrite($myfile, "File Uploaded at time : ");
		date_default_timezone_set("Asia/Calcutta");
		fwrite($myfile, date("d-m-Y h-i-sa"));
		fwrite($myfile, PHP_EOL);
		fwrite($myfile, "Article Uploaded name : ");
		fwrite($myfile, basename( $_FILES["fileToUpload"]["name"]));
		fwrite($myfile, PHP_EOL);
		fwrite($myfile, PHP_EOL);
		fclose($myfile);
	}
	else{
		echo "Sorry, there was an error in uploading your file";
	}
}


?>

<br>
<br>
<br>

<form action="home.php" method="post" enctype="multipart/form-data">
		<input type="Submit" name="submit" value="Upload Again">
</form>
<img src="db" wi>