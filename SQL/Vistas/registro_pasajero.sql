
CREATE VIEW registro_pasajero
AS
SELECT cod_pasajero as 'Codigo',nombre_pasajero as 'Nombre de pasajero',apellido_paterno as 'Apellido Paterno',
apellido_materno as 'Apellido Materno', Edad = datediff(YEAR,fecha_nacimiento,getdate()),
email_pasajero as 'Email', sexo as 'Sexo' FROM pasajero	
