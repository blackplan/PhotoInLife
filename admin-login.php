<html lang="en">
<head>
	<link rel="shortcut icon" href="img/logo.ico">
	<title>PhotoInLife - admin</title>
</head>
<script>
	function input(){
	if ($('#login').val() == "goodday" && $('#password').val() == 060597){
		document.location = "mainadmin.php"}
	else{
		alert("Неверно введены данные")
	}
	}
</script>
<style>
	body{
		position: relative;
	}
	form{
		position: relative;
		width: 500px;
		margin: 0 auto;
		top: 25px;
	}
	input{
		border: 1px solid #808080;
		height: 25px;
		width: 198px;
		position: relative;
		left: 20%;
		top:40px;
		margin-bottom: 5px;
	}
	.btn{
		margin-top: 15px;
		position: relative;
		left: 20%;
		height: 20px;
		width: 196px;
		border: 2px solid #242424;
		background: white;
		color:#242424;
		padding: 15px 0;
		font-size: 12pt;
		top:40px;
		text-align: center;
	}
	div{
		position: relative;
		width:120px; 
		height:120px; 
		background:url(../web/img/logo.png);
		background-size:cover;
		left: 27%;
		top: 10px;
	}
</style>
<body>
	<form>
		<h1>Авторизация в админ панель</h1>
		<div></div>
		<input id="login" type="text" placeholder="Введите логин"><br>
		<input id="password" type="password" placeholder="Введите пароль"><br>
		<div class="btn" onclick="input()">Вход</div><br>
	</form>
</body>
<script src = "js/jquery-1.11.3.min.js"></script>
</html>