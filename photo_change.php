<?php
require 'db.php'; 
$id = null; 
	if ( !empty($_GET['idPhoto'])) { 
		$id = $_REQUEST['idPhoto']; 
	} 

	if ( null==$id ) { 
		header("Location: photo.php"); 
	} 
if(!empty($_POST)){ 
		$titleError = null;  
		$descriptionError = null; 
		$extError = null;

		$title = $_POST['title']; 
		$description = $_POST['description']; 
//		$pref = '../web/';
//		$path = 'content/';
//		$ext = array_pop(explode('.',$_FILES['myfile']['name'])); // расширение
//		$new_name = time().'.'.$ext; // новое имя с расширением
//		$full_path = $path.$new_name; // полный путь с новым именем и расширением
//			if(empty($_FILES['myfile']['size']))  die('Вы не выбрали файл');
//			if($_FILES['myfile']['error'] == 0){
//   				if(move_uploaded_file($_FILES['myfile']['tmp_name'], $full_path)){
//					$server = $pref.$full_path;
	$valid = true;
						if(empty($title)){ 
						$titleError = 'Данное поле обязательно!'; 
						$valid = false; 
						} 
						if(empty($description)){ 
						$descriptionError= 'Данное поле обязательно!'; 
						$valid = false; 
						} 
//						if(empty($ext)){ 
//						$extError = 'Данное поле обязательно!'; 
//						$valid = false; 
//						}  
						if($valid){ 
							$con =Database::connect(); 
							$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							$sql ="UPDATE Photo set  Title =?, Description =? where idPhoto = ?";
							$change = $con->prepare($sql); 
							$change->execute(array($title, $description, $id)); 
							Database::disconnect(); 
							header("Location: photo.php");
							}
							else{
							$con =Database::connect(); 
							$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
							$sql = 'SELECT * FROM Photo where idPhoto = ?'; 
							$change = $con->prepare($sql); 
							$change->execute(array($id)); 
							$data = $change->fetch(PDO::FETCH_ASSOC); 
							$title = $data['Title']; 
							$description = $data['Description']; 
							Database::disconnect(); 
							}
					}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/logo.ico">
	<title>PhotoInLife - photo-change</title>
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
	
	<form action="photo_change.php?idPhoto=<?php echo $id?>" method="post" enctype="multipart/form-data">
   	<input type="text" name="title" value="<?php echo !empty ($title)?$title:''; ?>"><br><br>
   	<textarea name="description" cols="30" rows="10"  ><?php echo !empty($description)?$description:''; ?></textarea><br>
   <input type="submit" name="submit" id="submit" value="Отправить"><br>
	</form>
</body>
</html>