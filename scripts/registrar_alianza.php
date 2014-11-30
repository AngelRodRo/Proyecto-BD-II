<?php
	include'conexion.php';
	$cod_alianza = $_POST['cod_alianza'];
	$nombre = $_POST['nombre'];

	$consulta = "exec insertar_alianza '".$cod_alianza."','".$nombre."'";
	sqlsrv_query($conexion,$consulta) or die("No se pudo ejecutar consulta");
	header('Location:../alianza_aerea.php');
?>