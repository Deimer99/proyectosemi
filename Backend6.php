<?php 


	include("BaseDatos.php");


	$con = Conectar();


	$cedula = $_GET["cedula"];


	$resultado = mysqli_query($con,"DELETE FROM tutorauxiliar

 								");


	$resultado2 = mysqli_query($con,"INSERT INTO tutorauxiliar

 								values("."'".$cedula."'".");");





 ?>