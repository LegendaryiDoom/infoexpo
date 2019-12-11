create DATABASE infoexpo;
create table empresas(id_emp INTEGER auto_increment primary key, nombreE varchar(150), correoE varchar(150), direccionE varchar(150), telefonoE integer, visitasE integer, categoria varchar(100));
create table usuarios(id_usu integer auto_increment primary key, nombreU varchar(150), correoU varchar(150), contraU varchar(150), telefonoU integer);
