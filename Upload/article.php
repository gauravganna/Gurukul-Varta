<?php

session_start();
?>

<?php

$target_dir = "authorSideImg/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);
$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (isset($_POST["submit"])) {
	$check = getimagesize($_FILES["img"]["tmp_name"]);
	 if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
        $uploadOk = 0;
    }	
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
    //	chmod($target_file, 0755);
      //  echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }
}

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<!-- Meta Information -->
	<meta charset="utf-8">
	<!-- This is to warn browser to scale content based on the size of the screen-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" maximum-scale="1">

	<title>Article Page</title>

	<link rel="stylesheet" type="text/css" href="Styling/template-header&footer.css">
	<link rel="stylesheet" type="text/css" href="Styling/template-aside.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="Styling/article_css.php">
	<!-- Include JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script >
		
		$(document).ready(function(){
			/* The following function switches bar and cross and displays unordered list when bar is clicked*/
			$(".hamburger-btn .fa-window-close-o").hide();

			$(".hamburger-btn .fa-bars").click(function(){
				$(this).hide();
				$(".hamburger-btn .fa-window-close-o").show();
				$("section.mainBody").addClass("active");
				$("nav.mobile ul").addClass("active");
			});

			$(".hamburger-btn .fa-window-close-o").click(function(){
				$(this).hide();
				$(".hamburger-btn .fa-bars").show();
				$("section.mainBody").removeClass("active");
				$("nav.mobile ul").removeClass("active");
			});

			/*The following part retrieves Date and Time*/
			const monthNames = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
			const weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
			var n = new Date();
			year = n.getFullYear();
			month = monthNames[n.getMonth()];
			date = n.getDate();
			day = weekday[n.getDay()];
			document.getElementById("date").innerHTML = day + "   " + month + " " + date + ", " + year;

		});

	</script>

	<!-- The follwing lines are used to config favicon for different browsers and screen settings. -->
	<link rel="apple-touch-icon" sizes="180x180" href="Favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="Favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="Favicon/favicon-16x16.png">
	<link rel="manifest" href="Favicon/site.webmanifest">
	<link rel="mask-icon" href="Favicon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="Favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="Favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- It ends here.-->

</head>

