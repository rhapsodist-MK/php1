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
VALUES('AD Mini M','Cort','Acoustic_Cort_AD Mini M.jpg',159000,'Acoustic_Cort_AD Mini M_det.jpg','acoustic cort AD Mini M','Acoustic Guitar');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('Les Paul Faded T', 'Electric Guitar', 'Gibson', 848000, 'Electric_Gibson_Les Paul Faded T 2017_det.jpg', 'Electric_Gibson_Les Paul Faded T 2017.jpg', 'electric gibson Les Paul Faded T 2017');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('RG350DXZ', 'Electric Guitar', 'Ibanez', 624000, 'Electric_Ibanez_RG350DXZ_det.jpg', 'Electric_Ibanez_RG350DXZ.jpg', 'electric ibanez RG350DXZ');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('Lstratocaster HH', 'Electric Guitar', 'Fender', 1632000, 'Electric_Fender_Stratocaster HH_det.jpg', 'Electric_Fender_stratocaster HH.jpg', 'electric fender stratocaster HH');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('G220DX-QT', 'Electric Guitar', 'Cort', 272000, 'Electric_Cort_G220DX-QT_det.jpg', 'Electric_Cort_G220DX-QT.jpg', 'electric cort G220DX-QT');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('SAINT T250', 'Electric Guitar', 'Dame', 243000, 'Electric_Dame_SAINT T250_det.jpg', 'Electric_Dame_SAINT T250.jpg', 'electric dame SAINT T250');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('Artwood Vintage AVN1', 'Acoustic Guitar', 'Ibanez', 404880, 'Acoustic_Ibanez_Artwood Vintage AVN1_det.jpg', 'Acoustic_Ibanez_Artwood Vintage AVN1.jpg', 'acoustic ibanez Artwood Vintage AVN1');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('SJ-100 Walnut', 'Acoustic Guitar', 'Gibson', 3744000, 'Acoustic_gibson_SJ-100 Walnut_det.jpg', 'Acoustic_Gibson_SJ-100 Walnut.jpg', 'acoustic gibson SJ 100 Walnut');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('Stratacoustic Plus', 'Acoustic Guitar', 'Fender', 541256, 'Acoustic_Fender_Stratacoustic Plus_det.jpg', 'Acoustic_Fender_Stratacoustic Plus.jpg', 'acoustic fender Stratacoustic Plus');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('Lilies T100', 'Acoustic Guitar', 'Dame', 116650, 'Acoustic_Dame_Lilies T100_det.jpg', 'Acoustic_Dame_Lilies T100.jpg', 'acoustic dame Lilies T100');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('AC100DX', 'Classic Guitar', 'Cort', 155980, 'Classic_Cort_AC100DX_det.jpg', 'Classic_Cort_AC100DX.jpg', 'classic cort AC100DX');


INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('AC120CE', 'Classic Guitar', 'Cort', 183000, 'Classic_Cort_AC120CE_det.jpg', 'Classic_Cort_AC120CE.jpg', 'classic cort AC120CE');


INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('CEC1', 'Classic Guitar', 'Cort', 224000, 'Classic_Cort_CEC1_det.jpg', 'Classic_Cort_CEC1.jpg', 'classic cort CEC1');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('AC200', 'Classic Guitar', 'Cort', 256000, 'Classic_Cort_AC200_det.jpg', 'Classic_Cort_AC200.jpg', 'classic cort AC200');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('AC250', 'Classic Guitar', 'Cort', 336000, 'Classic_Cort_AC250_det.jpg', 'Classic_Cort_AC250.jpg', 'classic cort AC250');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('AC250CF', 'Classic Guitar', 'Cort', 436000, 'Classic_Cort_AC250CF_det.jpg', 'Classic_Cort_AC250CF.jpg', 'classic cort AC250CF');


INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('AC100', 'Classic Guitar', 'Cort', 159000, 'Classic_Cort_AC100_det.jpg', 'Classic_Cort_AC100.jpg', 'classic cort AC100');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('AC150', 'Classic Guitar', 'Cort', 208000, 'Classic_Cort_AC150_det.jpg', 'Classic_Cort_AC150.jpg', 'classic cort AC150');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('CEC-3', 'Classic Guitar', 'Cort', 328000, 'Classic_Cort_CEC-3_det.jpg', 'Classic_Cort_CEC-3.jpg', 'classic cort CEC-3');

INSERT INTO products(product_name, product_category, product_brand, product_price, product_detail_img, product_image, product_keywords)
VALUES ('CEC5', 'Classic Guitar', 'Cort', 398000, 'Classic_Cort_CEC5_det.jpg', 'Classic_Cort_CEC5.jpg', 'classic cort CEC5');

