<?php 
require 'db.php';

$id = null;
     
    if ( !empty($_GET['idOrder'])) {
        $id = $_REQUEST['idOrder'];
    }
     
    if ( !empty($_POST)) {
   
        $id = $_POST['id'];
         
        $con = Database::connect();
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM Orders  WHERE idOrder = ?";
        $change = $con->prepare($sql);
        $change->execute(array($id));
        Database::disconnect();
        header("Location: order.php");
         
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PhotoInLife - удаление заказа</title>
</head>
<body>
	<form action="Order_delete.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id;?>"/>
                      <p>Вы уверены?</p>
                      <div >
                          <button type="submit" class="btn btn-danger">Да</button>
                          <a href="Orders.php">Нет</a>
                        </div>
	</form>
</body>
</html>