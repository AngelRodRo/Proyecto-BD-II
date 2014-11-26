<?php
	include'scripts/conexion2.php';
	$identificacion = $_POST['identificacion'];
	$tipo_identificacion = $_POST['tipo_identificacion'];
	$nombre = $_POST['nombre'];
	$apellido_paterno = $_POST['apellido_paterno'];
	$apellido_materno = $_POST['apellido_materno'];
	$fecha_nacimiento = $_POST['fecha_nacimiento'];
	$email = $_POST['email'];
	$sexo = $_POST['sexo'];
	$pais = $_POST['pais'];

	//$clave = !empty($_POST['clave'])?$_POST['clave'] : '';	
	$consulta = "exec insertar_pasajero ".$indentificacion.",'',".$nombre.",".$apellido_paterno.",".$apellido_materno.",'',".$email.",'',".$pais;


	$resultado=sqlsrv_query($conexion,$consulta) or 
				die('No se pudo ejecutar la consulta');

	//datos de usuario de prueba
	if (true) {	 
		header("Location: ../reservas.php");
		exit();
	}

	header("Location: ../pasajero.html");





?>