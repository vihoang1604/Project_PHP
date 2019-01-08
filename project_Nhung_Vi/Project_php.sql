drop database if exists project_PHP;
create database project_PHP;
use project_PHP;

create table if not exists category (
id int(11) not null auto_increment,
cat_name varchar(255),
note text,
primary key(id)
);

create table if not exists product (
id int(11) not null auto_increment,
prod_name varchar(255),
category_id int(11),
price int(11),
quantity int(11),
status varchar(255),
imported_date date,
note text,
primary key(id),
foreign key(category_id) references category (id)
);

create table if not exists customer (
id int(11) not null auto_increment,
cus_name varchar(255),
address varchar(255),
email varchar(255),
primary key (id)
);

create table if not exists orders (
id int(11) not null auto_increment,
cus_id	int(11),
date datetime,
primary key (id),
foreign key (cus_id) references customer (id)
);

create table if not exists prod_orders (
prod_id int(11),
order_id int(11),
quantity int(11),
primary key(prod_id, order_id),
foreign key(prod_id) references product(id),
foreign key(order_id) references orders(id)
);

create table if not exists users (
user_id int(11) not null primary key auto_increment,
fullname varchar(225),
user_name varchar(100) unique,
email varchar(255) unique,
passwords varchar(255),
levels tinyint null
);


insert into customer (cus_name, address, email) values 
('Đỗ Duy Thảo', '1 Lê Lợi', 'doduythao@gmail.com'),
('Đỗ Duy Thanh', '2 Lê Lai', 'doduythanh@gmail.com'),
('Đỗ Duy Thọ', '3 Lê Văn Tám ', 'doduytho@gmail.com'),
('Đỗ Duy Thinh', '4 Lê Duẩn', 'doduythinh@gmail.com');

insert into category (cat_name) values
('Bút Mực'),
('Bút Chì'),
('Dây Đeo Thẻ'),
('Bao Đựng Thẻ'),
('Kim Bấm');

insert into orders (cus_id, date) values
(1,date('2017-01-02')),
(1,date('2017-12-12')),
(2,date('2017-01-02')),
(2,date('2018-01-03')),
(2,date('2018-03-01')),
(4,date('2018-03-03'));

insert into product 
(prod_name,		category_id,	price,	quantity,	status,	imported_date) 
values
('bút hero 1A', 	1, 150, 10, 1, date('2016-01-01')),
('bút hero 2A', 	1, 250, 15, 1, date('2016-01-02')),
('bút lamy 1', 		1, 1250, 15, 1, date('2016-01-03')),
('bút lamy 2', 		1, 1250, 15, 1, date('2016-01-04')),
('bút parker 1', 	1, 5250, 10, 1, date('2016-05-02')),
('bút parker 2', 	1, 6250, 10, 1, date('2016-07-02')),

('bút chì pentel a1', 	2, 25, 	100, 1, date('2016-08-01')),
('bút chì pentel a2', 	2, 30, 	150, 1, date('2016-08-01')),
('bút chì pentel a3', 	2, 50, 	150, 0, date('2016-08-01')),
('bút chì thienlong 1', 2, 30, 	15, 1, date('2016-01-03')),
('bút chì thienlong 2', 2, 30, 	15, 1, date('2016-01-04')),
('bút chì thienlong 3', 2, 30, 	10, 0, date('2016-05-02')),
('bút chì thienlong 4', 2, 30, 	10, 1, date('2016-07-02')),

('dây lụa', 	3, 5, 1000, 1, date('2017-01-01')),
('dây lụa dày', 3, 8, 1000, 1, date('2017-01-01')),
('dây cao su', 	3, 10, 500, 1, date('2017-01-01')),
('dây nhiệt', 	3, 15, 500, 1, date('2017-01-01')),

('bao đựng thường', 			4, 5, 500, 1, date('2016-12-12')),
('bao đựng chống nước', 		4, 7, 500, 1, date('2016-12-12')),
('bao đựng cao cấp', 			4, 10, 500, 1, date('2016-12-12')),
('bao đựng cao cấp Hàn Quốc', 	4, 12, 500, 1, date('2016-12-12')),

('kim bấm nhôm 5cm',5, 15, 50, 	 1, date('2010-01-02')),
('kim bấm 5cm', 	5, 10, 1000, 1, date('2015-01-02')),
('kim bấm 7cm', 	5, 10, 1000, 1, date('2016-01-02')),
('kim bấm 10cm', 	5, 12, 1000, 1, date('2016-01-02')),
('kim bấm 12cm', 	5, 15, 1000, 1, date('2010-01-02'));

insert into prod_orders values
(1,1,1),
(7,1,1),

(2,2,1),
(8,2,1),
(10,2,1),

(2,3,1),
(8,3,1),
(11,3,1),

(3,4,1),
(9,4,1),

(1,5,1),
(7,5,1),
(14,5,1),

(8,6,1),
(9,6,1),
(14,6,1),
(17,6,1);

insert into users(fullname,user_name,email,passwords,levels)
values('nguyenthithao','thaonguyen','thao.nguyen@gmail.com','thaonguyen123',0),
('nguyen thi phuong nhungusers','administrator','nhung.nguyen@gmail.com','matkhau',1);





