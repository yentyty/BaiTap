CREATE DATABASE IF NOT EXISTS course_db;
USE course_db;
CREATE TABLE Cource (
	courcesID 	INT(11) NOT NUll PRIMARY KEY AUTO_INCREMENT,
	courcesName 	VARCHAR(255) NOT NUll

)ENGINE=INNODB DEFAULT CHARSET=utf8;
CREATE TABLE Student (
	studentID INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	name VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	phone VARCHAR(12) NOT NULL
	
)ENGINE=INNODB DEFAULT CHARSET=utf8;
CREATE TABLE Enrollment (
	enrollmentID INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	studentID INT(11) NOT NULL,
	courcesID 	INT(11) NOT NUll,
	enrollmentForm DATE  NOT NULL,
	enrollmentTo DATE  NOT NULL,
	CONSTRAINT EnrollmentFKStudent
	FOREIGN KEY (studentID) REFERENCES Student (studentID),
	CONSTRAINT EnrollmentFKCource
	FOREIGN KEY (courcesID) REFERENCES Cource (courcesID)

)ENGINE=INNODB DEFAULT CHARSET=utf8;

INSERT INTO Cource (courcesName)
VALUES ('PHP'),
		('JAVA'),
		('PYTHON'),
		('RUBY'),
		('IOS');
INSERT INTO Student ( name, email, phone )
VALUES ('Nguyễn Văn A', 'nguyenvana@gmail.com','0123456789'),
		('Nguyễn Văn B', 'nguyenvanb@gmail.com','0153456788'),
		('Nguyễn Văn C', 'nguyenvanc@gmail.com','0923456789'),
		('Nguyễn Văn D', 'nguyenvand@gmail.com','0923456787'),
		('Nguyễn Văn E', 'nguyenvane@gmail.com','0163456789');

INSERT INTO Enrollment ( studentID, courcesID, enrollmentForm, enrollmentTo)
VALUES (1,1,'2018-01-12','2018-06-12'),
		(2,1,'2018-03-12','2018-08-12'),
		(3,2,'2018-01-12','2018-06-12'),
		(4,3,'2018-03-12','2018-08-12'),
		(5,4,'2018-01-12','2018-06-12');
		
