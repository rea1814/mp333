create table member (
	id char(15) not null,
	pass  char(15) not null,
	name  char(10) not null,
	nick  char(10) not null,
	hp char(20) not null,
	email char(80),
	regist_day char(20),
	primary key(id)
);