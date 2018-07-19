<?php
 session_start();
 if(!isset($_SESSION['usrname']))
 {
 	header('Location:index.php');
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body style="background-color: gray">

	<h2 style="text-align: center">
		Welcome

			<?php echo $_SESSION['options']; 
			?>
	</h2>

	<form action="index.php" method="post" enctype="multipart/form-data">
		<input type="Submit" name="submit" value="Logout">
		
	</form>

	<br>

	<form action="logs.php" method="post" enctype="multipart/form-data">
		<input type="Submit" name="submit" value="Articles Uploaded Logs">
		
	</form>	
	<br>
	<br>
	<form action="upload.php" method="post" enctype="multipart/form-data">
	Select article to upload:
		<input type="file" name="fileToUpload" id="fileToUpload">
		<br>
		<br>
		<input style="margin-left: 10%" type="Submit" name="submit" value="Upload File">
		
	</form>


</body>
</html>