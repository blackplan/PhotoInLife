
<?php 
require 'db.php'; 
if ( !empty ($_POST)){ 
$name = $_POST['name']; 
$phone = $_POST['phone']; 
$email = $_POST['email']; 
$description = $_POST['description']; 

$valid = true; 
if ($valid) { 
$pdo = Database::connect(); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

$query = '
 INSERT INTO Customer (Name, Phone, Email) values (?, ?, ?);
 
 INSERT INTO Orders (Description, idCustomer) values (?, (SELECT idCustomer FROM Customer ORDER BY idCustomer DESC LIMIT 1 ));
 '; 
  
$q = $pdo->prepare($query); 
$q->execute(array($name, $phone, $email,$description));   
  
Database::disconnect(); 
header("Location: contactdone.php"); 
} 
} 
?>
	

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
	<link rel="stylesheet" href="css/contact.css">
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
	<div class="row  con">
	<div class="header">
		<a class ="menu" href="main.php">Home</a>
		<a class ="menu"  href="lending.php" onclick ="gotoab()">About</a>
		<a class ="menu"  href="contact.php">Contact</a>
	</div>
	<div class="picture"></div>
	
	<h4 class="he1">Свяжитесь с нами сейчас</h4>
<div class ="giveup">
		<form class = "message" action="contact.php" method="post">
			<div class="col-lg-4 col-lg-offset-2 block_2">
				<div class="group">
	    	<input id ="name" type="text" name="name" required value="<?php echo !empty($name)?$name:'';?>">
	    	<span class="bar"></span>
			<lable for="name" >Name</lable>
		</div>
		<div class="group">	
			<input id = "e-m" type="text" name ="email" required  value="<?php echo !empty($email)?$email:'';?>">
			<span class="bar"></span>
			<lable for = "e-m">E-mail</lable>
		</div>	
		<div class="group">
			<input id = "telph" type="text" name = "phone" required value="<?php echo !empty($phone)?$phone:'';?>">
			<span class="bar"></span>
			<lable for ="telph">Telephone</lable>
		</div>
		</div>
		<div class="col-lg-4 block_1">
		<div class="group2 group">
			<textarea id = "tex" type="text" onkeyup="l()" name ="description" required value = "<?php echo !empty($description)?$description:'';?>"></textarea>
			<span class="bar"></span>
			<lable>Your message</lable>
		</div>
		<button class = "btn" type="submit">Отправить</button>
			</div>
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