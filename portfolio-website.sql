create database portfolio_website;

create table messages (
	`name` varchar(50) NOT NULL,
    `email` varchar(50) not null,
	`message` varchar(1000)
);

create table contacts (
	`email` varchar(50) NOT NULL,
    `phone` varchar(50) not null,
	`linkedin` varchar(50)
);

insert into contacts values (
	"jocelyn.leora@gmail.com",
	"+62 812 311 55926",
	"linkedin.com/in/jocelynleora/"
);