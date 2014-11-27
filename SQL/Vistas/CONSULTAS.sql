/*	1	Reservas concretizadas*/

--	SELECT p.cod_pasajero,nombre_pasajero,apellido_paterno,apellido_materno,
--	sexo,r.cod_reserva,fecha_reserva,monto_total,c.cod_compra,fecha_compra,
--	ciudad_destino,ciudad_origen,nro_escalas FROM pasajero p inner join reserva r on 
--	p.cod_pasajero=r.cod_pasajero inner join compra c on r.cod_compra=c.cod_compra

/*	2	Promociones aerolineas*/

--	SELECT a.RUC,nombre,p.cod_promocion,nombre_promocion,porcentaje_descuento,descripcion 
--	from aerolinea a inner join tarifa t on t.RUC=a.RUC inner join descuento_promocion p on p.cod_promocion=t.cod_promocion

/*	3	Costos vuelos*/

--	SELECT v.cod_vuelo,monto,t.cod_clase from vuelo v inner join tarifa t
--	on v.cod_vuelo=t.cod_vuelo 

/*	4	KM_ACUMULADOS*/

--	SELECT nro_vuelo,kilometros_acumulados from detalles_vuelo

/*	5	Aeropuertos a los cuales transcurre*/

--SELECT nro_vuelo,cod_vuelo,aereopuerto_origen,nombre_aereopuerto as 'aereopuerto_destino',ciudad_origen,nombre_ciudad as 'ciudad_destino' from
--(SELECT nro_vuelo,cod_vuelo,nombre_aereopuerto as 'aereopuerto_origen',nombre_ciudad as 'ciudad_origen',cod_aeropuerto_destino from detalles_vuelo d inner join aeropuerto a on
--d.cod_aeropuerto_origen=a.cod_aereopuerto inner join ciudad c on c.cod_ciudad=a.cod_ciudad) as ad inner join aeropuerto a on ad.cod_aeropuerto_destino=a.cod_aereopuerto inner join ciudad c
--on c.cod_ciudad=a.cod_ciudad


/*	6	Tarifa cuando se lleva un infante*/

--	SELECT t.cod_vuelo,monto from tarifa t inner join vuelo v on t.cod_vuelo=v.cod_vuelo 
--	where tipo_persona='infante'

/*	7	La cantidad de pasajes*/

--	SELECT dc.cod_compra,count(dc.cod_pasaje) as 'Nro_pasajes' FROM detalle_compra dc inner join pasaje p on dc.cod_pasaje=p.cod_pasaje 
--	inner join detalles_vuelo dv on p.nro_vuelo=dv.nro_vuelo group by dc.cod_compra

/*	8	Quiero saber si el vuelo en una determinada fecha*/

--select * from detalles_vuelo	
--SELECT nro_vuelo,cod_vuelo,estado_vuelo from detalles_vuelo where horario_partida='21/07/2014 7:00:00'

/*	9	Promociones de vuelos. */
--	SELECT nombre_promocion as Promocion,
--	porcentaje_descuento as "Porcentaje de Descuento",
--	descripcion as Descripcion,
--	tf.tipo_persona as "Tipo de Persona",
--	monto as Monto,ae.nombre as Aeroliena,
--	tf.cod_vuelo as "Codigo de Vuelo", 
--	ci.nombre_ciudad as "Ciudad de Origen",
--	ci2.nombre_ciudad as "Ciudad de Destino" 
--	from descuento_promocion dp
--	inner join tarifa tf
--	on tf.cod_promocion = dp.cod_promocion
--	inner join aerolinea ae
--	on tf.RUC = ae.RUC 
--	inner join vuelo vu
--	on vu.cod_vuelo = tf.cod_vuelo
--	inner join ciudad ci
--	on vu.cod_ciudad_origen = ci.cod_ciudad
--	inner join ciudad ci2
--	on vu.cod_ciudad_destino = ci2.cod_ciudad

/*	10	Quiero saber cuándo es el costo para un niño. */
	/*select 
	cod_vuelo as "Codigo del Vuelo",
	nombre as "Aerolinea",
	nombre_servicio_clase as "Tipo de Cabina",
	monto as "Cantidad de Pago"
	from tarifa tf
	inner join aerolinea ae
	on ae.RUC = tf.RUC
	inner join clase_cabina cc
	on cc.cod_clase = tf.cod_clase
	Where tipo_persona = 'Niño'*/

