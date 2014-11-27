create procedure insertar_pasajero
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
insert into reg_pasajero(cod_pasajero,descripcion,nombre_pasajero, apellido_paterno, apellido_materno , fecha_nacimiento, sexo, email_pasajero,nombre_pais) values(@cod_pasajero,@descripcion,@nombre_pasajero, @apellido_paterno, @apellido_materno , @fecha_nacimiento, @sexo, @email_pasajero,@nombre_pais)

