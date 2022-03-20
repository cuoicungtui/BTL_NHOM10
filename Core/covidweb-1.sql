-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 20, 2022 lúc 03:53 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `covidweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(8, 'cuoicungtui1', '$2y$10$Aftm7C3Zr006X/qxvsykKOZRTiTBMqvV0aXnGP1plhCVz2nWye7dC'),
(10, 'cuoicungtui123', '$2y$10$NCYL3oq1tP80dzPUpAhMT.BfcdWigXio/oxXXD/50L7m8v1sip4/a'),
(14, 'admin', '$2y$10$kUv4SjODRS3ne5kaP87Od.FYTfK39D/IwWBltvF0Eenvu5hXOsyLS'),
(19, 'cuoicungtui', '$2y$10$nxwl8Wt8Ahp6FnapeQMqU.eloOm8bDGdvmxZtJcHADVjYend7PMCW');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `conten`
--

CREATE TABLE `conten` (
  `id_conten` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `index_conten` int(11) NOT NULL,
  `h1` varchar(200) NOT NULL,
  `p` varchar(1000) NOT NULL,
  `img` varchar(200) NOT NULL,
  `imgName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `conten`
--

INSERT INTO `conten` (`id_conten`, `id`, `index_conten`, `h1`, `p`, `img`, `imgName`) VALUES
(8, 7, 1, '', 'Trong bối cảnh dịch bệnh Covid-19 đang diễn biến phức tạp, để bảo đảm an toàn khi học sinh trở lại trường học tập, ngành GD&ĐT tỉnh Đắk Lắk đã đẩy mạnh truyền thông, giáo dục, nâng cao ý thức vệ sinh cho học sinh.', '', ''),
(9, 7, 2, 'Tại huyện Cư M’Gar', 'Sáng 18/12, tại trường THCS Nguyễn Huệ (xã Ea M’nang) đã tổ chức Lễ phát động rửa tay bằng xà phòng năm 2021.', '', ''),
(10, 7, 3, '', 'Đây là hoạt động truyền thông trong Chương trình “Mở rộng quy mô nước sạch và vệ sinh nông thôn dựa trên kết quả” vay vốn Ngân hàng thế giới năm 2021. Một chương trình có ý nghĩa thiết thực nhằm tuyên truyền trong nhân dân về sử dụng nước sạch, xây dựng nhà vệ sinh đủ tiêu chuẩn và và cung cấp những kiến thức cơ bản về vệ sinh cá nhân, rửa tay bằng nước sạch và xà phòng.\r\n', '', ''),
(11, 7, 4, '', 'Theo ông Lê Hoài Sơn, Hiệu trưởng nhà trường, “Rửa tay với xà phòng và nước sạch tuy là một việc làm nhỏ nhưng mang lại hiệu quả vô cùng to lớn trong việc phòng, chống các bệnh truyền nhiễm, nhất là trong tình hình dịch Covid-19 đang diễn ra phức tạp hiện nay. Hoạt động này ít tốn kém nhưng mang lại hiệu quả thiết thực, góp phần bảo vệ, nâng cao sức khỏe cho mỗi cá nhân và cộng đồng”.', 'Views/img/Post1.1.jpg', 'Ông Lê Hoài Sơn, Hiệu trưởng Trường THCS Nguyễn Huệ phát biểu phát động hưởng ứng.'),
(12, 7, 5, '', 'Tại buổi Lễ, thay mặt lãnh đạo Nhà trường ông Sơn đã kêu gọi toàn thể cán bộ, giáo viên, nhân viên và học sinh thực hiện thường xuyên việc rửa tay bằng xà phòng.', '', ''),
(13, 7, 6, '', '“Không chỉ thực hiện cho bản thân, mỗi thầy cô, học sinh phải là một tuyền truyền viên của Chương trình, kêu gọi người thân và cộng đồng rửa tay với xà phòng vì bản thân, vì trách nhiệm với xã hội”- ông Sơn nhấn mạnh.', '', ''),
(14, 7, 7, '', 'Ngay sau phần phát động, đại diện Ban Giám hiệu, các đoàn thể của Nhà trường và đại diện học sinh thực hiện các động tác thị phạm quy trình rửa tay 6 bước bằng xà phòng và nước sạch.', 'Views/img/post1.2.jpg', 'Đại'),
(15, 7, 8, '', 'Cũng tại Lễ phát động này, các em học sinh được hoà mình vào các tiết mục văn nghệ sôi động; tham gia chương trình giao lưu “Đố vui có thưởng” với các câu hỏi về chủ đề giữ gìn vệ sinh và phòng chống dịch bệnh Covid-19.', 'Views/img/Post1.3.jpg', 'Các em học sinh tham gia phần thi đố vui.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `declare_`
--

CREATE TABLE `declare_` (
  `id_khaibao` int(7) NOT NULL,
  `id_user` int(7) NOT NULL,
  `declare_date` datetime NOT NULL,
  `tranfer` bit(1) NOT NULL,
  `tranfer_detail` varchar(1000) DEFAULT NULL,
  `symptom` bit(1) NOT NULL,
  `symptom_detail` varchar(1000) DEFAULT NULL,
  `contact` bit(1) DEFAULT NULL,
  `infected` bit(1) NOT NULL,
  `covid_country` bit(1) NOT NULL,
  `symptom_infected` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `declare_`
--

INSERT INTO `declare_` (`id_khaibao`, `id_user`, `declare_date`, `tranfer`, `tranfer_detail`, `symptom`, `symptom_detail`, `contact`, `infected`, `covid_country`, `symptom_infected`) VALUES
(1, 2, '2022-03-08 00:00:00', b'1', NULL, b'1', NULL, NULL, b'1', b'1', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detailvaccine`
--

CREATE TABLE `detailvaccine` (
  `idVaccine` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `made` varchar(100) NOT NULL,
  `startAge` int(11) NOT NULL,
  `endAge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `detailvaccine`
--

INSERT INTO `detailvaccine` (`idVaccine`, `name`, `made`, `startAge`, `endAge`) VALUES
(1, 'Sinopharm', 'china', 10, 40),
(2, 'pfizer', 'America', 18, 50),
(3, 'Moderna', 'America', 20, 70);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `managervaccine`
--

CREATE TABLE `managervaccine` (
  `id` int(11) NOT NULL,
  `idVaccine` int(10) NOT NULL,
  `number` int(11) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `managervaccine`
--

INSERT INTO `managervaccine` (`id`, `idVaccine`, `number`, `address`) VALUES
(1, 2, 400, 'Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `paragraph` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `Title`, `img`, `paragraph`, `date`) VALUES
(7, 'Nâng cao ý thức cho học sinh trong phòng, chống dịch Covid-19', 'Views/img/Post1.1.jpg', ' Trong bối cảnh dịch bệnh Covid-19 đang diễn biến phức tạp, để bảo đảm an toàn khi học sinh trở lại trường học tập, ngành GD&ĐT tỉnh Đắk Lắk đã đẩy mạnh truyền thông, giáo dục, nâng cao ý thức vệ sinh cho học sinh. ', '2021-12-30'),
(9, 'Nguồn về dồi dào, giá kit test COVID-19 hạ nhiệt', 'Views/img/1646748087-7bc2ad9150510661fab60e723e9cb335-width800height578.jpg', 'Giá kit test xét nghiệm nhanh COVID-19 giảm nhẹ mấy ngày gần đây dù chưa có kết quả cuối cùng về việc có đưa mặt hàng này vào diện bình ổn giá hay không. Lý do là nguồn nhập về dồi dào hơn, đỡ căng thẳng cung – cầu.', '2022-03-17'),
(10, 'Tình hình dịch COVID-19: Cập nhật mới nhất từ Bộ Y tế', 'Views/img/covid-19-tinh-thanh-16303389954381600025668.png', 'SKĐS - Nội dung tình hình dịch COVID-19 dưới đây là số liệu chính thức, mới nhất theo nguồn tin từ Bộ Y tế, cập nhật mỗi buổi tối hàng ngày trên Báo Sức khỏe & Đời sống.', '2022-03-17'),
(11, ' Cao Bằng: Ca mắc COVID -19 liên tiếp lập đỉnh mới, nhân viên y tế làm xuyên đêm phục vụ F0 khai báo', 'Views/img/94e60a326e50a10ef841-16467384163951373844898.jpg', 'SKĐS - Để giảm tải cho các trạm y tế, nhiều tổ khai báo y tế cộng đồng với sự tham gia của người dân ở Cao Bằng được thành lập để hỗ trợ F0 điều trị tại nhà.', '2022-03-18'),
(12, ' Cập nhật ca mắc COVID-19 hôm nay ở Hà Nội, tình hình dịch mới nhất', 'Views/img/ca-mac-covid-ha-noi-hom-nay-163099701760139682384-0-0-612-979-crop-1630997027993518735126.jpg', 'SKĐS - Cập nhật mới nhất, liên tục về số ca mắc COVID-19 ở địa bàn thành phố Hà Nội, tình hình tiêm vaccine COVID-19, chi tiết các ca mắc tại 30 quận, huyện, thị xã.\r\nNgày 8/3 Hà Nội phát hiện 32.650 ca COVID-19 mới, trong đó có 13.692 ca cộng đồng.', '2022-03-10'),
(13, '7 bước giúp chống lại mệt mỏi và suy nhược sau mắc COVID-19', 'Views/img/1646824425-19deade280d674401e1a2794af55f734-width630height420.jpg', 'Sau khi \"chiến đấu\" với COVID-19, mệt mỏi có thể là một triệu chứng kéo dài phổ biến gây khó khăn cho bệnh nhân và thường khiến họ không thể tiếp tục cuộc sống theo cách bình thường…', '2022-03-09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(7) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `SDT` varchar(10) DEFAULT NULL,
  `Password` varchar(200) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `BHYT_number` varchar(13) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `city_province` varchar(100) DEFAULT NULL,
  `District` varchar(100) DEFAULT NULL,
  `CCCD` varchar(12) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `Avatar` varchar(200) DEFAULT NULL,
  `Job` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `Email`, `SDT`, `Password`, `Name`, `BHYT_number`, `birthday`, `city_province`, `District`, `CCCD`, `sex`, `Avatar`, `Job`) VALUES
(1, 'admin@gmail.com', NULL, '1234567890', NULL, NULL, '2001-03-07', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'tuondangvuongquoc901@gmail.com', '0988965602', '$2y$10$nsQryoZs/7c.5MmsInQ7nuTd8Yp9CcIz11Gm0mec0ZjwmEUFZaUlK', 'Tưởng đăng vương quốc ', '1312321131', '2002-03-10', 'Nghệ an', 'Nam đàn', '187811652', '1', 'Views/img/avatar-anime-boy-dep-453x390.jpg', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vaccine`
--

CREATE TABLE `vaccine` (
  `id` int(11) NOT NULL,
  `id_user` int(7) NOT NULL,
  `dateVaccine` datetime DEFAULT NULL,
  `numberVaccine` int(11) NOT NULL,
  `idVaccine` int(11) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `check_` char(1) NOT NULL,
  `queues` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `vaccine`
--

INSERT INTO `vaccine` (`id`, `id_user`, `dateVaccine`, `numberVaccine`, `idVaccine`, `startDate`, `endDate`, `check_`, `queues`) VALUES
(2, 2, '2022-03-24 20:49:32', 1, 1, '2022-03-18', '2022-03-31', '1', '1'),
(3, 2, '2022-03-30 20:49:37', 2, 1, '2022-03-17', '2022-03-27', '1', '1'),
(5, 1, '2022-03-23 20:11:52', 1, 1, '2022-03-01', '2022-03-18', '0', '0'),
(6, 1, '2022-03-23 20:11:52', 1, 1, '2022-03-01', '2022-03-18', '1', '0'),
(25, 2, '2022-03-26 00:00:00', 3, 1, '2022-03-22', '2022-03-26', '0', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `conten`
--
ALTER TABLE `conten`
  ADD PRIMARY KEY (`id_conten`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `declare_`
--
ALTER TABLE `declare_`
  ADD PRIMARY KEY (`id_khaibao`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `detailvaccine`
--
ALTER TABLE `detailvaccine`
  ADD PRIMARY KEY (`idVaccine`);

--
-- Chỉ mục cho bảng `managervaccine`
--
ALTER TABLE `managervaccine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idVaccine` (`idVaccine`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `CCCD` (`CCCD`),
  ADD UNIQUE KEY `BHYT_number` (`BHYT_number`),
  ADD UNIQUE KEY `SDT` (`SDT`);

--
-- Chỉ mục cho bảng `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idVaccine` (`idVaccine`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `conten`
--
ALTER TABLE `conten`
  MODIFY `id_conten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `declare_`
--
ALTER TABLE `declare_`
  MODIFY `id_khaibao` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `detailvaccine`
--
ALTER TABLE `detailvaccine`
  MODIFY `idVaccine` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `managervaccine`
--
ALTER TABLE `managervaccine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `conten`
--
ALTER TABLE `conten`
  ADD CONSTRAINT `conten_ibfk_1` FOREIGN KEY (`id`) REFERENCES `post` (`id`);

--
-- Các ràng buộc cho bảng `declare_`
--
ALTER TABLE `declare_`
  ADD CONSTRAINT `declare__ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `managervaccine`
--
ALTER TABLE `managervaccine`
  ADD CONSTRAINT `managervaccine_ibfk_1` FOREIGN KEY (`idVaccine`) REFERENCES `detailvaccine` (`idVaccine`);

--
-- Các ràng buộc cho bảng `vaccine`
--
ALTER TABLE `vaccine`
  ADD CONSTRAINT `vaccine_ibfk_1` FOREIGN KEY (`idVaccine`) REFERENCES `detailvaccine` (`idVaccine`),
  ADD CONSTRAINT `vaccine_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
