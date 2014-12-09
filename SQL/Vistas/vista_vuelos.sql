create view vista_vuelos
as

select 
dv.cod_vuelo, dv.nro_vuelo, dv.horario_partida, dv.horario_llegada, ('Aeropuesto '+  a.nombre_aereopuerto +', '+c1.nombre_ciudad) as ciudad_origen, ('Aeropuesto '+  a2.nombre_aereopuerto +', '+ c2.nombre_ciudad) as ciudad_destino
from detalles_vuelo dv inner join aeropuerto a on a.cod_aereopuerto = dv.cod_aeropuerto_origen inner join aeropuerto a2
on a2.cod_aereopuerto = dv.cod_aeropuerto_destino 
inner join ciudad c1 on c1.cod_ciudad = a.cod_ciudad
inner join ciudad c2 on c2.cod_ciudad = a2.cod_ciudad