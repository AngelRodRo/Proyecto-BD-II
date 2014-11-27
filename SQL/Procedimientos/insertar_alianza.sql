CREATE PROCEDURE insertar_alianza
@cod_alianza varchar(15),
@nombre_alianza varchar(20)
as
insert into alianza_aerea values(@cod_alianza,@nombre_alianza)
exec insertar_alianza 'MF','Mundo Feliz'
select * from alianza_aerea