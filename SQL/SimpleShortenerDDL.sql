drop schema if exists SimpleShortener;
create schema SimpleShortener;

drop table if exists SimpleShortener.shortener;
drop table if exists SimpleShortener.shortenerInfo;

create table SimpleShortener.shortener
(
	id int auto_increment primary key
);

create table SimpleShortener.shortenerInfo
(
	id int auto_increment primary key
);
