<?php 
	include("scripts/conexion.php");
	//Consulta en vista reservas_vuelo
	$consulta = "select * from reservas_vuelo";
	//Consulta en ciudad
	$consulta_ciudad = "select * from ciudad";

	//Ejecutando consultas
	$resultado = sqlsrv_query($conexion,$consulta) or 
				die('No se pudo ejecutar la consulta');
	$resultado_c = sqlsrv_query($conexion,$consulta_ciudad) or die("No se pudo ejecutar la consulta");

	$tabla = "";
	$op = "";
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
				$tabla.="<td><a href='pasajero.php?codigo=$linea[Codigo]'>Mostrar</a></td>";
				$tabla.="<td><a href='scripts/eliminar.php?cod_res={$linea['Codigo de reserva']}'>Eliminar</a></td>";
				$tabla.="</tr>";
			}

			while ($linea_c=sqlsrv_fetch_array($resultado_c,SQLSRV_FETCH_ASSOC)) {
				$op.="<option value=".$linea_c['nombre_ciudad'].">".$linea_c['nombre_ciudad']."</option>";
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
	<div class="cuerpo">
		<h1>Reserva de pasajes</h1>
		<div class="formulario">
			<form action="scripts/buscar_reserva.php" method="POST" >
				<div class="opciones">
					<div class="titulo">
						<label id="caption" for="ciudado"><b>Ciudad de origen : </b></label><br>
						<label id="caption" for="ciudadd"><b>Ciudad de destino : </b></label>	
					</div>
					<div class="datos">			
						<select name="ciudado" id="ciudado">
							<?php echo $op;	?>
						</select><br>
						<select name="ciudadd" id="ciudadd">
							<?php echo $op;	?>
						</select><br>	
					</div>
					<input id="buscar" type="submit" value="Buscar">
				</div>
			</form>
		</div>
		<div class="reserva">
			<table  bgcolor="white">
				<caption>Vuelos reservados</caption>
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
					<th>Mostrar</th>
					<th>Eliminar</th>
				</tr>
			<?php echo $tabla; ?>
			</table>
		</div>
	</div>
</body>
<footer>
	<span>Derechos reservados - 2014</span>
</footer>
</html>