/*	11	Quiero saber el costo del vuelo de  un determinado destino  */
--	select 
--	vu.cod_vuelo as "Codigo del Vuelo",
--	tf.tipo_persona as "Tipo de Pasajero",
--	ci.nombre_ciudad as "Ciudad de Origen",
--	ci2.nombre_ciudad as "Ciudad de Destino",
--	ae.nombre as "Aerolinea",
--	nombre_servicio_clase as "Cabina",
--	monto as Monto
--	from vuelo vu
--	inner join tarifa tf
--	on tf.cod_vuelo = vu.cod_vuelo
--	inner join ciudad ci
--	on ci.cod_ciudad = vu.cod_ciudad_origen
--	inner join ciudad ci2
--	on ci2.cod_ciudad = vu.cod_ciudad_destino
--	inner join aerolinea ae
--	on ae.RUC = tf.RUC
--	inner join clase_cabina cc
--	on cc.cod_clase = tf.cod_clase
--	where ci.nombre_ciudad = 'Tacna' and ci2.nombre_ciudad = 'Lima'


/*	12	Quiero saber cuántas reservas tengo como pasajero. */
--	select Cantidad=count(cod_reserva)  from reserva
--	where cod_pasajero = '0020'


/*	13	Quiero saber el nombre del aeropuerto del destino de un determinado vuelo*/
--	select ae.nombre_aereopuerto as "Aeropuerto de Destino" from detalles_vuelo dv
--	inner join aeropuerto ae
--	on dv.cod_aeropuerto_destino = ae.cod_aereopuerto
--	where nro_vuelo = 1005

/*	14	Quiero saber la clase de cabinas en un determinado vuelo.   */
--	select 
--	nombre_servicio_clase as "Clase de Cabina",
--	nro_vuelo as "Numero de Vuelo",
--	dv.cod_vuelo as "Codigo de Vuelo",
--	nombre as "Aerolinea"
--	from detalles_vuelo dv
--	inner join tarifa tf
--	on tf.RUC = dv.RUC
--	INNER join clase_cabina cc
--	on cc.cod_clase = tf.cod_clase
--	inner join aerolinea ae
--	on ae.RUC = tf.RUC
--	WHERE nro_vuelo = '1001'


/*	15	Quiero saber  si soy un cliente moroso y cual es el vuelo asociado. */
--	select 
--	nro_cuota as "Numero de Cuota",
--	fecha_pago as "Fecha de Pago",
--	fecha_limite "Maximo plazo de Pago",
--	monto_pagado as "Monto a Pagar",
--	titular_tarjeta as "Titular de la Tarjeta",
--	tipo_tarjeta as "Tipo de Tarjeta",
--	pa.cod_compra as "Codigo de Compra"
--	from detalle_cuotas dc
--	inner join pago pa
--	on dc.cod_compra = pa.cod_compra
--	inner join detalles_tarjeta dt
--	on dt.nro_tarjeta = pa.nro_tarjeta
--	WHERE fecha_pago > fecha_limite or fecha_pago is NULL


/*	16	Cuantas alianzas aéreas hay disponibles */
	/*SELECT nombre_alianza as "Nombre de la Alianza Aerea", cod_alianza as "Codigo de la Alianza" 
	FROM  alianza_aerea*/

/*	17	Quiero saber las reservas no concretada. */
--	select 
--	cod_reserva as "Codigo de la Reserva",
--	cod_pasajero as "Codigo de Pasajero",
--	cod_Pasaje as "Codigo del Pasaje",
--	fecha_reserva as "Fecha de la Reserva",
--	monto_total as "Monto de Pago"
--	from reserva
--	where cod_compra is NULL

/*	18	aeropuertos con mas trafico*/
--	select distinct top (100) percent nombre_aereopuerto,count(dv1.nro_vuelo) as [vuelos que parten], count(dv2.nro_vuelo) [vuelos que llegan],
--	vuelo_totales =  count(dv1.nro_vuelo) + count(dv2.nro_vuelo)
--	from aeropuerto ae
--	inner join detalles_vuelo dv1
--	on ae.cod_aereopuerto = dv1.cod_aeropuerto_origen
--	inner join detalles_vuelo dv2
--	on dv2.cod_aeropuerto_destino = ae.cod_aereopuerto
--	group by nombre_aereopuerto
--	order by vuelo_totales asc

/*	19	Ciudades mas visitadas*/

--	select ci.nombre_ciudad,count(nro_vuelo) as visitas from aeropuerto ae
--	inner join ciudad ci
--	on ci.cod_ciudad = ae.cod_ciudad
--	inner join detalles_vuelo dvt
--	on dvt.cod_aeropuerto_destino = ae.cod_aereopuerto
--	group by ci.nombre_ciudad, ae.nombre_aereopuerto


/*20 Pasajero que realiza mas compras*/
--Select c.cod_pasajero,nombre_pasajero,[compras ejecutadas] from 
--(select TOP 1 cod_pasajero, count(cod_compra) as [compras ejecutadas] from detalle_compra dc 
--group by cod_pasajero order by [compras ejecutadas] DESC) as c 
--inner join pasajero j  on j.cod_pasajero=c.cod_pasajero

