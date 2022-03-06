-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 06, 2022 lúc 02:58 AM
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
(9, 'quoc', '$2y$10$Wmv7yLlRfqa/syx1kPrFsukqVgcTu0rlyVsLHYlOcXqWNYy0rszSG'),
(10, 'cuoicungtui123', '$2y$10$NCYL3oq1tP80dzPUpAhMT.BfcdWigXio/oxXXD/50L7m8v1sip4/a'),
(11, '123', '$2y$10$r.zCKENqSIusSorgHeiPWODXdj9faXmKRYPHwaeSrGK3dKsJPEsRW'),
(12, 'cuoicungtui1231', '$2y$10$C6OlmftqNzwhzQlI11n/ce7ZEP9B3nV3OfNL2igCbtoDbJvst12KK'),
(13, '123123213', '$2y$10$9rIFsT7jNAQsPPGoHnj4NOOf8pZpNwxjW/lgllG1bQONrTYT7059S'),
(14, 'admin', '$2y$10$kUv4SjODRS3ne5kaP87Od.FYTfK39D/IwWBltvF0Eenvu5hXOsyLS'),
(15, '12312', '$2y$10$R8aXsgiUiZ1VIyDxUU9aZe/o4RXnWf4qEZhR72/awTWXMFWTJZAqe'),
(16, '123131', '$2y$10$ICVI1dkVCQoR85ttqfP2gezc8O2gf6Q8MgqmRJwwZuj6OdhmYm4jW');

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
(1, 1, 1, '1231231', '123213', 'Views/img/z3101099236299_3e9922326e0b0825c7bca02e5d1a4ac3.jpg', '12313123'),
(3, 1, 3, '12313', '123213', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `declare`
--

CREATE TABLE `declare` (
  `id_khaibao` int(7) NOT NULL,
  `id_user` int(7) NOT NULL,
  `declare_date` datetime NOT NULL,
  `tranfer` bit(1) NOT NULL,
  `tranfer_detail` varchar(1000) DEFAULT NULL,
  `symptom` bit(1) NOT NULL,
  `symptom_detail` varchar(1000) DEFAULT NULL,
  `contact` bit(1) NOT NULL,
  `infected` bit(1) NOT NULL,
  `covid_country` bit(1) NOT NULL,
  `symptom_infected` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detailvaccine`
--

CREATE TABLE `detailvaccine` (
  `idVaccine` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `made` varchar(100) NOT NULL,
  `effect` int(11) NOT NULL,
  `startAge` int(11) NOT NULL,
  `endAge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `managervaccine`
--

CREATE TABLE `managervaccine` (
  `id` int(11) NOT NULL,
  `idVaccine` int(10) NOT NULL,
  `number` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, '1231231', '123131', '12312', '2022-03-09'),
(3, 'test', 'Views/img/z3101099236299_3e9922326e0b0825c7bca02e5d1a4ac3.jpg', '131312121s1', '2022-03-18'),
(4, '3324324', 'Views/img/z3101099236299_3e9922326e0b0825c7bca02e5d1a4ac3.jpg', '244242', '2022-03-23');

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
  `birthday` datetime DEFAULT NULL,
  `city/province` varchar(100) DEFAULT NULL,
  `District` varchar(100) DEFAULT NULL,
  `CCCD` varchar(12) DEFAULT NULL,
  `sex` bit(1) DEFAULT NULL,
  `Avatar` varchar(200) DEFAULT NULL,
  `Job` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vaccine`
--

CREATE TABLE `vaccine` (
  `id` int(11) NOT NULL,
  `id_user` int(7) NOT NULL,
  `dateVaccine` datetime DEFAULT NULL,
  `numberVaccine` int(11) NOT NULL,
  `idVaccine` varchar(100) NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL,
  `check` bit(1) NOT NULL,
  `queues` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Chỉ mục cho bảng `declare`
--
ALTER TABLE `declare`
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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `conten`
--
ALTER TABLE `conten`
  MODIFY `id_conten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `declare`
--
ALTER TABLE `declare`
  MODIFY `id_khaibao` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `detailvaccine`
--
ALTER TABLE `detailvaccine`
  MODIFY `idVaccine` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `managervaccine`
--
ALTER TABLE `managervaccine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `conten`
--
ALTER TABLE `conten`
  ADD CONSTRAINT `conten_ibfk_1` FOREIGN KEY (`id`) REFERENCES `post` (`id`);

--
-- Các ràng buộc cho bảng `declare`
--
ALTER TABLE `declare`
  ADD CONSTRAINT `declare_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `managervaccine`
--
ALTER TABLE `managervaccine`
  ADD CONSTRAINT `managervaccine_ibfk_1` FOREIGN KEY (`idVaccine`) REFERENCES `detailvaccine` (`idVaccine`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
