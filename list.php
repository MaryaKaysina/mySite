<!DOCTYPE html>
<html>
<head>
	<title>Список заявок</title>
	<style type="text/css">
	table {
		border: 1px solid black;
		border-collapse: collapse;
	}
	th {
		background-color: lightgray;
	}
	th, td {
		border: 1px solid black;
		padding: 5px 7px;
	}

	</style>
</head>
<body>
	<table>
	<tr>
		<th>Дата и время</th>
		<th>Имя</th>
		<th>Телефон</th>
	</tr>
	
	<?
		$dbh = new PDO('mysql:host=localhost;dbname=ck97231_db', '', '');
		$sth = $dbh->prepare("SELECT `time`, name, phone FROM orders ORDER BY `time` desc");
		$sth->execute();
		$result = $sth->fetchAll();

		foreach ($result as $item) {
			?><tr>
				<td><?=$item['time'] ?></td>
				<td><?=$item['name'] ?></td>
				<td><?=$item['phone'] ?></td>
			</tr><?
		}
	?>
	</table>
</body>
</html>

