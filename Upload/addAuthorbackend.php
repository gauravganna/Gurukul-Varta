<?php

$target_dir = "authorImages/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);
$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (isset($_POST["submit"])) {
	$check = getimagesize($_FILES["img"]["tmp_name"]);
	 if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }	
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
    	chmod($target_file, 0755);
        echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

require_once 'inf.php';
 $conn = mysqli_connect($db_hostname, $db_user, $db_password, $db_database);
 
 if($conn){
 	echo "<p> connection successful </p>";
 }
 else{
 	echo "<p> not connected </p>";
 }

 $name = $_POST['authorName'];
 $imgname  = $_FILES["img"]["name"];
 $authorDesignation = $_POST['authorDesignation'];

$sql = "INSERT INTO authorInf (author, author_img , authorDesignation) VALUES ('$name', '$imgname', '$authorDesignation')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


			 //  $query = "SELECT * FROM authorInf";
			 //  $results = mysqli_query($conn , $query);
			 //  $numrows=mysqli_num_rows($results);

			 //  echo "<table>";
			 //   for($j=0;$j<$numrows;++$j){
			 //       $rows=mysqli_fetch_row($results); 
				// print "<tr><td>"."$rows[0]"."</td><td>"."$rows[1]"."</td></tr>";
			 //   } 
				// echo "</table>";

mysqli_close($conn);
?>

<form action="home.php" method="post" enctype="multipart/form-data">
	<input type="Submit" name="submit" value="Back To homepage">
</form>