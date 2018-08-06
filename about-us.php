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
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="Styling/about-us.css">
	<?php require 'Template/template-head_section.html'; ?>
</head>

<body>
	<?php require 'Template/template-header.html'; ?>
	
	<!-- The Main Body	 -->
	<section class="mainBody">
		<div id="lineBelowArticle"></div>

		<div class="belowMainArticle">
			<div class="leftSide">
				<header>
					About Us
				</header>
				<p>
					Gurukul Varta is the quartely magazine published by Indian Institute of Technology,Goa.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>

				<header>Our Team</header>
				<h3>2018-2019</h3>
				<div style="display: flex; width: 100%; flex-wrap: wrap; justify-content: space-around;">
					<div class="about-us-container" >
						<br><h2><u>Chief Editor</u></h2>
						<br><br>
						<a><img src="AuthorImage/">
						<br/>
						<h3>Neha Shah </a></h3>
						<h3 class="email">neha.shah.16002@iitgoa.ac.in</h3> 
					</div>

					<div class="about-us-container" >
						<br><h2><u>Chief Publisher/<br>Design &amp; Layout</u></h2>
						<br>
						<a><img src="AuthorImage/">
						<br/>
						<h3>Sahaj Jain</a></h3>
						<h3 class="email">sahaj.jain.16003@iitgoa.ac.in</h3> 
					</div>

					<div class="about-us-container" >
						<br><h2><u>Editor</u></h2>
						<br><br>
						<a><img src="AuthorImage/">
						<br/>
						<h3>Vishal Jha</a></h3>
						<h3 class="email">vishal.jha.16001@iitgoa.ac.in</h3> 
					</div>

					<div class="about-us-container" >
						<br><h2><u>Faculty Advisor</u></h2>
						<br>
						<a><img src="AuthorImage/">
						<br/>
						<h3>Dr. Rishikesh Narayan</a></h3>
						<h3 class="email">rishikesh.narayan@iitgoa.ac.in</h3> 
					</div>

					<div class="about-us-container" >
						<br><h2><u>Faculty Advisor</u></h2>
						<br>
						<a><img src="AuthorImage/">
						<br/>
						<h3>Dr. Nida Sajid</a></h3>
						<h3 class="email">nida@iitgoa.ac.in</h3> 
					</div>

					<div class="about-us-container" >
						<br><h2><u>Design &amp; Layout</u></h2>
						<br>
						<a><img src="AuthorImage/">
						<br/>
						<h3>Noopur Datar</a></h3>
						<h3 class="email">noopur.datar.17002@iitgoa.ac.in</h3> 
					</div>
					<div class="about-us-container" >
						<br><h2><u>Website Design</u></h2>
						<br>
						<a href="https://www.facebook.com/gaurav10498" target="_blank"><img src="AuthorImage/GauravGanna.jpg">
						<br/>
						<h3>Gaurav Ganna</a></h3>
						<h3 class="email">gaurav.ganna.16001@iitgoa.ac.in</h3> 
					</div>
					<div class="about-us-container" >
						<br><h2><u>Website Design</u></h2>
						<br>
						<a><img src="AuthorImage/">
						<br/>
						<h3>Pankaj Katkar</a></h3>
						<h3 class="email">pankaj.katkar.16001@iitgoa.ac.in</h3> 
					</div>
				</div>
			</div>

			<?php require 'Template/template-aside.php'; ?>
		</div>
	</section>

	<?php require 'Template/template-footer.html'; ?>
</body>
</html>