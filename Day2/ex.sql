-- Tạo Cơ sở dữ liệu
CREATE DATABASE IF NOT EXISTS my_guitar_shop0 ;
DROP DATABASE IF EXISTS my_guitar_shop0;
-- Lệnh tạo bảng
CREATE DATABASE IF NOT EXISTS my_guitar_shop0 ;
USE my_guitar_shop0;
CREATE TABLE IF NOT EXISTS customers(
	customersID INT PRIMARY KEY AUTO_INCREMENT ,
	emailAdress VARCHAR(255) NOT NUlL UNIQUE ,
	firstName VARCHAR(255) NOT NUlL,
	lastName VARCHAR(255) NOT NUlL,
	phone VARCHAR(12)
);