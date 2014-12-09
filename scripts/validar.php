<?php 
	//Este script comprueba si el ususairo paso por le sistema de ingreso exitosamente.

	session_start();

	$registrado = !empty($_SESSION['registrado']) ? $_SESSION['registrado'] : false;

	if (!$registrado) {
		//usuario no valido
		header('Location: index.php');
		exit();
	}
	

 ?>