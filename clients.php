<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Clients</title>
</head>
<style> 
	td{
		border: 1px solid black
	}
	a{
		position: relative;
		top:20px;
		display: block;
		border: 2px solid black;
		width: 150px;
		height: 25px;
		padding: 10px 15px;
		text-align: center;
		text-decoration: none;
		color: black;
	}
	table{
		position: relative;
		top:30px;
		width: 400px;
	}
</style>
<body>
<a href="mainadmin.php">Вернуться назад</a>
<table>
<th>Name</th>
<th>E-mail</th>
<th>Telephone</th>
<tbody>
	<?php 
	
	include 'db.php';
	$con = Database::connect();
	$sql = 'SELECT * FROM Customer ORDER BY idCustomer DESC';
	foreach ($con->query($sql) as $row){
		echo '<tr>';
		echo '<td>'. $row['Name']. '</td>';
		echo '<td>'. $row['Phone']. '</td>';
		echo '<td>'. $row['Email']. '</td>';
		echo '</tr><br>';
	}
	Database::disconnect();
	?>
	</tbody>
	</table>
</body>
</html>