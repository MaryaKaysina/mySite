<?
	$name = $_POST['name'];
	$phone = $_POST['phone'];

	$dbh = new PDO('mysql:host=localhost;dbname=ck97231_db', '', '');

	$q = "INSERT INTO orders(`time`, name, phone)
		VALUES(NOW(), :name, :phone)";
	$sth = $dbh->prepare($q);
	$sth->bindParam(':name', $name, PDO::PARAM_STR);
	$sth->bindParam(':phone', $phone, PDO::PARAM_STR);
	$sth->execute();

	echo "1";