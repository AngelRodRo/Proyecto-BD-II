
ALTER TRIGGER asiento_pasaje
ON pasaje
FOR INSERT
AS
DECLARE @nro_asiento VARCHAR(20)
DECLARE @nro_vuelo VARCHAR(20)
DECLARE @cont int

SELECT @nro_asiento=p.nro_asiento,@nro_vuelo=p.nro_vuelo FROM pasaje p inner join inserted on
p.cod_pasaje=inserted.cod_pasaje
SELECT @cont=count(*) FROM pasaje p inner join detalles_vuelo dv on
p.nro_vuelo=dv.nro_vuelo where p.nro_vuelo=@nro_vuelo and p.nro_asiento=@nro_asiento

IF(@cont>=2)
	raiserror ('Asiento ocupado', 16, 1)
