create view reg_pasajero
as
select p.cod_pasajero, id.descripcion, p.nombre_pasajero, p.apellido_paterno, p.apellido_materno,p.fecha_nacimiento, datediff(yy,p.fecha_nacimiento,getdate()) as edad, p.sexo,p.email_pasajero, pa.nombre_pais 
from pasajero p inner join pais pa
on p.cod_pais = pa.cod_pais inner join identificacion id
on id.cod_pasajero = p.cod_pasajero