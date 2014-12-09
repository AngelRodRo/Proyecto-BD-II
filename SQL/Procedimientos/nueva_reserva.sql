alter procedure nueva_reserva
as 
begin
	if not exists (select top(1) cod_reserva from reserva)
		insert into reserva(cod_reserva,fecha_reserva,cod_compra) values(1,GETDATE(),'0')
	if exists (select top(1) cod_compra from compra)
		insert into reserva(cod_reserva,fecha_reserva,cod_compra) values(((select max(cod_reserva) from reserva)+1),GETDATE(),'0')
end