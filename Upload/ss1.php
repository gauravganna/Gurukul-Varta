<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$_SESSION["categ_update"]="";
$var1  = $_POST['t4'];
$_SESSION["categ_update"] = $_SESSION["categ_update"]."$var1";

?>

<form action="ss2.php" method="post" enctype="multipart/form-data">
	<div>
		<label for="category"><b>Selected Category : </b></label>

			<select name="t15">
				<option><?php echo $var1; ?></option>
			</select>
	</div>
	<br>
	<br>
	<div>
		<label for="author"><b>Date : </b></label>
			<?php
				  	require_once 'inf.php';
				  	 $conn = mysqli_connect($db_hostname, $db_user, $db_password, $db_database);

				  $query = "SELECT * FROM authorArticle";
				  $results = mysqli_query($conn , $query);
				  $numrows=mysqli_num_rows($results);

				  echo "<select "."name="."t16".">";
				   for($j=0;$j<$numrows;++$j){
				       $rows=mysqli_fetch_row($results);
				       if ($var1 == $rows[5]) {
				        	print "<option>"."$rows[8]"."</option>";
				        } 
					
				   } 
					echo "</select>";

			?>	   
	</div>

	<br>
	<br>
	

	<br>
	<br>

	<input type="Submit" name="submit" value="Next">

</form>

<br>
<form action="ss.php" method="post" enctype="multipart/form-data">
	<input type="Submit" name="submit" value="Back">
</form>

</body>
</html>