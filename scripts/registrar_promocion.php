<?php
	include'conexion.php';
	$cod_promocion = $_REQUEST['cod_promocion'];
	$nombre = $_POST['nombre'];
	$descuento = $_POST['descuento'];
	$descripcion = $_POST['descripcion'];
	$consulta = "insert into descuento_promocion values('{$cod_promocion}','{$nombre}','{$descuento}','{$descripcion}')";
	sqlsrv_query($conexion,$consulta) or die("No se pudo ejecutar consulta");
	header('Location:../promocion.php');
?>