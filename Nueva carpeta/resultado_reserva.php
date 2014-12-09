<?php
	include('scripts/conexion.php');
	session_start();

	$query = "select precio_pasaje from reserva r inner join pasaje p on r.cod_pasaje = p.cod_pasaje where  r.cod_pasaje = '{$_SESSION['pasaje']}'";
	$resultado = sqlsrv_query($conexion,$query);
	while ($linea = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)) 
	{
		$monto = $linea['precio_pasaje'];
	}
?>
<!DOCTYPE html>
<html lang="es">
		<head>
		<title>Reservas</title>
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
		<h1>Resultado de Reservas</h1>
				
				<form action='scripts/registrar_pasajero.php' method='GET' >
					<table>
						<h1>RESERVA REALIZADA EXITOSAMENTE</h1>
					<tr>
						<strong>Monto Total a Pagar :</strong> <?php  echo $monto;?>
						<br>
					</tr>	
					<tr>
						<a href="principal.php">Regresar al inicio</a>
					<tr>
				</table>
			</form>
				</div>
			<footer>Derechos reservados</footer>
	</body>
</html>
