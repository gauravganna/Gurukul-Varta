<script type="text/javascript">
	function validateEmail(){
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if(this.readyState == 4 && this.status == 200){
				if(this.responseText == "OK") {
					document.getElementById("displayOnValidation").innerHTML = "Your Email has been subscribed!!";
					document.getElementById("displayOnValidation").style.display = "block";
					document.getElementById("emailform").style.display = "none";
				}
				else {
					document.getElementById("displayOnValidation").innerHTML = "Please enter a valid Email address!!";
					document.getElementById("displayOnValidation").style.display = "block";
					document.getElementById("emailbox").value = "";
				}
			}
		}
		
		xhttp.open("GET", "validateEmail.php?Email=" + document.getElementById("emailbox").value, true);
    	xhttp.send();
	}
</script>

<?php

$query = "SELECT * FROM articles ORDER BY num_of_visitors DESC,`date` ASC";
$result = mysqli_query($conn,$query);
?>
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
						<form autocomplete="off" id="emailform">
							<p>Email : </p>
							<input type="text" id="emailbox" name="Email" placeholder="abc@xyz.com">
							<button type="button" onclick="validateEmail()">Submit</button>
						</form>
							<p id="displayOnValidation" style="display: none;"></p>
					</div>
				</div>

				<!-- <div class="poll">
					<div class="header">
						Poll of the Week
					</div>
					<div class="poll-container">
						
					</div>
				</div> -->

				<div class="most-popular">
						<div class="header">
							All Time Popular
						</div>
						<?php $row = mysqli_fetch_assoc($result);
						echo '<a href="article.php?type=atp&id=' . $row['id'] . '"><div class="most-popular-container">' . $row['title'] . '</div></a>';
						$row = mysqli_fetch_assoc($result);
						echo '<a href="article.php?type=atp&id=' . $row['id'] . '"><div class="most-popular-container">' . $row['title'] . '</div></a>';
						$row = mysqli_fetch_assoc($result);
						echo '<a href="article.php?type=atp&id=' . $row['id'] . '"><div class="most-popular-container">' . $row['title'] . '</div></a>';
						$row = mysqli_fetch_assoc($result);
						echo '<a href="article.php?type=atp&id=' . $row['id'] . '"><div class="most-popular-container">' . $row['title'] . '</div></a>';
						$row = mysqli_fetch_assoc($result);
						echo '<a href="article.php?type=atp&id=' . $row['id'] . '"><div class="most-popular-container">' . $row['title'] . '</div></a>';
						?>
				</div>

				<div class="social-plugin">
					<div class="header">
						Social Plugin
					</div>
					<div class="social-plugin-container">
						<div class="fb-page" data-href="https://www.facebook.com/GurukulVarta" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/GurukulVarta" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/GurukulVarta">Gurukul Varta - The IIT Goa Campus Newsletter</a></blockquote></div>
					</div>
				</div>

				

<!-- 				<div class="sister-media-bodies">
					<div class="header">
						Sister Media Bodies
					</div>
					<div class="sister-media-body-container">
						<ul>
							<li><a href="http://www.insightiitb.org" target="_blank">Insights, IIT Bombay</a></li>
							<li><a href="http://www.t5eiitm.org/" target="_blank">The Fifth Estate, IIT Madras</a></li>
							<li><a href="http://www.voxiitk.com" target="_blank">Vox Populi, IIT Kanpur</a></li>
							<li><a href="http://www.wona.co.in/" target="_blank">Watch Out, IIT Roorkee</a></li>
							<li><a href="http://bsp.iitd.ac.in" target="_blank">BSP, IIT Delhi</a></li>
							<li><a href="http://www.scholarsavenue.org/" target="_blank">Scholars Avenue, IIT Kharagpur</a></li>
						</ul>
					</div>
				</div> -->

					<!--Replace Anything Else With the Name of the Section and change accordingly in css file-->
				<!-- <div class="anything-else">
					<div class="header">
						Anything Else
					</div>
					<div class="anything-else-container">
						
					</div>
				</div> -->

			</aside>