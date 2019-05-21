CREATE DATABASE IF NOT EXISTS shop_db;
	
CREATE TABLE categories (
	categoryID 	INT NOT NUll PRIMARY KEY AUTO_INCREMENT,
	categoryName 	VARCHAR(10) NOT NUll

)ENGINE=INNODB DEFAULT CHARSET=utf8;
CREATE TABLE products (
	productID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	categoryID 	INT NOT NUll, 
	productName VARCHAR(250) NOT NULL,
	price INT NOT NULL,
	dateAdded timestamp,
	CONSTRAINT productsFKcategories
	FOREIGN KEY (categoryID) REFERENCES categories (categoryID)
)ENGINE=INNODB DEFAULT CHARSET=utf8;
CREATE TABLE orderItems (
	orderID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	itemID INT  NOT NULL,
	productID INT NOT NULL,
	itemPrice 	VARCHAR(250) NOT NUll,
	quantity INT(10) NOT NULL,
	CONSTRAINT Rental_recordsFKCar
	FOREIGN KEY (productID) REFERENCES products (productID)
)ENGINE=INNODB DEFAULT CHARSET=utf8;

INSERT INTO categories (categoryName)
VALUES ('OPPO'),
		('SAMSUNG'),
		('APPLE'),
		('MOTOROLA'),
		('HTL');
INSERT INTO products ( categoryID, productName,price )
VALUES (1, 'Oppo A83', 220),
		(1, 'Oppo F5', 435),
		(2, 'Samsung V', 120),
		(3, 'Iphone X', 500),
		(4, 'Motorola', 320),
		(5, 'Htc', 120);
INSERT INTO orderItems ( itemID, productID, itemPrice, quantity)
VALUES (1,1,'A',5),
		(2,2,'B',4),
		(3,3,'C',3),
		(4,4,'D',2),
		(5,5,'E',1);
