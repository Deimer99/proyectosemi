<?php 

	header('Content-Type: application/json');
	$pdo = new PDO("mysql:dbname=tutorias;host=localhost","root","");

	$sentenciaSQL = $pdo->prepare("SELECT * 
								FROM tutorias
								WHERE tutorias.activo!=0 ;");

	$sentenciaSQL->execute();

	$resultado = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($resultado);






 ?>