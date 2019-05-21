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

INSERT INTO usertable(username, password, email,phone, avatar)
VALUES ('admin', '12345','admin@gmail.com','0971615097',''),
		('admin1', '12345','admin1@gmail.com','0971615097',''),
		('admin2', '12345','admin2@gmail.com','0971615097',''),
		('admin3', '12345','admin3@gmail.com','0971615097','');
CREATE TABLE loaitin(
	idloaitin INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	theloai VARCHAR(250) NOT NULL,
	mota VARCHAR(250) NOT NULL,
	ngaytao timestamp
)
ENGINE=INNODB DEFAULT CHARSET=utf8;
CREATE TABLE tintuc(
	idtintuc INT(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	idloaitin INT(10) NOT NULL,
	tieude VARCHAR(250) NOT NULL,
	tomtat VARCHAR(250) NOT NULL,
	noidung TEXT NOT NULL,
	hinh VARCHAR(250),
	userid INT(10),
	ngaytao timestamp
)
ENGINE=INNODB DEFAULT CHARSET=utf8;

INSERT INTO tintuc(idloaitin, tieude, tomtat, noidung, hinh, userID)
VALUES (1, "Chuyên gia: 'Đường sắt cao tốc ở Việt Nam cạnh tranh được với hàng không'", 
	'Nhiều chuyên gia tự tin về sức cạnh tranh của đường sắt cao tốc vì tính an toàn và thuận tiện trong sử dụng.',
	'Bộ Giao thông Vận tải đang nghiên cứu khả thi dự án đường sắt tốc độ cao Bắc Nam, toàn tuyến dài hơn 1.545 km, tổng vốn đầu tư dự kiến là hơn 58 tỷ USD.

Trong đó hai đoạn Hà Nội - Vinh và Nha Trang - TP HCM được đầu tư trước, phân kỳ trong 10 năm (2020-2030) với tổng vốn hơn 24 tỷ USD.

Đánh giá ban đầu về hiệu quả của dự án này trong bối cảnh Việt Nam đã và đang cần vốn đầu tư nhiều dự án hạ tầng lớn khác như đường bộ cao tốc, sân bay Long Thành, mở rộng sân bay Tân Sơn Nhất..., nhiều chuyên gia cho rằng "đường sắt tốc độ cao có những lợi thế với đất nước có địa hình hẹp, kéo dài như Việt Nam"','',1),

(2, "Cuộc sống tạm bợ trong khu biệt thự bỏ hoang ở Sài Gòn", 
	'Những căn biệt thự hạng sang xây dở dang ở Thảo Điền rơi vào cảnh hoang tàn nhiều năm nay, thành nơi sống tạm của những người dân lao động.',
	'Bộ Giao thông Vận tải đang nghiên cứu khả thi dự án đường sắt tốc độ cao Bắc Nam, toàn tuyến dài hơn 1.545 km, tổng vốn đầu tư dự kiến là hơn 58 tỷ USD.

Trong đó hai đoạn Hà Nội - Vinh và Nha Trang - TP HCM được đầu tư trước, phân kỳ trong 10 năm (2020-2030) với tổng vốn hơn 24 tỷ USD.

Đánh giá ban đầu về hiệu quả của dự án này trong bối cảnh Việt Nam đã và đang cần vốn đầu tư nhiều dự án hạ tầng lớn khác như đường bộ cao tốc, sân bay Long Thành, mở rộng sân bay Tân Sơn Nhất..., nhiều chuyên gia cho rằng "đường sắt tốc độ cao có những lợi thế với đất nước có địa hình hẹp, kéo dài như Việt Nam"','',1)