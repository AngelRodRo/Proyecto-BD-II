tml lang="es">
		<head>
		<title>Promociones</title>
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
		<h1>Promociones</h1>
			<form action="scripts/registrar_promocion.php" method="POST">
				<table width=400px>
					<tr>
						<td>
							<label for="cod_promocion">Código de Promocion:</label>
						</td>
						<td>
							<input type="text" id="cod_promocion" name="cod_promocion">
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
							<label for="porcentaje_descuento">Porcentaje de Descuento :</label>
						</td>
						<td>
							<input type="text" name="porcentaje_descuento" id="porcentaje_descuento">
						</td>
					</tr>	
					<tr>
						<td>
							<label for="descripcion">Descripción :</label>
						</td>
						<td>
							<input type="text" name="descripcion" id="descripcion">
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
			<table style="border: 1px solid blue" id="lista_alianzas">
				<caption>Lista de Alianzas Aereas</caption>
				<tr>
					<td style="border: 1px solid blue" >Código</td>
					<td style="border: 1px solid blue">Nombre</td>
					<td style="border: 1px solid blue" >Descuento(%)</td>
					<td style="border: 1px solid blue">Descripcion</td>
					<td style="border: 1px solid blue">Eliminar</td>
				</tr>
<?php 
	include("scripts/conexion.php");
	$consulta = "select * from descuento_promocion";
	//Ejecutando consultas
	$resultado = sqlsrv_query($conexion,$consulta) or 
				die('No se pudo ejecutar la consulta');
	$tabla = "";
	while($linea=sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)){
				$tabla .="<tr>";
				$tabla .="<td>".$linea['cod_promocion']."</td>";
				$tabla .="<td>".$linea['nombre_promocion']."</td>";
				$tabla .="<td>".$linea['porcentaje_descuento']."</td>";
				$tabla .="<td>".$linea['descripcion']."</td>";
				$tabla .="<td><a href='scripts/eliminar_promocion.php?cod_promocion={$linea['cod_promocion']}'>Eliminar</a></td>";
				$tabla .="</tr>";
		}
?>
			<?php echo $tabla; ?>
			</table>
		</div>
	</body>
</html>
