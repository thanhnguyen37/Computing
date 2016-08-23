-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2016-08-23 01:34:34.652

-- tables
-- Table: hoadon
CREATE TABLE hoadon (
    Mahd int NOT NULL,
    Ngaylap time NOT NULL,
    Makh int NOT NULL,
    khachhang_Makh int NOT NULL,
    CONSTRAINT hoadon_pk PRIMARY KEY (Mahd)
);

-- Table: hoadonchitiet
CREATE TABLE hoadonchitiet (
    Mahd int NOT NULL,
    Masp int NOT NULL,
    Tenkh varchar(50) NOT NULL,
    Tensp varchar(100) NOT NULL,
    Dongiaban int NOT NULL,
    hoadon_Mahd int NOT NULL,
    sanpham_Masp int NOT NULL,
    CONSTRAINT hoadonchitiet_pk PRIMARY KEY (Mahd)
);

-- Table: khachhang
CREATE TABLE khachhang (
    Makh int NOT NULL,
    Tenkh varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    Sodienthoai char NOT NULL,
    CONSTRAINT khachhang_pk PRIMARY KEY (Makh)
);

-- Table: loaisanpham
CREATE TABLE loaisanpham (
    Malsp int NOT NULL,
    Tenlsp char(50) NOT NULL,
    CONSTRAINT loaisanpham_pk PRIMARY KEY (Malsp)
);

-- Table: sanpham
CREATE TABLE sanpham (
    Masp int NOT NULL,
    Malsp int NOT NULL,
    Soluong char(10) NOT NULL,
    Tensp varchar(50) NOT NULL,
    loaisanpham_Malsp int NOT NULL,
    CONSTRAINT sanpham_pk PRIMARY KEY (Masp)
);

-- foreign keys
-- Reference: hoadon_khachhang (table: hoadon)
ALTER TABLE hoadon ADD CONSTRAINT hoadon_khachhang FOREIGN KEY hoadon_khachhang (khachhang_Makh)
    REFERENCES khachhang (Makh);

-- Reference: hoadonchitiet_hoadon (table: hoadonchitiet)
ALTER TABLE hoadonchitiet ADD CONSTRAINT hoadonchitiet_hoadon FOREIGN KEY hoadonchitiet_hoadon (hoadon_Mahd)
    REFERENCES hoadon (Mahd);

-- Reference: hoadonchitiet_sanpham (table: hoadonchitiet)
ALTER TABLE hoadonchitiet ADD CONSTRAINT hoadonchitiet_sanpham FOREIGN KEY hoadonchitiet_sanpham (sanpham_Masp)
    REFERENCES sanpham (Masp);

-- Reference: sanpham_loaisanpham (table: sanpham)
ALTER TABLE sanpham ADD CONSTRAINT sanpham_loaisanpham FOREIGN KEY sanpham_loaisanpham (Malsp)
    REFERENCES loaisanpham (Malsp);

-- End of file.

