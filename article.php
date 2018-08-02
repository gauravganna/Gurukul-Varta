 <?php
$servername = "localhost";
$username = "gv";
$password = "Iitgoa$$$777";
$dbname = "gurukulVarta";
// Create connection

$conn = mysqli_connect($servername,$username,$password,$dbname);

	if(isset($_GET["type"]) && isset($_GET["id"])) {
        $type = $_GET["type"];
        $id = $_GET["id"];
      
        if($type == "recent") {
        	$id = $id-1;
        	$query = "SELECT * FROM articles ORDER BY id DESC LIMIT ". $id . ",1";
        }
        elseif($type == "insti-news")
        	$query = "SELECT * FROM articles WHERE id=" . $id;
        elseif($type == "academics")
        	$query = "SELECT * FROM articles WHERE id=" . $id ;
        elseif($type == "extra-curriculars")
        	$query = "SELECT * FROM articles WHERE id=" . $id ;
        elseif($type == "miscellaneous")
        	$query = "SELECT * FROM articles WHERE id=" . $id ;
    }


$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result); 
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<title><?php echo $row['title']; ?></title>
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
				<div class="category"><?php echo $row['category']; ?></div>
				<div class="article-heading"><?php echo $row['title']; ?></div>

				<div class="article-info">
					<div class="author-info">
						<div class="author-image" style="background-image: url(AuthorImage/<?php echo $row['author_image']; ?>); "></div>
						<div class="author-details">
							<div class="author-name"><?php echo $row['author']; ?></div>
							<div class="author-designation"><?php echo $row['designation']; ?></div>
						</div>
					</div>

					<div class="date-time"><?php echo date('d F,Y',strtotime($row['date'])); ?></div>
				</div>
				<div class="article"><?php echo $row['description']; ?></div>
			</div>
	
			<?php require 'Template/template-aside.html'; ?>
		</div>
	</section>

	<?php require 'Template/template-footer.html'; ?>
</body>
</html>