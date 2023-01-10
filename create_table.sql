create database if not exists uasWebL;
use uasWebL;

create or replace table jadwal(
	id int AUTO_INCREMENT,
    hari varchar,
    slot_waktu varchar,
    dosen varchar,
    ruang varchar,
    mata_kuliah varchar,
    tahun_ajaran int,
    semester int,
    primary key(id)
);
create or replace table users(
	id int(11) NOT NULL AUTO_INCREMENT,
 	username varchar(255) NOT NULL,
 	email varchar(255) NOT NULL,
 	password varchar(255) NOT NULL,
 	PRIMARY KEY(id)
);