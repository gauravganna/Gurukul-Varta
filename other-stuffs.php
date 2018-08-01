<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Insti News</title>
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
				<h2 class="page-title">Other Stuff</h2>
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
					<div id="other-one">
						<a href="#"><div class="other-image"></div></a>
						<div class="other-description">
							<a href="#"><div class="other-title">
								Inter IIT Sports Event was organised in IIT Madras where our Team Participated
							</div></a>
							<div class="other-author">
								Gaurav Ganna
							</div>
							<div class="other-date">
								July 25.2018,16:50 pm
							</div>
						</div>
					</div>

					<div id="other-two">
						<a href=""><div class="other-image"></div></a>
						<div class="other-description">
							<a href=""><div class="other-title">
								1st Senate Meeting was organised at IIT Goa.
							</div></a>
							<div class="other-author">Sahaj Jain</div>
							<div class="other-date">July 25.2018,17:42 pm</div>
						</div>
					</div>
				</div>		
			</div>
			
			<?php require 'Template/template-aside.html'; ?>
		</div>
	</section>

	<?php require 'Template/template-footer.html'; ?>
</body>
</html>