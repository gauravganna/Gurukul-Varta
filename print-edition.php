<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Print Edition</title>
	<link rel="stylesheet" type="text/css" href="Styling/print-edition.css">
	<?php require 'Template/template-head_section.html'; ?>
	<script type="text/javascript">
		document.getElementsByClassName("latest-edition").style.display = "none";
	</script>
</head>

<body>
	<?php require 'Template/template-header.html'; ?>

	<!-- The Main Body -->		
	<section class="mainBody">
		<div id="lineBelowArticle"></div>

		<div class="belowMainArticle">
			<div class="leftSide">
				<div class="print-edition-container">
					<div class="print-edition-image" id="vol2-issue1">
						
					</div>
					<div class="print-edition-heading">
						Volume 2, Issue 1 
					</div>
					<a href="#" target="_blank">English Version</a>
					<a href="#" target="_blank">Hindi Version</a>
				</div>

				<div class="print-edition-container">
					<div class="print-edition-image" id="vol1-issue2">
						
					</div>
					<div class="print-edition-heading">
						Volume 1, Issue 2 
					</div>
					<a href="http://www.iitgoa.ac.in/pdf/newsletter/April_2018_english.pdf" target="_blank">English Version</a>
					<a href="http://www.iitgoa.ac.in/pdf/newsletter/%E0%A4%85%E0%A4%AA%E0%A5%8D%E0%A4%B0%E0%A5%88%E0%A4%B2_2018.pdf" target="_blank">Hindi Version</a>
				</div>

				<div class="print-edition-container">
					<div class="print-edition-image" id="vol1-issue1">
						
					</div>
					<div class="print-edition-heading">
						Volume 1, Issue 1 
					</div>
					<a href="http://www.iitgoa.ac.in/pdf/newsletter/October_2017_english.pdf" target="_blank">English Version</a>
					<a href="http://www.iitgoa.ac.in/pdf/newsletter/%E0%A4%85%E0%A4%95%E0%A5%8D%E0%A4%9F%E0%A5%82%E0%A4%AC%E0%A4%B0_2017.pdf" target="_blank">Hindi Version</a>
				</div>
			</div>
			<?php require 'Template/template-aside.php'; ?>
		</div>


	</section>

	<?php require 'Template/template-footer.html'; ?>
</body>
</html>