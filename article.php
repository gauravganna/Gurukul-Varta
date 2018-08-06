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
      
        $query = "SELECT * FROM articles WHERE id=" . $id ;
    }


$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result); 

//To keep a count of Number of visitors
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
	
	$client_ip = get_client_ip();
	//If We can't find the IP address of the client,just add 1 to number of visitors for that article.
	if($client_ip == "UNKNWORN"){		
		$update_query = "UPDATE articles SET num_of_visitors = " . ($row['num_of_visitors'] + 1) . "WHERE id = " . $id;
		$update_result = mysqli_query($conn,$update_query);
	}
	//If we find IP address of the client, we check if the same ip address is present in the records and if it does then see if it is above the window period of 1 day or not.
	else {
		$update_query = "SELECT * FROM visitors WHERE ip = " . $client_ip;
		$update_result = mysqli_query($conn,$update_query);
		$update_rowNum = mysqli_num_rows($update_result);
		if($update_rowNum == 0){
			$newEntry_query = "INSERT INTO visitors VALUES ('" . $client_ip . "','" . date('Y-m-d H:i:s') . "')";			
			mysqli_query($conn,$newEntry_query);
			$update_query = "UPDATE articles SET num_of_visitors = " . ($row['num_of_visitors'] + 1) . " WHERE id = " . $id;
			$update_result = mysqli_query($conn,$update_query);
		}
		else if(strtotime($update_rowNum['date']) - time() > 86400) {
			$newEntry_query = "UPDATE visitors SET date = " . date('Y-m-d H:i:s') . " WHERE ip = " . $client_ip;
			$newEntry_result = mysqli_query($conn,$newEntry_query);
			$update_query = "UPDATE articles SET num_of_visitors = " . ($row['num_of_visitors'] + 1) . "WHERE id = " . $id;
			$update_result = mysqli_query($conn,$update_query);
		}
	}


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
	
			<?php require 'Template/template-aside.php'; ?>
		</div>
	</section>

	<?php require 'Template/template-footer.html'; ?>
</body>
</html>