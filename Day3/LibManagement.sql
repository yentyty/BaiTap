-- DROP DATABASE LibManagement;
CREATE DATABASE IF NOT EXISTS LibManagement;
USE LibManagement;

CREATE TABLE Categories(
	CategoryID CHAR(3)NOT NULL PRIMARY KEY,
	CategoryName NVARCHAR(50)NOT NULL UNIQUE,
	Moreinfo NVARCHAR(255) NOT NULL
);
CREATE TABLE Books(
	BookID CHAR(6) NOT NULL PRIMARY KEY,
	Name NVARCHAR (50) NOT NULL UNIQUE,
	Publisher NVARCHAR(50) NOT NULL,
	Author NVARCHAR(50) NOT NULL,
	CategoryID CHAR(3) NOT NULL,
	Numofpage INT(11) NOT NULL,
	Maxdate INT(11) NOT NULL,
	Num INT(11) NOT NULL,
	Summary NVARCHAR(255) NOT NULL,
	Picture NVARCHAR(255) NOT NULL,
	CONSTRAINT BooksFKCategories
	FOREIGN KEY (CategoryID) REFERENCES Categories (CategoryID)
);
CREATE TABLE Students(
	CardId CHAR(8) NOT NULL PRIMARY KEY,
	Name VARCHAR(30) NOT NULL,
	Address VARCHAR(50) NOT NULL,
	Tel CHAR(10) NOT NULL
);

CREATE TABLE Receipts(
	CardID CHAR(8) NOT NULL,
	BookID CHAR(6) NOT NULL,
	DateBorrow DATETIME  NOT NULL,
	Datereturn DATETIME NOT NULL,
	ReturnOK TINYINT(1) NOT NULL,
	CONSTRAINT ReceiptsFKStudents
	FOREIGN KEY (CardID) REFERENCES Students (CardId),
	CONSTRAINT ReceiptsFKBooks
	FOREIGN KEY (BookID) REFERENCES Books (BookID)
);
CREATE INDEX CategoryID
ON Books (CategoryID);
CREATE INDEX CardID
ON Receipts (CardID);
CREATE INDEX BookID
ON Receipts (BookID);

INSERT INTO `categories` (`CategoryID`, `CategoryName`, `Moreinfo`) VALUES
('CSD', 'Cơ sở dữ liệu', 'Access, Oracle'),
('ECO', 'Ecommerce', 'Sách về thương mại điện tử'),
('GTT', 'Giải thuật', 'Các bài toán mẫu, các giải thuật, cấu trúc dữ liệu'),
('HTT', 'Hệ thống', 'Windows, Linux, Unix'),
('LTT', 'Ngôn ngữ lập trình', 'Visual Basic, C, C++, Java'),
('PTK', 'Phân tích và thiết kế', 'Phân tích và thiết kế giải thuật, hệ thống thông tin v.v..'),
('VPP', 'Văn phòng', 'Word, Excel'),
('WEB', 'Web', 'Javascript, Vbscript,HTML, Flash');

