<?php
	include("conexion.php");
	$ruc = $_POST['ruc'];
	$nombre = $_POST['nombre'];
	$cod_alianza = $_POST['cod_alianza'];
	$consulta = "insert into aerolinea values('{$ruc}','{$nombre}','{$cod_alianza}')";
	$resultado=sqlsrv_query($conexion,$consulta) or 
				die('No se pudo ejecutar la consulta');
	header('Location:../aerolineas.php');
?>