<br>

<form action="home.php" method="post" enctype="multipart/form-data">
		<input type="Submit" name="submit" value="Go Back">
</form>
<br>
<br>



<?php

$myfile1 = fopen("logs.txt", "r" ) or die("Unable to open the file !");

while(!feof($myfile1)){
	echo fgets($myfile1);
	echo "<br>";
}
fclose($myfile1);
?>