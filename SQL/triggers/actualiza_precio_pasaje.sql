CREATE TRIGGER precio_pasaje
ON pasaje
FOR INSERT
AS
DECLARE @nro_vuelo VARCHAR(20)
DECLARE @precio INT
SELECT @nro_vuelo=p.nro_vuelo FROM pasaje p inner join inserted
on p.nro_vuelo=inserted.nro_vuelo
SELECT @precio=t.monto FROM tarifa t inner join 
vuelo v on t.cod_vuelo=v.cod_vuelo inner join
detalles_vuelo dv on dv.cod_vuelo = v.cod_vuelo where nro_vuelo=@nro_vuelo
UPDATE pasaje SET precio_pasaje=@precio FROM pasaje p inner join inserted 
on p.cod_pasaje=inserted.cod_pasaje  

