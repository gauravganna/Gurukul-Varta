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
	<title>Upcoming Events</title>
	<?php require 'Template/template-head_section.html'; ?>
	<link rel="stylesheet" type="text/css" href="Styling/other-pages.css">
	<link rel="stylesheet" type="text/css" href="Styling/upcoming-events.css">
</head>

<body>	
	<?php require 'Template/template-header.html'; ?>

	<!-- The Main Body -->
	<section class="mainBody">
		<div id="lineBelowArticle"></div>

		<div class="belowMainArticle">
			<div class="leftSide">
				<h2 class="page-title">Upcoming Events</h2>
				<div id="page-line"></div>
				
				<div id="upcoming-events-container">
					<div class="upcom-events">
						<div class="upcom-image">
							<div>
								15
							</div>
							<div >
								Aug
							</div>
						</div>
						<div class="upcom-info">
							<h3>
								Independence Day Celebration
							</h3>
							Venue : <h3>IIT Goa Admin Block</h3><br/>
							Time : <h3>9:00 AM</h3>
						</div>
					</div>	

					<div class="upcom-events">
						<div class="upcom-image">
							<div>
								31
							</div>
							<div >
								Aug
							</div>
						</div>
						<div class="upcom-info">
							<h3>
								Ese hi
							</h3>
							Venue : <h3>IIT Goa New hostel</h3><br/>
							Time : <h3>12:00 AM</h3>
						</div>
					</div>	
				</div>

			</div>
			
			<?php require 'Template/template-aside.php'; ?>
		</div>
	</section>

	<?php require 'Template/template-footer.html'; ?>
</body>
</html>