<?php

	
	include("BaseDatos.php");


	$con = Conectar();


	$nombre = $_GET["nombre"];

	$cedula = $_GET["cedula"];

	$resultado = mysqli_query($con,"INSERT INTO estudiante

 								values(".$cedula.","."'".$nombre."'".");");



	$resultado2 = mysqli_query($con,"DELETE FROM estudianteAuxiliar

 								");

	$resultado3 = mysqli_query($con,"INSERT INTO estudianteAuxiliar

 								values("."'".$cedula."'".");");




  ?>