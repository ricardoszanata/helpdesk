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
    colativo boolean default 1,
	constraint fkcoltipid foreign key(coltipid) references tiposdecoladoradores(tipid)
    );
create table usuarios(
	usuid int primary key auto_increment,
	usucolid int,
	ususetid int,
	usulogin varchar(50),
	usupass varchar(50),
	usuativo boolean default 1,
	constraint fkusucolid foreign key(usucolid) references colaboradores(colid),
	constraint fkususetid foreign key(ususetid) references setores(setid)
	);
create table chamados(
	chaid int primary key auto_increment,
	chadataabertura timestamp default current_timestamp,
	chadataprevisao datetime,
	chadatafinalizacao datetime,
	charespcolid int,
	chasolicolid int,
	chaexeccolid int,
	chaproblema varchar(1024),
	chasolucao varchar(1024),
	chastatus enum('ABERTO','PENDENTE','CANCELADO','FECHADO')
	);