<body>
	<header id="aboveBanner">
		<div id="date">
		</div>
		<div class="search-container">
    		<form action="/action_page.php">
      			<input type="text" placeholder="Search.." name="search"/>
      			<button type="submit"><i class="fa fa-search"></i></button>
    		</form>
  		</div>
	</header>
	<header id="banner">	
		<a href="index.html"><img src="Images/banner.jpeg" alt="Gurukul Varta">
			<div class="lineBelowBanner"></div> 
			<div class="heading">
				<p>The IIT Goa Campus Newsletter</p>
			</div>	
		</a>
	</header>
	<!-- Navigation Buttons -->
	<!-- Desktop Version -->
	<nav class="desktop">
		<ul>
			<li><a href="insti-news.html" >Insti News</a></li>
			<li><a href="academics.html" >Academics</a></li>
			<li><a href="upcoming-events.html" >Upcoming Events</a></li>
			<li><a href="extra-curriculars.html" >Extra Curriculars</a></li>
			<li><a href="op-eds.html" >Op Eds</a></li>
			<li><a href="career.html" >Career</a></li>
			<li><a href="other-stuffs.html" >Other Stuff</a></li>
			<li><a href="about-us.html" >About Us</a></li>
			<li><a href="print-edition.html" >Print Edition</a></li>
		</ul>
	</nav>
	<!-- Mobile Version -->
	<nav class="mobile">
		<div class="hamburger-btn">
			<i class="fa fa-bars" aria-hidden="true"></i>
			<i class="fa fa-window-close-o" aria-hidden="true"></i>
		</div>
		<ul>
			<li><a href="insti-news.html" >Insti News</a></li>
			<li><a href="academics.html" >Academics</a></li>
			<li><a href="upcoming-events.html" >Upcoming Events</a></li>
			<li><a href="extra-curriculars.html" >Extra Curriculars</a></li>
			<li><a href="op-eds.html" >Op Eds</a></li>
			<li><a href="career.html" >Career</a></li>
			<li><a href="other-stuffs.html" >Other Stuff</a></li>
			<li><a href="about-us.html" >About Us</a></li>
			<li><a href="print-edition.html" >Print Edition</a></li>
		</ul>
	</nav>
	
	<section class="mainBody">
		<div id="lineBelowArticle"></div>

		<div class="belowMainArticle">
			<div class="leftSide">
				<div class="tag">
					<?php
						echo $_POST['type1'];
					?>
				</div>
				<div class="article-heading">
					<?php
						echo $_POST["title"];
					?>
				</div>

				<div class="article-info">
					<div class="author-info">
						<div class="author-image">
							
						</div>
						<div class="author-details">
							<div class="author-name">
								<?php
									$_SESSION["imgsrc"] = "";

									echo $_POST['type3'];
									require_once 'inf.php';
			  	 					$conn = mysqli_connect($db_hostname, $db_user, $db_password, $db_database);
			  	 					$query = "SELECT * FROM authorInf";
									$results = mysqli_query($conn , $query);
									$numrows=mysqli_num_rows($results);

									for($j=0;$j<$numrows;++$j){
									    $rows=mysqli_fetch_row($results); 
										if ($rows[1] == $_POST['type3']) {
											$_SESSION["imgsrc"] = $_SESSION["imgsrc"]."$rows[2]";
											$authorDes = $rows[3];
										}
								    } 
								    
								    $a1 = $_POST['type3'];
								    $a2 = $_SESSION["imgsrc"];
								    $a3 = $authorDes;
								    $a4 = $_POST["title"];
								    $a5 = $_POST['type1'];
								    $a6 = $_POST['description'];
								    $a7 = $_FILES["sideImg"]["name"];
								    $a8 = date("Y/m/d");

								    $m4 = $_SESSION["edit_upload"];
								    
								    if ($_SESSION["edit_upload"] == 0) {
								    
								    	//echo "<script type='text/javascript'>alert('$m4');</script>";

		$sql = "INSERT INTO authorArticle (author, author_img, authorDesignation, title, category, article, author_sideimg, date) VALUES ('$a1', '$a2', '$a3', '$a4', '$a5', '$a6', '$a7', '$a8' )";

									 	if (mysqli_query($conn, $sql)) {
									    	// echo "New record created successfully";
									    	echo "<script type='text/javascript'>alert('New record created successfully insert');</script>";
									 	} else {
									    	 //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
									 		echo "<script type='text/javascript'>alert('$m4');</script>";
									 	}

									}
									$m1 = $_SESSION["categ_update"];
									$m2 = $_SESSION["date_update"];
									$m3 = $_SESSION["title_update"];
						
									if ($_SESSION["edit_upload"] == 1) {
									
											$sql1 = "UPDATE authorArticle SET article='$a6', author='$a1', title='$a4', category='$a5', author_sideimg='$a7', date='$a8' WHERE title='$m3' AND category='$m1' AND date = '$m2' ";
											
											if (mysqli_query($conn, $sql1)) {
												   // echo "Record updated successfully";
												echo "<script type='text/javascript'>alert('New record created successfully update');</script>";
											} else {
												   // echo "Error updating record: " . mysqli_error($conn);
									 		echo "<script type='text/javascript'>alert('$m4' + 'hi');</script>";
											}
									}
									
								?>
							</div>
							<div class="author-designation">
								<?php
									echo $authorDes;
								?>	
							</div>
						</div>
					</div>

					<div class="date-time">
						12 March,2018
					</div>
				</div>
				<div class="article">
				<?php
					echo $_POST['description'];
				?>	
				</div>
			</div>


			<aside class="rightSide">			
				<div class="latest-edition">
					<div class="header">
						Latest Edition
					</div>
					<a href="http://www.iitgoa.ac.in/pdf/newsletter/April_2018_english.pdf" target="_blank"><img class="latest-version-image" src="Images/vol2-issue1.png"/></a>
				</div>

				<div class="email-subscription">
					<div class="header">
						Email Subscription
					</div>
					<div class="email-subscription-container">
						<form action="/action_page.php">
							<p>Email : </p>
							<input type="text" name="Email" placeholder="abc@xyz.com">
							<input type="submit" value="Submit">
						</form>
					</div>
				</div>

				<!-- <div class="poll">
					<div class="header">
						Poll of the Week
					</div>
					<div class="poll-container">
						
					</div>
				</div>
	 -->

	 			<div class="social-plugin">
					<div class="header">
						Social Plugin
					</div>
					<div class="social-plugin-container">
						<div class="fb-page" data-href="https://www.facebook.com/GurukulVarta" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/GurukulVarta" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/GurukulVarta">Gurukul Varta - The IIT Goa Campus Newsletter</a></blockquote></div>
					</div>
				</div>

				<div class="most-popular">
						<div class="header">
							All Time Popular
						</div>
						<div class="most-popular-container">Article 1</div>
						<div class="most-popular-container">Article 2</div>
						<div class="most-popular-container">Article 3</div>
						<div class="most-popular-container">Article 4</div>
						<div class="most-popular-container">Article 5</div>
				</div>

			</aside>
		</div>


	</section>

	<footer>
		<div class="footer">
			<p class="footerHeader">About Gurukul Varta</p> 
			<div class="underline"></div>
			<div id="about">Gurukul Varta is the monthly newsletter issued by IIT Goa.</div>
			<div id="social">
				<a href="https://www.facebook.com/GurukulVarta" target="_blank"><img src="Images/facebook.png" alt="Facebook" /></a>
				<!-- <a href="#"><img src="Images/twitter.png" alt="Twitter" /></a> -->
				<!-- <br id="socialBreak"/> -->
				<!-- <a href="#"><img src="Images/youtube.png" alt="YouTube" /></a> -->
				<a href="#"><img src="Images/instagram.png" alt="Instagram" /></a>
			</div>
		</div>
		<div class="footer">
			<p class="footerHeader">Contact Us</p>
			<div class="underline"></div>
			<p id="mail">Email:</p>
			<a> gv@iitgoa.ac.in </a>
			<p id="editor">Chief Editor</p>
			<p id="editorInfo">Neha Shah
			<br/>neha.shah.16002@iitgoa.ac.in</p>
		</div>
		<div class="footer">
			<p class="footerHeader">Popular Tags</p>
			<div class="underline"></div>
			<div class="popular-tags">
				<p><a href="#">Career</a>
				<a href="#">Internship</a>
				<a href="#">Academics</a>
				<a href="#">Sports</a>
				<a href="#">ExtraCurriculam</a>

				</p>
			</div>
		</div>	
		<div class="copyright">
			<p> Copyright © 2018. All Rights Reserved | <br id="break"/> Website Designed by Gaurav Ganna & Pankaj Katkar</p>
		</div>
	</footer>
</body>

</html>