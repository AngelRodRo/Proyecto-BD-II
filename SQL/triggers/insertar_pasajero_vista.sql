create trigger insertar_pasajero_vista
on reg_pasajero
instead of insert
as
begin
	insert into identificacion(cod_pasajero,descripcion) 
		select cod_pasajero,descripcion from inserted
	insert into pasajero(cod_pasajero,nombre_pasajero,apellido_paterno,apellido_materno,fecha_nacimiento,sexo,email_pasajero,cod_pais)
		select cod_pasajero,nombre_pasajero,apellido_paterno,apellido_materno,fecha_nacimiento,sexo, email_pasajero,(select cod_pais from pais where nombre_pais = (select nombre_pais from inserted)) from inserted
		
end