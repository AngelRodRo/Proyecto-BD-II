<?php 

	include('conexion.php');

	$nombre = !empty($_POST['usuario'])?$_POST['usuario'] : '';
	$clave = !empty($_POST['password'])?$_POST['password'] : '';	
	$consulta = "SELECT usuario,clave from usuarios where usuario='$nombre' AND clave='$clave' ";


	$resultado=sqlsrv_query($conexion,$consulta) or 
				die('No se pudo ejecutar la consulta');

	//datos de usuario de prueba
	if (sqlsrv_has_rows($resultado)) {	 
		session_start();
		$_SESSION['usuario']=$nombre;
		$_SESSION['registrado']= true;
		header("Location: ../reservas.php");
		exit();
	}

	header("Location:../");

	
 ?>

