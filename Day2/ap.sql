CREATE DATABASE IF NOT EXISTS ap ;
USE ap;
CREATE TABLE IF NOT EXISTS vendors (
	vendorID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	vendorName VARCHAR(45) NOT NULL,
	vendorAddress VARCHAR(45) NOT NULL,
	vendorCity VARCHAR(45) NOT NULL,
	vendorState VARCHAR(45) NOT NULL,
	vendorZipCode VARCHAR(10) NOT NULL,
	vendorPhone VARCHAR(20) NOT NULL
);
USE ap;
CREATE TABLE IF NOT EXISTS invoices (
	invoiceID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	vendorID INT NOT NULL ,
	invoiceNumber VARCHAR(45) NOT NULL,
	invoiceDate DATETIME NOT NULL,
	invoiceTotal DECIMAL NOT NULL,
	paymentTotal DECIMAL,
	CONSTRAINT invoiceFKVendor
	FOREIGN KEY (vendorID) REFERENCES vendors (vendorID)
);
USE ap;
CREATE TABLE IF NOT EXISTS lineItems (
	lineItemID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	invoiceID INT NOT NULL ,
	description VARCHAR(45) NOT NULL,
	quantity INT NOT NULL,
	price INT NOT NULL,
	lineItemTotal DECIMAL NOT NULL,
	CONSTRAINT lineItemsFKInvoices
	FOREIGN KEY (invoiceID) REFERENCES invoices (invoiceID)
);
USE ap;
CREATE INDEX vendorID
ON invoices (vendorID);
CREATE INDEX invoiceNumber
ON invoices (invoiceNumber);
CREATE INDEX invoiceID
ON lineItems (invoiceID);

USE ap;
GRANT SELECT, INSERT, UPDATE, DELETE
ON *
TO ap_user
IDENTIFIED BY 'sesame';

USE ap;
INSERT INTO vendors()
VALUES (1,'Toshiba design', '123 HQT', 'Tokyo', 'B1', '09800', '0980090'),
		(2,'Yamaha design', '231 KTO', 'Tokyo', 'B3', '098200', '098005'),
		(3,'Canon design', '123 TR', 'NewYork', 'Cali', '0800', '0923090'),
		(4,'Samsung design', '123 KR', 'Seul', 'B2', '01800', '0124586')
USE ap;
INSERT INTO invoices()
VALUES (1001,1,'12345', '2018-01-10', '111A', '8595'),
		(1002,2,'56789', '2018-02-20', '222B', '7896'),
		(1003,3,'98765', '2018-03-12', '333C', '8965'),
		(1004,4,'54321', '2018-04-14', '444D', '1595');
UPDATE invoices 
SET paymentTotal =8595 
WHERE invoiceID=1001;

INSERT INTO lineItems()
VALUES (200,1001, 'Còn', 100, 35000,6000);