<?php 

	if (isset($_POST['submit'])) {
		# code...
	
	include('scripts/validar.php');
	include("scripts/conexion.php");
	$ciudado = $_POST['ciudado'];
	$ciudadd = $_POST['ciudadd'];
	$fecha = $_POST['fecha'];

	$datos=date_parse($fecha);
 
	$date = $datos['day']."-".$datos['month']."-".$datos['year'];


	$consulta = "EXEC buscar_vuelos '$ciudado','$ciudadd','$date'";

	$resultado = sqlsrv_query($conexion,$consulta) or 
	die("No se puede ejecutar");

	$items="";
 
 		$item="";

	if (sqlsrv_has_rows($resultado)) {
		while ($linea = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)) {
			$fecha = $linea['Horario de partida'];
			$fecha_f=date_parse($fecha);
			$fecha_cf = $fecha_f['day']."-".$fecha_f['month']."-".$fecha_f['year'];
			$descuento = $linea['Porcentaje de descuento']*100;

	 		$item.="<div class='search_item	'>	<table>	
				<tr>
						<td>
								<span><strong>Aerolinea : </strong> ".ucwords($linea['Nombre de aerolinea'])."</span>	
						</td>
						<td>	
								<span><strong>Fecha :</strong> ".$fecha_cf."</span>
						</td>	
						<td>	
								<span class='descuento'>Con ".$descuento."% de descuento	</span>
						</td>
				</tr>
				<tr>	
						<td>	
								<span><strong>	Codigo : </strong>".ucwords($linea['Codigo de vuelo'])."</span>
						</td>
						<td>	
								<span><strong>Origen : </strong>".ucwords($linea['Ciudad de origen'])."-".ucwords($linea['Pais origen'])."	</span>
						</td>
						<td>	
								<span><strong>Destino : </strong>".ucwords($linea['Ciudad de destino'])."-".ucwords($linea['Pais de Destino'])."</span>
						</td>
				</tr>
				<tr>	
						<td><span><strong>Aeropuerto de origen : </strong>".ucwords($linea['Aeropuerto de origen'])."</span></td>
						<td><span><strong>Clase :</strong> ".ucwords($linea['Descripcion'])."</span></td>
						<td><span><strong>Tipo de persona :</strong> ".ucwords($linea['Tipo de persona'])."</td>
						<td rowspan='2'><span class='price'>S/. ".$linea['Monto']."</span></td>
				</tr>
				<tr>	
						<td><span><strong>Aeropuerto de destino : </strong>".$linea['Aeropuerto de destino']."</span></td>
						<td class='reserva'><span><a href='reservacion.php?codigo=".$linea['Numero de vuelo']."'"."><button class='btn btn-primary'>Reservar</button></a></span></td>
						<td class='compra'><span><a href='compras.php?codigo=".$linea['Numero de vuelo']."'"."><button class='btn btn-primary'>Comprar</button></a></span></td>

				</tr>
			</table></div>";
	 
		}
	}
	else
		$item.="<span class='respuesta'>No hay registros que coincidan con los criterios ingresados</span>";
	

  $consulta = "SELECT * FROM ciudad_pais";
  $resultado = sqlsrv_query($conexion,$consulta);
  $valores = "";
  while ($linea = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)) 
                  $valores.="'".$linea['Nombre de Ciudad']."',";
}
?>
<!DOCTYPE html>
<html lang="en">
<head></strong>
	<meta charset="UTF-8">
	<title>Reservas disponibles</title>
  
	   <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/starter-template.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/main.css">
     <link href="css/sticky-footer-navbar.css" rel="stylesheet">
        <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.ketchup.all.min.js"></script>
    <script src="js/jquery-1.9.1.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/jquery-validate.js"></script>
    <script>
      $(function() {
        
        var availableTags = [ <?php echo $valores; ?>   ];
        $( "#tags1" ).autocomplete({
          source: availableTags
        });
      });

      $(function() {
        var availableTags1 = [ <?php echo $valores; ?>  ];
        $( "#tags2" ).autocomplete({
          source: availableTags1
        });
      });

  </script>
     <style type="text/css">
     body{
     	background: #FAFAFA;

     }
     	.search_item{
 
border-radius: 10px;
padding: 10px;
 
margin:  15px 20px;
background: #5AB3D1;
}

.data{
margin: 0 15px;
}

.data>span{

}


p{
margin: 10px 5px;
}

#item1,#item2{
display: inline-block;
margin: 0px 15px;
}


.price{
font-size: 35px;
margin: 0px;
text-align:  right;
font-weight: 	bolder;
}

.data>p>span{
	margin: 0 15px;
}


span{
margin: 0 15px;
}

.buscador{
border-radius: 5px;
display: inline-block;
position: relative;

}

.resultados{
display: inline-block;
position: absolute;
}

table,th,tr,td{
	text-align: left;	
	border: 	none;
	margin: 5px;
}

.compra{
	margin: 15px 0px;
	text-align: 	left;		

}

.reserva{
	padding: 15px 0px;
	margin: 15px 0px;
	text-align: 	right;	
}
.descuento{
	color:red;
	font-size: 	15px;
}

.respuesta{
	font-size: 25px;
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
			<a class="navbar-brand" href="#"><img src="img/logo.png" width="50" height="30" alt=""></a>
          	<a class="navbar-brand" href="#">Agencia de viajes</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Inicio</a></li>
 
            <li><a href="ayuda.php">Ayuda</a></li>
          </ul>
           <ul class="nav navbar-nav navbar-right">
              <li class="active" ><a href="scripts/salir.php">Cerrar sesión</a></li>
           
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	<div class="cabecera">
		<img class="logo" src="img/logo.png" width="250" height="130" alt="">
	</div>
	<div class="separacion"></div>
 
	<div class="buscador">
		<form action="busqueda_vuelo.php" method="POST">
      <div class="datos">
        <label for="">Ciudad de origen:</label><br>
        <label for="">Ciudad de destino:</label><br>
        <label for="">Fecha de partida :</label>
      </div>
      <div class="datos_vuelo">
        <input id="tags1" type="text" name="ciudado" required>  <br>
        <input id="tags2" type="text" name="ciudadd" required><br>
        <input type="date" name="fecha" required>
      </div>
      <input class="btn btn-lg btn-primary " name="submit" type="submit" value="Buscar">
     </form>
	</div>
 		
	<div class="resultados">
		<h2>Resultados : </h2>
		<?php echo $item; ?>
	</div>
	 
 
 
</body>
</html>