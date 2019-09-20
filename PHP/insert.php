<?php

	require_once('Conexion.php');

	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];
	$url=$_POST['url'];


	$sql = "INSERT INTO people (nombre,edad,url)
	VALUES ('$nombre', $edad,$url)";

	$result=$conn->query($sql);

	if (!$result) {
	    die("error". $conn->connect_error);



	}else{
		die("exito");
	}


?>























?>
