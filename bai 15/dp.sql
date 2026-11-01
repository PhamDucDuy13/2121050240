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
id :INT PRIMARY KEY AUTO_INCREMENT
ten_the_loai :varchar(255),

-- dienvien
id INT PRIMARY KEY AUTO_INCREMENT,
ho_ten varchar(100),
ngay_sinh date,


--dao dien
id INT PRIMARY KEY AUTO_INCREMENT,
ho_ten varchar(100),
ngay_sinh date,

--phim the loai
id INT PRIMARY KEY AUTO_INCREMENT,
phim_id int,
the_loai_id int

phim_dien_vien
id INT PRIMARY KEY AUTO_INCREMENT,
phim_id int,
dien_vien_id int,


--phim
id INT PRIMARY KEY AUTO_INCREMENT,
ten_phim varchar(255),
quoc_gia varchar(100),
dao_dien_id int,
nam dateTime,
do_tuoi int,
mota varchar(255)


--1 cau lenh viet phai chay dc nhieeu lan