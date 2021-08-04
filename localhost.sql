-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2021 年 05 月 05 日 17:02
-- 服务器版本: 5.5.35
-- PHP 版本: 5.4.24

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `kepp`
--
CREATE DATABASE `kepp` DEFAULT CHARACTER SET gbk COLLATE gbk_chinese_ci;
USE `kepp`;

-- --------------------------------------------------------

--
-- 表的结构 `sql_user`
--

CREATE TABLE IF NOT EXISTS `sql_user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `blog` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `sql_user`
--

INSERT INTO `sql_user` (`Id`, `Username`, `Password`, `email`, `blog`) VALUES
(1, 'admin', 'admin', 'admin@360bug.net', 'http://www.360bug.net/'),
(2, 'admin888', 'admin888', 'root@360bug.net', 'http://www.360bug.net/');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
