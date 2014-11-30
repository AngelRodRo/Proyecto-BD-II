<?php
	include("conexion.php");
	$cod_tripulante = $_POST['cod_tripulante'];
	$dni_tripulante = $_POST['dni_tripulante'];
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$sexo = $_POST['sexo'];
	$fecha_nacimiento = $_POST['fecha_nacimiento'];
	$fecha_inicio = $_POST['fecha_inicio'];
	$rol = $_POST['rol'];
	$consulta = " insert into tripulante values(
	'{$cod_tripulante}','{$dni_tripulante}','{$nombre}','{$apellidos}',
	'{$sexo}','{$fecha_nacimiento}','{$fecha_inicio}','{$rol}')";
	echo $consulta;
	$resultado=sqlsrv_query($conexion,$consulta) or 
				die('No se pudo ejecutar la consulta');
	header("Location: ../tripulante.php");
?>