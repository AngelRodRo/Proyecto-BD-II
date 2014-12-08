<?php
	include("conexion.php");
	$cod_ciudad	 = $_REQUEST['cod_ciudad'];
	$nombre	 = $_REQUEST['nombre'];
	$cod_pais	 = $_REQUEST['cod_pais'];
	$consulta = "insert into ciudad values('{$nombre}','{$cod_ciudad}','{$cod_pais}')";
	echo $consulta;
	$resultado=sqlsrv_query($conexion,$consulta) or die("Error");
	header('Location:../ciudad.php');
?>