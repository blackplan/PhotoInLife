<html lang="en">
<head>
	<link rel="shortcut icon" href="img/logo.ico">
	<title>PhotoInLife</title>
</head>

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
		height: 50px;
		width: 200px;
		border: 2px solid #242424;
		background: white;
		color:#242424;
		padding: 15px 30px;
		font-size: 12pt;
		top:40px;
		text-align: center;
	}
	div{
		position: relative;
		width:120px; 
		height:120px; 
		background: url(../PhotoInLife/img/logo.png);
		background-size:cover;
		left: 27%;
		top: 10px;
	}
</style>
<body>
	<form>
		<h1>Ввход в аккаунт PhotoInLife</h1>
		<div></div>
		<input id="login" type="text" placeholder="Введите логин"><br>
		<input id="password" type="password" placeholder="Введите пароль"><br>
		<input type="submit" name="submit" id="submit" class ="btn" value="Вход">
	</form>
</body>
<script src = "js/jquery-1.11.3.min.js"></script>
</html>