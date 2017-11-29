<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/logo.ico">
	<title>PhotoInLife - orders</title>
</head>
<style>
	form{
		width:  1000px;
		margin: 0 auto;
		position: relative;
		top:30px;
	}
	h1{
		text-align: center;
	}
	table{
		border: 1px solid #bababa;
		border-radius: 5px;
		width: 1000px;
		position: relative;
		top:20px;
		
	}
	th:first-child,td:first-child{
		border-left: none;
		width: 50px;
	}
	th:nth-child,td:nth-child(2){
		width: 150px;
	}
	th:nth-child,td:nth-child(3){
		width: 150px;
	}
	th:nth-child,td:nth-child(4){
		width: 150px;
	}
	th:last-child,td:last-child{
		width: 210px;
	}
	th,td{
		border-left: 1px solid #bababa;
	}
	td{
		border-top:1px solid #bababa;
		border-bottom: 1px solid #bababa;
	}
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
</style>
<body>
<a class = "btn c" href="mainadmin.php">Вернуться назад</a>
<form>
<h1>Orders</h1>
	<table>
		<th>№</th>
		<th>Name</th>
		<th>E-mail</th>
		<th>Telephone</th>
		<th>Message</th>
		<th>Option</th>
		<tbody>
			<?php
			
			include 'db.php';
			$con = Database::connect();
			$sql = 'SELECT * FROM Orders ORDER BY idOrder DESC';
			foreach($con->query($sql) as $row){
				echo '<tr>';
				echo '<td>'. $row['idOrder'] .'</td>';
				$sql2 = 'SELECT * FROM Customer where idCustomer = ?';
				$cenge = $con->prepare($sql2);
				$cenge->execute(array($row['idCustomer']));
				$data = $cenge->fetch(PDO::FETCH_ASSOC);
				echo '<td>'. $data['Name'] .'</td>';
				echo '<td>'. $data['Email'] . '</td>';
				echo '<td>'. $data['Phone'] . '</td>';
				echo '<td>'. $row['Description'] .'</td>';
				echo '<td width=310>';
                                echo '<a href="Order_read.php?idOrder='.$row['idOrder'].'">Подробнее</a>';
                                echo ' ';
                                echo '<a href="Order_change.php?idOrder='.$row['idOrder'].'">Изменить</a>';
                                echo ' ';
                                echo '<a href="Order_delete.php?idOrder='.$row['idOrder'].'">Удалить</a>';
                            echo '</td>';
				echo '<tr>';
			}
            Database::disconnect();
			?>
		</tbody>
	</table>
</form>
</body>
</html>