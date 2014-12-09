<?php
	
	
	include('scripts/conexion.php');
	session_start();
	$consulta="select * from pais";
	$resultado = sqlsrv_query($conexion,$consulta);
	$opciones = "";
	while ($linea = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)) {
		$opciones .= "<option value='{$linea['cod_pais']}'>{$linea['nombre_pais']}</option> ";
	}
	$consulta = "select * from detalle_compra dc right join pasaje p on p.cod_pasaje = dc.cod_pasaje 
where nro_vuelo = '{$_SESSION['nro_vuelo']}' and dc.cod_compra is  NULL";
	echo $consulta;
	$resultado = sqlsrv_query($conexion,$consulta);
	$pasajes ="";
	while ($linea = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)) {
		$pasajes .= "<option value='{$linea['cod_pasaje']}'>{$linea['nro_asiento']}</option> ";
	}
?>
<!DOCTYPE html>
<html lang="es">
		<head>
		<title>Compra</title>
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
		<h1>Reserva</h1>
				<form action='scripts/registrar_reserva.php' method='GET' >
					<table>
	<tr><td><label for='identificacion'>Nro. de Identificación:</label></td><td><input type='text' name='identificacion' id='identificacion'></td></tr><tr><td><label for='tipo_identificacion'>Tipo de Identificación:</label></td><td><select id='tipo_identificacion' name='tipo_identificacion'> <option value='D.N.I'>Documento Nacional de Identidad</option> <option value='Carnet Estrangeria'>Carnet de Estrangeria</option> <option value='Cédula de Extrangeria'>Cédula de Extrangeria</option></select></td></tr><tr><td><label for='nombre'>Nombres: </label></td><td><input type='text' name='nombre' id='nombre'></td></tr><tr><td><label for='apellido_paterno'>Apellido Paterno: </label></td><td><input type='text' name='apellido_paterno' id='apellido_paterno'></td></tr><tr><td><label for='apellido_materno'>Apellido Materno: </label></td><td><input type='text' name='apellido_materno' id='apellido_materno'></td></tr><tr><td><label for='fecha_nacimiento'>Fecha de Nacimiento: </label></td><td><input type='date' name='fecha_nacimiento' id='fecha_nacimiento'></td></tr><tr><td><label for='email'>Email: </label></td><td><input type='text' name='email' id='email'></td></tr><tr><td><label>Seleccione el sexo:</label></td><td><input type='radio' name='sexo' id='varon' value='M'><label for='varon'>Varón</label><br/> <input type='radio' name='sexo' id='mujer' value='F'><label for='mujer'>Mujer</label></td></tr><tr><td><label for='pais'>Pais: </label></td><td><select id='pais' name='pais'><?php echo $opciones ?></select></td></tr><tr><td><label for='pasajes'>Nro de asiento: </label></td><td><select id='pasajes' name='pasajes'><?php echo $pasajes ?></select></td></tr>
					<tr>
						<td>
							<a href=javascript:history.back(1)>Regresar</a>
							<input type="submit" value="Finalizar">
							<input type="reset">
						</td>
					</tr>	
				</table>
			</form>
				</div>
			<footer>Derechos reservados</footer>
	</body>
</html>
