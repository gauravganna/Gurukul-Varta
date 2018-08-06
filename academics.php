<?php
$servername = "localhost";
$username = "gv";
$password = "Iitgoa$$$777";
$dbname = "gurukulVarta";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

$query = "SELECT * FROM articles WHERE category='Academics' ORDER BY id DESC";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Academics</title>
	<?php require 'Template/template-head_section.html'; ?>
	<link rel="stylesheet" type="text/css" href="Styling/other-pages.css">
</head>

<body>	
	<?php require 'Template/template-header.html'; ?>

	<!-- The Main Body -->
	<section class="mainBody">
		<div id="lineBelowArticle"></div>

		<div class="belowMainArticle">
			<div class="leftSide">
				<h2 class="page-title">Academics</h2>
				<div id="page-line"></div>
				<a href="#"><div class="featured-article">
					<div class="featured-article-image">
						<img src="Images/3rd-generation-iit-director-meet.jpg" />
					</div>
					<div class="featured-article-description">
						<h2>3rd Generation IIT Director's Meet </h2>
						<h4>Indian Institute of Technology Goa hosted the IIT Directors Meet of 3rd Generation IITs on 6th April 2018 at the International Centre, Dona Paula, Goa ...</h4>
					</div>
				</div></a>

				
				<div class="other-articles-container">
				
				<?php 
					while($row = mysqli_fetch_assoc($result)) {
						echo '<div>';
							echo '<a href="article.php?type=academics&id=' . $row['id'] . '"><div class="other-image" style="background-image: url(Images/' . $row['article_image'] . ');"></div></a>';
							echo '<div class="other-description">';
								echo '<a href="article.php?type=academics&id=' . $row['id'] . '"><div class="other-title">';
									echo $row['title'];
								echo '</div></a>';
								echo '<div class="other-author">';
									echo $row['author'];
								echo '</div>';
								echo '<div class="other-date">';
									echo date('d F,Y',strtotime($row['date']));
								echo '</div>';
							echo '</div>';
						echo '</div>';
					} 
				?>

				</div>		
			</div>
			
			<?php require 'Template/template-aside.php'; ?>
		</div>
	</section>

	<?php require 'Template/template-footer.html'; ?>
</body>
</html>