INSERT INTO products(product_name, product_brand, product_image, product_price, product_detail_img, product_keywords, product_category)
VALUES('Classic-X V2','Beyond','Electric_Beyond_Classic-X V2.jpg',
258000,'Electric_Beyond_Classic-X V2_det.jpg','electric beyond Classic-X V2','Electric Guitar');


INSERT INTO products(product_name, product_brand, product_image, product_price, product_detail_img, product_keywords, product_category)
VALUES('Modern-T Special BLACK ROTT','Beyond','Electric_Beyond_Modern-T Special BLACK ROTT.jpg',
385000,'Electric_Beyond_Modern-T Special BLACK ROTT_det.jpg','electric beyond Modern-T Special BLACK ROTT','Electric Guitar');


INSERT INTO products(product_name, product_brand, product_image, product_price, product_detail_img, product_keywords, product_category)
VALUES('FSR','Beyond','Electric_Beyond_FSR.jpg',
398000,'Electric_Beyond_FSR_det.jpg','electric beyond FSR','Electric Guitar');


INSERT INTO products(product_name, product_brand, product_image, product_price, product_detail_img, product_keywords, product_category)
VALUES('STYLISH CHROME','Beyond','Electric_Beyond_STYLISH CHROME.jpg',
398000,'Electric_Beyond_STYLISH CHROME_det.jpg','electric beyond STYLISH CHROME','Electric Guitar');


INSERT INTO products(product_name, product_brand, product_image, product_price, product_detail_img, product_keywords, product_category)
VALUES('TS','Beyond','Electric_Beyond_TS.jpg',
438000,'Electric_Beyond_TS_det.jpg','electric beyond TS','Electric Guitar');


INSERT INTO products(product_name, product_brand, product_image, product_price, product_detail_img, product_keywords, product_category)
VALUES('Aggressive Lite','Beyond','Electric_Beyond_Aggressive Lite.jpg',
486000,'Electric_Beyond_Aggressive Lite_det.jpg','electric beyond Aggressive Lite','Electric Guitar');


INSERT INTO products(product_name, product_brand, product_image, product_price, product_detail_img, product_keywords, product_category)
VALUES('Modern-T Standard','Beyond','Electric_Beyond_Modern-T Standard.jpg',
578000,'Electric_Beyond_Modern-T Standard_det.jpg','electric beyond Modern-T Standard','Electric Guitar');


INSERT INTO products(product_name, product_brand, product_image, product_price, product_detail_img, product_keywords, product_category)
VALUES('Golden Blues','Beyond','Electric_Beyond_Golden Blues.jpg',
598000,'Electric_Beyond_Golden Blues_det.jpg','electric beyond Golden Blues','Electric Guitar');


INSERT INTO products(product_name, product_brand, product_image, product_price, product_detail_img, product_keywords, product_category)
VALUES('Golden Cross','Beyond','Electric_Beyond_Golden Cross.jpg',
678000,'Electric_Beyond_Golden Cross_det.jpg','electric beyond Golden Cross','Electric Guitar');


INSERT INTO products(product_name, product_brand, product_image, product_price, product_detail_img, product_keywords, product_category)
VALUES('Aggressive Deluxe','Beyond','Electric_Beyond_Aggressive Deluxe.jpg',
685000,'Electric_Beyond_Aggressive Deluxe_det.jpg','electric beyond Aggressive Deluxe','Electric Guitar');


INSERT INTO products(product_name, product_brand, product_image, product_price, product_detail_img, product_keywords, product_category)
VALUES('FR Plasma','Beyond','Electric_Beyond_FR Plasma.jpg',
748000,'Electric_Beyond_FR Plasma_det.jpg','electric beyond FR Plasma','Electric Guitar');


INSERT INTO products(product_name, product_brand, product_image, product_price, product_detail_img, product_keywords, product_category)
VALUES('Classic X','Beyond','Electric_Beyond_Classic X.jpg',
228000,'Electric_Beyond_Classic X_det.jpg','electric beyond Classic X','Electric Guitar');


INSERT INTO products(product_name, product_brand, product_image, product_price, product_detail_img, product_keywords, product_category)
VALUES('Mutant','Beyond','Electric_Beyond_Mutant.jpg',
620000,'Electric_Beyond_Mutant_det.jpg','electric beyond Mutant','Electric Guitar');


INSERT INTO products(product_name, product_brand, product_image, product_price, product_detail_img, product_keywords, product_category)
VALUES('60 Classic','Beyond','Electric_Beyond_60 Classic.jpg',
693000,'Electric_Beyond_60 Classic_det.jpg','electric beyond 60 Classic','Electric Guitar');


