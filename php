<?php
function conectar(){
	$host = "localhost";
	$user = "root";
	$pass = "root";
	$dbname = "angularDB";
	//$opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	//$pdo = new PDO("mysql:host=localhost;dbname:angularDBb"; "root", "root", $opcoes);
	
	try {
		$pdo = new PDO("mysql:host=localhost;dbname=angularDBB"; "root", "root", $opcoes);
		$opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	} catch (Exception $e) {
		echo $e->getMessage();
	}
	return $pdo;
	print_r($pdo->query('select database()')->fetch());
}
conectar();
?>
