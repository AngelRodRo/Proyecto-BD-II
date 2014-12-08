create procedure nueva_compra
--@cod_compra int output
as 
begin
	if not exists (select top(1) cod_compra from compra)
		
		insert into compra(cod_compra,fecha_compra) values(1,GETDATE())
	if exists (select top(1) cod_compra from compra)
		insert into compra(cod_compra,fecha_compra) values(((select max(cod_compra) from compra)+1),GETDATE())
	----
	--set @cod_compra = (select max(cod_compra) from compra)
end