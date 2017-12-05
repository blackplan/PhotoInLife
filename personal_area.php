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
<!--	<link rel="stylesheet" href="css/main.css">-->
	<link rel="shortcut icon" href="img/logo.ico">
	<link rel="stylesheet" href="css/font.css">
	<link rel="stylesheet" href="css/personal_area.css">
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
		<div class="wrap-menu">
			<a id = "home" href="main.php" class="menu">Home</a>
<!--			<lable for = "#home"></lable>-->
			<a  class="menu" onclick="opensearch()">Search</a>
			<a href="lending.php" class="menu" onclick ="gotoab()">About</a>
			<a href="contact.php" class="menu">Contact</a>
		</div>
		<div>
		<div class ="cl" onclick="ex()">+</div>
		<input class="search" type="text">
		</div>
	</div>
	<div class="row">
		<div class = "desc_wrap">
		<div class = "col-lg-offset-4 col-lg-2">
			<div class = "avatar"></div>
		</div>
		<div class = "col-lg-2">
			<h3 class = "pers_name">Kristofer Koshunski</h3>
			<p class= "pers_desc">Some description about this man, who is he, what is he loking for, or something else</p>
		</div>	
		</div>
		<div class = "btm_line"></div>
	</div>
	<div class="row r_spase">
		<div class="col-lg-offset-2 col-lg-3">
			<div class = "b_foto"></div>
			<div class="save_btn"></div>
		</div>
		<div class="col-lg-3">
			<div class = "b_foto"></div>
			<div class="save_btn"></div>
		</div>
		<div class="col-lg-3">
			<div class = "b_foto"></div>
			<div class="save_btn"></div>
		</div>
	</div>
	<div class="row r_spase">
		<div class="col-lg-offset-2 col-lg-3">
			<div class = "b_foto"></div>
			<div class="save_btn"></div>
		</div>
		<div class="col-lg-3">
			<div class = "b_foto"></div>
			<div class="save_btn"></div>
		</div>
		<div class="col-lg-3">
			<div class = "b_foto"></div>
			<div class="save_btn"></div>
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