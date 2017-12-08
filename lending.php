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
	<link rel="stylesheet" href="css/lending.css">
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
		<div class="welcome-block">
			<div class="blackout-pict"></div>
			<div class="wrap-menu">
		        	<a class = "menu"  href="main.php">Home</a>
		    		<a class = "menu" href="#" onclick= "gotoab()">About</a>
		       	 	<a class = "menu" href="contact.php">Contact me</a>
		       	 	<a class= "menu an" href="login.php">Login</a>
		       	 	<a class = "menu an" href="sing_up.php">Sind up</a>
		    </div>
		    <p class="site-name">PhotoInLife</p>
		    <p class="welcom-text">Добро пожаловать на сайт. Здесь вы найдете фото, которое вас может заинтересовать или же закажите свеою фотосессию прямо сейчас!</p>	
		    <button class = "gotobtn" onfocus="this.blur()"><div class="arrow" onclick="goto()"></div></button>
		</div>	
	</div>
	<div class="row weblock">
		<h5 class = "weknow">Мы знаем чего вы хотите</h5>
		<div class="line"></div>
	
	<div class="row colonabout">
			<div class="col-lg-2 col-lg-offset-2 colon">
				<object data="img/left.jpeg"class = "cardcolon" onclick="proverkal()"></object>
				<h6 class = "colhead chead">Быстрая покупка</h6>
				<p class = "coltext ctxt"> Вы не встертитесь с трудностями при покупки наших фото. Наш фотографии вы не встеретите на каждом втором сайте, по этому будте экслюзивным, не похожим на остальных.Сделайте первый шак к креативности сейчас, купите мое фото!</p>
			</div>
			<div class="col-lg-2 col-lg-offset-1 colon">
				<object data="img\central.jpg" class = "photocolon" onclick="proverkac()"></object>
				<h6 class = "colhead phead">Только эксклюзивное фото</h4>
				<p class = "coltext phtxt">Вы ищете что-то особенное, новое, то, чего нет нигде, что дейсвительно подойдет к вашему проекту или просто на стене вашей комнаты, то фото представленные на этом сайте как раз для вас. Здесь вы можете найти фото, которая поможет вам! </p>
			</div>
			<div class="col-lg-2 col-lg-offset-1 colon">
				<object data="img\right.jpeg" class = "cameracolon" onclick="proverkar()"></object>
				<h6 class = "colhead camhead">Личный фотограф? Пишите!</h4>
				<p class = "coltext camtxt">Вы очень любите качественные и тематические фотосесии, то вы на правильном сайте. Если вам нарвяться мои фото, то почему бы вам не сделать такие же, или лучше! Есвли вас заинтересовало, то напишите мне. </p>
			</div>
		</div>
	</div>
	<div class="row giveyou">
		<div class = " col-lg-6 givetext">
			<h5 class = "giveh">Выбирайте лучшее</h5>
			<div   class="line l"></div>
			<p class = "givep">Уникальные фотографии ждут вас. Только лучшее, только  современный стиль фото. Вы можете найти фото на любой вкус и цвет. Природа, города, люди, животные, все вы найдете здесь!</p>
		</div>
		<div class="col-lg-6 circles">
			<div class = "circle1 c">
				<object data = "img/baba.jpeg" class = "pictcir"></object>
				<h6 class = "namecir">Perfect sol</h6>
				<div class="line namel"></div>
				<p class="namecirp">You can buy this photo right now!</p>
				<button class="btn-buy" onfocus="this.blur()"><p>Buy</p></button>
			</div>
			<div class = "circle2 c">
				<object data="img/family.jpg" class = "pictcir pc"></object>
				<h6 class="namecir nc">Beauty family</h6>
				<div class="line namel nl"></div>
				<p  class="namecirp ncp">You can buy this photo right now!</p>
				<button class="btn-buy bb" onfocus="this.blur()"><p>Buy</p></button>
			</div>
			<div class = "circle3 c">
				<object data ="img/chel.jpg" class = "pictcir pc2"></object>
				<p class ="likeaph">Like a photo? i can be your photographer</p>
				<button class="cont-btn" onfocus="this.blur()"><p>Contact</p></button>
			</div>
		</div>
	</div>
	<div id = "ab" class="row aboutme">
		<div  class="col-lg-6 myphoto">
	<div class = "meph"><object data="img/me.jpeg" class="meme" ></object></div>
			<p class ="myname">Yura Seryogin</p>
		</div>
		<div class="col-lg-6 abouttex">
			<h5 class = 'amap'>Про меня и проект</h5>
			<div class="abl line"></div>
			<p class="hiabt">Привет! Мое имя Юра и я фотограф. Я обожаю путиевствовать и искать новые темы для фото, и я решил, что я должен поедлиться своими работами с миром. Если вы любите необыкновенные пейзажи, большие города, с высокими небоскребами, фото красивых людей или же животных, то вам понравяться мои работы. Если вы хотите, чтобы я устроил вам фотосессию, то свзяжитесь со мной. Создадим немного прикрасного!</p>
			
		</div>
	</div>
	<div class="row">
	 <div class="contactme">
		<div class="blackout-pict bp"></div> 
		<p class="site-name sn">PhotoInLife</p>
		<p class="laph">Есть вопросы? С радостью на них ответим!</p>
		<button class="cont-btn cb" onclick ="location.href ='contact.php'" onfocus="this.blur()">Связаться</button>
		<div>
		<p class = "foot">©PhotoInLife</p>
		<div class = "foot">
			<a class="collin" href="#" onclick ="gotoab()">About</a>
			<a class="collin" href="contact.html">Contact</a>
			<a class="collin" href="#">License</a>
			<a class="collin" href="#">Privacy policy</a>
		</div>
		 <p class = "foot">Yura Seryogin <a href="" class="collin" href="#">yuraseryogin@gmail.com</a></p> 
		</div>
		<a id = "anchor"></a>
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