INSERT INTO products(product_name, product_brand, product_image, product_price, product_detail_img, product_keywords, product_category)
VALUES('LZ-EX','Beyond','Electric_Beyond_LZ-EX.jpg',
748000,'Electric_Beyond_LZ-EX_det.jpg','electric beyond LZ-EX','Electric Guitar');


INSERT INTO products(product_name, product_brand, product_image, product_price, product_detail_img, product_keywords, product_category)
VALUES('Thru-Neck TB','Beyond','Electric_Beyond_Thru-Neck TB.jpg',
1130000,'Electric_Beyond_Thru-Neck TB_det.jpg','electric beyond Thru-Neck TB','Electric Guitar');

INSERT INTO products(product_name, product_brand, product_image, product_price, product_detail_img, product_keywords, product_category)
VALUES('C711-BK','C&M','Electric_C&M_C711-BK.jpg',
459880,'Electric_C&M_C711-BK_det.jpg','electric c&M C711-BK','Electric Guitar');


INSERT INTO products(product_name, product_brand, product_image, product_price, product_detail_img, product_keywords, product_category)
VALUES('C712-CS','C&M','Electric_C&M_C712-CS.jpg',
524000,'Electric_C&M_C712-CS_det.jpg','electric c&M C712-CS','Electric Guitar');


INSERT INTO products(product_name, product_brand, product_image, product_price, product_detail_img, product_keywords, product_category)
VALUES('CH751-NA','C&M','Electric_C&M_CH751-NA.jpg',
647900,'Electric_C&M_CH751-NA_det.jpg','electric c&M CH751-NA','Electric Guitar');


INSERT INTO products(product_name, product_brand, product_image, product_price, product_detail_img, product_keywords, product_category)
VALUES('G-SG-47L','GrassRoots','Electric_GrassRoots_G-SG-47L.jpg',
473600,'Electric_GrassRoots_G-SG-47L_det.jpg','electric grassRoots G-SG-47L','Electric Guitar');


INSERT INTO products(product_name, product_brand, product_image, product_price, product_detail_img, product_keywords, product_category)
VALUES('G-LP-50C','GrassRoots','Electric_GrassRoots_G-LP-50C.jpg',
598000,'Electric_GrassRoots_G-LP-50C_det.jpg','electric grassRoots G-LP-50C','Electric Guitar');


INSERT INTO products(product_name, product_brand, product_image, product_price, product_detail_img, product_keywords, product_category)
VALUES('G-LP-50S','GrassRoots','Electric_GrassRoots_G-LP-50S.jpg',
598000,'Electric_GrassRoots_G-LP-50S_det.jpg','electric grassRoots G-LP-50S','Electric Guitar');







SELECT * from products WHERE product_brand = 'Gibson' AND product_category = 'Acoustic Guitar'

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
INSERT INTO categories(category_title) VALUES ('Ukulele');

drop table categories

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


create table cart(
	product_name varchar(100) not null,
	email varchar(100) not null,
	product_image text,
	product_price int(100) not null,
	product_quantity int(100) not null
)charset utf8

select * from cart;

drop table cart

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


create table brand(
	brand_name varchar(100) not null,
	category_title varchar(100) not null
)charset utf8;

drop table brand;


INSERT into brand (brand_name, category_title) VALUES('Ibanez', 'Electric Guitar');
INSERT into brand (brand_name, category_title) VALUES('Gibson', 'Electric Guitar');
INSERT into brand (brand_name, category_title) VALUES('Fender', 'Electric Guitar');
INSERT into brand (brand_name, category_title) VALUES('Cort', 'Electric Guitar');
INSERT into brand (brand_name, category_title) VALUES('Dame', 'Electric Guitar');
INSERT into brand (brand_name, category_title) VALUES('Beyond', 'Electric Guitar');
INSERT into brand (brand_name, category_title) VALUES('GrassRoots', 'Electric Guitar');
INSERT into brand (brand_name, category_title) VALUES('C&M', 'Electric Guitar');


INSERT into brand (brand_name, category_title) VALUES('Ibanez', 'Acoustic Guitar');
INSERT into brand (brand_name, category_title) VALUES('Gibson', 'Acoustic Guitar');
INSERT into brand (brand_name, category_title) VALUES('Fender', 'Acoustic Guitar');
INSERT into brand (brand_name, category_title) VALUES('Cort', 'Acoustic Guitar');
INSERT into brand (brand_name, category_title) VALUES('Dame', 'Acoustic Guitar');

INSERT into brand (brand_name, category_title) VALUES('Cort', 'Classic Guitar');

SELECT * FROM brand;

