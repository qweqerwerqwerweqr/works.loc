<?php 

	$pdo = new PDO("mysql:host=localhost;dbname=qwerty","root","");
	$sql = "INSERT INTO user (name, email) VALUES (:name , :email)";
	$statement = $pdo->prepare($sql);
	$statement->execute($_POST);


	
	header('Location: /workBD/create.php');
 ?>