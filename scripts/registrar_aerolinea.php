<?php
	include("conexion.php");
	$ruc = $_POST['ruc'];
	$nombre = $_POST['nombre'];
	$cod_alianza = $_POST['cod_alianza'];
	$consulta = "insert into aerolinea values('{$ruc}','{$nombre}','{$cod_alianza}')";
	echo $consulta;
	$resultado=sqlsrv_query($conexion,$consulta);
	header('Location:../aerolineas.php');
?>