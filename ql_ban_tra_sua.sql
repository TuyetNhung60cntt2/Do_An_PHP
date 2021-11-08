-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 08, 2021 lúc 06:39 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_ban_tra_sua`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdondathang`
--

CREATE TABLE `chitietdondathang` (
  `MaCTDDH` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `MaDDH` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dondathang`
--

CREATE TABLE `dondathang` (
  `MaDDH` int(11) NOT NULL,
  `TenDDH` varchar(100) NOT NULL,
  `TinhTrangTT` tinyint(1) NOT NULL,
  `TinhTrangGH` tinyint(1) NOT NULL,
  `MaNV` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihientai`
--

CREATE TABLE `loaihientai` (
  `MaLHT` int(11) NOT NULL,
  `TenLHT` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaihientai`
--

INSERT INTO `loaihientai` (`MaLHT`, `TenLHT`) VALUES
(1, 'Latte Series'),
(2, 'Thức uống đặc biệt Gong Cha'),
(3, 'Trà sữa'),
(4, 'Trà nguyên chất'),
(5, 'Thức uống sáng tạo'),
(6, 'Thức uống đá xay'),
(7, 'Topping');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaimonmoi`
--

CREATE TABLE `loaimonmoi` (
  `MaLMM` int(11) NOT NULL,
  `TenLMM` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaimonmoi`
--

INSERT INTO `loaimonmoi` (`MaLMM`, `TenLMM`) VALUES
(1, '2021'),
(2, '2020'),
(3, '2019'),
(4, '2018');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loainguoidung`
--

CREATE TABLE `loainguoidung` (
  `MaLND` int(11) NOT NULL,
  `TenLND` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loainguoidung`
--

INSERT INTO `loainguoidung` (`MaLND`, `TenLND`) VALUES
(1, 'Nhân viên'),
(2, 'Admin'),
(3, 'Khách hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitheomua`
--

CREATE TABLE `loaitheomua` (
  `MaLTM` int(11) NOT NULL,
  `TenLTM` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaitheomua`
--

INSERT INTO `loaitheomua` (`MaLTM`, `TenLTM`) VALUES
(1, 'Mùa xuân'),
(2, 'Mùa hạ'),
(3, 'Mùa thu'),
(4, 'Mùa đông');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaND` int(11) NOT NULL,
  `TenND` varchar(100) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `SDT` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `MaTK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`MaND`, `TenND`, `DiaChi`, `SDT`, `Email`, `MaTK`) VALUES
(3, 'Nguyễn Văn Lang', 'Tuy Hoà - Phú Yên', '025151515', 'lang.nv@gmail.com', 6),
(4, 'Bùi Thị Tuyết Nhung', 'Phú Yên', '0562056200', 'nhung.btt.60cntt@ntu.edu.vn', 1),
(5, 'Nguyễn Thị Lan', 'Ninh Hoà, Khánh Hoà', '01692690250', 'lannt@gmail.com', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `TenSP` varchar(100) NOT NULL,
  `HinhAnh` varchar(100) NOT NULL,
  `Size` tinyint(1) NOT NULL,
  `MaLHT` int(11) DEFAULT NULL,
  `MaLMM` int(11) DEFAULT NULL,
  `MaLTM` int(11) DEFAULT NULL,
  `DonGia` int(11) NOT NULL,
  `SoLuongSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `HinhAnh`, `Size`, `MaLHT`, `MaLMM`, `MaLTM`, `DonGia`, `SoLuongSP`) VALUES
(3, 'Sữa Tươi Okinawa', 'TS_ (48).png', 0, 1, NULL, NULL, 20000, 20),
(4, 'Strawberry Earl Grey Latte', 'TS_ (51).png', 1, 1, NULL, NULL, 23000, 5),
(5, 'Mango Matcha Latte', 'TS_ (50).png', 0, 1, NULL, NULL, 20000, 15),
(6, 'Okinawa Latte', 'TS_ (46).png', 1, 1, NULL, NULL, 25000, 25),
(7, 'Trà Bí Đao Gong Cha', 'TS_ (12).png', 0, 2, NULL, NULL, 20000, 20),
(8, 'Trà Oolong Gong Cha', 'TS_ (16).png', 1, 2, NULL, NULL, 25000, 25),
(9, 'Trà Alisan Gong Cha', 'TS_ (5).png', 0, 2, NULL, NULL, 20000, 15),
(10, 'Trà Earl Grey Gong Cha', 'TS_ (8).png', 1, 2, NULL, NULL, 25000, 25),
(11, 'Trà Đen Gong Cha', 'TS_ (10).png', 0, 2, NULL, NULL, 20000, 20),
(12, 'Trà Xanh Gong Cha', 'TS_ (33).png', 1, 2, NULL, NULL, 23000, 25),
(13, 'Okinawa Coffee Milk Tea', 'TS_ (6).png', 0, 3, NULL, NULL, 30000, 40),
(14, 'Okinawa Oreo Cream Milk Tea', 'TS_ (56).png', 1, 3, NULL, NULL, 25000, 25),
(15, 'Trà Sữa Xoài Trân Châu Đen', 'TS_ (53).png', 0, 3, NULL, NULL, 30000, 15),
(17, 'Trà Sữa Matcha Đậu Đỏ', 'TS_ (22).png', 0, 3, NULL, NULL, 20000, 15),
(18, 'Trà sữa Oolong 3J', 'TS_ (24).png', 1, 3, NULL, NULL, 25000, 25),
(19, 'Trà Bí Đao Alisan', 'TS_ (7).png', 0, 4, NULL, NULL, 20000, 20),
(20, 'Trà Bí Đao', 'TS_ (11).png', 1, 4, NULL, NULL, 25000, 25),
(21, 'Trà Alisan', 'TS_ (4).png', 0, 4, NULL, NULL, 30000, 20),
(22, 'Trà Xanh', 'TS_ (31).png', 1, 4, NULL, NULL, 25000, 25),
(23, 'QQ Chanh Dây Trà Xanh', 'TS_ (58).png', 0, 5, NULL, NULL, 40000, 40),
(24, 'Chanh Ai-yu và Trân Châu Trắng', 'TS_ (39).png', 1, 5, NULL, NULL, 25000, 25),
(25, 'Đào Hồng Mận Hạt É', 'TS_ (42).png', 0, 5, NULL, NULL, 40000, 20),
(26, 'Trà Đen Đào', 'TS_ (44).png', 1, 5, NULL, NULL, 25000, 25),
(27, 'Okinawa Milk Foam Smoothie', 'TS_ (67).png', 0, 6, NULL, NULL, 40000, 20),
(28, 'Strawberry Oreo Smoothie', 'TS_ (52).png', 1, 6, NULL, NULL, 40000, 25),
(29, 'Trân Châu Trắng Vị Dâu', 'TS_ (60).png', 0, 7, NULL, NULL, 5000, 15),
(30, 'Thạch Trái Cây', 'TS_ (63).png', 1, 7, NULL, NULL, 10000, 25),
(31, 'Trà Sữa Gạo Rang Okinawa', 'md2.png', 0, NULL, NULL, 4, 30000, 15),
(32, 'Trà Sữa Gạo Rang', 'md3.png', 1, NULL, NULL, 4, 25000, 25),
(33, 'Fresh Taro Milk Tea', 'md1.png', 0, NULL, NULL, 4, 40000, 40),
(34, 'Trà Sữa Gạo Rang Okinawa', 'mx1.png', 1, NULL, NULL, 1, 23000, 25),
(35, 'Trà Sữa Gạo Rang Trân Châu Trắng', 'mx2.png', 0, NULL, NULL, 1, 20000, 20),
(36, 'Trà Sữa Gạo Rang', 'mx3.png', 1, NULL, NULL, 1, 23000, 25),
(37, 'Trà Gạo Rang', 'mh1.png', 0, NULL, NULL, 2, 30000, 15),
(38, 'Chanh Trái Cây Nhiệt Đới', 'mh2.png', 1, NULL, NULL, 2, 23000, 25),
(39, 'Trà Trái Cây Đá Xay', 'mh3.png', 0, NULL, NULL, 2, 30000, 20),
(40, 'QQ Trà Xanh Trái Cây', 'mt1.png', 1, NULL, NULL, 3, 23000, 25),
(41, 'Trà Xanh Trái Cây', 'mt2.png', 0, NULL, NULL, 3, 20000, 20),
(42, 'Trà Alisan Trái Cây', 'mt3.png', 0, NULL, NULL, 3, 23000, 25),
(43, 'Kem Trà Sữa & Trân Châu Đen', 'kem-tc.png', 0, NULL, 4, NULL, 30000, 20),
(44, 'Kem Trà Sữa', 'kem.png', 1, NULL, 4, NULL, 23000, 25),
(45, 'Matcha Strawberry Milk Tea', '2019.png', 0, NULL, 3, NULL, 40000, 15),
(46, 'Matcha Latte', '20192.png', 1, NULL, 3, NULL, 23000, 25),
(47, 'Matcha Strawberry Cream', '20193.png', 0, NULL, 3, NULL, 50000, 15),
(48, 'Kem Thiết Quan Âm', '20194.png', 1, NULL, 3, NULL, 25000, 25),
(49, 'Kem Thiết Quan Âm & Trân Châu Đen', '20195.png', 0, NULL, 3, NULL, 30000, 15),
(50, 'Trà Bích Loa Xuân', '20196.png', 1, NULL, 3, NULL, 25000, 25),
(51, 'Thiết Quan Âm Đường Nâu Đá Xay ', '2020.png', 0, NULL, 2, NULL, 30000, 15),
(52, 'Thiết Quan Âm Đường Nâu Latte', '20201.png', 1, NULL, 2, NULL, 23000, 25),
(53, 'Matcha Mè Đen Kem Sữa', '20202.png', 0, NULL, 2, NULL, 30000, 15),
(54, 'Mè Đen Latte Kem Sữa', '20203.png', 1, NULL, 2, NULL, 25000, 25),
(55, 'Strawberry Taro', '20204.png', 0, NULL, 2, NULL, 30000, 15),
(56, 'Strawberry Taro & Pearl', '20205.png', 1, NULL, 2, NULL, 23000, 25),
(57, 'Trà Đen Tắc Mật Ong', '20206.png', 0, NULL, 2, NULL, 40000, 20),
(58, 'Trà Alisan Tắc Mật Ong', '20207.png', 1, NULL, 2, NULL, 25000, 25),
(59, 'Trà Sữa Đào Thạch Ngôi Sao', '202016.png', 0, NULL, 2, NULL, 20000, 15),
(61, 'Fresh Taro Milk Tea', '2021.png', 0, NULL, 1, NULL, 30000, 20),
(62, 'Fresh Taro Latte', '20211.png', 1, NULL, 1, NULL, 23000, 25),
(63, 'Fresh Taro Smoothie', '20212.png', 0, NULL, 1, NULL, 40000, 15),
(64, 'Trà Alisan Trái Cây', '20213.png', 1, NULL, 2, NULL, 25000, 5),
(65, 'Trà Xanh Trái Cây', '20215.png', 0, NULL, 1, NULL, 20000, 20),
(66, 'QQ Trà Xanh Trái Cây', '20216.png', 1, NULL, 1, NULL, 23000, 5),
(67, 'Trà Trái Cây Đá Xay', '20217.png', 0, NULL, 1, NULL, 30000, 20),
(68, 'Chanh Trái Cây Nhiệt Đới', '20218.png', 1, NULL, 1, NULL, 25000, 5),
(82, 'G Trà Sữa', 'TS_53a4bf59-9624-4468-d99f-dc22b5f5aec3.jpeg', 1, 2, 2, NULL, 13000, 12),
(83, 'G Trà Sữa nè', 'TS_5808f8c7-c665-406e-e251-de59882c12d2.jpeg ', 0, 3, 3, NULL, 20000, 20000),
(85, 'hột vịt llonj', 'TS_083e587f-8e4f-44f4-a30e-b6226d8a6ef4.jpeg ', 0, 3, NULL, 2, 13000, 13000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTK` int(11) NOT NULL,
  `TenTK` varchar(100) NOT NULL,
  `MatKhau` varchar(50) NOT NULL,
  `MaLND` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`MaTK`, `TenTK`, `MatKhau`, `MaLND`) VALUES
(1, 'admin1', '12345', 2),
(5, 'kh3', '12345', 3),
(6, 'kh2', '12345', 3),
(7, 'nhanvien1', '12345', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `MaTT` int(11) NOT NULL,
  `TenTT` varchar(100) NOT NULL,
  `NoiDung` varchar(1000) NOT NULL,
  `NgayDang` date NOT NULL,
  `HinhAnhMH` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`MaTT`, `TenTT`, `NoiDung`, `NgayDang`, `HinhAnhMH`) VALUES
(1, 'Mừng sinh nhật Gong Cha với Genmaicha Series', '-Mừng sinh nhật lần 7\r\nGenmaicha Series đến đây!?\r\n-Nhân dịp tròn 7 tuổi, Gong Cha mang đến 4 thức uống thơm ngon mới lạ từ nguyên liệu Trà Gạo Rang – Genmaicha. Đặc biệt với giá dùng thử khiến bạn chẳng chần chừ để order ngay đấy:\r\n- Trà Gạo Rang: 37.000đ\r\n- Trà Sữa Gạo Rang: 40.000đ\r\n- Trà Sữa Gạo Rang Trân Châu Trắng: 47.000đ\r\n- Trà Sữa Gạo Rang Okinawa: 49.000đ\r\n❤️Hương thơm từ gạo rang ướp cùng trà thượng hạng được pha chế từ máy ủ trà chuyên dụng mang trọn hương vị trà ngon. Cùng note lại lịch thưởng thức vào ngày 12/10/2021 bạn nhé!', '2021-11-17', 'tintuc1.jpg'),
(2, 'Chào tháng 3 với Fruit Tea Series của Gong Cha !', '-Cơn gió tháng 3\r\n-Gong Cha ra mắt Fruit Tea Series\r\n-Sau những thức uống thơm béo thì cơn gió tháng 3 mang đến loạt thức uống chua ngọt, thanh mát để làm mới lại khẩu vị của Fan đây! Trọn bộ thức uống là sự kết hợp giữa mứt trái cây nhiệt đới và các loại trà quen thuộc mang đến 3 sản phẩm mới toanh với giá ưu đãi đây:\r\n+ Trà Xanh Trái Cây: 39.000đ (size M), 47,000đ (size L)\r\n+ Trà Alisan Trái Cây: 41.000đ (size M), 49.000đ (size L)\r\n+ QQ Trà Xanh Trái Cây: 43.000đ (size M), 52.000đ (size L)\r\n+ Trà Trái Cây Đá Xay: 58.000đ (size M)\r\nNoted ngay lịch và thưởng thức vào ngày 03/03/2021 nha!', '2021-03-10', 'tintuc2.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  ADD PRIMARY KEY (`MaCTDDH`),
  ADD KEY `MaDDH` (`MaDDH`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`MaDDH`),
  ADD KEY `MaKH` (`MaKH`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Chỉ mục cho bảng `loaihientai`
--
ALTER TABLE `loaihientai`
  ADD PRIMARY KEY (`MaLHT`);

--
-- Chỉ mục cho bảng `loaimonmoi`
--
ALTER TABLE `loaimonmoi`
  ADD PRIMARY KEY (`MaLMM`);

--
-- Chỉ mục cho bảng `loainguoidung`
--
ALTER TABLE `loainguoidung`
  ADD PRIMARY KEY (`MaLND`);

--
-- Chỉ mục cho bảng `loaitheomua`
--
ALTER TABLE `loaitheomua`
  ADD PRIMARY KEY (`MaLTM`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaND`),
  ADD KEY `MaTK` (`MaTK`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaLHT` (`MaLHT`),
  ADD KEY `MaLMM` (`MaLMM`),
  ADD KEY `MaLTM` (`MaLTM`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTK`),
  ADD UNIQUE KEY `TenTK` (`TenTK`),
  ADD KEY `MaLND` (`MaLND`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`MaTT`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  MODIFY `MaCTDDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  MODIFY `MaDDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `loaihientai`
--
ALTER TABLE `loaihientai`
  MODIFY `MaLHT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `loaimonmoi`
--
ALTER TABLE `loaimonmoi`
  MODIFY `MaLMM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `loainguoidung`
--
ALTER TABLE `loainguoidung`
  MODIFY `MaLND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `loaitheomua`
--
ALTER TABLE `loaitheomua`
  MODIFY `MaLTM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `MaTT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  ADD CONSTRAINT `chitietdondathang_ibfk_1` FOREIGN KEY (`MaDDH`) REFERENCES `dondathang` (`MaDDH`),
  ADD CONSTRAINT `chitietdondathang_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Các ràng buộc cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `dondathang_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `nguoidung` (`MaND`),
  ADD CONSTRAINT `dondathang_ibfk_2` FOREIGN KEY (`MaNV`) REFERENCES `nguoidung` (`MaND`);

--
-- Các ràng buộc cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaLHT`) REFERENCES `loaihientai` (`MaLHT`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`MaLMM`) REFERENCES `loaimonmoi` (`MaLMM`),
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`MaLTM`) REFERENCES `loaitheomua` (`MaLTM`);

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`MaLND`) REFERENCES `loainguoidung` (`MaLND`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
