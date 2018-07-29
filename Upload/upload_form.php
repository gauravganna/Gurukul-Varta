<?php
session_start();
$cc1 = 0;
$_SESSION["edit_upload"]="";
$_SESSION["edit_upload"]=$_SESSION["edit_upload"]."$cc1";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload Form</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<meta charset="utf-8">
    <link rel="stylesheet" href="tags.css">
	<style type="text/css">
		body{
			background-color: gray;
		}
		.Title{
			position: absolute;
			top: 10%;
			left: 10%;
			border: 1px none black;
			height: 100px;
			width: 80%;
		}
		textarea {
			display: block;
			margin-left: 1%;
			margin-top: 1%; 
			padding: 5px;
		}
		.category{
			position: absolute;
			top: 25%;
			left: 11%;
			border : 1px none;
		}
		.description{
			position: absolute;
			top: 35%;
			left: 10%;
			border: 1px none;
			height: 160px;
			width: 80%;
			z-index: -5;
		}
		.author{
			position: absolute;
			top: 66%;
			left: 10%;
			border : 1px none;
			height: 100px;
			width: 80%;
		}
		.imgUpload{
			position: absolute;
			top: 100%;
			left: 10%;
			border: 1px none;
			height: 100px;
			width: 80%; 
		}
		.imgUpload1{
			position: absolute;
			top: 30%;
			left: 10%;
			border: 1px solid;
			height: 100px;
			width: 80%; 
			background-color: white;
		}
		.submitArtBtn{
			position: absolute;
			top: 100%;
			left: 40%;
			width: 20%;
			height: 10%;
			cursor: pointer;
		}
		footer{
			position: absolute;
			top: 110%;

		}
		button::-moz-focus-inner {
			border: 0;
		}
		.tagsPos{
			position: absolute;
			top: 85%;
			left: 10%;
		}
		.sideImg{
			position: absolute;
			top: 75%;
			left: 10%;
		}

	</style>
</head>
<body>
	<form action="article.php" method="post" enctype="multipart/form-data">
		<div class="Title">
			<label for="title"><b>Title : </b></label>
			<textarea name="title" rows="2" cols="100" placeholder="Enter Title ... " style="font-size: 15px;"  required></textarea>
		</div>
		<div class="category">
			<label for="author"><b>Category : </b></label>
			 <select name="type1">
			  <option value="Insti News" id="Insti" >Insti News</option>
			  <option value="Academics" id="Academics">Academics</option>
			  <option value="Upcoming Events" id="Upcoming">Upcoming Events</option>
			  <option value="Extra Curriculars" id="Extra">Extra Curriculars</option>
			  <option value="Op Eds" id="Op">Op Eds</option>
			  </select>
			   
		</div>
		<div class="description">
			<div>
				<label for="description"><b>Article : </b></label>
				<textarea name="description" rows="6" cols="100" placeholder="Enter Your Article ...." style="font-size: 15px;"></textarea>
			</div>
		</div>
		<div class="author">
			<label for="author"><b>Author : </b></label>
			<?php
			  	require_once 'inf.php';
			  	 $conn = mysqli_connect($db_hostname, $db_user, $db_password, $db_database);

			  $query = "SELECT * FROM authorInf";
			  $results = mysqli_query($conn , $query);
			  $numrows=mysqli_num_rows($results);

			  echo "<select "."name="."type3".">";
			   for($j=0;$j<$numrows;++$j){
			       $rows=mysqli_fetch_row($results); 
				print "<option>"."$rows[1]"."</option>";
			   } 
				echo "</select>";

			  ?>
		</div>

		<div class="tagsPos">
			<p>
	            Tags:
	        </p>
	        <p>
	            <div class="tags-input" data-name="tags-input">
	            </div>
	        </p>
		</div>

		<div class="sideImg">
			<b>Upload Image</b>
			<input type="file" name="img" id="img">
		</div>

		<div>
			<input type="Submit" name="submitForm" value="Submit Article" class="submitArtBtn">
		</div>
	</form>
	<p id="demo"></p>
	<footer>
		<b>Developed by Pankaj Katkar</b>
	</footer>
	<script src="tags.js"></script>
</body>
</html>


