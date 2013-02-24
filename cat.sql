-- phpMyAdmin SQL Dump
-- version 3.5.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 02 月 24 日 22:54
-- 服务器版本: 5.5.29-0ubuntu0.12.10.1
-- PHP 版本: 5.4.6-1ubuntu1.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `cat`
--

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--
-- 创建时间: 2013 年 02 月 24 日 14:48
--

DROP TABLE IF EXISTS `goods`;
CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `classid` int(10) unsigned NOT NULL,
  `liked` int(10) unsigned NOT NULL,
  `info` varchar(240) NOT NULL,
  `inuse` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `goods_class`
--
-- 创建时间: 2013 年 02 月 08 日 14:47
--

DROP TABLE IF EXISTS `goods_class`;
CREATE TABLE IF NOT EXISTS `goods_class` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(24) NOT NULL,
  `parent` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `goods_parent_class`
--
-- 创建时间: 2013 年 02 月 08 日 15:20
--

DROP TABLE IF EXISTS `goods_parent_class`;
CREATE TABLE IF NOT EXISTS `goods_parent_class` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(24) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `goods_type`
--
-- 创建时间: 2013 年 02 月 24 日 14:48
--

DROP TABLE IF EXISTS `goods_type`;
CREATE TABLE IF NOT EXISTS `goods_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `left` int(11) NOT NULL,
  `sold` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `like`
--
-- 创建时间: 2013 年 02 月 11 日 14:17
--

DROP TABLE IF EXISTS `like`;
CREATE TABLE IF NOT EXISTS `like` (
  `uid` int(10) NOT NULL,
  `gid` int(10) NOT NULL,
  `date` date NOT NULL,
  KEY `uid` (`uid`),
  KEY `gid` (`gid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `message`
--
-- 创建时间: 2013 年 02 月 07 日 14:15
-- 最后更新: 2013 年 02 月 07 日 14:15
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `uid` int(10) NOT NULL,
  `time` datetime NOT NULL,
  `content` mediumblob NOT NULL,
  `sid` datetime NOT NULL,
  `replytime` datetime NOT NULL,
  `reply` mediumblob NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `order`
--
-- 创建时间: 2013 年 02 月 11 日 14:17
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `time` datetime NOT NULL,
  `type` tinyint(1) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `pic`
--
-- 创建时间: 2013 年 02 月 24 日 14:47
--

DROP TABLE IF EXISTS `pic`;
CREATE TABLE IF NOT EXISTS `pic` (
  `gid` int(10) unsigned NOT NULL,
  `content` varchar(50) NOT NULL,
  KEY `gid` (`gid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `session`
--
-- 创建时间: 2013 年 02 月 07 日 14:15
--

DROP TABLE IF EXISTS `session`;
CREATE TABLE IF NOT EXISTS `session` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `settings`
--
-- 创建时间: 2013 年 02 月 18 日 13:24
-- 最后更新: 2013 年 02 月 18 日 13:24
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `goods` blob NOT NULL,
  `info` blob NOT NULL,
  `contact` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `staff`
--
-- 创建时间: 2013 年 02 月 07 日 14:15
-- 最后更新: 2013 年 02 月 07 日 14:15
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(24) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `class` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8001 ;

-- --------------------------------------------------------

--
-- 表的结构 `staffclass`
--
-- 创建时间: 2013 年 02 月 11 日 06:40
-- 最后更新: 2013 年 02 月 11 日 06:40
-- 最后检查: 2013 年 02 月 11 日 06:40
--

DROP TABLE IF EXISTS `staffclass`;
CREATE TABLE IF NOT EXISTS `staffclass` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `change_goods` tinyint(1) NOT NULL,
  `change_goods_num` tinyint(1) NOT NULL,
  `change_class` tinyint(1) NOT NULL,
  `change_user` tinyint(1) NOT NULL,
  `confirm_order` tinyint(1) NOT NULL,
  `change_stock` tinyint(1) NOT NULL,
  `change_staff` tinyint(1) NOT NULL,
  `reply` tinyint(1) NOT NULL,
  `view_info` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `stock`
--
-- 创建时间: 2013 年 02 月 07 日 14:15
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `staff` int(10) unsigned NOT NULL,
  `time` datetime NOT NULL,
  `content` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--
-- 创建时间: 2013 年 02 月 11 日 14:18
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(20) NOT NULL,
  `pwd` varchar(40) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `point` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user_contact`
--
-- 创建时间: 2013 年 02 月 07 日 14:15
--

DROP TABLE IF EXISTS `user_contact`;
CREATE TABLE IF NOT EXISTS `user_contact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `address` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
