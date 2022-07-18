create database test;
use test;

create table person(
	name varchar(30),    
    email varchar(30),
    password varchar(30),
    country varchar(30)
);

insert into person values("Davi", "desempregado@19anos.com", "1234", "Brazil");
insert into person values("Bruno", "militar@19anos.com", "4321", "Brazil");

select * from person;

-- drop database test;