INSERT INTO `books` (`BookID`, `Name`, `Publisher`, `Author`, `CategoryID`, `Numofpage`, `Maxdate`, `Num`, `Summary`, `Picture`) VALUES
('CSD001', 'Cơ sở dữ liệu', 'NXB Giáo dục', 'Ðỗ Trung Tấn', 'CSD', 200, 3, 3, 'Thiết kế CSDL', NULL),
('CSD002', 'SQL Server 7.0', 'NXB Ðồng Nai', 'Elicom', 'CSD', 200, 3, 2, 'Thiết CSDL và sử dụng SQL Server', NULL),
('CSD003', 'Oracle 8i', 'NXB Giáo dục', 'Trần Tiến Dung', 'CSD', 500, 5, 3, 'Từng bước sử dụng Oracle', NULL),
('HTT001', 'Windows2000 Professional', 'NXB Giáo dục', 'Anh Thư', 'HTT', 500, 3, 2, 'Sử dụng Windows 2000', NULL),
('HTT002', 'Windows 2000 Advance Server', 'NXB Giáo dục', 'Anh Thư', 'HTT', 500, 5, 2, 'Sử dụng Windows 2000 Server', NULL),
('LTT001', 'Lập trình visual Basic 6', 'NXB Giáo dục', 'Nguyễn Tiến', 'LTT', 600, 3, 3, 'Kỹ thuật lập trình Víual Basic', NULL),
('LTT002', 'Ngôn ngữ lập trình c++', 'NXB Thống kê', 'Tăng Ðình Quí', 'LTT', 500, 5, 3, 'Hướng dẫn lập trình hướng đối tượng và C++', NULL),
('LTT003', 'Lập trình Windows bằng Visual c++', 'NXB Giáo dục', 'Ðặng Văn Ðức', 'LTT', 300, 4, 3, 'Hướng dẫn từng bước lập trình trên Windows', NULL),
('VPP001', 'Excel Toàn tập', 'NXB Trẻ', 'Ðoàn Công Hùng', 'VPP', 1000, 5, 4, 'Trình bày mọi vấn đề về Excel', NULL),
('VPP002', 'Word 2000 Toàn tập', 'NXB Trẻ', 'Ðoàn Công Hùng', 'VPP', 1000, 4, 3, 'Trình bày mọi vấn đề về Word', NULL),
('VPP003', 'Làm kế toán bằng Excel', 'NXB Thống kê', 'Vu Duy Sanh', 'VPP', 200, 5, 2, 'Trình bày phuong pháp làm kế toán', NULL),
('WEB001', 'Javascript', 'NXB Trẻ', 'Lê Minh Trí', 'WEB', 200, 5, 2, 'Từng bước thiết kế Web động', NULL),
('WEB002', 'HTML', 'NXB Giáo Dục', 'Nguyễn Thị Minh Khoa', 'WEB', 100, 3, 2, 'Từng bước làm quen với WEB', NULL);


INSERT INTO `students` (`CardId`, `Name`, `Address`, `Tel`) VALUES
('STIT0001', 'Vy Văn Việt', '92-Quang Trung- Đà Nãng', '0511810583'),
('STIT0002', 'Nguyễn Khánh', '92-Quang Trung- Đà Nãng', '0511810583'),
('STIT0003', 'Nguyễn Minh Quốc', '92-Quang Trung- Đà Nãng', '0511810583'),
('STIT0004', 'Hồ Phước Thoi', '92-Quang Trung- Đà Nãng', '0511810583'),
('STIT0005', 'Nguyễn Văn Định', '92-Quang Trung- Đà Nãng', '0511810583'),
('STIT0006', 'Nguyễn Văn Hải', '92-Quang Trung- Đà Nãng', '0511810583'),
('STIT0007', 'Nguyễn Thị Thuý Hà', '92-Quang Trung- Đà Nãng', '0511810583'),
('STIT0008', 'Đỗ Thị Thiên Ngân', '92-Quang Trung- Đà Nãng', '0511810583'),
('STIT0009', 'Nguyễn Văn A', '30- Phan Chu Trinh- Đà Nẵng', '0913576890');

INSERT INTO `receipts` (`CardID`, `BookID`, `DateBorrow`, `Datereturn`, `ReturnOK`) VALUES
('STIT0001', 'CSD001', '2014-07-30 00:00:00', '0000-00-00 00:00:00', 0),
('STIT0001', 'LTT001', '2014-06-30 00:00:00', '2014-07-25 00:00:00', 1),
('STIT0002', 'CSD002', '2014-08-15 00:00:00', '0000-00-00 00:00:00', 0),
('STIT0002', 'LTT003', '2014-08-10 00:00:00', '2014-08-30 00:00:00', 1),
('STIT0003', 'WEB001', '2014-07-10 00:00:00', '2014-07-20 00:00:00', 1),
('STIT0004', 'HTT001', '2014-08-10 00:00:00', '0000-00-00 00:00:00', 0),
('STIT0004', 'HTT002', '2014-08-20 00:00:00', '2014-08-25 00:00:00', 1),
('STIT0006', 'WEB001', '2014-08-30 00:00:00', '0000-00-00 00:00:00', 0),
('STIT0006', 'CSD002', '2014-08-10 00:00:00', '2014-08-15 00:00:00', 1),
('STIT0006', 'WEB002', '2014-07-15 00:00:00', '2014-07-30 00:00:00', 1),
('STIT0007', 'VPP001', '2014-08-30 00:00:00', '0000-00-00 00:00:00', 0),
('STIT0007', 'VPP003', '2014-08-20 00:00:00', '2014-08-25 00:00:00', 1),
('STIT0008', 'VPP001', '2014-08-30 00:00:00', '0000-00-00 00:00:00', 0),
('STIT0009', 'CSD001', '2014-08-20 00:00:00', '2014-08-23 00:00:00', 1);	

