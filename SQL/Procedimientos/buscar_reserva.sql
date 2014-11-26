
--PROCEDIMIENTO ALMACENADO DE BUSCAR RESERVA--
CREATE PROC buscar_reserva
@ciudad_origen VARCHAR(30),
@ciudad_destino VARCHAR(30)
AS
SELECT * FROM reservas_vuelo WHERE [Ciudad de origen]=@ciudad_origen AND [Ciudad de destino] = @ciudad_destino