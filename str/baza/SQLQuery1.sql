CREATE TABLE charakter (
    PersonID int IDENTITY(1,1),
	Nick varchar(255),
	Password varchar(100),
	lvl int,
	strange int,
	speed int,
	healthy int,
	E-mail varchar(50)
    LastName varchar(255),
    FirstName varchar(255)
);
create table quest(
id_quest int IDENTITY(1,1),
name varchar(30),
time int 
);
create table monster(
id int IDENTITY(1,1),
name varchar(100),
lvl int,
strange int,
	speed int
);
create table defence(
id int IDENTITY(1,1),
name_item varchar(20),
strange int,
defence int,
speed int,
price int,
lvl int
);

create table arms(
id int IDENTITY(1,1),
name_arm varchar(20),
strange int,
defence int,
speed int,
price int,
lvl int
);