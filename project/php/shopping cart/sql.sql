CREATE DATABASE shoppingcart;
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

CREATE TABLE user_info(
	user_id int(100) auto_increment primary key not null,
	first_name varchar(300) not null,
	last_name varchar(100) not null,
	email varchar(300) not null,
	passwd varchar(100) not null,
	mobile varchar(20) not null,
	address1 varchar(300) not null,
	address2 varchar(200) not null
) charset utf8

INSERT INTO user_info(first_name, last_name, email, passwd, mobile, address1, address2) 
VALUES('MW', 'KIM', 'rhapsodist.mk@gmail.com','rlaals3053', '01066543724', '송파구','잠실동');

SELECT * FROM user_info;

delete from user_info where user_id = 2 ;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
CREATE TABLE products(
	product_id int(100) auto_increment primary key not null,
	product_title varchar(300) not null,
	product_cat int(100),
	product_brand int(100),
	product_price int(100) not null,
	product_desc text,
	product_image text,
	product_keywords text
) charset utf8

INSERT INTO products(product_title, product_cat, product_brand, product_price, product_desc, product_image, product_keywords)
VALUES ('Les Paul Faded T', 1, 2, 848000, 'electric_gibson_Les Paul Faded T 2017', 'electric_gibson_Les Paul Faded T 2017.jpg', 'electric gibson Les Paul Faded T 2017');

INSERT INTO products(product_title, product_cat, product_brand, product_price, product_desc, product_image, product_keywords)
VALUES ('RG350DXZ', 1, 1, 624000, 'electric_ibanez_RG350DXZ', 'electric_ibanez_RG350DXZ.jpg', 'electric ibanez RG350DXZ');

INSERT INTO products(product_title, product_cat, product_brand, product_price, product_desc, product_image, product_keywords)
VALUES ('Lstratocaster HH', 1, 3, 1632000, 'electric_fender_stratocaster HH', 'electric_fender_stratocaster HH.jpg', 'electric fender stratocaster HH');

INSERT INTO products(product_title, product_cat, product_brand, product_price, product_desc, product_image, product_keywords)
VALUES ('G220DX-QT', 1, 4, 272000, 'electric_cort_G220DX-QT', 'electric_cort_G220DX-QT.jpg', 'electric cort G220DX-QT');

INSERT INTO products(product_title, product_cat, product_brand, product_price, product_desc, product_image, product_keywords)
VALUES ('SAINT T250', 1, 5, 243000, 'electric_dame_SAINT T250', 'electric_dame_SAINT T250.jpg', 'electric dame SAINT T250');

INSERT INTO products(product_title, product_cat, product_brand, product_price, product_desc, product_image, product_keywords)
VALUES ('Artwood Vintage AVN1', 2, 1, 404880, 'acoustic_ibanez_Artwood Vintage AVN1', 'acoustic_ibanez_Artwood Vintage AVN1.jpg', 'acoustic ibanez Artwood Vintage AVN1');

INSERT INTO products(product_title, product_cat, product_brand, product_price, product_desc, product_image, product_keywords)
VALUES ('SJ-100 Walnut', 2, 2, 3744000, 'acoustic_gibson_SJ-100 Walnut', 'acoustic_gibson_SJ-100 Walnut.jpg', 'acoustic gibson SJ 100 Walnut');

INSERT INTO products(product_title, product_cat, product_brand, product_price, product_desc, product_image, product_keywords)
VALUES ('Stratacoustic Plus', 2, 3, 541256, 'acoustic_fender_Stratacoustic Plus', 'acoustic_fender_Stratacoustic Plus.jpg', 'acoustic fender Stratacoustic Plus');

INSERT INTO products(product_title, product_cat, product_brand, product_price, product_desc, product_image, product_keywords)
VALUES ('AD Mini M', 2, 4, 159000, 'acoustic_cort_AD Mini M', 'acoustic_cort_AD Mini M.jpg', 'acoustic cort AD Mini M');

INSERT INTO products(product_title, product_cat, product_brand, product_price, product_desc, product_image, product_keywords)
VALUES ('Lilies T100', 2, 5, 116650, 'acoustic_dame_Lilies T100', 'acoustic_dame_Lilies T100.jpg', 'acoustic dame Lilies T100');

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

CREATE TABLE categories(
	cat_id INT(100) AUTO_INCREMENT PRIMARY KEY NOT NULL,
	cat_title TEXT NOT NULL
) CHARSET utf8


select * from categories;

INSERT INTO categories(cat_title) VALUES ('Electric Guitar');
INSERT INTO categories(cat_title) VALUES ('Acoustic Guitar');


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

create table cart(
	id int(100) auto_increment primary key not null,
	p_id int(100) not null,
	ip_add varchar(250) not null,
	user_id int(100) not null,
	product_title varchar(300) not null,
	product_image text,
	qty int(100),
	price int(100) not null,
	total_amount int(200) not null
)charset utf8


select * from cart;

delete from cart id = 1;

drop table cart;

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

create table brand(
	brand_id int(100) auto_increment primary key not null,
	brand_title text
)charset utf8;

drop table brand;


INSERT into brand (brand_title) VALUES('Ibanez');
INSERT into brand (brand_title) VALUES('Gibsun');
INSERT into brand (brand_title) VALUES('Fender');
INSERT into brand (brand_title) VALUES('Cort');
INSERT into brand (brand_title) VALUES('Dame');

SELECT * FROM brand;


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

create table customer_order(
	id int(100) auto_increment primary key not null,
	user_id int(100) not null,
	product_id int(100) not null,
	product_name varchar(300) not null,
	product_price int(100) not null,
	product_qty int(100) not null,
	transaction_id varchar(300) not null
)charset utf8




////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

create table received_payment (
	id int(100) auto_increment primary key not null,
	user_id int(100) not null,
	product_id int(100) not null,
	amount int(100) not null,
	transaction_id varchar(300)
)charset utf8


