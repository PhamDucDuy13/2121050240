create database netflix;

-- nguoi dung(table)
id: int
ten_dang_nhap :varchar(30)
mat_khau : varchar(30)
email: varchar(30)
ho_ten: varchar(50)
Ngay_sinh :date
so_dien_thoai :varchar(10)
gioi_tinh: boolean -- true:nam/false:nu
--table nguoi dung(nguoi_dung)
CREATE TABLE if NOT EXISTS nguoi_dung (
    id INT PRIMARY KEY AUTO_INCREMENT,
    ten_dang_nhap VARCHAR(30) NOT NULL,
    mat_khau VARCHAR(30)  NOT NULL,
    email VARCHAR(30)  NOT NULL,
    ho_ten VARCHAR(30)  NOT NULL,
    ngay_sinh DATE  NOT NULL,
    so_dien_thoai VARCHAR(10)  NOT NULL,
    gioi_tinh BOOLEAN  NOT NULL
);
-- the loai
CREATE TABLE if NOT EXISTS theloai(
    id :INT PRIMARY KEY AUTO_INCREMENT ,
    ten_the_loai :varchar(255) NOT NULL,

);

-- dienvien
CREATE TABLE if NOT EXISTS dienvien(
    id INT PRIMARY KEY AUTO_INCREMENT ,
    ho_ten varchar(100) NOT NULL,
    ngay_sinh date NOT NULL


);

--dao dien
CREATE TABLE if NOT EXISTS daodien (
    id INT PRIMARY KEY AUTO_INCREMENT ,
    ho_ten varchar(100) NOT NULL,
    ngay_sinh date NOT NULL

);

--phim the loai
CREATE TABLE if NOT EXISTS phimtheloai(
    id INT PRIMARY KEY AUTO_INCREMENT ,
    phim_id int NOT NULL,
    the_loai_id int NOT NULL
)

--phim dien vien
CREATE TABLE if NOT EXISTS phimdienvien(
    id INT PRIMARY KEY AUTO_INCREMENT ,
    phim_id int NOT NULL,
    dien_vien_id int NOT NULL
)




--phim
CREATE TABLE if NOT EXISTS phim(
    id INT PRIMARY KEY AUTO_INCREMENT,
    ten_phim varchar(255) NOT NULL,
    quoc_gia varchar(100) NOT NULL,
    dao_dien_id int NOT NULL,
    nam dateTime NOT NULL,
    do_tuoi int NOT NULL,
    mota varchar(255) NOT NULL

)


-- them du lieu vao trong data base
SELECT * FROM `theloai` WHERE tentheloai LIKE N'%di%';

INSERT INTO `dienvien`( `ho_ten`, `ngay_sinh`) VALUES ('Luong quang anh','2006-2-15');
INSERT INTO `dienvien`( `ho_ten`, `ngay_sinh`) VALUES ('Nguyen An Binh','2006-1-14');
INSERT INTO `dienvien`( `ho_ten`, `ngay_sinh`) VALUES ('Nguyen Huy Chau','2006-1-19');
INSERT INTO `dienvien`( `ho_ten`, `ngay_sinh`) VALUES ('NGuyen Thanh Cong','2006-5-16');
INSERT INTO `dienvien`( `ho_ten`, `ngay_sinh`) VALUES ('Trinh Tran Phuong Tuan','1997-9-12');


INSERT INTO `daodien`( `ho_ten`, `ngay_sinh`) VALUES ('Tran Thanh', '1987-02-05');
INSERT INTO `daodien`( `ho_ten`, `ngay_sinh`) VALUES ('Ly Hai', '1968-09-28');
INSERT INTO `daodien`( `ho_ten`, `ngay_sinh`) VALUES ('Victor Vu', '1975-11-25');
INSERT INTO `daodien`( `ho_ten`, `ngay_sinh`) VALUES ('Nguyen Quang Dung', '1978-12-18');
INSERT INTO `daodien`( `ho_ten`, `ngay_sinh`) VALUES ('Charlie Nguyen', '1968-11-25');

INSERT INTO phim (ten_phim, quoc_gia, dao_dien_id, nam, do_tuoi, mota)
VALUES
('Bố Già', 'Việt Nam', 1, 2021, 13, 'Phim tình cảm gia đình');
INSERT INTO phim (ten_phim, quoc_gia, dao_dien_id, nam, do_tuoi, mota)
VALUES
('Lật Mặt 7', 'Việt Nam', 2, 2024, 13, 'Phim tâm lý gia đình');
INSERT INTO phim (ten_phim, quoc_gia, dao_dien_id, nam, do_tuoi, mota) VALUES ('Mắt Biếc', 'Việt Nam', 3, 2019, 16, 'Phim tình cảm');
INSERT INTO phim (ten_phim, quoc_gia, dao_dien_id, nam, do_tuoi, mota) VALUES ('Tháng Năm Rực Rỡ', 'Việt Nam', 4, 2018, 13, 'Phim tuổi thanh xuân');
INSERT INTO phim (ten_phim, quoc_gia, dao_dien_id, nam, do_tuoi, mota) VALUES ('Để Mai Tính', 'Việt Nam', 5, 2010, 16, 'Phim hài tình cảm');

INSERT INTO `phimdienvien`( `phim_id`, `dien_vien_id`) VALUES (1,1);
INSERT INTO `phimdienvien`( `phim_id`, `dien_vien_id`) VALUES (2,2);
INSERT INTO `phimdienvien`( `phim_id`, `dien_vien_id`) VALUES (3,3);
INSERT INTO `phimdienvien`( `phim_id`, `dien_vien_id`) VALUES (4,4);
INSERT INTO `phimdienvien`( `phim_id`, `dien_vien_id`) VALUES (5,5);


INSERT INTO `phimtheloai`( `phim_id`, `the_loai_id`) VALUES VALUES (1,1);
INSERT INTO `phimtheloai`( `phim_id`, `the_loai_id`) VALUES VALUES (2,2);
INSERT INTO `phimtheloai`( `phim_id`, `the_loai_id`) VALUES VALUES (3,3);
INSERT INTO `phimtheloai`( `phim_id`, `the_loai_id`) VALUES VALUES (4,4);
INSERT INTO `phimtheloai`( `phim_id`, `the_loai_id`) VALUES VALUES (5,5);