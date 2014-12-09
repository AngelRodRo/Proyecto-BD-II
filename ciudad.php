<?php
	include('scripts/conexion.php');
	$consulta="select * from pais";
	$resultado = sqlsrv_query($conexion,$consulta);
	$opciones = "";
	while ($linea = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)) {
		$opciones .= "<option value='{$linea['cod_pais']}'>{$linea['nombre_pais']}</option> ";
	}
?>		
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Ciudad</title>
		<meta charset="utf-8"> 
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
          <a class="navbar-brand" href="#"><img src="img/logo.png" width="70" height="30" alt=""></a>
          <a class="navbar-brand" href="#">Agencia de viajes</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index1.php">Inicio</a></li>
 
            <li><a href="ayuda.php">Ayuda</a></li>
          </ul>
           <ul class="nav navbar-nav navbar-right">
              <li><a href="">Iniciar sesion</a></li>
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
		<h1>Registros de Ciudades</h1>
			<form class="formulario1" action="scripts/registrar_ciudad.php" method="POST">
				<table class="pais">
					<tr>
						<td>
							<label for="cod_ciudad">Código de Ciudad:</label>
						</td>
						<td>
							<input type="text" id="cod_ciudad" name="cod_ciudad">
						</td>
					</tr>
					<tr>
						<td>
							<label for="nombre">Nombre :</label>
						</td>
						<td>
							<input type="text" name="nombre" id="nombre">
						</td>
					</tr>	
					<tr>
						<td>
							<label for="cod_pais">Pais :</label>
						</td>
						<td>
							<select name="cod_pais">
								<?php echo $opciones;?>
							</select>
						</td>
					</tr>		
					<tr>
						<td>
							<input type="submit" value="Registrar">
							<input type="reset">
						</td>
					</tr>
				</table>
			</form>
			<table style="color:blue">
				<caption>Lista de Alianzas Aereas</caption>
				<tr>
					<th>Código</th>
					<th>Nombre</th>
					<th>Pais</th>
					<th>Eliminar</th>
				</tr>
		<?php 
			include("scripts/conexion.php");
			$consulta = "select * from ciudad";
			//Ejecutando consultas
			$resultado = sqlsrv_query($conexion,$consulta) or 
						die('No se pudo ejecutar la consulta');
			$tabla = "";
			while($linea=sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)){
						$tabla .="<tr>";
						$tabla .="<td>".$linea['cod_ciudad']."</td>";
						$tabla .="<td>".$linea['nombre_ciudad']."</td>";
						$tabla .="<td>".$linea['cod_pais']."</td>";
						$tabla .="<td><a href='scripts/eliminar_ciudad.php?cod_ciudad={$linea['cod_ciudad']}'>Eliminar</a></td>";
						$tabla .="</tr>";
				}
		?>
			<?php echo $tabla; ?>
			</table>
			</div>
			<footer>Derechos reservados</footer>
	</body>
</html>
