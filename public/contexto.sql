create database contexto;
use contexto;

select * from t_usuario;
create table t_usuario(
 idUsuario int auto_increment not null primary key,
 usuario varchar (100),
 password varchar (100),
 type VARCHAR (100));

create table palabra(
idPalabra int primary key not null auto_increment,
tipo enum('sustantivo', 'adjetivo', 'verbo', 'pronombre', 
'adverbio', 'preposicion', 'conjuncion') not null,
palabra varchar (30) not null,
definicion varchar (500) not null,
sinonimo varchar (500) not null,
ejemplo varchar (500) not null,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
);