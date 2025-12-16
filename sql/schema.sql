create DATABASE DigitalGarden;
use digitalgarden;
create table users(
 id int PRIMARY key AUTO_INCREMENT,
  email varchar (20) UNIQUE,
   userpassword varchar (33)
);
create table themes(
 id int PRIMARY key AUTO_INCREMENT,
  color varchar (10),
   userId Int ,
    FOREIGN key (userId) REFERENCES users (id)
);
create table notes(
 id int PRIMARY key AUTO_INCREMENT,
  title varchar (10) UNIQUE,
   themeId Int ,
    content text,
    FOREIGN key (themeId) REFERENCES themes (id),
    important int 
);
alter table users
add userName varchar(30);
SELECT * from users;
alter table users
modify userName varchar(30)
after id;
select * from users
insert into users (id,userName,email,userpassword)
values (1,"zakaria","lafhielzakaria@gmail.com","zikooo")
alter table users
modify email varchar(50)
delete from users;
select * from users
insert into users (id,userName,email,userPassword)
values (1,"zakaria","lafhielzakaria@gmail.com","zikoow");