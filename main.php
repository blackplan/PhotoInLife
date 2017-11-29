<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>PhotoInLife</title>
	<!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="shortcut icon" href="img/logo.ico">
	<link rel="stylesheet" href="css/font.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body oncopy="return false;">	
<div class="container-fluid">
	<div class="row">
		<div class ="pict" window.onload="presentaition()">
			<div class ="blackout-pict"></div>
		</div>
		<div class="wrap-menu">
			<a id = "home" href="main.php" class="menu">Home</a>
<!--			<lable for = "#home"></lable>-->
			<a  class="menu" onclick="opensearch()">Search</a>
			<a href="lending.php" class="menu" onclick ="gotoab()">About</a>
			<a href="contact.php" class="menu">Contact</a>
		</div>
		<p class = "namesait">PhotoInLife</p>
		<p class = "found">Найдите свое фото прямо сейчас</p>
		<div>
		<div class ="cl" onclick="ex()">+</div>
		<input class="search" type="text">
		</div>
	</div>
	<div class="row categoriy">
	<div>
		<div class="circle">
			<p class="town">Town</p>
		</div>
		<div class="circle">
			<p class ="people">People</p>
		</div>
		<div class="circle">
			<p class="nature">Nature</p>
		</div>
	</div> 	
	</div>
	<div class="row photolist">
		<h5 class="allph">Все фото</h5>
		<div class="line"></div>
		<div>
		<?php 
		
			include 'db.php';
			
			$con = Database::connect();
			$sql = 'SELECT * FROM Photo ORDER BY idPhoto DESC';
				foreach ($con->query($sql) as $row){
					echo '<div class="col-lg-6 col-lg-offset-3 bwithph">';
					echo '<div class="inside" style ="background:  url('. $row['Content'].');
	background-size: 101% ;">';
					echo '<div class="blackout">';
					echo '<div class="posish">';
					echo '<h5>'. $row['Title'] .'</h5>';
					echo '<p>'. $row['Description'].'</p>';
					echo '<a href="">Go to photo</a>';
					echo '</div>';
					echo '</div>';
					echo '</div>';
					echo '</div>';
				}
			Database::disconnect();
			
		?>
	
		</div>
		<div class="loding">
			<div class="kr"></div>
			<div class="kr"></div>
			<div class="kr"></div>
		</div>
	</div>
	
</div>
	
	
	
	
	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-1.11.3.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/script.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>