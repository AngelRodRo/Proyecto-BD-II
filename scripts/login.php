<?php 
	
		
	include('conexion.php');

	$nombre = !empty($_POST['usuario'])?$_POST['usuario'] : '';
	$clave = !empty($_POST['password'])?$_POST['password'] : '';	
	$consulta = "SELECT * from usuarios where usuario='$nombre' AND clave='$clave' ";
	$resultado = sqlsrv_query($conexion,$consulta);

	while ($linea=sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)) {
		$nombres = $linea['nombres'];
		$app = $linea['app'];
		$apm = $linea['apm'];

	}

	$resultado=sqlsrv_query($conexion,$consulta) or 
				die('No se pudo ejecutar la consulta');



	//datos de usuario de prueba
	if (sqlsrv_has_rows($resultado)) {	 
		session_start();
		$_SESSION['nombres']=$nombres;
		$_SESSION['app'] = $app;
		$_SESSION['apm'] = $apm;
		$_SESSION['usuario']=$nombre;
		$_SESSION['registrado']= true;
		header("Location: ../principal.php");
		exit();
	}
	else
		echo "<script>alert('La contrase\u00f1a del usuario no es correcta.'); location='../';</script>"; 


	 



	
 ?>

