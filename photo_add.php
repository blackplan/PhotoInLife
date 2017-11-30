<?php 
require 'db.php';



if(!empty($_POST)){
	$title = $_POST['title'];
	$description = $_POST['description'];
	$pref = '../PhotoInLife/';
	$path = 'content/';
	$ext = array_pop(explode('.',$_FILES['myfile']['name'])); // расширение
	$new_name = time().'.'.$ext; // новое имя с расширением
	$full_path = $path.$new_name; // полный путь с новым именем и расширением
	if(empty($_FILES['myfile']['size']))  die('Вы не выбрали файл');
	if($_FILES['myfile']['error'] == 0){
    if(move_uploaded_file($_FILES['myfile']['tmp_name'], $full_path)){
		$server = $pref.$full_path;
		$valid = true;
	if($valid){
		$con = Database::connect();
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		$sql = 'INSERT INTO Photo (Content, Title, Description) values (?, ?, ?)';
		$data = $con->prepare($sql);
		$data->execute(array($server, $title, $description));
		Database::disconnect(); 
		header("Location: photo.php"); 
	}
    }
}
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/logo.ico">
	<title>PhotoInLife - Add photo</title>
</head>
<style>
	.btn{
		border: 2px solid black;
		text-decoration: none;
		color: black;
		padding: 15px 26px;
	}
.c{
		position: relative;
		top:17px;
	}
	form{
		position: relative;
		top:40px;
}
</style>
<body>
<a class ="btn c"  href="photo.php">Вернуться назад</a>
	<form action="photo_add.php" method="post" enctype="multipart/form-data">
  <p>
   	<input type="text" name="title"><br><br>
   	<textarea name="description" cols="30" rows="10"></textarea><br>
    <label>
      <input type="file" name="myfile" id="myfile">
    </label>
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Отправить">
  </p>
	</form>
</body>
</html>