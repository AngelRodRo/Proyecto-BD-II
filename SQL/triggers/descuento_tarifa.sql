create trigger tarifa_desc
on tarifa
for insert
as
declare @montito int
UPDATE tarifa SET monto=inserted.monto-(porcentaje_descuento*inserted.monto) FROM tarifa t inner join inserted on t.cod_clase=inserted.cod_clase 
inner join descuento_promocion d on d.cod_promocion=t.cod_promocion
