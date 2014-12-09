<?php 

	session_start();

	$registrado = !empty($_SESSION['registrado'])? $_SESSION['registrado']:false;

	if ($registrado) {
		header('Location:principal.php');
	}

 ?>