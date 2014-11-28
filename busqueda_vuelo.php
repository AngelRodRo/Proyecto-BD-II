<?php 

	include("scripts/conexion.php");
	$ciudado = $_POST['ciudado'];
	$ciudadd = $_POST['ciudadd'];

	$consulta = "EXEC buscar_vuelos '$ciudado','$ciudadd'";

	$resultado = sqlsrv_query($conexion,$consulta) or 
	die("No se puede ejecutar");


	$tabla="";

	while ($linea = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)) {
		$tabla.="<tr>";
		$tabla.="<td>{$linea['Codigo de vuelo']}</td>";
		$tabla.="<td>{$linea['Aeropuerto de origen']}</td>";
		$tabla.="<td>".$linea['Aeropuerto de destino']."</td>";
		$tabla.="<td>".$linea['Ciudad de origen']."</td>";
		$tabla.="<td>".$linea['Pais origen']."</td>";
		$tabla.="<td>".$linea['Ciudad de destino']."</td>";
		$tabla.="<td>".$linea['Pais de Destino']."</ts>";
		$tabla.="<td>".$linea['Monto']."</td>";
		$tabla.="<td>".$linea['Nombre de aerolinea']."</td>";
		$tabla.="</tr>";		
	}

 
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reservas disponibles</title>
 
	   <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/starter-template.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
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
		<img class="logo" src="img/logo.png" width="250" height="130" alt="">
	</div>
	<div class="separacion"></div>
	<table>
		<caption>Vuelos encontrados</caption>
		<tr>
			<th>Codigo de vuelo</th>
			<th>Aeropuerto de origen</th>
			<th>Aeropuerto de destino</th>
			<th>Ciudad de origen</th>
			<th>Pais de origen</th>
			<th>Ciudad de destino</th>
			<th>Pais de destino</th>
			<th>Monto</th>
			<th>Nombre de aerolinea</th>
		</tr>
		<?php echo $tabla; ?>
	</table>	
</body>
</html>