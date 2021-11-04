<?php 
	

	include("BaseDatos.php");


	$con = Conectar();

	header('Content-Type: application/json');

	$pdo = new PDO("mysql:dbname=tutorias;host=localhost","root","");


	$resultado = mysqli_query($con,"SELECT tutorauxiliar.cedula FROM tutorauxiliar;");

	while($consulta = mysqli_fetch_array($resultado)){

		$cedula= $consulta['cedula'];

		break;
	
	}


	$sentenciaSQL = $pdo->prepare("SELECT * FROM tutorias WHERE tutorias.activo=0 and tutorias.idTutor=".$cedula.";");

	$sentenciaSQL->execute();

	$resultado = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($resultado);






 ?>