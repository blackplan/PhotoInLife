<?php 
require 'db.php'; 
$id = null; 
	if ( !empty($_GET['idOrder'])) { 
		$id = $_REQUEST['idOrder']; 
	} 

	if ( null==$id ) { 
		header("Location: order.php"); 
	} 
	if(!empty($_POST)){ 
		$nameError = null; 
		$emailError = null; 
		$phoneError = null; 
		$descriptionError = null; 

		$name = $_POST['name']; 
		$email= $_POST['email']; 
		$phone= $_POST['phone']; 
		$description = $_POST['description']; 
		$idOrder = $id; 
		$valid = true; 

		if(empty($name)){ 
			$nameError = 'Данное поле обязательно!'; 
			$valid = false; 
		} 
		if(empty($email)){ 
			$emailError = 'Данное поле обязательно!'; 
			$valid = false; 
		} 
		if(empty($phone)){ 
			$phoneError = 'Данное поле обязательно!'; 
			$valid = false; 
		} 
		if($valid){ 
			$con =Database::connect(); 
			$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
			$sql = '
			SET @orderId = ? ; 
			UPDATE Orders SET Description = ? WHERE idOrder = @orderId; 
			UPDATE Customer SET Name = ?, Email = ?, Phone = ? WHERE idCustomer = (SELECT idCustomer FROM Orders WHERE idOrder = @orderId )';
			$change = $con->prepare($sql); 
			$change->execute(array($idOrder,$description, $name, $email, $phone)); 
			Database::disconnect(); 
			header("Location: order.php"); 
		} 
		else{ 
			$con =Database::connect(); 
			$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
			$sql = 'SELECT * FROM Orders where idOrder = ?'; 
			$change = $con->prepare($sql); 
			$change->execute(array($id)); 
			$data = $change->fetch(PDO::FETCH_ASSOC); 
			$description = $data['Description']; 

			$sql2 = 'SELECT * FROM Customer where idCustomer = ?'; 
			$change =$con->prepare($sql2); 
			$change->execute(array($data['idCustomer'])); 
			$data = $change->fetch(PDO::FETCH_ASSOC); 
			$name = $data['Name']; 
			$nmail= $data['Email']; 
			$nhone = $data['Phone']; 
			Database::disconnect(); 
		} 
	} 
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/logo.ico">
	<title>PhotoInLife - изменение заказа</title>
</head>
<body>
	<form action="Order_change.php?idOrder=<?php echo $id?>" method="post">
		<div class="<?php echo !empty($nameError)?'error':'';?>">
			Имя клиента 
			<input type="text" name="name" value="<?php echo !empty($name)?$name:'';?>">
			<?php if (!empty($nameError)): ?>
            <span class="text-warning"><?php echo $nameError;?></span>
            <?php endif;?>
		</div>
		<div class="<?php echo !empty($emailError)?'error':'';?>">
			E-mail клиента
			<input type="text" name="email" value="<?php echo !empty($email)?$email:'';?>">
			<?php if (!empty($emailError)): ?>
            <span class="text-warning"><?php echo $emailError;?></span>
            <?php endif;?>
		</div>
		<div class="<?php echo !empty($phoneError)?'error':'';?>">
			Телефон клиента 
			<input type="text" name="phone" value="<?php echo !empty($phone)?$phone:'';?>">
			<?php if (!empty($phoneError)): ?>
            <span class="text-warning"><?php echo $phoneError;?></span>
            <?php endif;?>
		</div>
		<div class="<?php echo !empty($descriptionError)?'error':'';?>">
			Сообщение клиента 
			<textarea type="text" name="description" value="<?php echo !empty($description)?$description:'';?>"></textarea>
			<?php if (!empty($descriptionError)): ?>
            <span class="text-warning"><?php echo $descriptionError;?></span>
            <?php endif;?>
		</div>
		<div>
          	<button type="submit">Подтвердить</button><br>
            <a href="order.php"> <- Вернуться назад </a>
       	</div>
	</form>
</body>
</html>