-- III> CÂU LỆNH TRUY VẤN DỮ LIỆU
-- Câu 1
	SELECT * 
	FROM `categories` 
	WHERE CategoryID ='VPP'
-- Câu 2:
	USE LibManagement;
	SELECT CardID, BookID, DateBorrow
	FROM Receipts
	WHERE DateBorrow >= '2014-8-1' AND DateBorrow <= '2014-8-31';
-- Câu 3:
	USE LibManagement;
	SELECT students.CardId, students.Name
	FROM students
	INNER JOIN receipts
		ON students.CardId = receipts.CardID
	WHERE (receipts.DateBorrow IS NOT NULL) AND (students.Name LIKE 'N%')
	GROUP BY students.CardId;
-- Câu 4
	USE LibManagement;
	SELECT students.Name, students.CardId
	FROM students
	INNER JOIN receipts
	ON students.CardId = receipts.CardID
	WHERE DateBorrow >= '2014-7-1' AND 
		DateBorrow <= '2014-7-31'AND
	    ReturnOK = 0
	-- Cách 2   

	USE LibManagement;
	SELECT students.Name, students.CardId
	FROM students
	INNER JOIN receipts
	ON students.CardId = receipts.CardID
	WHERE DateBorrow LIKE'2014-07-%' AND 
	    ReturnOK = 0
-- Câu 5:
	USE LibManagement;
	SELECT books.Name, categories.CategoryName, books.Publisher, books.Author, books.Num
	FROM books
	INNER JOIN categories
	ON books.CategoryID = categories.CategoryID
-- Câu 6:
	USE LibManagement;
	SELECT books.Name, students.Name, receipts.DateBorrow
	FROM books
	INNER JOIN receipts
	ON books.BookID = receipts.BookID
	INNER JOIN students
	ON receipts.CardID = students.CardId
	WHERE receipts.Datereturn = '0000-0-0' 
	ORDER BY receipts.DateBorrow ASC;
-- IV> CÂU LỆNH TRUY VẤN PHỨC TẠP
-- Câu 1:
	USE LibManagement;
	SELECT books.CategoryID, categories.CategoryName, SUM(books.Num ) AS Total
	FROM categories
	INNER JOIN books
	ON categories.CategoryID = books.CategoryID
	GROUP BY categories.CategoryID
-- Câu 2:
	SELECT COUNT(*) AS NumberOfStudent
	FROM receipts
	WHERE DateBorrow >= '2014-8-1' AND DateBorrow <= '2014-8-31';
-- Câu 3:
	SELECT *
	FROM books
	WHERE books.Num >
	(SELECT SUM(books.Num) AS NumberOfNum
		FROM  books
	    WHERE books.BookID = 'LTT001'
	)
--- Câu 4:
	SELECT books.BookID, books.Num - (SELECT COUNT(BookID) AS numberofborrow FROM receipts WHERE (ReturnOK = 0) AND (receipts.BookID = books.BookID)) AS NumOfLibrary
	FROM books;
-- Câu 5:
	SELECT books.BookID, books.Num < (SELECT COUNT(CardID) AS numberofborrow FROM receipts WHERE (receipts.BookID = books.BookID)) AS NumOfLibrary 
	FROM books


