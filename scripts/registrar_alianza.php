<?php
	include('conexion2.php');
	$cod_alianza = $_POST['cod_alianza'];
	$nombre = $_POST['nombre'];
	$consulta = "exec insertar_alianza '".$cod_alianza."','".$nombre."'";
	$resultado=sqlsrv_query($conexion,$consulta);
	header('Location:../alianza_aerea.php');
?>