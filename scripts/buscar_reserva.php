<?php 

	include("scripts/conexion.php");
	$ciudad_origen=!empty($_POST['ciudado'])?$_POST['ciudado'] : '';
	$ciudad_destino=!empty($_POST['ciudadd'])?$_POST['ciudad'] : '';
	$apm=!empty($_POST['apm'])?$_POST['apm'] : '';
	$correo=!empty($_POST['correo'])?$_POST['correo'] : '';



 ?>