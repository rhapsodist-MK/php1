create table user_info(
	email varchar(50) primary key not null,
	name varchar(50) not null,
	passwd varchar(50) not null,
	mobile varchar(50) not null,
	address text not null
)charset utf8

insert into user_info(email, name, passwd, mobile, address)
values('rhapsodist.mk@gmail.com', 'MK', 'rlaals3053', '010-6654-3724', '송파구 잠실동');

select * from user_info;

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


CREATE TABLE products(
	product_name varchar(100) not null primary key,
	product_category varchar(100) not null,
	product_brand varchar(100),
	product_price int(100) not null,
	product_detail_img text,
	product_image text,
	product_keywords text
) charset utf8

INSERT INTO products(product_name, product_brand, product_image, product_price, product_detail_img, product_keywords, product_category)
VALUES('AD Mini M','Cort','Acoustic_Cort_AD Mini M.jpg',159000,'Acoustic_Cort_AD Mini M_det.jpg','acoustic cort AD Mini M','Acoustic');


INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('Les Paul Faded T', 'Electric', 'Gibson', 848000, 'Electric_Gibson_Les Paul Faded T 2017_det.jpg', 'Electric_Gibson_Les Paul Faded T 2017.jpg', 'electric gibson Les Paul Faded T 2017');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('RG350DXZ', 'Electric', 'Ibanez', 624000, 'Electric_Ibanez_RG350DXZ_det.jpg', 'Electric_Ibanez_RG350DXZ.jpg', 'electric ibanez RG350DXZ');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('Lstratocaster HH', 'Electric', 'Fender', 1632000, 'Electric_Fender_Stratocaster HH_det.jpg', 'Electric_Fender_stratocaster HH.jpg', 'electric fender stratocaster HH');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('G220DX-QT', 'Electric', 'Cort', 272000, 'Electric_Cort_G220DX-QT_det.jpg', 'Electric_Cort_G220DX-QT.jpg', 'electric cort G220DX-QT');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('SAINT T250', 'Electric', 'Dame', 243000, 'Electric_Dame_SAINT T250_det.jpg', 'Electric_Dame_SAINT T250.jpg', 'electric dame SAINT T250');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('Artwood Vintage AVN1', 'Acoustic', 'Ibanez', 404880, 'Acoustic_Ibanez_Artwood Vintage AVN1_det.jpg', 'Acoustic_Ibanez_Artwood Vintage AVN1.jpg', 'acoustic ibanez Artwood Vintage AVN1');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('SJ-100 Walnut', 'Acoustic', 'Gibson', 3744000, 'Acoustic_gibson_SJ-100 Walnut_det.jpg', 'Acoustic_Gibson_SJ-100 Walnut.jpg', 'acoustic gibson SJ 100 Walnut');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('Stratacoustic Plus', 'Acoustic', 'Fender', 541256, 'Acoustic_Fender_Stratacoustic Plus_det.jpg', 'Acoustic_Fender_Stratacoustic Plus.jpg', 'acoustic fender Stratacoustic Plus');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('Lilies T100', 'Acoustic', 'Dame', 116650, 'Acoustic_Dame_Lilies T100_det.jpg', 'Acoustic_Dame_Lilies T100.jpg', 'acoustic dame Lilies T100');




select * from products;
drop table products

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



CREATE TABLE categories(
	category_id INT(200) AUTO_INCREMENT PRIMARY KEY,
	category_title VARCHAR(100) NOT NULL
) CHARSET utf8


select * from categories;

INSERT INTO categories(category_title) VALUES ('Electric Guitar');
INSERT INTO categories(category_title) VALUES ('Acoustic Guitar');
INSERT INTO categories(category_title) VALUES ('Classic Guitar');
INSERT INTO categories(category_title) VALUES ('Bass Guitar');
INSERT INTO categories(category_title) VALUES ('Ukulele Guitar');

drop table categories

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


create table cart(
	product_name varchar(100) not null,
	name varchar(100) not null,
	product_image text,
	product_price int(100) not null,
	product_quantity int(100) not null
)charset utf8

select * from cart;

drop table cart

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


create table brand(
	brand_name varchar(100) not null primary key
)charset utf8;

drop table brand;


INSERT into brand (brand_name) VALUES('Ibanez');
INSERT into brand (brand_name) VALUES('Gibsun');
INSERT into brand (brand_name) VALUES('Fender');
INSERT into brand (brand_name) VALUES('Cort');
INSERT into brand (brand_name) VALUES('Dame');

SELECT * FROM brand;
