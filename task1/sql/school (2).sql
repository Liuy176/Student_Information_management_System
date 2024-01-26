-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2023-06-19 13:41:00
-- 服务器版本： 10.4.28-MariaDB
-- PHP 版本： 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `school`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `Adminname` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`Adminname`, `password`, `id`) VALUES
('admin', '123456', 123456);

-- --------------------------------------------------------

--
-- 表的结构 `studentinfo`
--

CREATE TABLE `studentinfo` (
  `Student Id` int(11) NOT NULL,
  `Name` varchar(5) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `Age` int(11) NOT NULL,
  `College` varchar(15) NOT NULL,
  `Number` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 转存表中的数据 `studentinfo`
--

INSERT INTO `studentinfo` (`Student Id`, `Name`, `Gender`, `Age`, `College`, `Number`) VALUES
(6, 'james', 'm', 19, 'Computer', '12345678912'),
(8, 'Bess', 'm', 21, 'Computer', '13424567623'),
(16, 'Diana', 'f', 22, 'Computer', '13459834524'),
(23, 'Clara', 'm', 21, 'Computer', '13423464598'),
(26, 'Brown', 'm', 21, 'Computer', '13424567623'),
(27, 'Ada', 'f', 20, 'Computer', '13443245894');

--
-- 转储表的索引
--

--
-- 表的索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`Student Id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123457;

--
-- 使用表AUTO_INCREMENT `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `Student Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
