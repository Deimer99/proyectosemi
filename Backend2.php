<?php 

	include("BaseDatos.php");

	$con = Conectar();

	$cedulaEstudiante = $_GET["cedulaEstudiante"];

	$cedulaTutor = $_GET["cedulaTutor"];

	$opcion = $_GET["opcion"];

	$numero = rand(1, 10000);

	$resultado = mysqli_query($con,"SELECT tutor.nombre
                                     FROM tutor
                                     WHERE tutor.idTutor=".$cedulaTutor.";");
	while($consulta = mysqli_fetch_array($resultado)){

		$nombre= $consulta['nombre'];

		break;
	
	}

	$resultado2 = mysqli_query($con,"SELECT estudiante.Nombre
                                     FROM estudiante
                                     WHERE estudiante.Cedula=".$cedulaEstudiante.";");
	while($consulta2 = mysqli_fetch_array($resultado2)){

		$nombre2= $consulta2['Nombre'];

		break;
	
	}

	$valor=0;

	switch ($opcion) {
		
		case 1: 

		$resultado3 = mysqli_query($con,"INSERT INTO tutorias
                                  values(".$valor.",".$numero.",".$cedulaTutor.",".$cedulaEstudiante.",'TUTORIA','NOMBRE DEL TUTOR: ".$nombre."<br>"."CEDULA TUTOR: ".$cedulaTutor."<br>"."NOMBRE DEL ESTUDIANTE: ".$nombre2."<br>"." CEDULA ESTUDIANTE: ".$cedulaEstudiante."<br>"."HORA DE LA TUTORIA: 14:00','#1FE9E9','#FFFFFF','2020-02-15 14:00:00');");

		break; 

		case 2: 

		$resultado3 = mysqli_query($con,"INSERT INTO tutorias
                                  values(".$valor.",".$numero.",".$cedulaTutor.",".$cedulaEstudiante.",'TUTORIA','NOMBRE DEL TUTOR: ".$nombre."<br>"."CEDULA TUTOR: ".$cedulaTutor."<br>"."NOMBRE DEL ESTUDIANTE: ".$nombre2."<br>"." CEDULA ESTUDIANTE: ".$cedulaEstudiante."<br>"."HORA DE LA TUTORIA: 16:00','#1FE9E9','#FFFFFF','2020-02-14 16:00:00');");

	

		break; 


		case 3: 

		$resultado3 = mysqli_query($con,"INSERT INTO tutorias
                                  values(".$valor.",".$numero.",".$cedulaTutor.",".$cedulaEstudiante.",'TUTORIA','NOMBRE DEL TUTOR: ".$nombre."<br>"."CEDULA TUTOR: ".$cedulaTutor."<br>"."NOMBRE DEL ESTUDIANTE: ".$nombre2."<br>"." CEDULA ESTUDIANTE: ".$cedulaEstudiante."<br>"."HORA DE LA TUTORIA: 20:00','#1FE9E9','#FFFFFF','2020-02-20 20:00:00');");

		

		break; 


		case 4: 

		$resultado3 = mysqli_query($con,"INSERT INTO tutorias
                                  values(".$valor.",".$numero.",".$cedulaTutor.",".$cedulaEstudiante.",'TUTORIA','NOMBRE DEL TUTOR: ".$nombre."<br>"."CEDULA TUTOR: ".$cedulaTutor."<br>"."NOMBRE DEL ESTUDIANTE: ".$nombre2."<br>"." CEDULA ESTUDIANTE: ".$cedulaEstudiante."<br>"."HORA DE LA TUTORIA: 17:00','#1FE9E9','#FFFFFF','2020-02-26 17:00:00');");

		

		break; 


		case 5: 

		$resultado3 = mysqli_query($con,"INSERT INTO tutorias
                                  values(".$valor.",".$numero.",".$cedulaTutor.",".$cedulaEstudiante.",'TUTORIA','NOMBRE DEL TUTOR: ".$nombre."<br>"."CEDULA TUTOR: ".$cedulaTutor."<br>"."NOMBRE DEL ESTUDIANTE: ".$nombre2."<br>"." CEDULA ESTUDIANTE: ".$cedulaEstudiante."<br>"."HORA DE LA TUTORIA: 13:00','#1FE9E9','#FFFFFF','2020-03-13 13:00:00');");

		

		break; 


		case 6: 

		$resultado3 = mysqli_query($con,"INSERT INTO tutorias
                                  values(".$valor.",".$numero.",".$cedulaTutor.",".$cedulaEstudiante.",'TUTORIA','NOMBRE DEL TUTOR: ".$nombre."<br>"."CEDULA TUTOR: ".$cedulaTutor."<br>"."NOMBRE DEL ESTUDIANTE: ".$nombre2."<br>"." CEDULA ESTUDIANTE: ".$cedulaEstudiante."<br>"."HORA DE LA TUTORIA: 09:00','#1FE9E9','#FFFFFF','2020-03-24 09:00:00');");

		

		break;

		
		case 7: 

		$resultado3 = mysqli_query($con,"INSERT INTO tutorias
                                  values(".$valor.",".$numero.",".$cedulaTutor.",".$cedulaEstudiante.",'TUTORIA','NOMBRE DEL TUTOR: ".$nombre."<br>"."CEDULA TUTOR: ".$cedulaTutor."<br>"."NOMBRE DEL ESTUDIANTE: ".$nombre2."<br>"." CEDULA ESTUDIANTE: ".$cedulaEstudiante."<br>"."HORA DE LA TUTORIA: 18:00','#1FE9E9','#FFFFFF','2020-03-28 18:00:00');");

		

		break; 


		case 8: 

		$resultado3 = mysqli_query($con,"INSERT INTO tutorias
                                  values(".$valor.",".$numero.",".$cedulaTutor.",".$cedulaEstudiante.",'TUTORIA','NOMBRE DEL TUTOR: ".$nombre."<br>"."CEDULA TUTOR: ".$cedulaTutor."<br>"."NOMBRE DEL ESTUDIANTE: ".$nombre2."<br>"." CEDULA DEL ESTUDIANTE: ".$cedulaEstudiante."<br>"."HORA DE LA TUTORIA: 14:00','#1FE9E9','#FFFFFF','2020-03-31 14:00:00');");


		break; 
	


	 }





 ?>