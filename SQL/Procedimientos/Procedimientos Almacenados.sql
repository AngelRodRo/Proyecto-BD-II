/*PROCEDIMIENTOS ALMACENADOS*/

--CREATE PROCEDURE costo_niño
--@codigovuelo varchar(15)
--as
--select 
--cod_vuelo as "Codigo del Vuelo",
--nombre as "Aerolinea",
--nombre_servicio_clase as "Tipo de Cabina",
--monto as "Cantidad de Pago"
--from tarifa tf
--inner join aerolinea ae
--on ae.RUC = tf.RUC
--inner join clase_cabina cc
--on cc.cod_clase = tf.cod_clase
--Where tipo_persona = 'Niño' and tf.cod_vuelo = @codigovuelo
/*EXEc costo_niño 'V002'*/

--CREATE PROCEDURE costo_vuelos
--@origen varchar(15),
--@destino varchar(15)
--as
--select 
--vu.cod_vuelo as "Codigo del Vuelo",
--tf.tipo_persona as "Tipo de Pasajero",
--ci.nombre_ciudad as "Ciudad de Origen",
--ci2.nombre_ciudad as "Ciudad de Destino",
--ae.nombre as "Aerolinea",
--nombre_servicio_clase as "Cabina",
--monto as Monto
--from vuelo vu
--inner join tarifa tf
--on tf.cod_vuelo = vu.cod_vuelo
--inner join ciudad ci
--on ci.cod_ciudad = vu.cod_ciudad_origen
--inner join ciudad ci2
--on ci2.cod_ciudad = vu.cod_ciudad_destino
--inner join aerolinea ae
--on ae.RUC = tf.RUC
--inner join clase_cabina cc
--on cc.cod_clase = tf.cod_clase
--where ci.nombre_ciudad = @origen and ci2.nombre_ciudad = @destino
/*exec costo_vuelos 'Tacna','Lima'*/

--CREATE PROCEDURE cant_reservas
--@codigopasajero varchar(15)
--as
--select Cantidad=count(cod_reserva)  from reserva
--where cod_pasajero = @codigopasajero
/*exec cant_reservas '0020'*/

--CREATE PROCEDURE aeropuerto_destino
--@nrovuelo varchar(15)
--as
--select ae.nombre_aereopuerto as "Aeropuerto de Destino" from detalles_vuelo dv
--inner join aeropuerto ae
--on dv.cod_aeropuerto_destino = ae.cod_aereopuerto
--where nro_vuelo = @nrovuelo
/*exec aeropuerto_destino '1002'*/

--CREATE PROCEDURE consultar_clases
--@nro_vuelo varchar(15)
--as
--select 
--nombre_servicio_clase as "Clase de Cabina",
--nro_vuelo as "Numero de Vuelo",
--dv.cod_vuelo as "Codigo de Vuelo",
--nombre as "Aerolinea"
--from detalles_vuelo dv
--inner join tarifa tf
--on tf.RUC = dv.RUC
--INNER join clase_cabina cc
--on cc.cod_clase = tf.cod_clase
--inner join aerolinea ae
--on ae.RUC = tf.RUC
--WHERE nro_vuelo = @nro_vuelo
/*exec consultar_clases '1002'*/

--CREATE PROCEDURE consulta_vuelo
--@fechahora datetime
--as
--select * from detalles_vuelo 
--where horario_partida = @fechahora
/*select * from detalles_vuelo*/
/*exec consulta_vuelo '21/07/2014 07:00:00.000'*/

/*	Reservas concretizado	*/
--CREATE PROCEDURE buscar_reservas_realizadas @cod_pasajero VARCHAR(15) 
--AS
--SELECT * FROM reservas_realizadas where cod_pasajero=@cod_pasajero



--exec buscar_reservas_realizadas '0020'





/* Promociones aerolineas */

--CREATE PROCEDURE buscar_promociones @nom_aerolinea varchar(15)
--AS
--SELECT * FROM promociones_aerolinea where nombre=@nom_aerolinea
--
	-- EXEC buscar_promociones 'LAN'


/*KM_ACUMULADOS*/
--CREATE PROCEDURE km_vuelo @nro_vuelo varchar(15)
--AS
--SELECT nro_vuelo,kilometros_acumulados from detalles_vuelo where nro_vuelo=@nro_vuelo
--exec km_vuelo '1001'
--SELECT * FROM detalles_vuelo
--
--
--CREATE PROCEDURE escalas_vuelo @cod_compra varchar(10)
--AS
--SELECT aereopuerto_destino FROM detalle_compra dc inner join pasaje p on dc.cod_pasaje=p.cod_pasaje 
--inner join detalles_vuelo_ciudad dv on p.nro_vuelo=dv.nro_vuelo where cod_compra = @cod_compra
--
----exec escalas_vuelo 'C112'


--SELECT * FROM detalles_vuelo_ciudad

/*	Tarifa cuando se lleva un infante	*/
--CREATE PROCEDURE tarifa_tipo @tipo varchar(10)
--AS
--SELECT t.cod_vuelo,monto from tarifa t inner join vuelo v on t.cod_vuelo=v.cod_vuelo 
--where tipo_persona=@tipo

--exec tarifa_tipo 'infante'

/*	La cantidad de pasajes	*/
--CREATE PROCEDURE nro_pasajes_compra @cod_compra varchar(10)
--AS
--SELECT count(*) as 'Nro_pasajes' FROM detalle_compra dc inner join pasaje p on dc.cod_pasaje=p.cod_pasaje 
--inner join detalles_vuelo_ciudad dv on p.nro_vuelo=dv.nro_vuelo where cod_compra=@cod_compra
--exec nro_pasajes_compra 'C112'

/*	Tiempo estimado de vuelo de cada escala	*/
--CREATE PROCEDURE tiempo_vuelo_compra @cod_compra varchar(15)
--AS
--SELECT p.nro_vuelo,tiempo_vuelo FROM detalle_compra dc inner join pasaje p on dc.cod_pasaje=p.cod_pasaje 
--inner join detalles_vuelo_ciudad dv on p.nro_vuelo=dv.nro_vuelo inner join vuelo v on v.cod_vuelo=dv.cod_vuelo WHERE cod_compra=@cod_compra


/*	Quiero saber si el vuelo en una determinada fecha	*/
--CREATE PROCEDURE vuelo_realizado @nro_vuelo varchar(15), @fecha varchar(15)
--AS
--SELECT nro_vuelo,cod_vuelo,estado_vuelo from detalles_vuelo where nro_vuelo=@nro_vuelo and horario_partida=@fecha
