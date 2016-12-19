create database chat1219;

use chat1219;

create table User (
	id int not null primary key,
	loginid varchar(32),
	password varchar(16),
	dispname varchar(32),
	del_flag bool,
	lastlogin_date datetime
	);
	
//仮ユーザー登録
insert into User values(1, 'tom', 'nosushinolife', 'GOD', 0, '2016-12-19 10:00:00');
insert into User values(2, 'mike', 'apple2016', 'Taro', 0, '2016-12-19 10:05:00');
insert into User values(3, 'mary', 'c@ndyclash', 'Yoko', 0, '2016-12-19 10:10:00');

