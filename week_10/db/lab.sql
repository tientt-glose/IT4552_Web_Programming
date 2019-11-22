-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 09, 2019 lúc 03:32 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `lab`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ID` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(125) NOT NULL,
  `phonenumber` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `hobbies` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `bday` date DEFAULT NULL,
  `program` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID`, `firstname`, `lastname`, `email`, `phonenumber`, `password`, `gender`, `hobbies`, `bday`, `program`) VALUES
(18, 'Tien', 'Nguyen Tung', 'tien@gmail.com', '0945387561', 'd2hedspi', 'Male', 'Traveling', '2019-10-06', 'hedspi'),
(19, 'tu', 'bui ngoc', 'ngoc@gmail.com', '094786231', 'tu1234565', 'Male', 'Traveling,Learning', '1998-01-21', 'dsai'),
(20, 'ngoc', 'nguyen trong', 'ngoc@hotmail.com', '09813014578', 'nghia789456', 'Female', 'Traveling,Learning', '1998-08-27', 'sie'),
(25, 'Anh', 'Duyen', 'anhduyen@ganhduyen', '094539153326', 'a123456', 'Female', 'Reading,Sleeping', '1996-02-25', 'sie'),
(26, 'Anh', 'Bao', 'anhbao@gmail.com', '0945397458', 'a123456', 'Female', 'Sport', '1999-06-30', 'dsai');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `ID_2` (`ID`),
  ADD UNIQUE KEY `ID_3` (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
