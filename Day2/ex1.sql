CREATE DATABASE IF NOT  EXISTS my_guitar_shop3;
USE my_guitar_shop3;
CREATE TABLE customer (
	customerID INT NOT NUll AUTO_INCREMENT PRIMARY KEY,
	emailAddress VARCHAR(255) NOT NUll UNIQUE ,
	password VARCHAR(60) NOT NUll,
	firstName VARCHAR(60) NOT NUll,
	lastName VARCHAR(60) NOT NUll,
	shipAddressID INT DEFAULT NUll,
	billingAdressID INT DEFAULT NUll,
	INDEX customerID (customerID)
);
USE my_guitar_shop3;
CREATE TABLE addresses (
	addressID INT NOT NUll AUTO_INCREMENT PRIMARY KEY,
	customerID INT NOT NUll INDEX ,
	line1 VARCHAR(60) NOT NUll,
	line2 VARCHAR(60) DEFAULT NUll,
	city VARCHAR(40) NOT NUll,
	state VARCHAR(2) NOT NUll,
	zipCode VARCHAR(10) NOT NUll,
	phone VARCHAR(12) NOT NUll,
	disabled TINYINT(1) NOT NUll DEFAULT 0,
	INDEX customerID (customerID)
);
USE my_guitar_shop3;
CREATE TABLE orders (
	orderID INT NOT NUll AUTO_INCREMENT,
	customerID INT NOT NUll,
	orderDate DATETIME NOT NUll,
	shipAmount DECIMAL(10,2) NOT NUll,
	taxAmount DECIMAL(10,2) NOT NUll,
	shipDate DATETIME DEFAULT NUll,
	shipAddressID INT NOT NUll,
	cartType INT NOT NUll,
	cartNumber CHAR(16) NOT NUll,
	cartExpires CHAR(16) NOT NUll,
	billingAdressID INT NOT NUll,
	PRIMARY KEY (orderID),
	INDEX customerID (customerID)
);
USE my_guitar_shop3;
CREATE TABLE orderItems (
	itemID INT NOT NUll AUTO_INCREMENT PRIMARY KEY,
	orderID INT NOT NUll,
	productID INT NOT NUll,
	itemPrice DECIMAL(10,2) NOT NUll,
	discountAmount DECIMAL(10,2) NOT NUll,
	quantity INT NOT NUll,
	INDEX orderID (orderID),
	INDEX productID (productID)
);
USE my_guitar_shop3;
CREATE TABLE products (
	productID INT NOT NUll AUTO_INCREMENT PRIMARY KEY,
	categoryID INT NOT NUll,
	productCode VARCHAR(10) NOT NUll,
	productName VARCHAR(255) NOT NUll,
	description text NOT NUll,
	listPrice DECIMAL(10,2) NOT NUll,
	discountPrice DECIMAL (10,2) NOT NUll DEFAULT 0.00,
	dateAdded DATETIME NOT NUll,
	INDEX categoryID (categoryID),
	UNIQUE INDEX productCode (productCode)
);
USE my_guitar_shop3;
CREATE TABLE administrators(
	adminID INT NOT NUll AUTO_INCREMENT PRIMARY KEY,
	emailAddress VARCHAR(255) NOT NUll,
	password VARCHAR(255) NOT NUll,
	firstName VARCHAR(255) NOT NUll,
	lastName VARCHAR (255) NOT NUll

);
USE my_guitar_shop3;
GRANT SELECT, INSERT, UPDATE, DELETE
ON *
TO mgs_user@localhost
IDENTIFIED BY 'password';