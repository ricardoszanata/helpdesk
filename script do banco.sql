create database helpdesk;
use helpdesk;
create table setores(
    setid int primary key auto_increment,
    setnome varchar(100),
    setativo boolean default 1
    );
create table tiposdecoladoradores(
    tipid int primary key auto_increment,
    tipnome varchar(100),
    tipativo boolean default 1
    );
create table colaboradores(
    colid int primary key auto_increment,
    colnome varchar(100),
    colcelular varchar(20),
    colemail varchar(100),
    coltipid int,
    colativo boolean default 1
    );
create table chamados(
	chaid int primary key auto_increment,
	chadataabertura timestamp default current_timestamp,