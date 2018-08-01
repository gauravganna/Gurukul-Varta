<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Article Page</title>
	<?php require 'Template/template-head_section.html'; ?>
	<link rel="stylesheet" type="text/css" href="Styling/article.css">
</head>

<body>
	<?php require 'Template/template-header.html'; ?>

	<!-- The Main Body -->
	<section class="mainBody">
		<div id="lineBelowArticle"></div>

		<div class="belowMainArticle">
			<div class="leftSide">
				<div class="category">Academics</div>
				<div class="article-heading">From the Desk of Director</div>

				<div class="article-info">
					<div class="author-info">
						<div class="author-image"></div>
						<div class="author-details">
							<div class="author-name">
								Gaurav Ganna
							</div>
							<div class="author-designation">
								Chief Editor	
							</div>
						</div>
					</div>

					<div class="date-time">12 March,2018</div>
				</div>
				<div class="article"></div>
			</div>
	
			<?php require 'Template/template-aside.html'; ?>
		</div>
	</section>

	<?php require 'Template/template-footer.html'; ?>
</body>
</html>