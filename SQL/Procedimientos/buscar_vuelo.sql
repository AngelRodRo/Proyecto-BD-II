CREATE PROC buscar_vuelo
@ciudad_origen VARCHAR(20),
@ciudad_destino VARCHAR(20)
AS
SELECT * FROM vuelos WHERE ciudad_origen

ALTER PROC [dbo].[buscar_vuelos]
@ciudad_origen varchar(20),
@ciudad_destino varchar(20),
@fecha_partida datetime
AS
SELECT * FROM vuelos_a WHERE [Ciudad de origen]=@ciudad_origen AND [Ciudad de destino]=@ciudad_destino
AND [Horario de partida]> @fecha_partida