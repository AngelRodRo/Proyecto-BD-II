<?php 

	include("conexion.php");

	$ciudad_origen=!empty($_POST['ciudado'])?$_POST['ciudado'] : '';
	$ciudad_destino=!empty($_POST['ciudadd'])?$_POST['ciudadd'] : '';
	
	$consulta_busqueda = "EXEC buscar_reserva '$ciudad_origen','$ciudad_destino'";

	$resultado = sqlsrv_query($conexion,$consulta_busqueda) or 
				die('No se pudo ejecutar la consulta');



	$tabla = "";
	 
	while($linea=sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)){
				$tabla.="<tr>";
				$tabla.="<td>{$linea['Codigo']}</td>";
				$tabla.="<td>{$linea['Nombre de pasajero']}</td>";
				$tabla.="<td>{$linea['Apellido Materno']}</td>";
 
				$tabla.="<td>{$linea['Sexo']}</td>";
				$tabla.="<td>{$linea['Numero de telefono']}</td>";
				$tabla.="<td>{$linea['Codigo de pasaje']}</td>";
				$tabla.="<td>{$linea['Codigo de reserva']}</td>";
				$tabla.="<td>{$linea['Numero de asiento']}</td>";
				$tabla.="<td>{$linea['Numero de vuelo']}</td>";
				$tabla.="<td>{$linea['Ciudad de origen']}</td>";
				$tabla.="<td>{$linea['Ciudad de destino']}</td>";
				$tabla.="</tr>";
			}





 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vuelos reservados</title>
	<link rel="stylesheet" href="../css/main.css">
	   <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/starter-template.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<style>
	table{
		margin:30px;
	}
</style>
<body> 
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Agencia de viajes</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index1.php">Inicio</a></li>
 
            <li><a href="ayuda.php">Ayuda</a></li>
          </ul>
           <ul class="nav navbar-nav navbar-right">
 
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"><b class="caret"></b></a>
              <ul class="dropdown-menu">
               
    
              </ul>
              </li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	<div class="cabecera">

		<img class="logo" src="../img/logo.png" width="250" height="130" alt="">
	</div>
	<div class="separacion"></div>
	<table border="1">
		<caption>Vuelos reservados segun codigo indicado</caption>
		<tr>
			<th>Codigo</th>
			<th>Nombre de pasajero</th>
			<th>Apellido Materno</th>
			<th>Sexo</th>
			<th>Numero de telefono</th>
			<th>Codigo de pasajero</th>
			<th>Codigo de reserva</th>
			<th>Numero de asiento</th>
			<th>Numero de vuelo</th>
			<th>Ciudad de origen</th>
			<th>Ciudad de destino</th>
		</tr>
	<?php
		echo $tabla;
	  ?>
		
	</table>
</body>
<footer>
	Derechos reservados - 2014
</footer>
</html>