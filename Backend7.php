<?php 

	include("BaseDatos.php");


	$con = Conectar();

	$tutoria = $_GET["tutoria"];

	$opcion = $_GET["opcion"];

	$opcion2=0;


	if($opcion!=$opcion2){

		$resultado = mysqli_query($con," UPDATE tutorias
                                         SET tutorias.activo=1
                                     WHERE tutorias.idTutoria=".$tutoria.";");



	}


	else{




	$resultado = mysqli_query($con," DELETE
                                     FROM tutorias
                                     WHERE tutorias.idTutoria=".$tutoria.";");


	}


 ?>