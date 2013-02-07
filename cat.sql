-- phpMyAdmin SQL Dump
-- version 3.5.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 02 月 07 日 12:51
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
-- 创建时间: 2013 年 02 月 05 日 15:14
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `classid` int(10) unsigned NOT NULL,
  `pid` int(10) unsigned NOT NULL,
  `price` float(7,3) NOT NULL,
  `left` int(10) unsigned NOT NULL,
  `sold` int(10) unsigned NOT NULL,
  `liked` int(10) unsigned NOT NULL,
  `info` varchar(240) NOT NULL,
  `inuse` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `goods_class`
--
-- 创建时间: 2013 年 02 月 05 日 15:17
--

CREATE TABLE IF NOT EXISTS `goods_class` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(24) NOT NULL,
  `parent` varchar(12) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `like`
--
-- 创建时间: 2013 年 02 月 07 日 04:24
--

CREATE TABLE IF NOT EXISTS `like` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `message`
--
-- 创建时间: 2013 年 02 月 06 日 03:03
-- 最后更新: 2013 年 02 月 06 日 03:03
-- 最后检查: 2013 年 02 月 06 日 03:03
--

CREATE TABLE IF NOT EXISTS `message` (
  `uid` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `content` mediumblob NOT NULL,
  `sid` datetime NOT NULL,
  `replytime` datetime NOT NULL,
  `reply` mediumblob NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `order`
--
-- 创建时间: 2013 年 02 月 05 日 15:28
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `type` tinyint(4) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `pic`
--
-- 创建时间: 2013 年 02 月 05 日 15:23
--

CREATE TABLE IF NOT EXISTS `pic` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL,
  `content` mediumblob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `session`
--
-- 创建时间: 2013 年 02 月 07 日 03:32
--

CREATE TABLE IF NOT EXISTS `session` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `settings`
--
-- 创建时间: 2013 年 02 月 06 日 03:04
-- 最后更新: 2013 年 02 月 06 日 03:04
--

CREATE TABLE IF NOT EXISTS `settings` (
  `logo` blob NOT NULL,
  `goods` blob NOT NULL,
  `info` blob NOT NULL,
  `contact` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `staff`
--
-- 创建时间: 2013 年 02 月 06 日 03:03
-- 最后更新: 2013 年 02 月 06 日 03:03
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(24) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `class` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `staffclass`
--
-- 创建时间: 2013 年 02 月 06 日 04:11
-- 最后更新: 2013 年 02 月 06 日 04:11
--

CREATE TABLE IF NOT EXISTS `staffclass` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `change_goods` tinyint(4) NOT NULL,
  `change_goods_num` tinyint(4) NOT NULL,
  `change_class` tinyint(4) NOT NULL,
  `change_user` tinyint(4) NOT NULL,
  `confirm_order` tinyint(4) NOT NULL,
  `change_stock` tinyint(4) NOT NULL,
  `change_staff` tinyint(4) NOT NULL,
  `reply` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `stock`
--
-- 创建时间: 2013 年 02 月 06 日 02:45
--

CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `staff` int(10) unsigned NOT NULL,
  `time` datetime NOT NULL,
  `content` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--
-- 创建时间: 2013 年 02 月 07 日 04:35
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(20) NOT NULL,
  `pwd` varchar(40) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `point` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user_contact`
--
-- 创建时间: 2013 年 02 月 07 日 04:31
--

CREATE TABLE IF NOT EXISTS `user_contact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `address` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
