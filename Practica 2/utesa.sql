create database utesa;
use utesa;

create table estudiante(
ID_estudiante int auto_increment primary key,
nombre varchar(160) not null,
apellido varchar(160) not null,
correo varchar(100),
telefono varchar(160),
matricula varchar(60) unique

);

select ID_estudiante, Nombre, Apellido, Correo, Telefono, Matricula from Estudiante;