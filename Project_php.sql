drop database if exists project_PHP;
create database project_PHP;
use project_PHP;

create table if not exists categories (
id int(11) not null auto_increment,
cat_name varchar(255),
comments text,
primary key(id)
);

create table if not exists products (
id int(11) not null auto_increment,
prod_name varchar(255),
price int(11),
quantity int(11),
category_id int(11),
comments varchar(255),
describes varchar(255),
imported_date date,
img varchar(100),
primary key(id),
foreign key(category_id) references categories (id)
);

create table if not exists customers (
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
foreign key (cus_id) references customers (id)
);

create table if not exists prod_orders (
prod_id int(11),
order_id int(11),
quantity int(11),
primary key(prod_id, order_id),
foreign key(prod_id) references products(id),
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

insert into users(fullname,user_name,email,passwords,levels)
values('nguyenthithao','thaonguyen','thao.nguyen@gmail.com','thaonguyen123',0),
('nguyen thi phuong nhungusers','administrator','nhung.nguyen@gmail.com','matkhau',1);
insert into customers (cus_name, address, email) values 
('Đỗ Duy Thảo', '1 Lê Lợi', 'doduythao@gmail.com'),
('Đỗ Duy Thanh', '2 Lê Lai', 'doduythanh@gmail.com'),
('Đỗ Duy Thọ', '3 Lê Văn Tám ', 'doduytho@gmail.com'),
('Đỗ Duy Thinh', '4 Lê Duẩn', 'doduythinh@gmail.com');

insert into categories  (cat_name,comments) values
('Dày Nam','1'),
('Dày Nữ','2'),
('Dày Tre Em','3');


insert into orders (cus_id, date) values
(1,date('2017-01-02')),
(1,date('2017-12-12')),
(2,date('2017-01-02')),
(2,date('2018-01-03')),
(2,date('2018-03-01')),
(4,date('2018-03-03'));

insert into products 
(prod_name,price,quantity,category_id,comments,describes,imported_date,img) 
values
('Dày Thể Thao Nam', 500, 150, 1, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/nam1.jpg'),
('Dày Thể Thao Nam', 550, 150, 1, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/nam2.jpg'),
('Dày Thể Thao Nam', 600, 150, 1, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/nam3.jpg'),
('Dày Thể Thao Nam', 700, 150, 1, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/nam4.jpg'),
('Dày Thể Thao Nam', 800, 150, 1, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/nam5.jpg'),
('Dày Da Nam', 750, 150, 1, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/nam6.jpg'),
('Dày Da Nam', 900, 150, 1, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/nam7.jpg'),
('Dày Da Nam', 500, 150, 1, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/nam8.jpg'),
('Dày Da Nam', 505, 150, 1, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/nam9.jpg'),

('Dày Cao gót', 500, 150, 2, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/nu1.jpg'),
('Dày Thể Thao Nữ', 550, 150, 2, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/nu2.jpg'),
('Dày Cao gót Nữ', 600, 150, 2, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/nu3.jpg'),
('Dày búp bê da', 700, 150, 2, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/nu4.jpg'),
('Dày Cao gót', 800, 150, 2, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/nu5.jpg'),
('Dày Cao gót', 750, 150, 2, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/nu6.jpg'),
('Dày Thể Thao Nữ', 900, 150, 2, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/nu7.jpg'),
('Dày Thể Thao Nữ', 500, 150, 2, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/nu8.jpg'),
('Dày Thể Thao Nữ', 505, 150, 2, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/nu9.jpg'),

('Dày Bé Gái', 500, 150, 3, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/tre1.jpg'),
('Dày Bé Gái', 550, 150, 3, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/tre2.jpg'),
('Dày Bé Gái', 600, 150, 3, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/tre3.jpg'),
('Dày Bé Gái', 700, 150, 3, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/tre4.jpg'),
('Dày Bé Gái', 800, 150, 3, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/tre5.jpg'),
('Dày Bé Trai', 750, 150, 3, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/tre6.jpg'),
('Dày Bé Trai', 900, 150, 3, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/tre7.jpg'),
('Dày Bé Trai', 500, 150, 3, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/tre8.jpg'),
('Dày Bé Trai', 505, 150, 3, 1,'Dạ Trộn, Cao su tổng hợp,nhẹ bền.', date('2016-01-01'),'img/tre9.jpg');
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
