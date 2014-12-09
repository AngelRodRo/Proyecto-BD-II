<?php
	include('scripts/conexion.php');
	session_start();
	echo $_SESSION['cod_compra'];
	$query = "select sum(p.precio_pasaje) as monto from detalle_compra dv inner join pasaje p on p.cod_pasaje = dv.cod_pasaje where cod_compra = '{$_SESSION['cod_compra']}'";

	$resultado = sqlsrv_query($conexion,$query);
	while ($linea = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)) 
	{
		$monto = $linea['monto'];
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
<style type="text/css">

	.cabecera{
		margin-top: 30px;
	}
	.monto{
		font-size: 55px;
	}
</style>
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
            <li><a href="index.php">Inicio</a></li>
 
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
		<h1>Nuevas Compras</h1>
				
				<form action='scripts/registrar_pasajero.php' method='GET' >
					<table>
						<h1>COMPRA REALIZADA EXITOSAMENTE</h1>
					<tr>
						<strong>Monto Total a Pagar : </strong> <span class="monto">S/. <?php echo $monto;?> </span> 
						<br>
					</tr>	
					<tr>
						<a href="factura.php">Ver detalles de la compra</a>
						<br>
						<a href="principal.php">Regresar al inicio</a>
					<tr>
				</table>
			</form>
				</div>
			<footer>Derechos reservados</footer>
	</body>
</html>
