create database contexto;
use contexto;

create table palabra(
idPalabra int primary key auto_increment not null,
nombrePalabra varchar (500) not null,
descripcion varchar (500) not null,
tipo enum('sustantivo','adjetivo', 'verbo', 'pronombre','adverbio','preposicion','conjuncion') NOT NULL,
`created_at` datetime NOT NULL,
`updated_at` datetime NOT NULL,
`deleted_at` datetime NOT NULL
);

select * from palabra;

create table ejemplo(
idEjemplo int primary key auto_increment not null,
ingles varchar(500) not null,
español varchar (500) not null,
`created_at` datetime NOT NULL,
`updated_at` datetime NOT NULL,
`deleted_at` datetime NOT NULL
);

create table t_usuario(
idUsuario int (5)primary key auto_increment not null,
usuario varchar (255) not null,
`password` varchar (255) not null,
tipo varchar (255) not null);
