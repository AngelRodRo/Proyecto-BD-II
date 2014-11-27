--VISTA QUE MUESTRA LAS RESERVAS REALIZADAS--
CREATE VIEW reservas_vuelo
AS
SELECT p.cod_pasajero as 'Codigo',nombre_pasajero as 'Nombre de pasajero',apellido_paterno as 'Apellido Paterno',apellido_materno as 'Apellido Materno', 
fecha_nacimiento as 'Fecha de nacimiento',sexo as 'Sexo',nro_telefono as 'Numero de telefono', r.cod_pasaje as 'Codigo de pasaje',
cod_reserva as 'Codigo de reserva', fecha_reserva as 'Fecha de reserva',nro_asiento as 'Numero de asiento',
precio_pasaje as 'Precio de pasaje',dv.nro_vuelo as 'Numero de vuelo',cod_vuelo as 'Codigo de vuelo',
c.nombre_ciudad as 'Ciudad de origen',cd.nombre_ciudad as 'Ciudad de destino' FROM pasajero p inner join reserva r on p.cod_pasajero=r.cod_pasajero 
inner join telefono t on t.cod_pasajero=p.cod_pasajero
inner join pasaje pa on  r.cod_pasaje=pa.cod_pasaje 
inner join detalles_vuelo dv on pa.nro_vuelo=dv.nro_vuelo 
inner join aeropuerto ae on ae.cod_aereopuerto = dv.cod_aeropuerto_origen
inner join aeropuerto ao on ao.cod_aereopuerto = dv.cod_aeropuerto_destino
inner join ciudad c on ae.cod_ciudad=c.cod_ciudad
inner join ciudad cd on ao.cod_ciudad = cd.cod_ciudad