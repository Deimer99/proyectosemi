<?php 
 
	include("BaseDatos.php");

	$con = Conectar();

	$resultado = mysqli_query($con,"SELECT *
                                     FROM estudianteauxiliar;");
	while($consulta = mysqli_fetch_array($resultado)){

		echo $consulta['cedula'];

		break;
	
	}

	





 ?>