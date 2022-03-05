-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 04, 2022 lúc 05:09 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `declare`
--

CREATE TABLE `declare` (
  `id_khaibao` varchar(7) NOT NULL,
  `id_user` varchar(7) NOT NULL,
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
  `idVaccine` varchar(100) NOT NULL,
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
  `idVaccine` varchar(100) NOT NULL,
  `number` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `Title` varchar(1000) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` varchar(7) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `SDT` varchar(10) DEFAULT NULL,
  `Password` varchar(200) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `BHYT_number` varchar(13) NOT NULL,
  `birthday` datetime DEFAULT NULL,
  `city/province` varchar(100) NOT NULL,
  `District` varchar(100) NOT NULL,
  `CCCD` varchar(12) NOT NULL,
  `sex` bit(1) NOT NULL,
  `Avatar` varchar(200) NOT NULL,
  `Job` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vaccine`
--

CREATE TABLE `vaccine` (
  `id` int(11) NOT NULL,
  `id_user` varchar(7) NOT NULL,
  `dateVaccine` datetime NOT NULL,
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
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `BHYT_number` (`BHYT_number`),
  ADD UNIQUE KEY `CCCD` (`CCCD`),
  ADD UNIQUE KEY `SDT` (`SDT`);

--
-- Chỉ mục cho bảng `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_vac` (`idVaccine`);

--
-- Các ràng buộc cho các bảng đã đổ
--

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

--
-- Các ràng buộc cho bảng `vaccine`
--
ALTER TABLE `vaccine`
  ADD CONSTRAINT `id_vac` FOREIGN KEY (`idVaccine`) REFERENCES `detailvaccine` (`idVaccine`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
