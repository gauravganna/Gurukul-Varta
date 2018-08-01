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
			<?php require 'Template/template-aside.html'; ?>
		</div>
	</section>

	<?php require 'Template/template-footer.html'; ?>
</body>

</html>