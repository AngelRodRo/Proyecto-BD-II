<?php
	include'conexion.php';
	$cod_vuelo = $_REQUEST['cod_vuelo'];
	$RUC = $_REQUEST['RUC'];
	$cod_clase = $_REQUEST['cod_clase'];
	$tipo_persona = $_REQUEST['tipo_persona'];
	$monto = $_REQUEST['monto'];
	$cod_promocion = $_REQUEST['cod_promocion'];
	$consulta = "insert into tarifa values('{$tipo_persona}','{$monto}','{$cod_clase}','{$cod_vuelo}','{$cod_promocion}','{$RUC}')";
	echo $consulta;
	sqlsrv_query($conexion,$consulta) ;
	header('Location:../tarifas.php');
?>