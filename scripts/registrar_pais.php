<?php
	include'conexion.php';
	$cod_pais = $_POST['cod_pais'];
	$nombre_pais = $_POST['nombre_pais'];
	$descripcion_pais = $_POST['descripcion_pais'];

	$consulta = "insert into pais values('{$nombre_pais}','{$cod_pais}','{$descripcion_pais}')";
	sqlsrv_query($conexion,$consulta) or die("No se pudo ejecutar consulta");
	header('Location:../pais.php');
?>