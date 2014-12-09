ALTER VIEW vuelos_a
AS
SELECT dv.nro_vuelo as 'Numero de vuelo', dv.cod_vuelo as 'Codigo de vuelo',ap.nombre_aereopuerto as 'Aeropuerto de origen',ao.nombre_aereopuerto as 'Aeropuerto de destino',
c.nombre_ciudad as 'Ciudad de origen',p.nombre_pais as 'Pais origen', cd.nombre_ciudad as 'Ciudad de destino',pa.nombre_pais as 'Pais de Destino',horario_llegada as 'Horario de llegada',
horario_partida as 'Horario de partida',t.monto as 'Monto',ae.nombre as 'Nombre de aerolinea',
dv.kilometros_acumulados as 'Kilometros acumulados' FROM vuelo v 
inner join detalles_vuelo dv on dv.cod_vuelo=v.cod_vuelo
inner join avion a on a.matricula_avion=dv.matricula_avion
inner join aerolinea ae on ae.RUC=a.RUC
inner join tarifa t on ae.RUC=t.RUC
inner join descuento_promocion dp on dp.cod_promocion=t.cod_promocion
inner join aeropuerto ap on ap.cod_aereopuerto=dv.cod_aeropuerto_origen
inner join ciudad c on ap.cod_ciudad=c.cod_ciudad
inner join aeropuerto ao on ao.cod_aereopuerto=dv.cod_aeropuerto_destino
inner join ciudad cd on ao.cod_ciudad=cd.cod_ciudad
inner join pais p on p.cod_pais=c.cod_pais
inner join pais pa on pa.cod_pais=cd.cod_pais