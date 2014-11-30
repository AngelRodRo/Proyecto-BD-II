CREATE TRIGGER ed_verifica_vuelo
ON detalles_vuelo
FOR UPDATE
AS
DECLARE @fecha_s datetime
DECLARE @fecha_l datetime
SELECT @fecha_s=dv.horario_llegada from detalles_vuelo dv 
inner join inserted on dv.nro_vuelo=inserted.nro_vuelo
SELECT @fecha_l=dv.horario_partida from detalles_vuelo dv 
inner join deleted on dv.nro_vuelo=deleted.nro_vuelo
if(@fecha_s>@fecha_l)
raiserror ('Fecha de partida es mayor a la fecha de llegada', 16, 1)