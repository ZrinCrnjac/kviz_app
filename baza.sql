drop database if exists kviz_app;
create database kviz_app default character set utf8;
use kviz_app;

create table voditelj(
	voditelj_id int not null primary key auto_increment,
	ime varchar(10) not null,
	lozinka char(15) not null
);

create table ekipa(
	ekipa_id int not null primary key auto_increment,
	naziv varchar(25) not null,
	br_clanova smallint not null
);
create table kviz(
	kviz_id int not null primary key auto_increment,
	datum date,
	voditelj_id int
);

create table kategorija(
	kategorija_id int not null primary key auto_increment,
	naziv varchar(10) not null,
	br_pitanja smallint
);

create table pitanje(
	pitanje_id int not null primary key auto_increment,
	tekst_pitanja varchar(100) not null,
	kategorija_id int not null,
	kviz_id int not null
);

create table ekipa_kviz(
	ekipa_id int not null,
	kviz_id int not null,
	primary key(ekipa_id,kviz_id)
);	

alter table kviz add foreign key (voditelj_id) references voditelj(voditelj_id);

alter table pitanje add foreign key (kategorija_id) references kategorija(kategorija_id);

alter table pitanje add foreign key (kviz_id) references kviz(kviz_id);

alter table ekipa_kviz add foreign key (ekipa_id) references ekipa(ekipa_id);

alter table ekipa_kviz add foreign key (kviz_id) references kviz(kviz_id);	

insert into voditelj(ime, lozinka)
values ('Tomo','e');

insert into ekipa(naziv,br_clanova)
values('Garfield',4),('Vilimovi Ribiči',4),('Ovanovi jarići',4);

insert into kviz(datum,voditelj_id)
values('2010-02-02',1);

insert into kategorija(naziv, br_pitanja)
values('Sport',2),('Kultura',2),('Znanost',2),('Pov/Geo',2),('Iznenađenje',2);

insert into pitanje(tekst_pitanja,kategorija_id,kviz_id)
values('Prvo sport',1,1),('Drugo sport',1,1),('Prvo kultura',2,1),('Drugo kultura',2,1),('Prvo znanost',3,1),('Drugo znanost',3,1),
('Prvo pg',4,1),('Drugo pg',4,1),('Prvo Iznenadjenje',5,1),('Drugo Iznenadjenje',5,1);