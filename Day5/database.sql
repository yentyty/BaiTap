CREATE DATABASE IF NOT EXISTS userphp27;
USE userphp27;
CREATE TABLE usertable(
	userID 		INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	username 	VARCHAR(50) NOT NULL,
	password 	VARCHAR(50) NOT NULL,
	email 		VARCHAR(100) NOT NULL,
	phone 		VARCHAR(10),
	avatar 		VARCHAR(250)
)
ENGINE=INNODB DEFAULT CHARSET=utf8;

INSERT INTO usertable(username, password, email, email, phone, avatar)
VALUES ('admin', '12345','admin@gmail.com','0971615097',''),
		('admin1', '12345','admin1@gmail.com','0971615097',''),
		('admin2', '12345','admin2@gmail.com','0971615097',''),
		('admin3', '12345','admin3@gmail.com','0971615097','');