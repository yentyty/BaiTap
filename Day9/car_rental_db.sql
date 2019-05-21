CREATE DATABASE IF NOT EXISTS car_rental_db;
USE car_rental_db;
CREATE TABLE Car (
	car_reg_no 	VARCHAR(20) NOT NUll PRIMARY KEY,
	category 	VARCHAR(10) NOT NUll, 
	brand VARCHAR(250) NOT NULL,
	daily_rate FLOAT(20) NOT NULL

)ENGINE=INNODB DEFAULT CHARSET=utf8;
CREATE TABLE Customers (
	customer_id INT(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	name VARCHAR(50) NOT NULL, 
	address VARCHAR(250) NOT NULL,
	phone VARCHAR(10) NOT NULL,
	discount VARCHAR(10)
)ENGINE=INNODB DEFAULT CHARSET=utf8;
CREATE TABLE Rental_records (
	rental_id INT(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	car_reg_no 	VARCHAR(20) NOT NUll,
	customer_id INT(10) NOT NULL,
	start_date DATETIME  NOT NULL,
	end_date DATETIME  NOT NULL,
	lastUpdated VARCHAR(250),
	CONSTRAINT Rental_recordsFKCar
	FOREIGN KEY (car_reg_no) REFERENCES Car (car_reg_no),
	CONSTRAINT Rental_recordsFKCustomers
	FOREIGN KEY (customer_id) REFERENCES Customers (customer_id)
)ENGINE=INNODB DEFAULT CHARSET=utf8;

INSERT INTO Car (car_reg_no, category, brand, daily_rate)
VALUES ('SBA1111A', 'car', 'NISSAN SUNNY 1.6L', 99.99),
		('BB2222B', 'car', 'TOYOTA ALTIS 1.6L', 99.99),
		('SBC3333C', 'car', 'HONDA CIVIC 1.8L', 119.99),
		('GA5555E', 'Truck',' NISSAN CABSTAR 3.0L', 89.99),
		('GA6666F', 'van', 'OPEL COMBO 1.6L', 69.99);
INSERT INTO Customers ( name, address, phone, discount)
VALUES ('Nguyễn Văn a', 'Hà Nội', '01254364',''),
		('Nguyễn Văn b', 'Hải Phòng', '012543645',''),
		('Nguyễn Văn c', 'Sài Gòn', '01954364',''),
		('Nguyễn Văn d', 'Ninh Bình', '01854364',''),
		('Nguyễn Văn e', 'hà Giang', '01054364','');
INSERT INTO Rental_records ( car_reg_no, customer_id, start_date, end_date)
VALUES ('SBA1111A',1,'2014-07-30 00:00:00','2014-08-25 00:00:00'),
('BB2222B',2,'2014-07-30 00:00:00','2014-08-11 00:00:00'),
('SBC3333C',3,'2014-08-03 00:00:00','2014-09-05 00:00:00'),
('GA5555E',4,'2014-09-13 00:00:00','2014-10-15 00:00:00'),
('GA6666F',5,'2014-10-16 00:00:00','2014-10-14 00:00:00');
