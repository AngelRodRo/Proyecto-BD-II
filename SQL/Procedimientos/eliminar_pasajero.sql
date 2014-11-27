create procedure eliminar_pasajero
@cod_pasajero varchar(15)
as
delete from identificacion where cod_pasajero = @cod_pasajero

create procedure editar_pasajero
@cod_pasajero varchar(15),
@descripcion varchar(15),
@nombre_pasajero varchar(15),
@apellido_paterno varchar(20),
@apellido_materno varchar(20),
@fecha_nacimiento datetime,
@email_pasajero varchar(35),
@sexo varchar(1),
@nombre_pais varchar(20)
as
update reg_pasajero
set 
descripcion = @descripcion,
nombre_pasajero = @nombre_pasajero ,
apellido_paterno = @apellido_paterno ,
apellido_materno = @apellido_materno ,
fecha_nacimiento = @fecha_nacimiento,
email_pasajero = @email_pasajero,
sexo = @sexo,
nombre_pais = @nombre_pais
where cod_pasajero = @cod_pasajero
