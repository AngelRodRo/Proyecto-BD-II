<?php
	include'conexion.php';
	$cod_vuelo = $_REQUEST['cod_vuelo'];
	$RUC = $_REQUEST['RUC'];
	$cod_clase = $_REQUEST['cod_clase'];
	$tipo_persona = $_REQUEST['tipo_persona'];
	$consulta = "delete from tarifa where (cod_vuelo = '{$cod_vuelo}'and RUC = '{$RUC}' and cod_clase = '$cod_clase'and  tipo_persona = '$tipo_persona')";
	sqlsrv_query($conexion, $consulta);
	header('Location:../tarifas.php');
?>