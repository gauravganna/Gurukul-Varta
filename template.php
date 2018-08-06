<?php
$servername = "localhost";
$username = "gv";
$password = "Iitgoa$$$777";
$dbname = "gurukulVarta";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Template</title>
	<?php require 'Template/template-head_section.html'; ?>
</head>

<body>
	<?php require 'Template/template-header.html'; ?>

	<!-- The Main Body -->
	<section class="mainBody">
		<div id="lineBelowArticle"></div>

		<div class="belowMainArticle">
			<div class="leftSide"></div>
			<?php require 'Template/template-aside.php'; ?>
		</div>
	</section>

	<?php require 'Template/template-footer.html'; ?>
</body>

</html>