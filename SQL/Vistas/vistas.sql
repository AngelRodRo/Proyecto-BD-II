/*CREATE VIEW promociones_vuelo
with encryption
as
SELECT nombre_promocion as Promocion,
porcentaje_descuento as "Porcentaje de Descuento",
descripcion as Descripcion,
tf.tipo_persona as "Tipo de Persona",
monto as Monto,ae.nombre as Aeroliena,
tf.cod_vuelo as "Codigo de Vuelo", 
ci.nombre_ciudad as "Ciudad de Origen",
ci2.nombre_ciudad as "Ciudad de Destino" 
from descuento_promocion dp
inner join tarifa tf
on tf.cod_promocion = dp.cod_promocion
inner join aerolinea ae
on tf.RUC = ae.RUC 
inner join vuelo vu
on vu.cod_vuelo = tf.cod_vuelo
inner join ciudad ci
on vu.cod_ciudad_origen = ci.cod_ciudad
inner join ciudad ci2
on vu.cod_ciudad_destino = ci2.cod_ciudad*/


/*CREATE VIEW cliente_moroso
with encryption
as
select 
nro_cuota as "Numero de Cuota",
fecha_pago as "Fecha de Pago",
fecha_limite "Maximo plazo de Pago",
monto_pagado as "Monto a Pagar",
titular_tarjeta as "Titular de la Tarjeta",
tipo_tarjeta as "Tipo de Tarjeta",
pa.cod_compra as "Codigo de Compra"
from detalle_cuotas dc
inner join pago pa
on dc.cod_compra = pa.cod_compra
inner join detalles_tarjeta dt
on dt.nro_tarjeta = pa.nro_tarjeta
WHERE fecha_pago > fecha_limite or fecha_pago is NULL*/

/*CREATE VIEW alianza_aereas
with encryption
as
SELECT nombre_alianza as "Nombre de la Alianza Aerea", cod_alianza as "Codigo de la Alianza" 
FROM  alianza_aerea*/

--CREATE VIEW reservas_no_compradas
--with encryption
--as
--select 
--cod_reserva as "Codigo de la Reserva",
--cod_pasajero as "Codigo de Pasajero",
--cod_Pasaje as "Codigo del Pasaje",
--fecha_reserva as "Fecha de la Reserva",
--monto_total as "Monto de Pago"
--from reserva
--where cod_compra is NULL

/*	Reservas concretizado	*/
--CREATE VIEW reservas_realizadas 
--WITH ENCRYPTION
--AS 
--SELECT p.cod_pasajero,nombre_pasajero,apellido_paterno,apellido_materno,
--sexo,r.cod_reserva,fecha_reserva,monto_total,c.cod_compra,fecha_compra,
--ciudad_destino,ciudad_origen,nro_escalas FROM pasajero p inner join reserva r on 
--p.cod_pasajero=r.cod_pasajero inner join compra c on r.cod_compra=c.cod_compra

/*	Promociones aerolineas	*/
--CREATE VIEW promociones_aerolinea
--WITH ENCRYPTION
--AS 
--SELECT a.RUC,nombre,p.cod_promocion,nombre_promocion,porcentaje_descuento,descripcion 
--from aerolinea a inner join tarifa t on t.RUC=a.RUC inner join descuento_promocion p on p.cod_promocion=t.cod_promocion

/*	Aeropuertos a los cuales transcurre	*/
--CREATE VIEW detalles_vuelo_ciudad 
--WITH ENCRYPTION
--AS
--SELECT nro_vuelo,cod_vuelo,aereopuerto_origen,nombre_aereopuerto as 'aereopuerto_destino',ciudad_origen,nombre_ciudad as 'ciudad_destino' from
--(SELECT nro_vuelo,cod_vuelo,nombre_aereopuerto as 'aereopuerto_origen',nombre_ciudad as 'ciudad_origen',cod_aeropuerto_destino from detalles_vuelo d inner join aeropuerto a on
--d.cod_aeropuerto_origen=a.cod_aereopuerto inner join ciudad c on c.cod_ciudad=a.cod_ciudad) as ad inner join aeropuerto a on ad.cod_aeropuerto_destino=a.cod_aereopuerto inner join ciudad c
--on c.cod_ciudad=a.cod_ciudad
