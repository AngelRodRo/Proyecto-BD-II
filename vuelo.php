<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<style>
	 
			.search_item{
				border:1px solid black;
				border-radius: 10px;
				padding: 10px;
				font-family: arial;
				margin:  5px 20px;
			}

			.data{
				margin: 0 15px;
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
				margin: 0 5px;
			}

			span{
				margin: 0 35px;
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

			td,tr,th,table{
				border: 	1px solid	black;
			}
		</style>
	</head>
	<body>
		<div class="search_item">
 			<div class="data">
 				<p><span>Aerolinea : </span><span> LAN </span>
 				<span>Fecha : </span><span>10/09/2014</span><span>Con 10 % de descuento</span></p>
 			</div>
			<div class="data">
			<div><p><span id="cod">Codigo  :</span><span>V0001</span>
			<span>Origen  :</span><span> Arequipa-Peru</span>
			<span>Destino : </span><span> Tacna-Peru</span></p></div>
				
			</div>
			<div>
				<div id="item1">
					<p><span id="cod">Aeropuerto de origen :</span> <span>Rodriguez Bollon</span><span>Clase :</span><span>Niño</span></p>
					<p><span id="cod">Aeropuerto de destino:</span> <span>FAP Pedro Canga</span></p>
				</div>
				<div id="item2">
					<p><span><a href="#">Mas detalles</a></span><span class="price">S/.190</span></p>
				</div>
			</div>
			<div></div>
		</div>
		<table>	
			<tr>
					<td>
							<span>Aerolinea : LAN	</span>	
					</td>
					<td>	
							<span>Fecha : 10/09/2014	</span>
					</td>	
					<td>	
							<span>Con 10% de descuento	</span>
					</td>
			</tr>
			<tr>	
					<td>	
							<span>Codigo : V0001	</span>
					</td>
					<td>	
							<span>Origen : Arequipa-Peru	</span>
					</td>
					<td>	
							<span>Destino : Tacna-Peru	</span>
					</td>
			</tr>
			<tr>	
					<td><span>Aeropuerto de origen : Rodrigeuz Buños	</span></td>
					<td><span>Clase : Niño</span></td>
					<td></td>
					<td rowspan="2"><span class="price">S/. 190</span></td>
					
			</tr>
			<tr>	
					<td><span>Aeropuerto de destino: FAP Pedro canga </span></td>
					<td><span><a href="#">Mas detalles</a></span></td>
					<td><span><a href='compras.php?codigo='><button class='btn btn-primary'>Reservar</button></a></span></td>
 
			</tr>
		</table>
	</body>
	</html>	