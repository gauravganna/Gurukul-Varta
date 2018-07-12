<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Login</title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			
		}
		#container{
			border-style: none;
			width: 350px;
			height: 400px;
			position: absolute;
			top: 15%;
			left: 60%;
			background: #808080;
			z-index: 1;
		}
		.headStyle{
			color: white;
			padding-top: 50%;
		}
		.avatar{
			width: 80%;
			border-radius: 50%;
		}
		.imgcon{
			text-align: center;
			margin-bottom: 0;
			margin-top: -28%;
		}
		.lgn{
			margin-top: -20%;
		 	margin-left: 15%;
			
		}
		input[type=text] , input[type=Password] {
			display: inline-block;
			width: 80%;
			padding: 8px 20px;
			margin: 8px 0 ;
			border : 1px solid #ccc;
			box-sizing: border-box;
		}
		button{
			width: 80%;
			color: white;
			border : none;
			padding: 14px 20px;
			background-color: #ff9933;
			cursor: pointer;
		}
		#row{
			float: left;
		}
		#imgPos{
			position: absolute;
			top: 40%;
			left: 10%;
		}
		.imgSiz{
			width: 40%;
		}
		@media screen and (max-width: 768px) {
		    #container{
		    	margin-top: 10%;
		    	left: 17%;
		    	width: 70%;
		    }
		    #imgPos{
		    	top: 5%;
		    	left: 26%;
		    }
		    .imgSiz{
		    	width: 80%;
		    }
		}
	</style>
</head>
<body>
	<header></header>
	<form action="validation.php" method="post" enctype="multipart/form-data">
		<div id="row">
			<div id="imgPos">
				<img src="gurk.jpeg" class="imgSiz">
			</div>
			<div id="container">
				<div class="imgcon">
					<img src="men.png" class="avatar">
				</div>
				<div class="lgn">
					<label for="uname"><b>Username</b></label>
					<input type="text"  placeholder="Enter Username" name="uname" required>
					<label for="psw"><b>Password</b></label>
					<input type="Password" placeholder="Enter Password" name="psw" required>
					<br>
					<br>
					<button type="submit">Login</button>
				</div>
			</div>
		</div>
	</form>
</body>


</html>