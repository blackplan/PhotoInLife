<?php
require 'db.php';
$id = null;
if (!empty($_GET['idOrder'])){
	$id = $_REQUEST['idOrder'];
}
if(null==$id){
	header("Location: order.php");
}
else{
	$con = Database::connect();
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = 'SELECT * FROM Orders where idOrder = ?';
	$cange=$con->prepare($sql);
	$cange->execute(array($id));
	$data = $cange->fetch(PDO::FETCH_ASSOC);
	Database::disconnect();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/logo.ico">
	<title>PhotoInLife - просмотр заказа</title>
</head>
<body>
	<section>
		<h1>Заказ № <?php echo $id ?></h1>
		<h4>Имя клиента</h4><br>
		<div>
		<?php
		$sql2 = 'SELECT * FROM Customer where idCustomer = ?';
		$cange = $con->prepare($sql2);
        $cange->execute(array($data['idCustomer']));
        $data2 = $cange->fetch(PDO::FETCH_ASSOC);
		echo  $data2['Name'] 
		?>  
		</div><br>
		<h4>E-mail клиента</h4><br>
		<div>
		<?php 
		$sql2 = 'SELECT * FROM Customer where idCustomer = ?';
		$cange = $con->prepare($sql2);
        $cange->execute(array($data['idCustomer']));
        $data2 = $cange->fetch(PDO::FETCH_ASSOC);
		echo $data2['Email'] 
		?>
		</div><br>
		<h4>Телефон клиента</h4><br>
		<div>
			<?php 
			$sql2 = 'SELECT * FROM Customer where idCustomer = ?';
		$cange = $con->prepare($sql2);
        $cange->execute(array($data['idCustomer']));
        $data2 = $cange->fetch(PDO::FETCH_ASSOC);
		echo  $data2['Phone'] 
			?>
		</div>
		<h4>Сообщение оставленное клиентом</h4><br>
		<div>
			<?php
			$row = $con->prepare($sql);
			$row->execute(array($data['idOrder']));
			$data2 = $cange->fetch(PDO::FETCH_ASSOC);
			echo $data['Description'];
			?>
		</div><br>
		<br>
		<br>
		<br>
		<a href="order.php"><span><-Вернуться к заказам</span></a>
	</section>
</body>
</html>