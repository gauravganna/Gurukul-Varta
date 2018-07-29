<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="ss1.php" method="post" enctype="multipart/form-data">
	<div>
		<label for="author"><b>Category : </b></label>
			<select name="t4">
				<option value="Insti News" id="Insti" >Insti News</option>
				<option value="Academics" id="Academics">Academics</option>
				<option value="Upcoming Events" id="Upcoming">Upcoming Events</option>
				<option value="Extra Curriculars" id="Extra">Extra Curriculars</option>
				<option value="Op Eds" id="Op">Op Eds</option>
			</select>	
				   
	</div>
	

	<br>
	<br>

	<input type="Submit" name="submit" value="Next">

</form>

<br>
<form action="home.php" method="post" enctype="multipart/form-data">
	<input type="Submit" name="submit" value="Back">
</form>


</body>
</html>