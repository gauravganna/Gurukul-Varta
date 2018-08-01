<?php
 session_start();

$_SESSION["edit_upload"]="";

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

	<!-- <br>

	<form action="logs.php" method="post" enctype="multipart/form-data">
		<input type="Submit" name="submit" value="Articles Uploaded Logs">
		
	</form>	 -->
	<br>
	<br>
	<form action="upload_form.php" method="post" enctype="multipart/form-data">
	Select article to upload:
		<input style="margin-left: 10%" type="Submit" name="submit" value="Upload Article">
		
	</form>

	<br>
	<br>
	<form action="addAuthor.php" method="post" enctype="multipart/form-data">
		<input type="Submit" name="submit" value="Add Author">
		
	</form>

	<br>

	<br>
<br>
<form action="ss.php" method="post" enctype="multipart/form-data">
	<input type="Submit" name="submit" value="Edit Article">
</form>


</body>
</html>