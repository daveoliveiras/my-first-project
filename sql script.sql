create database test;
use test;

create table person(
	name varchar(30),
    email varchar(30),
    country varchar(30)
);

insert into person values("Davi", "desempregado@19anos.com", "Brazil");

select * from person;

-- drop database test;