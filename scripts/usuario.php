<?php 
	
	$nombres = !empty($_POST['nombres']) ? $_POST['nombres'] : '';
	$app = !empty($_POST['app']) ? $_POST['app'] : '';
	$apm = !empty($_POST['app']) ? $_POST['apm'] : '';
	$usuario = !empty($_POST['username']) ? $_POST['username'] : '';
	$clave = !empty($_POST['clave']) ? $_POST['clave'] : '';

	include('conexion.php');

	$consulta = "INSERT INTO usuarios(nombres,app,apm,usuario,clave) values ('$nombres','$app','$apm','$usuario','$clave')";


	if ($nombres) {	
		sqlsrv_query($conexion,$consulta);
	}


	header('Location: ../');
 ?>