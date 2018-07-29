<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="editArticleForm.php" method="post" enctype="multipart/form-data">
	<div>
		<label for="author"><b>Category : </b></label>
			<select name="t4">
				<option value="Insti News" id="Insti" >Insti News</option>
				<option value="Academics" id="Academics">Academics</option>
				<option value="Upcoming Events" id="Upcoming">Upcoming Events</option>
				<option value="Extra Curriculars" id="Extra">Extra Curriculars</option>
				<option value="Op Eds" id="Op">Op Eds</option>
			</select>	
			<?php
			  	$slcoption = $_POST['t4'];
			 ?> 	   
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

				  echo "<select "."name="."t5".">";
				   for($j=0;$j<$numrows;++$j){
				       $rows=mysqli_fetch_row($results); 
					print "<option>"."$rows[8]"."</option>";
				   } 
					echo "</select>";

			?>	   
	</div>

	<br>
	<br>
	<div>
		<label for="author"><b>Title : </b></label>
			<?php
				  	require_once 'inf.php';
				  	 $conn = mysqli_connect($db_hostname, $db_user, $db_password, $db_database);

				  $query = "SELECT * FROM authorArticle";
				  $results = mysqli_query($conn , $query);
				  $numrows=mysqli_num_rows($results);

				  echo "<select "."name="."t6".">";
				   for($j=0;$j<$numrows;++$j){
				       $rows=mysqli_fetch_row($results); 
					print "<option>"."$rows[4]"."</option>";
				   } 
					echo "</select>";

			?>	   
	</div>

	<br>
	<br>

	<input type="Submit" name="submit" value="Edit Article">

</form>

<br>
<br>
<form action="home.php" method="post" enctype="multipart/form-data">
	<input type="Submit" name="submit" value="Back To homepage">
</form>

<br>
<br>
<?php
	echo "hi";
 	echo $slcoption;
?>

</body>
</html>