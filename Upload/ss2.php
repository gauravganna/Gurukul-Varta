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
$_SESSION["date_update"]="";
$var2 = $_POST['t16'];
$_SESSION["date_update"] = $_SESSION["date_update"]."$var2";
 $var1 = $_SESSION["categ_update"];
 
?>

<form action="editArticleForm.php" method="post" enctype="multipart/form-data">
	
	<div>
		<label for="category"><b>Selected Category : </b></label>

			<select name="t25">
				<option><?php echo $var1; ?></option>
			</select>
	</div>
	<br>
	<br>
	<div>
		<label for="author"><b>Selected Date : </b></label>

			<select name="t26">
				<option><?php echo $var2; ?></option>
			</select>
	</div>

	<br>
	<br>
	<div>
		<label for="title"><b>Title : </b></label>
			<?php
				  	require_once 'inf.php';
				  	 $conn = mysqli_connect($db_hostname, $db_user, $db_password, $db_database);

				  $query = "SELECT * FROM authorArticle";
				  $results = mysqli_query($conn , $query);
				  $numrows=mysqli_num_rows($results);

				  echo "<select "."name="."t27".">";
				   for($j=0;$j<$numrows;++$j){
				       $rows=mysqli_fetch_row($results);
				       if ($var1 == $rows[5] && $var2 == $rows[8]) {
				        	print "<option>"."$rows[4]"."</option>";
				        } 
					
				   } 
					echo "</select>";

			?>	   
	</div>

	

	<br>
	<br>

	<input type="Submit" name="submit" value="Edit">

</form>

<br>
<form action="ss1.php" method="post" enctype="multipart/form-data">
	<input type="Submit" name="submit" value="Back">
</form>


</body>
</html>