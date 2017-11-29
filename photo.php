<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/logo.ico">
	<title>PhotoInLife - photo</title>
</head>
<style>
	section{
		width: 800px;
		margin: 0 auto;
	}
	article{
		margin-top: 30px;
		width: 790px;
		height: 400px;
	}
	.photost{
		position: relative;
		top:30px;
		width: 400px;
		height: 280px;
	}
	.title{
		position: relative;
		top: -320px;
		left: 550px;
		font-size: 20pt;
		width: 200px;
	}
	.descrip{
		position: relative;
		top: -320px;
		left: 450px;
		font-size: 15pt;
		width: 200px;
	}
	.btn{
		border: 2px solid black;
		text-decoration: none;
		color: black;
		padding: 15px 26px;
	}
	.g{
		position: relative;
		top:-160px;
		left: 450px;
	}
	.g:last-child{
		left:460px;
	}
	.add{
		float: right;
	}
	.c{
		position: relative;
		top:17px;
	}
</style>
<body>
<a class ="btn c" href="mainadmin.php">Вернуться назад</a>
<a class = "btn add" href="photo_add.php">Добавить</a>
<section>
<h1 style="text-align: center; font-size:25pt;">Photos</h1>
<?php 
	include 'db.php';
	$con = Database::connect();
	$sql = 'SELECT * FROM Photo ORDER BY idPhoto DESC';
	foreach ($con->query($sql) as $row){
	echo 	'<article>';
	echo	'<div class = "photost" 
			style ="background:  url('. $row['Content'].');
			background-size: cover ;" ></div>';
	echo	'<h4 class="title">'. $row['Title'] .'</h4>';
	echo	'<p class = "descrip">'. $row['Description'].'</p>';
	echo	'<a class = "btn g"  href="photo_del.php?
			idPhoto='. $row['idPhoto'].'">Удалить</a>';
	echo	'<a class = "btn g"  href="photo_change.php?
			idPhoto='. $row['idPhoto'].'">Изменить</a>';
	echo	'</article>';
	echo 	'<div style ="width: 100%;
		background: red;
		height: 2px;"></div>';
	
	}
	Database::disconnect();
?>
</section>
</body>
</html>