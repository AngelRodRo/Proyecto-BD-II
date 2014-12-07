<?php
	include("conexion.php");
	$cod_pasaje = $_POST['cod_pasaje'];
	$cod_compra = $_POST['cod_compra'];
	$cod_pasajero = $_POST['cod_pasaje'];
	$consulta = " insert into detalle_compra values()";
	echo $consulta;
	$resultado=sqlsrv_query($conexion,$consulta) or 
				die('No se pudo ejecutar la consulta');
	header("Location: ../tripulante.php");
?>