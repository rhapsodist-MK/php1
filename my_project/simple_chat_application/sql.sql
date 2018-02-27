create database chat
///////////////////////////////////////////////////////////////////////////////////////


create table users(
	UserId int primary key auto_increment,
	UserName varchar(50),
	UserMail varchar(50),
	UserPassword text
)charset utf8


create table chats(
	ChatId int primary key auto_increment,
	ChatUserId int,
	ChatText text
)charset utf8


drop table users
drop table chats

select * from users

select * from chats