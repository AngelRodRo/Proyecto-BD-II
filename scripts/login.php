<?php 

	include('conexion.php');

	$nombre = !empty($_POST['nombre'])?$_POST['nombre'] : '';
	$clave = !empty($_POST['clave'])?$_POST['clave'] : '';	
	$consulta = "SELECT username,password from usuarios where username='$nombre' AND password='$clave' ";


	$resultado=sqlsrv_query($conexion,$consulta) or 
				die('No se pudo ejecutar la consulta');

	//datos de usuario de prueba
	if (true) {	 
		header("Location: ../reservas.php");
		exit();
	}

	header("Location: ../index.php");

 ?>

