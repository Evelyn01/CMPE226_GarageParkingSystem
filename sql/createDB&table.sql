SET foreign_key_checks = 1;
drop database if exists cmpe226_team_project;
create database cmpe226_team_project;
use cmpe226_team_project;

create table Garage(
		garage_no   varchar(3),
		garage_name	varchar(20) not null,
		primary key (garage_no)
	);

create table Parking_space(
		space_no		varchar(3),
		garage_no		varchar(3),
		status			varchar(1) not null, /* T(True) or F(False) */
		employee_only 	varchar(1) not null, /* T(True) or F(False) */
		disability		varchar(1) not null, /* T(True) or F(False) */
		time_limit		int not null default 0,
		size_type 		varchar(1) not null, /* S(Small) or B(Big) */
		level 			numeric(1,0) not null, /* 1 - 9 */
		area 			varchar(1) not null, /* A - Z */
		empty			varchar(1) not null, /* T(True) or F(False) */
		primary key (space_no, garage_no),
		foreign key (garage_no) references Garage(garage_no)
			on delete cascade	on update cascade
	);

create table Vehicle(
		plate_no				varchar(8),
		longterm_permit_type	varchar(1), /* E(Employee), S(Student), or NULL */
		expiry_date 			date,
		primary key (plate_no)
	);
	
create table Park(
		plate_no 			varchar(8) not null,
		space_no 			varchar(3) not null,
		garage_no			varchar(3) not null,
		start_time			time not null,
		estimated_end_time	time,
		real_end_time		time,
		park_date 			date not null,
		employee_only 		varchar(1) not null, /* T(True) or F(False) */
		permit_type			varchar(1), /* E(Employee), S(Student), T(Temporary), or NULL */
		foreign key (plate_no) references Vehicle(plate_no),
		foreign key (space_no, garage_no) references Parking_space(space_no, garage_no)
	);