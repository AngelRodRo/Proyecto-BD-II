create procedure nueva_reserva
as 
begin
	if not exists (select top(1) cod_reserva from reserva)
		insert into compra(cod_compra,fecha_compra) values(1,GETDATE())
	if exists (select top(1) cod_compra from compra)
		insert into compra(cod_compra,fecha_compra) values(((select max(cod_compra) from compra)+1),GETDATE())
end