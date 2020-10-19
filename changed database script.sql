DROP DATABASE IF EXISTS Assignmentdb1;
create database Assignmentdb1;

use Assignmentdb1;

DROP TABLE IF EXISTS Orders;

Create table Orders(
firstname varchar(50) not null primary key,
lastname varchar(50) not null,
noOftyres int not null);

insert into Orders(firstname, lastname,noOfTyres)
values('john','smith',2);

alter table orders add Amount numeric null;

Update Orders
set Amount=noOftyres*110;