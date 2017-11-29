<?php 
require 'db.php';

$id = null;
     
    if ( !empty($_GET['idPhoto'])) {
        $id = $_REQUEST['idPhoto'];
    }
     
    if ( !empty($_POST)) {
   
        $id = $_POST['id'];
         
        $con = Database::connect();
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM Photo  WHERE idPhoto = ?";
        $change = $con->prepare($sql);
        $change->execute(array($id));
        Database::disconnect();
        header("Location: photo.php");
         
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PhotoInLife -delete</title>
</head>
<style>
	.btn{
		border: 2px solid black;
		padding: 10px 25px;
		background: white;
		text-decoration: none;
		color:black;
	}
</style>
<body>
	<form action="photo_del.php" method="post">
	<h1>Вы уверены?</h1>
	<input type = 'hidden' name ="id" value="<?php echo $id;?>"/>
	<button class = "btn" type="submit">Да</button>
	<a class ="btn" href="photo.php">Нет</a>
	</form>
</body>
</html>