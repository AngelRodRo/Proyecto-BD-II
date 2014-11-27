create trigger editar_pasajero_vista
on reg_pasajero
instead of update
as
begin
	update identificacion 
		set 
			descripcion = (select descripcion from inserted) 
		where cod_pasajero = (select cod_pasajero from inserted)
	update pasajero 
		set
			nombre_pasajero =  (select nombre_pasajero from inserted),
			apellido_paterno = (select apellido_paterno from inserted) ,
			apellido_materno = (select apellido_materno from inserted) ,
			fecha_nacimiento = (select fecha_nacimiento from inserted),
			email_pasajero =  (select email_pasajero from inserted),
			sexo = (select nombre_pasajero from inserted),
			cod_pais = (select cod_pais from pais where nombre_pais = (select nombre_pais from inserted))
		where cod_pasajero = (select cod_pasajero from deleted)
end