drop schema if exists SimpleShortener;
create schema SimpleShortener;

drop table if exists SimpleShortener.shortener;
drop table if exists SimpleShortener.shortenerInfo;

create table SimpleShortener.shortener
(
	id int auto_increment primary key,
	code varchar(10),
	created_at Date,
	visits int,
	link text
);

create table SimpleShortener.shortenerInfo
(
	id int auto_increment primary key,
	code varchar(10),
	ip varchar(15),
	time date,
	locale varchar(10),
	user_agent text
);
