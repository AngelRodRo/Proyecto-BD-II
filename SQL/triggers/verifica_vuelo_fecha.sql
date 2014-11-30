CREATE TRIGGER verifica_vuelo
ON detalles_vuelo
FOR INSERT 
AS
DECLARE @fecha_s datetime
DECLARE @fecha_l datetime
SELECT @fecha_s=dv.horario_llegada,@fecha_l=dv.horario_partida from detalles_vuelo dv 
inner join inserted on dv.nro_vuelo=inserted.nro_vuelo
if(@fecha_s>@fecha_l)
	raiserror ('Fecha de partida es mayor a la fecha de llegada', 16, 1)