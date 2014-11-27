CREATE PROC buscar_vuelo
@ciudad_origen VARCHAR(20),
@ciudad_destino VARCHAR(20)
AS
SELECT * FROM vuelos WHERE ciudad_origen