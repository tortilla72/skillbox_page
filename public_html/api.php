<?

	$name = $_POST['name'];
	$email = $_POST['email'];

	$dbh = new PDO('mysql:host=localhost;dbname=cy42346_bd', 'cy42346_bd', 'cy42346_bd');
	$stmt = $dbh->prepare("INSERT INTO `order`(`time`, name, email)
		VALUES (NOW(), :name, :email)");
	$stmt->bindParam(':name', $name);
	$stmt->bindParam(':email', $email);
	$stmt->execute();

	echo '1';
?>
