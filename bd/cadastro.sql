create database cadastro;

use cadastro;

create table tbcadastro(
codcadastro int not null primary key auto_increment
, usuario varchar(20) not null
, senha varchar(100) not null
, nome varchar(20) 
, sobrenome varchar(30)
, celular char(13)
, nascimento date
, rua varchar(20) not null
, numerocasa int not null
, cidade varchar(20)
, uf varchar(2)
, cep varchar (9)
);

alter table tbcadastro
modify rua varchar(20);

alter table tbcadastro
modify numerocasa int;

insert into tbcadastro(usuario, senha) values('Thiago001', '12345'); 
