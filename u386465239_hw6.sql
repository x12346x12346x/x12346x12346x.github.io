
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生日期: 2015 年 05 月 06 日 04:53
-- 伺服器版本: 5.1.67
-- PHP 版本: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `u386465239_hw6`
--

-- --------------------------------------------------------

--
-- 表的結構 `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 轉存資料表中的資料 `account`
--

INSERT INTO `account` (`name`, `password`, `admin`) VALUES
('x12346x', 'abcd', 0),
('x12346x12346x', 'xji4dk4bp6', 1),
('testac', 'testac', 0);

-- --------------------------------------------------------

--
-- 表的結構 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `category` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 轉存資料表中的資料 `article`
--

INSERT INTO `article` (`category`, `title`, `content`) VALUES
('game', '安安大家好', '你好'),
('anime', '安安大家好', '你好'),
('game', 'test', '1234');

-- --------------------------------------------------------

--
-- 表的結構 `response`
--

CREATE TABLE IF NOT EXISTS `response` (
  `category` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 轉存資料表中的資料 `response`
--

INSERT INTO `response` (`category`, `title`, `name`, `content`) VALUES
('game', '安安大家好', 'testac', '我很不好'),
('game', 'test', 'testac', 'aaaa'),
('game', '安安大家好', 'testac', '我很不好');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
