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

SELECT * FROM user_info;


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

select * from products;

drop table products;

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

CREATE TABLE categories(
	cat_id INT(100) AUTO_INCREMENT PRIMARY KEY NOT NULL,
	cat_title TEXT NOT NULL
) CHARSET utf8


select * from categories;

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


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

create table brand(
	brand_id int(100),
	brand_title text
)

