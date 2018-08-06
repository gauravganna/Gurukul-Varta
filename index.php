<?php
$servername = "localhost";
$username = "gv";
$password = "Iitgoa$$$777";
$db_name = "gurukulVarta";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db_name);

$recent_query = "SELECT * FROM articles ORDER BY id DESC LIMIT 8";
$recent_result = mysqli_query($conn,$recent_query);

//For Trending Articles Within a Time Range.
//Window period of 4 month
$trending_query = "SELECT * FROM articles WHERE `date` BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE() ORDER BY num_of_visitors DESC,`date` ASC";
$trending_result = mysqli_query($conn,$trending_query);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Gurukul Varta</title>
	<link rel="stylesheet" type="text/css" href="Styling/homepage.css">
	<?php require 'Template/template-head_section.html'; ?>
</head>

<body>	
	<?php require 'Template/template-header.html'; ?>

	<!-- The Main Body -->
	<section class="mainBody">
		<div class="mainArticle" id="article1">
			<div class="left">
				<h1 id="heading">From The Desk of Director</h1>
				<h5 id="subHeading">Excerpt from an interview with Dr. b. k. mishra, director, iit goa</h5>
				<p id="detail">Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p>
				<a id="readMore" href="#">Read More ..   </a>
			</div>
			<div class="right">
				<img src="Images/article_1.png" alt=" ">
			</div>
		</div>

		<div class="mainArticle" id="article2">
			<div class="left">
				<h1 id="heading">National Unity Day</h1>
				<h5 id="subHeading">31st October, 2017</h5>
				<p id="detail">This day marked the birth anniversary of Sardar Vallabhbhai Patel,the Ironman of India. We paid homage to this great man who is responsible for stringing together the India we know today. Had it not been for the determination and strong resolve to unite the nation, India would have been split into numerous princely states. </p>
				<a id="readMore" href="#">Read More ..   </a>
			</div>
			<div class="right">
				<img src="Images/article_2.png" alt=" ">
			</div>
		</div>

		<div class="mainArticle" id="article3">
			<div class="left">
				<h1 id="heading">4th International Yoga Day</h1>
				<h5 id="subHeading">21st June,2018</h5>
				<p id="detail">4th International Day of Yoga was celebrated with great enthusiasm by the students, staffs and faculties of IIT Goa on 21 st June 2018. The event started with welcome speech by Dr. Sachin Kore, Dean (Student Affairs), followed by Director's address to the participants. Yoga Instructor Mr. Manmohan Sewda, Jr. Assistant, IIT Goa, demonstrated 19 different yoga asanas.</p>
				<a id="readMore" href="#">Read More ..   </a>
			</div>
			<div class="right">
				<img src="Images/article_3.png" alt=" ">
			</div>
		</div>

		<div class="dot-container">
			<div id="dot1" class="dot"></div>
			<div id="dot2" class="dot"></div>
			<div id="dot3" class="dot"></div>
		</div>
		<div id="lineBelowArticle"></div>

		<div class="belowMainArticle">
			<div class="leftSide">
				<div class="trending-article-header">
					Trending Article
				</div>
				<div class="trending-articles-container">
					<?php $trending_row = mysqli_fetch_assoc($trending_result); ?>
					<div class="image" style="background-image: url(Images/<?php echo $trending_row['article_image']; ?>); " id="one">
						<a href="article.php?type=trending&id=1"><div class="color">
							<div class="header">
								<h3><?php echo $trending_row['title']; ?></h3>
								<p>Know More </p>
							</div>
						</div></a>
					</div>

					<?php $trending_row = mysqli_fetch_assoc($trending_result); ?>
					<div class="image" style="background-image: url(Images/<?php echo $trending_row['article_image']; ?>); " id="two">
						<a href="article.php?type=trending&id=2"><div class="color">
							<div class="header">
								<h3><?php echo $trending_row['title']; ?></h3>
								<p>Know More </p>
							</div>
						</div></a>
					</div>
					
					<?php $trending_row = mysqli_fetch_assoc($trending_result); ?>
					<div class="image" style="background-image: url(Images/<?php echo $trending_row['article_image']; ?>); " id="three">
						<a href="article.php?type=trending&id=3"><div class="color">
							<div class="header">
								<h3><?php echo $trending_row['title']; ?></h3>
								<p>Know More </p>
							</div>
						</div></a>
					</div>
					
					<?php $trending_row = mysqli_fetch_assoc($trending_result); ?>
					<div class="image" style="background-image: url(Images/<?php echo $trending_row['article_image']; ?>); " id="four">
						<a href="article.php?type=trending&id=4"><div class="color">
							<div class="header">
								<h3><?php echo $trending_row['title']; ?></h3>
								<p>Know More </p>
							</div>
						</div></a>
					</div>
					
					<?php $trending_row = mysqli_fetch_assoc($trending_result); ?>
					<div class="image" style="background-image: url(Images/<?php echo $trending_row['article_image']; ?>); " id="five">
						<a href="article.php?type=trending&id=5"><div class="color">
							<div class="header">
								<h3><?php echo $trending_row['title']; ?></h3>
								<p>Know More </p>
							</div>
						</div></a>
					</div>
					
					<?php $trending_row = mysqli_fetch_assoc($trending_result); ?>
					<div class="image" style="background-image: url(Images/<?php echo $trending_row['article_image']; ?>); " id="six">
						<a href="article.php?type=trending&id=6"><div class="color">
							<div class="header">
								<h3><?php echo $trending_row['title']; ?></h3>
								<p>Know More</p>
							</div>
						</div></a>
					</div>
					
					<?php $trending_row = mysqli_fetch_assoc($trending_result); ?>
					<div class="image" style="background-image: url(Images/<?php echo $trending_row['article_image']; ?>); " id="seven">
						<a href="article.php?type=trending&id=7"><div class="color">
							<div class="header">
								<h3><?php echo $trending_row['title']; ?></h3>
								<p>Know More </p>
							</div>
						</div></a>
					</div>
					
					<?php $trending_row = mysqli_fetch_assoc($trending_result); ?>
					<div class="image" style="background-image: url(Images/<?php echo $trending_row['article_image']; ?>); " id="eight">
						<a href="article.php?type=trending&id=8"><div class="color">
							<div class="header">
								<h3><?php echo $trending_row['title']; ?></h3>
								<p>Know More </p>
							</div>
						</div></a>
					</div>
					
					<?php $trending_row = mysqli_fetch_assoc($trending_result); ?>
					<div class="image" style="background-image: url(Images/<?php echo $trending_row['article_image']; ?>); " id="nine">
						<a href="article.php?type=trending&id=9"><div class="color">
							<div class="header">
								<h3><?php echo $trending_row['title']; ?></h3>
								<p>Know More </p>
							</div>
						</div></a>
					</div>

				</div>					

				<div class="recent-article-header">
					Recent
				</div>

				<div class="recent-article-container">
					<div id="container-left">

						<?php $row = mysqli_fetch_assoc($recent_result); ?>					
						<div id="recent-one">
							<div class="recent-image" style="background-image: url(Images/<?php echo $row['article_image']; ?>); "></div>
							<div class="recent-brief">
								<a href="article.php?type=recent&id=<?php echo $row['id']; ?>">
									<div class="recent-title">
										<?php echo $row['title']; ?>
									</div>
								</a>
								<div class="category">
									<?php echo $row['category']; ?>
								</div>	
							</div>
						</div>
						
						<?php $row = mysqli_fetch_assoc($recent_result); ?>					
						<div id="recent-two">
							<div class="recent-image" style="background-image: url(Images/<?php echo $row['article_image']; ?>); "></div>
							<div class="recent-brief">
								<a href="article.php?type=recent&id=<?php echo $row['id']; ?>">
									<div class="recent-title">
										<?php echo $row['title']; ?>
									</div>
								</a>
								<div class="category">
									<?php echo $row['category']; ?>
								</div>	
							</div>
						</div>

						<?php $row = mysqli_fetch_assoc($recent_result); ?>
						<div id="recent-three">
							<div class="recent-image" style="background-image: url(Images/<?php echo $row['article_image']; ?>); "></div>
							<div class="recent-brief">
								<a href="article.php?type=recent&id=<?php echo $row['id']; ?>"> 
									<div class="recent-title">
										<?php echo $row['title']; ?>
									</div>
								</a>
								<div class="category">
									<?php echo $row['category']; ?>
								</div>	
							</div>
						</div>

						<?php $row = mysqli_fetch_assoc($recent_result); ?>
						<div id="recent-four">
							<div class="recent-image" style="background-image: url(Images/<?php echo $row['article_image']; ?>); "></div>
							<div class="recent-brief">
								<a href="article.php?type=recent&id=<?php echo $row['id']; ?>"> 
									<div class="recent-title">
										<?php echo $row['title']; ?>
									</div>
								</a>
								<div class="category">
									<?php echo $row['category']; ?>
								</div>	
							</div>
						</div>
					</div>

					<div id="container-right">
						<?php $row = mysqli_fetch_assoc($recent_result); ?>
						<div id="recent-five">
							<div class="recent-image" style="background-image: url(Images/<?php echo $row['article_image']; ?>); "></div>
							<div class="recent-brief">
								<a href="article.php?type=recent&id=<?php echo $row['id']; ?>"> 
									<div class="recent-title">
										<?php echo $row['title']; ?>
									</div>
								</a>
								<div class="category">
									<?php echo $row['category']; ?>
								</div>	
							</div>
						</div>

						<?php $row = mysqli_fetch_assoc($recent_result); ?>
						<div id="recent-six">
							<div class="recent-image" style="background-image: url(Images/<?php echo $row['article_image']; ?>); "></div>
							<div class="recent-brief">
								<a href="article.php?type=recent&id=<?php echo $row['id']; ?>"> 
									<div class="recent-title">
										<?php echo $row['title']; ?>
									</div>
								</a>
								<div class="category">
									<?php echo $row['category']; ?>
								</div>	
							</div>
						</div>

						<?php $row = mysqli_fetch_assoc($recent_result); ?>
						<div id="recent-seven">
							<div class="recent-image" style="background-image: url(Images/<?php echo $row['article_image']; ?>); "></div>
							<div class="recent-brief">
								<a href="article.php?type=recent&id=<?php echo $row['id']; ?>"> 
									<div class="recent-title">
										<?php echo $row['title']; ?>
									</div>
								</a>
								<div class="category">
									<?php echo $row['category']; ?>
								</div>	
							</div>
						</div>

						<?php $row = mysqli_fetch_assoc($recent_result); ?>
						<div id="recent-eight">
							<div class="recent-image" style="background-image: url(Images/<?php echo $row['article_image']; ?>); "></div>
							<div class="recent-brief">
								<a href="article.php?type=recent&id=<?php echo $row['id']; ?>"> 
									<div class="recent-title">
										<?php echo $row['title']; ?>
									</div>
								</a>
								<div class="category">
									<?php echo $row['category']; ?>
								</div>	
							</div>
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