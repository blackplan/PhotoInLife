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
	<link rel ="stylesheet" href = "css/photo_page.css">
 	
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
			<a  class="menu"></a>
			<a href="lending.php" class="menu" onclick ="gotoab()">About</a>
			<a href="contact.php" class="menu">Contact</a>
		</div>
	</div>
	</div>
	<div class = "row">
		<div class = "col-lg-offset-2 col-lg-4">
			<div class = "photo_pict"></div>
		</div>
		<div class = "col-lg-offset-1 col-lg-3">
		<div class="ph_group">
			<h3>Name of photo</h3>
			<p>Description text text text text Description text text text texDescription text text text texDescription text text text texDescription text text text texDescription text text text texDescription text text text texDescription text text text tex</p>
			<button onclick="buy()" id = "buy" class = "buy" >Купить</button>
		</div>
		<div class = "buy_form_group">
		<h3>Покупка фото</h3>
			<form action="">
				<div class="group">
					<input id ="name" type="text" name="name" placeholder ="Введите ФИО" required>
				<lable for="name" >Name</lable>
				</div>
				
				<div class="group">
					<input id = "e-m" type="text" name ="email" placeholder="Введите E-mail" required>
				<lable for = "e-m">E-mail</lable>
				</div>
				
				<div class="group">
					<input id = "pn" type="text" name="tel" placeholder="Введите телефон" required>
				<lable for ="pn">Telephon</lable>
				</div>
				
				<div class="group">
					<input id="cardn" type="text" name="cn" placeholder="Введите номер карты"  required>
				<lable for="cardn">Card number</label>
				
				<input id="cvc" type="text" name="cvc" placeholder="CVC" required>
				<lable for="cvc">CVC</label>
				</div>
				
			
				<input class = "btn_s" type="submit">
			</form>
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