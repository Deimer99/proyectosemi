<?php 

	function conectar(){


		$user =  "root";

		$password = "";

		$host = "localhost";

		$db = "tutorias";

		$con = mysqli_connect($host,$user,$password,$db) or die("Error al conectar con la base de datos");

		return $con;



	}





 ?>