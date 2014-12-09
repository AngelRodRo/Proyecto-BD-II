ALTER VIEW vuelos_a
AS
SELECT dv.nro_vuelo as 'Numero de vuelo', dv.cod_vuelo as 'Codigo de vuelo',ap.nombre_aereopuerto as 'Aeropuerto de origen',ao.nombre_aereopuerto as 'Aeropuerto de destino',
c.nombre_ciudad as 'Ciudad de origen',p.nombre_pais as 'Pais origen', cd.nombre_ciudad as 'Ciudad de destino',pa.nombre_pais as 'Pais de Destino',horario_llegada as 'Horario de llegada',
horario_partida as 'Horario de partida',t1.monto as 'Monto',ae.nombre as 'Nombre de aerolinea',
dv.kilometros_acumulados as 'Kilometros acumulados',nombre_servicio_clase as 'Nombre del servicio',cc.descripcion as 'Descripcion',t1.tipo_persona as 'Tipo de persona',dp.porcentaje_descuento as 'Porcentaje de descuento' FROM vuelo v 
inner join detalles_vuelo dv on dv.cod_vuelo=v.cod_vuelo
inner join avion a on a.matricula_avion=dv.matricula_avion
inner join aerolinea ae on ae.RUC=a.RUC
inner join tarifa t1 on t1.cod_vuelo=dv.cod_vuelo
inner join descuento_promocion dp on dp.cod_promocion=t1.cod_promocion
inner join aeropuerto ap on ap.cod_aereopuerto=dv.cod_aeropuerto_origen
inner join ciudad c on ap.cod_ciudad=c.cod_ciudad
inner join aeropuerto ao on ao.cod_aereopuerto=dv.cod_aeropuerto_destino
inner join ciudad cd on ao.cod_ciudad=cd.cod_ciudad
inner join pais p on p.cod_pais=c.cod_pais
inner join pais pa on pa.cod_pais=cd.cod_pais
inner join clase_cabina cc on cc.cod_clase=t1.cod_clase 