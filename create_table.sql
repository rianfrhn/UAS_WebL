create database if not exists uasWebL;
use uasWebL;

create or replace table jadwal(
	id int(11) not null AUTO_INCREMENT,
 	hari varchar(255),
	slot_waktu varchar(255),
    	dosen varchar(255),
    	ruang varchar(255),
    	mata_kuliah varchar(255),
    	tahun_ajaran int(11),
    	semester int(11),
    	primary key(id)
);
create or replace table users(
	id int(11) NOT NULL AUTO_INCREMENT,
 	username varchar(255) NOT NULL,
 	email varchar(255) NOT NULL,
 	password varchar(255) NOT NULL,
 	PRIMARY KEY(id)
);
