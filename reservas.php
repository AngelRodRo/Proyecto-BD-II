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
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="cabecera">

		<img class="logo" src="img/logo.png" width="250" height="130" alt="">
	</div>
	<div class="separacion"></div>
	<div class="cuerpo">
		<h1>Reserva de pasajes</h1>
		<div class="formulario">
			<form action="scripts/buscar_reserva.php"  >
				<div class="opciones">
					<div class="titulo">
						<label id="caption" for="ciudado"><b>Ciudad de origen : </b></label><br>
						<label id="caption" for="ciudadd"><b>Ciudad de destino : </b></label>	
					</div>
					<div class="dato">			
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
		<link rel="stylesheet" href="">
		

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
		</tr>
		<?php echo $tabla; ?>
	</div>
	</table>
	</div>
	
</body>
<footer>
	Derechos reservados - 2014
</footer>
</html>